<?php

namespace App\Controllers\Api\V1;

use App\Models\InviteCode;
use App\Models\Node;
use App\Models\User;
use App\Services\Auth;
use App\Services\Config;
use App\Utils\Tools;
use App\Utils\Hash;
use App\Controllers\Api\TokenStorage;

/**
 *  ApiController
 */
class ApiController
{
    public function index()
    {
    }


    public function token($request, $response, $args)
    {
        $accessToken = $id = $args['token'];
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        if ($token == null) {
            $res['ret'] = 0;
            $res['msg'] = 'token is null';
            return $response->getBody()->write(json_encode($res));
        }
        $res['ret'] = 1;
        $res['msg'] = 'token ok';
        $res['data'] = $token;
        return $response->getBody()->write(json_encode($res));
    }

    public function newToken($request, $response, $args)
    {
        // $data = $request->post('sdf');
        $email = $request->getParam('email');

        $email = strtolower($email);
        $passwd = $request->getParam('passwd');

        // Handle Login
        $user = User::where('email', '=', $email)->first();

        if ($user == null) {
            $res['ret'] = 0;
            $res['msg'] = '401 账号错误';
            return $response->getBody()->write(json_encode($res));
        }

        if (!Hash::checkPassword($user->pass, $passwd)) {
            $res['ret'] = 0;
            $res['msg'] = '402 密码错误';
            return $response->getBody()->write(json_encode($res));
        }
        $tokenStr = Tools::genToken();
        $storage = TokenStorage::createTokenStorage();
        $expireTime = time() + 3600 * 24 * 7;
        if ($storage->store($tokenStr, $user, $expireTime)) {
            $res['ret'] = 1;
            $res['msg'] = 'newToken ok';
            $res['data']['token'] = $tokenStr;
            $res['data']['user_id'] = $user->id;
            Auth::login($user->id, strtotime($user->expire_in));
            return $response->getBody()->write(json_encode($res));
        }
        $res['ret'] = 0;
        $res['msg'] = 'system error';
        return $response->getBody()->write(json_encode($res));
    }

    public function node($request, $response, $args)
    {
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $user = User::find($token->userId);
        $nodes = Node::where('sort', 0)->where('type', '1')->where(
            static function ($query) use ($user) {
                $query->where('node_group', '=', $user->node_group)
                    ->orWhere('node_group', '=', 0);
            }
        )->orderBy('name')->get();

        $mu_nodes = Node::where('sort', 9)->where('node_class', '<=', $user->class)->where('type', '1')->where(
            static function ($query) use ($user) {
                $query->where('node_group', '=', $user->node_group)
                    ->orWhere('node_group', '=', 0);
            }
        )->orderBy('name')->get();

        $temparray = array();
        foreach ($nodes as $node) {
            if ($node->mu_only == 0) {
                $temparray[] = array('remarks' => $node->name,
                    'server' => $node->server,
                    'server_port' => $user->port,
                    'method' => $node->custom_method == 1 ? $user->method : $node->method,
                    'obfs' => str_replace('_compatible', '', (($node->custom_rss == 1 && !($user->obfs == 'plain' && $user->protocol == 'origin')) ? $user->obfs : 'plain')),
                    'obfsparam' => ($node->custom_rss == 1 && !($user->obfs == 'plain' && $user->protocol == 'origin')) ? $user->obfs_param : '',
                    'remarks_base64' => base64_encode($node->name),
                    'password' => $user->passwd,
                    'tcp_over_udp' => false,
                    'udp_over_tcp' => false,
                    'group' => Config::get('appName'),
                    'protocol' => str_replace('_compatible', '', (($node->custom_rss == 1 && !($user->obfs == 'plain' && $user->protocol == 'origin')) ? $user->protocol : 'origin')),
                    'obfs_udp' => false,
                    'enable' => true);
            }

            if ($node->custom_rss == 1) {
                foreach ($mu_nodes as $mu_node) {
                    $mu_user = User::where('port', '=', $mu_node->server)->first();
                    $mu_user->obfs_param = $user->getMuMd5();

                    $temparray[] = array('remarks' => $node->name . '- ' . $mu_node->server . ' 单端口',
                        'server' => $node->server,
                        'server_port' => $mu_user->port,
                        'method' => $mu_user->method,
                        'group' => Config::get('appName'),
                        'obfs' => str_replace('_compatible', '', (($node->custom_rss == 1 && !($mu_user->obfs == 'plain' && $mu_user->protocol == 'origin')) ? $mu_user->obfs : 'plain')),
                        'obfsparam' => ($node->custom_rss == 1 && !($mu_user->obfs == 'plain' && $mu_user->protocol == 'origin')) ? $mu_user->obfs_param : '',
                        'remarks_base64' => base64_encode($node->name . '- ' . $mu_node->server . ' 单端口'),
                        'password' => $mu_user->passwd,
                        'tcp_over_udp' => false,
                        'udp_over_tcp' => false,
                        'protocol' => str_replace('_compatible', '', (($node->custom_rss == 1 && !($mu_user->obfs == 'plain' && $mu_user->protocol == 'origin')) ? $mu_user->protocol : 'origin')),
                        'obfs_udp' => false,
                        'enable' => true);
                }
            }
        }

        $res['ret'] = 1;
        $res['msg'] = 'ok';
        $res['data'] = $temparray;
        return $response->getBody()->write(json_encode($res));
    }

    public function getNodes($request, $response, $args){
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $user = User::find($token->userId);
        $nodes = Node::where('sort', 11)->where('type', '1')->where(
            static function ($query) use ($user) {
                $query->where('node_group', '=', $user->node_group)
                    ->orWhere('node_group', '=', 0);
            }
        )->orderBy('name')->get(['id','name','type','server','method','protocol','obfs','info','status','sort',
            'node_ip','online','node_group','sort']);
        $res['ret'] = 1;
        $res['msg'] = 'ok';
        $res['data'] = $nodes;
        return $response->getBody()->write(json_encode($res));
    }
    public function userInfo($request, $response, $args)
    {
        $id = $args['id'];
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        if ($id != $token->userId) {
            $res['ret'] = 0;
            $res['msg'] = 'access denied';
            return $response->getBody()->write(json_encode($res));
        }
        $user = User::find($token->userId);
        $user["unusedTraffic"]=$user->unusedTraffic();
        $code=InviteCode::where("user_id",$user->id)->select('code')->get();
        $user['inviteUrl']=Config::get("baseUrl")."/auth/register?code=".$code->code;
        $user->pass = null;
        $user->transfer_enable=$user->enableTrafficInGB();
        $user["usedTraffic"]=$user->usedTraffic();

        $data = $user;
        $res['ret'] = 1;
        $res['msg'] = 'userInfo ok';
        $res['data'] = $data;
        return $response->getBody()->write(json_encode($res));
    }
}
