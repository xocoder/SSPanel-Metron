<?php
/* Smarty version 3.1.44, created on 2022-06-22 23:06:05
  from '/opt/website/user.marsjsq.com/resources/views/metron/admin/user/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b32fdd134ff7_51822100',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b18ddfcba247ad7be27a50aef468a81d4ce02ff' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/admin/user/edit.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_62b32fdd134ff7_51822100 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">用户编辑 #<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->id;?>
</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="email">邮箱</label>
                                <input class="form-control maxwidth-edit" id="email" type="email"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->email;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="remark">备注(仅对管理员可见)</label>
                                <input class="form-control maxwidth-edit" id="remark" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->remark;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="pass">密码(不修改请留空)</label>
                                <input class="form-control maxwidth-edit" id="pass" type="password"
                                       autocomplete="new-password">
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="is_admin">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_admin == 1) {?>checked<?php }?> class="access-hide"
                                               id="is_admin" type="checkbox"><span class="switch-toggle"></span>是否管理员
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="enable">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->enable == 1) {?>checked<?php }?> class="access-hide" id="enable"
                                               type="checkbox"><span class="switch-toggle"></span>用户启用
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="ga_enable">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->ga_enable == 1) {?>checked<?php }?> class="access-hide"
                                               id="ga_enable" type="checkbox"><span class="switch-toggle"></span>是否开启二次验证
                                    </label>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="money">金钱</label>
                                <input class="form-control maxwidth-edit" id="money" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->money;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label for="is_multi_user">
                                    <label class="floating-label" for="sort">单端口多用户承载端口</label>
                                    <select id="is_multi_user" class="form-control maxwidth-edit" name="is_multi_user">
                                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 0) {?>selected<?php }?>>非单端口多用户承载端口
                                        </option>
                                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 1) {?>selected<?php }?>>混淆式单端口多用户承载端口
                                        </option>
                                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->is_multi_user == 2) {?>selected<?php }?>>协议式单端口多用户承载端口
                                        </option>
                                    </select>
                                </label>
                            </div>


                        </div>
                    </div>
                </div>

				<div class="card">
					<div class="card-main">
						<div class="card-inner">

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="agent">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->agent == 1) {?>checked<?php }?> class="access-hide" id="agent" type="checkbox"><span class="switch-toggle"></span>是否代理商
                                    </label>
                                    <p class="form-control-guide"><i class="material-icons">info</i>该功能需主题额外 Agent 授权, 无授权打开无用</p>
                                </div>
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="c_rebate">
                                        <input <?php if ($_smarty_tpl->tpl_vars['edit_user']->value->c_rebate == 1) {?>checked<?php }?> class="access-hide" id="c_rebate" type="checkbox"><span class="switch-toggle"></span>开启循环返利
                                    </label>
                                    <p class="form-control-guide"><i class="material-icons">info</i>适用于所有用户, 包括代理商</p>
                                </div>
                            </div>
                            
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="back_money">返利余额</label>
                                <input class="form-control maxwidth-edit" id="back_money" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->back_money;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>适用于所有用户, 包括代理商</p>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="rebate">返利百分比</label>
                                <input class="form-control maxwidth-edit" id="rebate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->rebate;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>适用于所有用户, 包括代理商;  -1 按 .config.php 设置的返利百分比进行返利, 其他为相应的比例</p>
                            </div>

						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-main">
						<div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="ban_time">手动封禁时长 (分钟)，不封禁不要修改</label>
                                <input class="form-control maxwidth-edit" id="ban_time" type="text"
                                       value="0">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="last_detect_ban_time">最后一次被封禁的时间</label>
                                <input class="form-control maxwidth-edit" id="last_detect_ban_time" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->last_detect_ban_time();?>
" readonly>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="relieve_time">当前解封时间</label>
                                <input class="form-control maxwidth-edit" id="relieve_time" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->relieve_time();?>
" readonly>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="detect_ban_number">累计封禁次数</label>
                                <input class="form-control maxwidth-edit" id="detect_ban_number" type="text"
                                       value="<?php if ($_smarty_tpl->tpl_vars['edit_user']->value->detect_ban_number() == 0) {?>标杆用户，没有被封禁过耶<?php } else { ?>太坏了，这位用户累计被封禁过 <?php echo $_smarty_tpl->tpl_vars['edit_user']->value->detect_ban_number();?>
 次呢<?php }?>" readonly>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="all_detect_number">累计违规次数</label>
                                <input class="form-control maxwidth-edit" id="all_detect_number" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->all_detect_number;?>
" readonly>
                            </div>

						</div>
					</div>
				</div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="port">连接端口</label>
                                <input class="form-control maxwidth-edit" id="port" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->port;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="passwd">连接密码</label>
                                <input class="form-control maxwidth-edit" id="passwd" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->passwd;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="method">自定义加密</label>
                                <input class="form-control maxwidth-edit" id="method" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->method;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="protocol">自定义协议</label>
                                <input class="form-control maxwidth-edit" id="protocol" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->protocol;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="protocol_param">自定义协议参数</label>
                                <input class="form-control maxwidth-edit" id="protocol_param" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->protocol_param;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="obfs">自定义混淆方式</label>
                                <input class="form-control maxwidth-edit" id="obfs" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->obfs;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="obfs_param">自定义混淆参数</label>
                                <input class="form-control maxwidth-edit" id="obfs_param" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->obfs_param;?>
">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="transfer_enable">总流量（GB）</label>
                                <input class="form-control maxwidth-edit" id="transfer_enable" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->enableTrafficInGB();?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="usedTraffic">已用流量</label>
                                <input class="form-control maxwidth-edit" id="usedTraffic" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->usedTraffic();?>
" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="auto_reset_day">自动重置流量日</label>
                                <input class="form-control maxwidth-edit" id="auto_reset_day" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->auto_reset_day;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="auto_reset_bandwidth">重置流量值(GB)</label>
                                <input class="form-control maxwidth-edit" id="auto_reset_bandwidth" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->auto_reset_bandwidth;?>
">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="invite_num">可用邀请数量</label>
                                <input class="form-control maxwidth-edit" id="invite_num" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->invite_num;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="ref_by">邀请人ID</label>
                                <input class="form-control maxwidth-edit" id="ref_by" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->ref_by;?>
" readonly>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="group">用户群组</label>
                                <input class="form-control maxwidth-edit" id="group" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->node_group;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>用户只能访问到组别等于这个数字或0的节点</p>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class">用户级别</label>
                                <input class="form-control maxwidth-edit" id="class" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->class;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>用户只能访问到等级小于等于这个数字的节点</p>
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class_expire">用户等级过期时间</label>
                                <input class="form-control maxwidth-edit" id="class_expire" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->class_expire;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>不过期就请不要动</p>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="expire_in">用户账户过期时间</label>
                                <input class="form-control maxwidth-edit" id="expire_in" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->expire_in;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>不过期就请不要动</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="node_speedlimit">用户限速，用户在每个节点所享受到的速度(Mbps)</label>
                                <input class="form-control maxwidth-edit" id="node_speedlimit" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->node_speedlimit;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>0 为不限制</p>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="node_connector">用户同时连接 IP 数</label>
                                <input class="form-control maxwidth-edit" id="node_connector" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->node_connector;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>0 为不限制</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="node_speedlimit">禁止用户访问的IP，一行一个</label>
                                <textarea class="form-control maxwidth-edit" id="forbidden_ip"
                                          rows="8"><?php echo $_smarty_tpl->tpl_vars['edit_user']->value->get_forbidden_ip();?>
</textarea>
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="node_speedlimit">禁止用户访问的端口，一行一个</label>
                                <textarea class="form-control maxwidth-edit" id="forbidden_port"
                                          rows="8"><?php echo $_smarty_tpl->tpl_vars['edit_user']->value->get_forbidden_port();?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">修改
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    //document.getElementById("class_expire").value="<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->class_expire;?>
";

    window.addEventListener('load', () => {
        function submit() {
            if (document.getElementById('is_admin').checked) {
                var is_admin = 1;
            } else {
                var is_admin = 0;
            }

            if (document.getElementById('enable').checked) {
                var enable = 1;
            } else {
                var enable = 0;
            }

            if (document.getElementById('ga_enable').checked) {
                var ga_enable = 1;
            } else {
                var ga_enable = 0;
            }
			
            if (document.getElementById('c_rebate').checked) {
                var c_rebate = 1;
            } else {
                var c_rebate = 0;
            }

            if (document.getElementById('agent').checked) {
                var agent = 1;
            } else {
                var agent = 0;
            }

            $.ajax({
                type: "PUT",
                url: "/admin/user/<?php echo $_smarty_tpl->tpl_vars['edit_user']->value->id;?>
",
                dataType: "json",
                data: {
                    email: $$getValue('email'),
                    pass: $$getValue('pass'),
                    auto_reset_day: $$getValue('auto_reset_day'),
                    auto_reset_bandwidth: $$getValue('auto_reset_bandwidth'),
                    is_multi_user: $$getValue('is_multi_user'),
                    port: $$getValue('port'),
                    group: $$getValue('group'),
                    passwd: $$getValue('passwd'),
                    transfer_enable: $$getValue('transfer_enable'),
                    invite_num: $$getValue('invite_num'),
                    node_speedlimit: $$getValue('node_speedlimit'),
                    method: $$getValue('method'),
                    remark: $$getValue('remark'),
                    money: $$getValue('money'),
                    c_rebate,
                    agent,
                    back_money: $$getValue('back_money'),
                    rebate: $$getValue('rebate'),
                    enable,
                    is_admin,
                    ga_enable,
                    ban_time: $$getValue('ban_time'),
                    ref_by: $$getValue('ref_by'),
                    forbidden_ip: $$getValue('forbidden_ip'),
                    forbidden_port: $$getValue('forbidden_port'),
                    class: $$getValue('class'),
                    class_expire: $$getValue('class_expire'),
                    expire_in: $$getValue('expire_in'),
                    node_connector: $$getValue('node_connector'),
                    protocol: $$getValue('protocol'),
                    protocol_param: $$getValue('protocol_param'),
                    obfs: $$getValue('obfs'),
                    obfs_param: $$getValue('obfs_param'),
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${
                            jqXHR.status
                            }`;
                }
            });
        }

        $("html").keydown(event => {
            if (event.keyCode == 13) {
                submit();
            }
        });

        $$.getElementById('submit').addEventListener('click', submit);

    })
<?php echo '</script'; ?>
>
<?php }
}
