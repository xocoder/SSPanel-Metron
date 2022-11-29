<?php
/* Smarty version 3.1.44, created on 2022-07-31 05:37:05
  from '/opt/website/user.marsjsq.com/resources/views/metron/include/global/chatra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62e5a481b24403_85391071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88ca175498fb598fc3d5e7f99bd5d0457caf93a5' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/include/global/chatra.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e5a481b24403_85391071 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php echo '<script'; ?>
>
            (function(d, w, c) {
                w.ChatraID = "<?php echo $_smarty_tpl->tpl_vars['metron']->value['chatra_id'];?>
";
                var s = d.createElement('script');
                w[c] = w[c] || function() {
                    (w[c].q = w[c].q || []).push(arguments);
                };
                s.async = true;
                s.src = 'https://call.chatra.io/chatra.js';
                if (d.head) d.head.appendChild(s);
            })(document, window, 'Chatra');
        <?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
>
            window.ChatraIntegration = {
                name: '<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
',
                email: '<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
',
                'Class': '<?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
',
                'Class_Expire': '<?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
',
                'Money': '<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
',
                'Unused_Traffic': '<?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
'
            };
            var userUUID = '<?php echo $_smarty_tpl->tpl_vars['user']->value->uuid;?>
';
        <?php echo '</script'; ?>
><?php }
}
