<?php

namespace App\Controllers\Api\Client;

use App\Controllers\{BaseController, LinkController, UserController};
use App\Models\{Ann, Paylist, User, Shop};
use App\Services\{Auth, Config,Payment};

use App\Controllers\Api\TokenStorage;
use App\Utils\Hash;

class ClientApiController
{
    public function GetAnnouncement($request, $response, $args)
    {
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $user = User::find($token->userId);
        $Anns = Ann::orderBy('date', 'desc')->first();
        $res['ret'] = 1;
        $res['msg'] = 'ok';
        $res['data'] = $Anns;
        return $response->getBody()->write(json_encode($res));
    }

    public function Redirect($request, $response, $args)
    {
        $user = Auth::getUser();
        $url = $request->getQueryParams()['target'];
        if (!$user->isLogin) {
            $accessToken = $request->getParam('access_token');
            $storage = TokenStorage::createTokenStorage();
            $token = $storage->get($accessToken);
            if ($token == null) {
                $res['ret'] = 0;
                $res['msg'] = 'token is null';
                return $response->getBody()->write(json_encode($res));
            }
            $user = User::find($token->userId);
            $time = 3600 * 24;
            Auth::login($user->id, $time);
        }
        return $response->withRedirect($url);
    }

    public function GetSubLink($request, $response, $args)
    {
        $accessToken = $request->getParam('access_token');
        $sub = ($request->getParam('sub') != ''
            ? $request->getParam('sub')
            : 1);
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $user = User::find($token->userId);
        $ssr_sub_token = LinkController::GenerateSSRSubCode($user->id, 0);
        $res['ret'] = 1;
        $res['msg'] = 'ok';
        $res['data'] = Config::get('subUrl') . $ssr_sub_token . '?sub=' . $sub;
        return $response->getBody()->write(json_encode($res));
    }

    /**
    适配客户端
     */
    //基础信息
    public function Base($request,$response,$args){
        $platform=$request->getParam("platform");
        $platform=strtolower($platform);
        if($platform=="win"){
            $base=[
                "kf_url"=>"",
                "website"=>"https://user.marsjsq.com",
                "name"=>"速蛙加速器",
                "payurl"=>"https://user.marsjsq.com/user/shop",
                "register"=>"",
                "ver"=>1123001,
                "tip"=>"欢迎使用速蛙加速器",
                "update_url"=>""
            ];
        }elseif($platform=="android"){
            $base=[
                "ver"=>2022112001,
                "update_url"=>'',
                "tip"=>'欢迎使用速蛙加速器',
                "config_ver"=>2022112011,
                "config_url"=>'https://user.marsjsq.com/config/2022012011.json',
                "kf_url"=>'https://user.marsjsq.com/kf.html',
            ];
        }

        $ret['ret']=1;
        $ret['msg']='success';
        $ret['data']=$base;
        return $response->getBody()->write(json_encode($ret));
    }
    //套餐信息
    public function Package($request,$response,$args){
        $shop=Shop::where("status",1)->get();
        $ret['ret']=1;
        $ret['msg']='success';
        $ret['data']=$shop;
        return $response->getBody()->write(json_encode($ret));
    }
    //购买套餐
    public function Buy($request,$response,$args){
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $args['uid']=$token->userId;
        $json= Payment::purchase($request, $response, $args);
        $dd = json_decode($json, true);
        $ret['ret'] = $dd['ret'];
        $ret['msg'] = "success";
        $ret['data'] = [
            'type' => $dd['type'],
            'tradeno' => $dd['tradeno'],
            'url' => $dd['url']
        ];
        return $response->getBody()->write(json_encode($ret));
    }
    //查询订单
    public function Order($request,$response,$args){
        $return = [];
        $p = Paylist::where('tradeno', $request->getParam('pid'))->first();
        $return['ret'] = 1;
        $return['msg']="success";
        $return['data']["status"] = $p->status;
        $json=json_encode($return);
        return $response->getBody()->write($json);
    }
    //修改密码
    public function updatePassword($request, $response, $args){
        $oldpwd = $request->getParam('oldpwd');
        $pwd = $request->getParam('pwd');
        $repwd = $request->getParam('repwd');
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $res['data']="";
        if($token->userId<=0){
            $res['ret'] = 0;
            $res['msg'] = '会话已过期,请重新登录';
            return $response->getBody()->write(json_encode($res));
        }
        $user=User::where("id",$token->userId)->first();

        if (!Hash::checkPassword($user->pass, $oldpwd)) {
            $res['ret'] = 0;
            $res['msg'] = '旧密码错误';
            return $response->getBody()->write(json_encode($res));
        }
        if ($pwd != $repwd) {
            $res['ret'] = 0;
            $res['msg'] = '两次输入不符合';
            return $response->getBody()->write(json_encode($res));
        }

        if (strlen($pwd) < 8) {
            $res['ret'] = 0;
            $res['msg'] = '密码太短啦';
            return $response->getBody()->write(json_encode($res));
        }
        $hashPwd = Hash::passwordHash($pwd);
        User::where("id",$token->userId)->update(['pass'=>$hashPwd]);

        $res['ret'] = 1;
        $res['msg'] = '修改成功';
        return $response->getBody()->write(json_encode($res));
    }
    //余额购买套餐
    public function BalanceBuy($request,$response,$args)
    {
        $accessToken = $request->getParam('access_token');
        $storage = TokenStorage::createTokenStorage();
        $token = $storage->get($accessToken);
        $args['uid']=$token->userId;
        $uu=new UserController();
        return $uu->buy($request,$response,$args);
    }

}
