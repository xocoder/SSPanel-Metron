<?php
/* Smarty version 3.1.44, created on 2022-06-23 01:21:52
  from '/opt/website/user.marsjsq.com/resources/views/metron/user/help/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b34fb00094a5_06963879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35dee9d5290d43b2c4e0ca94746368177c453eb' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/user/help/search.tpl',
      1 => 1655904317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/help/head.tpl' => 1,
    'file:include/global/footer.tpl' => 1,
    'file:include/global/scripts.tpl' => 1,
  ),
),false)) {
function content_62b34fb00094a5_06963879 (Smarty_Internal_Template $_smarty_tpl) {
?>                                <?php $_smarty_tpl->_subTemplateRender('file:user/help/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <div class="accordion accordion-solid accordion-panel accordion-svg-toggle mb-10" id="faq">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contents']->value, 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
                                    <div class="card p-5  mb-8 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                        <div class="card-header" id="faqHeading2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
">
                                            <div class="card-title font-size-h4 text-dark collapsed" data-toggle="collapse" data-target="#faq2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" aria-expanded="false" aria-controls="faq2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" role="button">
                                                <div class="card-label <?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['text'];?>
"><?php echo $_smarty_tpl->tpl_vars['content']->value->title;?>
</div>
                                                <span class="svg-icon svg-icon-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <polygon points="0 0 24 0 24 24 0 24" />
                                                            <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero" />
                                                            <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)" />
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                            <div class="card-title collapsed pt-0" data-toggle="collapse" data-target="#faq2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" aria-expanded="true" aria-controls="faq1-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
">
                                                <footer class="blockquote-footer"><cite title="一级分类"><?php echo $_smarty_tpl->tpl_vars['classs']->value[$_smarty_tpl->tpl_vars['classs']->value[$_smarty_tpl->tpl_vars['content']->value->class]['upid']]['name'];?>
</cite>&nbsp;&nbsp;-&nbsp;<cite title="二级分类"><?php echo $_smarty_tpl->tpl_vars['classs']->value[$_smarty_tpl->tpl_vars['content']->value->class]['name'];?>
</cite></footer>
                                            </div>
                                        </div>
                                        <div id="faq2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" class="collapse" aria-labelledby="faqHeading2-<?php echo $_smarty_tpl->tpl_vars['content']->value->id;?>
" data-parent="#faq">
                                            <div class="separator separator-dashed separator-border-3"></div>
                                            <div class="card-body pt-5 font-size-h6 font-weight-normal text-dark-50"><?php echo $_smarty_tpl->tpl_vars['content']->value->content;?>
</div>
                                        </div>
                                    </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>

                                <div class="card card-custom p-6 mb-8 mb-lg-0 <?php echo $_smarty_tpl->tpl_vars['metron']->value['style_shadow'];?>
">
                                    <div class="card-body d-flex align-items-center justify-content-between">
                                        <div class="mr-4">
                                            <h3 class="<?php echo $_smarty_tpl->tpl_vars['style']->value[$_smarty_tpl->tpl_vars['theme_style']->value]['global']['title'];?>
 mb-6">文档中心无法解决问题？</h3>
                                            <p class="text-dark-50 font-size-lg">如果文档中心的内容无法解决您的问题, 可通过工单与我们联系<br>开启工单前, 请确保文档中心的内容对您没有提供帮助</p>
                                        </div>
                                        <a href="/user/ticket" class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">联系我们</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <?php $_smarty_tpl->_subTemplateRender('file:include/global/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender('file:include/global/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </body>
</html><?php }
}
