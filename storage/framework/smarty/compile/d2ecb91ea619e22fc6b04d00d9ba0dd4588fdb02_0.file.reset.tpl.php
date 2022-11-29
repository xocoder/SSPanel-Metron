<?php
/* Smarty version 3.1.44, created on 2022-06-22 22:45:25
  from '/opt/website/user.marsjsq.com/resources/views/metron/password/reset.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b32b05744934_97011198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ecb91ea619e22fc6b04d00d9ba0dd4588fdb02' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/password/reset.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/auth/head.tpl' => 1,
    'file:include/auth/scripts.tpl' => 1,
  ),
),false)) {
function content_62b32b05744934_97011198 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>登录 &mdash; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>
        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <div class="login-signin">
                            <div class="mb-10">
                                <h3>账号密码找回</h3>
                            </div>
                            <form class="form" id="reset_form">
                                <div class="form-group">
                                    <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8" type="text" placeholder="邮箱地址" name="email" id="email" autocomplete="new-password" required />
                                </div>
                                <div class="form-group text-center mt-10" style="white-space:nowrap;">
                                    <button type="button" id="reset_submit" class="btn btn-pill btn-outline-white btn-block font-weight-bold opacity-90 px-15 py-3">发送密码重置邮件</button>
                                </div>
                            </form>
                            <div class="mt-10">
                                <span class="opacity-70 mr-4">还没有账号 ?</span>
                                <a href="/auth/register" class="text-white font-weight-bold">立即注册</a>
                                <span class="mr-2 ml-2"> | </span>
                                <a href="/auth/login" class="text-white font-weight-bold">返回登录</a>
                            </div>
                        </div>

                        <?php $_smarty_tpl->_subTemplateRender('file:include/auth/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </body>
</html><?php }
}
