<?php
/* Smarty version 3.1.44, created on 2022-06-22 22:49:21
  from '/opt/website/user.marsjsq.com/resources/views/metron/table/js_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b32bf1039b76_63688400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e3ee519131ca4ae0c840899161d47142cd5147a' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/table/js_1.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b32bf1039b76_63688400 (Smarty_Internal_Template $_smarty_tpl) {
?>function modify_table_visible(id, key) {
if(document.getElementById(id).checked)
{
table_1.columns( '.' + key ).visible( true );
localStorage.setItem(window.location.href + '-haschecked-' + id, true);
}
else
{
table_1.columns( '.' + key ).visible( false );
localStorage.setItem(window.location.href + '-haschecked-' + id, false);
}
}
<?php }
}
