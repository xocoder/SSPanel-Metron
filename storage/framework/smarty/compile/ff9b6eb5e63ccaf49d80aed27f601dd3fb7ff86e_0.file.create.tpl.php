<?php
/* Smarty version 3.1.44, created on 2022-06-23 18:47:28
  from '/opt/website/user.marsjsq.com/resources/views/metron/admin/help/document/create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b444c07c9155_92855445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff9b6eb5e63ccaf49d80aed27f601dd3fb7ff86e' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/admin/help/document/create.tpl',
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
function content_62b444c07c9155_92855445 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">添加文档</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="title">标题</label>
                                <input class="form-control maxwidth-edit" id="title" name="title" type="text" value="">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content">内容</label>
                                <link rel="stylesheet"
                                      href="https://cdn.jsdelivr.net/npm/editor.md@1.5.0/css/editormd.min.css"/>
                                <div id="editormd">
                                    <textarea style="display:none;" id="content"></textarea>
                                </div>
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

                                        <div class="form-group form-group-label">
                                            <label for="class_1">
                                                <label class="floating-label" for="class_1">分类一</label>
                                                <select id="class_1" class="form-control maxwidth-edit" name="class_1">
                                                        <option value="0">请选择一级分类</option>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['helpClass1']->value, 'Class1');
$_smarty_tpl->tpl_vars['Class1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Class1']->value) {
$_smarty_tpl->tpl_vars['Class1']->do_else = false;
?>
                                                            <option value="<?php echo $_smarty_tpl->tpl_vars['Class1']->value->id;?>
">#<?php echo $_smarty_tpl->tpl_vars['Class1']->value->id;?>
 - <?php echo $_smarty_tpl->tpl_vars['Class1']->value->name;?>
</option>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </label>
                                        </div>

                                        <div class="form-group form-group-label">
                                            <label for="class_2">
                                                <label class="floating-label" for="class_2">分类二</label>
                                                <select id="class_2" class="form-control maxwidth-edit" name="class_2">
                                                        <option value="0">请选择二级分类</option>
                                                </select>
                                            </label>
                                        </div>

                                        <div class="form-group form-group-label">
                                            <label>
                                                <label class="floating-label" for="sort">排序</label>
                                                <input class="form-control maxwidth-edit" id="sort" name="sort" type="text" value="0">
                                            </label>
                                        </div>
                                        <p class="form-control-guide"><i class="material-icons">info</i>数组越大越靠前(最多5位数)</p>

                                        <div class="form-group form-group-label">
                                            <div class="checkbox switch">
                                                <label for="isontop">
                                                    <input class="access-hide" id="isontop" type="checkbox"
                                                           name="isontop"><span class="switch-toggle"></span>是否置顶展开
                                                </label>
                                            </div>
                                        </div>

                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">添加
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
echo '<script'; ?>
>
    $(function(){
        $("select#class_1").change(function(){
            $("#class_2").empty();
            $("#class_2").append("<option value='0'>正在获取分类...</option>");
            $.ajax({
                type: 'GET',
                url: '/admin/help/document/gethelpclass',
                dataType: "json",
                data: {
                    id: $(this).val()
                },
                success: data => {
                    $("#class_2").empty();
                    if (data.ret === 0){
                        $("#class_2").append("<option value='0'>"+data.msg+"</option>");
                    } else {
                        $("#class_2").append("<option value='0'>请选择二级分类</option>");
                        var options = '';
                        for(var i=0; i<data.length; i++) {
                            $("#class_2").append('<option value='+data[i].id+'>#'+data[i].id + ' - '+data[i].name+'</option>');
                        }
                    }
                },
                error: jqXHR => {
                    $("#result").modal();
                    $$.getElementById('msg').innerHTML = `发生错误：${ jqXHR.status }`;
                }
            });
        });
    });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/editor.md@1.5.0/editormd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    (() => {
        editor = editormd("editormd", {
            path: "https://cdn.jsdelivr.net/npm/editor.md@1.5.0/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
            height: 720,
            saveHTMLToTextarea: true
        });

        /*
        // or
        var editor = editormd({
            id   : "editormd",
            path : "../lib/"
        });
        */
    })();

    window.addEventListener('load', () => {
        function submit() {

            if ($$.getElementById('isontop').checked) {
                var isontop = 1;
            } else {
                var isontop = 0;
            }

            $.ajax({
                type: "POST",
                url: "/admin/help/document",
                dataType: "json",
                data: {
                    title: $$getValue('title'),
                    content: editor.getHTML(),
                    class1: $$getValue('class_1'),
                    class2: $$getValue('class_2'),
                    markdown: $('.editormd-markdown-textarea').val(),
                    isontop: isontop,
                    sort: $$getValue('sort'),
                },
                success: data => {
                    if (data.ret === 1) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else if (data.ret === 2) {
                        submit(data.msg);
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

        $$.getElementById('submit').addEventListener('click', () => {
            submit();
        });
    });
    
    function getClass() {

    }

<?php echo '</script'; ?>
>
<?php }
}
