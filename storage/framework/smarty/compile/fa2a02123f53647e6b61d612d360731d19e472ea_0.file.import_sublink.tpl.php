<?php
/* Smarty version 3.1.44, created on 2022-06-22 22:47:36
  from '/opt/website/user.marsjsq.com/resources/views/metron/include/global/import_sublink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b32b881124a2_28239271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa2a02123f53647e6b61d612d360731d19e472ea' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/include/global/import_sublink.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b32b881124a2_28239271 (Smarty_Internal_Template $_smarty_tpl) {
?>        <?php echo '<script'; ?>
>
            function importSublink(client) {
            if (client == 'ssr') {
                index.oneclickImport('ssr', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
');
            };
            if (client == 'clash') {
                index.oneclickImport('clash','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["clash"];?>
')
            };
            if (client == 'shadowrocket') {
                index.oneclickImport('shadowrocket','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
')
            };
            if (client == 'quantumult') {
                index.oneclickImport('quantumult','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["ssr"];?>
')
            };
            if (client == 'quantumult_v2') {
                index.oneclickImport('quantumult_v2','<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["quantumult_v2"];?>
')
            };
            if (client == 'stash') {
                location.href = "stash://install-config?url=" + encodeURIComponent('<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["stash"];?>
') + "&name=" + '<?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
'
            };
            }
            function qrcodeSublink(client) {
                if (client == 'shadowrocket') {
                    index.qrcodeImport('shadowrocket', '<?php echo $_smarty_tpl->tpl_vars['subInfo']->value["shadowrocket"];?>
');
                }
            }
        <?php echo '</script'; ?>
>
<?php }
}
