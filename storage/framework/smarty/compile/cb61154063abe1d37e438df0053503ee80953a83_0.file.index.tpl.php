<?php
/* Smarty version 3.1.44, created on 2022-06-22 22:49:35
  from '/opt/website/user.marsjsq.com/resources/views/metron/admin/auto/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b32bff42f419_32557142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb61154063abe1d37e438df0053503ee80953a83' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/admin/auto/index.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_62b32bff42f419_32557142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">自动化命令执行</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中所有自动化命令执行记录。</p>
                            <p>显示表项:
                                <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>

                <div class="fbtn-container">
                    <div class="fbtn-inner">
                        <a class="fbtn fbtn-lg fbtn-brand-accent waves-attach waves-circle waves-light"
                           href="/admin/auto/create">+</a>

                    </div>
                </div>

                <div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog"
                     tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>
                                <h2 class="modal-title">确认要删除？</h2>
                            </div>
                            <div class="modal-inner">
                                <p>请您确认。</p>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand-accent waves-attach waves-effect"
                                            data-dismiss="modal" type="button">取消
                                    </button>
                                    <button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal"
                                            id="delete_input" type="button">确定
                                    </button>
                                </p>
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
    function delete_modal_show(id) {
        deleteid = id;
        $("#delete_modal").modal();
    }

    <?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    window.addEventListener('load', () => {
        function delete_id() {
            $.ajax({
                type: "DELETE",
                url: "/admin/auto",
                dataType: "json",
                data: {
                    id: deleteid
                },
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `${data.msg} 发生错误了。`;
                }
            });
        }

        $$.getElementById('delete_input').addEventListener('click', delete_id);

        <?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    })

<?php echo '</script'; ?>
>
<?php }
}
