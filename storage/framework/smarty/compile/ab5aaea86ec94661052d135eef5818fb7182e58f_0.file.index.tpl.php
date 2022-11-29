<?php
/* Smarty version 3.1.44, created on 2022-06-22 22:40:54
  from '/opt/website/user.marsjsq.com/resources/views/metron/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b329f6a90c59_13904022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab5aaea86ec94661052d135eef5818fb7182e58f' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/index.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index-a.tpl' => 1,
  ),
),false)) {
function content_62b329f6a90c59_13904022 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['metron']->value['index_enable'] == true) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:index-a.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
        <meta http-equiv="refresh" content="0;url=/user">
    </head>
    </html>
<?php }
}
}
