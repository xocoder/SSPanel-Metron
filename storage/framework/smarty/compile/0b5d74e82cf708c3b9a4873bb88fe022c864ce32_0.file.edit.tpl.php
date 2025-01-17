<?php
/* Smarty version 3.1.44, created on 2022-06-23 01:13:19
  from '/opt/website/user.marsjsq.com/resources/views/metron/admin/shop/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_62b34dafb80b85_57109453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5d74e82cf708c3b9a4873bb88fe022c864ce32' => 
    array (
      0 => '/opt/website/user.marsjsq.com/resources/views/metron/admin/shop/edit.tpl',
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
function content_62b34dafb80b85_57109453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">编辑商品</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="name">名称</label>
                                <input class="form-control maxwidth-edit" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->name;?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="price">价格</label>
                                <input class="form-control maxwidth-edit" id="price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="auto_renew">自动续订天数</label>
                                <input class="form-control maxwidth-edit" id="auto_renew" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>0为不允许自动续订，其他为到了那么多天之后就会自动从用户的账户上划钱抵扣
                                </p>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="bandwidth">流量（GB）</label>
                                <input class="form-control maxwidth-edit" id="bandwidth" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="auto_reset_bandwidth">
                                        <input <?php if ($_smarty_tpl->tpl_vars['shop']->value->auto_reset_bandwidth == 1) {?>checked<?php }?> class="access-hide"
                                               id="auto_reset_bandwidth" type="checkbox"><span
                                                class="switch-toggle"></span>续费时自动重置用户流量为上面这个流量值
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="limitamount">限制购买总数量 (该套餐当前已有 <?php echo $_smarty_tpl->tpl_vars['shop']->value->limitamount(true);?>
 份在用)</label>
                                <input class="form-control maxwidth-edit" id="limitamount" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->limitamount();?>
">
                                <p class="form-control-guide"><i class="material-icons">info</i>按所有用户中, 生效套餐为该套餐的累计, 超过该数量其他用户则不能购买, 0 为不限制</p>
                                <p class="form-control-guide"><i class="material-icons">info</i>如果其他用户套餐到期后没有再购买该套餐, 则自动有1个名额可以购买</p>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <?php $_smarty_tpl->_assignInScope('content', json_decode($_smarty_tpl->tpl_vars['shop']->value->content));?>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="traffic-package-min">最低可购买用户等级</label>
                                <input class="form-control maxwidth-edit" id="traffic-package-min" type="text"
                                value="<?php if (property_exists($_smarty_tpl->tpl_vars['content']->value,'traffic_package')) {
echo $_smarty_tpl->tpl_vars['content']->value->traffic_package->class->min;
} else { ?>0<?php }?>">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="traffic-package-max">最高可购买用户等级</label>
                                <input class="form-control maxwidth-edit" id="traffic-package-max" type="text"
                                value="<?php if (property_exists($_smarty_tpl->tpl_vars['content']->value,'traffic_package')) {
echo $_smarty_tpl->tpl_vars['content']->value->traffic_package->class->max;
} else { ?>0<?php }?>">
                            </div>

                            <div class="form-group form-group-label">
                                <div class="checkbox switch">
                                    <label for="traffic-package-enable">
                                        <input <?php if ($_smarty_tpl->tpl_vars['shop']->value->traffic_package()) {?>checked<?php }?> class="access-hide" id="traffic-package-enable" type="checkbox">
                                        <span class="switch-toggle"></span>是否设置此商品为流量叠加包
                                    </label>
                                    <p class="form-control-guide">
                                        <i class="material-icons">info</i>
                                        设置为流量叠加包后除购买时获得流量外的设置无效
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="expire">账户有效期天数</label>
                                <input class="form-control maxwidth-edit" id="expire" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->expire();?>
">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="node_group">用户群组</label>
                                <input class="form-control maxwidth-edit" id="node_group" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->node_group();?>
">
                                <p class="form-control-guide"> <i class="material-icons">info</i> 购买该套餐将用户修改成此分组下,   -1 不分配, 保持用户默认</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class">等级</label>
                                <input class="form-control maxwidth-edit" id="class" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->user_class();?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class_expire">等级有效期天数</label>
                                <input class="form-control maxwidth-edit" id="class_expire" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset_exp">多少天内</label>
                                <input class="form-control maxwidth-edit" id="reset_exp" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_exp();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset">每多少天</label>
                                <input class="form-control maxwidth-edit" id="reset" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset();?>
">
                            </div>

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="reset_value">重置流量为多少G</label>
                                <input class="form-control maxwidth-edit" id="reset_value" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->reset_value();?>
">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="speedlimit">端口限速</label>
                                <input class="form-control maxwidth-edit" id="speedlimit" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->speedlimit();?>
">
                            </div>


                            <div class="form-group form-group-label">
                                <label class="floating-label" for="connector">IP限制</label>
                                <input class="form-control maxwidth-edit" id="connector" type="number"
                                       value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->connector();?>
">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content_extra">服务支持</label>
                                <input class="form-control maxwidth-edit" id="content_extra" type="text"
                                       value="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shop']->value->content_extra(), 'service', true);
$_smarty_tpl->tpl_vars['service']->iteration = 0;
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
$_smarty_tpl->tpl_vars['service']->iteration++;
$_smarty_tpl->tpl_vars['service']->last = $_smarty_tpl->tpl_vars['service']->iteration === $_smarty_tpl->tpl_vars['service']->total;
$__foreach_service_0_saved = $_smarty_tpl->tpl_vars['service'];
echo $_smarty_tpl->tpl_vars['service']->value[0];?>
-<?php echo $_smarty_tpl->tpl_vars['service']->value[1];
if ($_smarty_tpl->tpl_vars['service']->last) {
} else { ?>;<?php }
$_smarty_tpl->tpl_vars['service'] = $__foreach_service_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>">
                                <p class="form-control-guide"><i class="material-icons">info</i>例：<code>check-全球节点分布;clear-快速客服响应</code>，减号左边为icon代号右边为文字,以;隔开
                                </p>
                                <p class="form-control-guide">icon代号参阅：<a
                                            href="https://material.io/tools/icons/?icon=clear&style=baseline">Material-icon</a>
                                </p>
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
                                                class="btn btn-block btn-brand waves-attach waves-light">保存
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
    window.addEventListener('load', () => {
        function submit() {
            if ($$.getElementById('auto_reset_bandwidth').checked) {
                var auto_reset_bandwidth = 1;
            } else {
                var auto_reset_bandwidth = 0;
            }

            let contentExtra = $$getValue('content_extra');
            if (contentExtra === '' || contentExtra === '-') {
                contentExtra = 'check-全球节点分布;check-快速客服响应;check-全平台客户端';
            }

            let data = {
                name: $$getValue('name'),
                auto_reset_bandwidth,
                price: $$getValue('price'),
                auto_renew: $$getValue('auto_renew'),
                bandwidth: $$getValue('bandwidth'),
                speedlimit: $$getValue('speedlimit'),
                connector: $$getValue('connector'),
                expire: $$getValue('expire'),
                class: $$getValue('class'),
                class_expire: $$getValue('class_expire'),
                reset: $$getValue('reset'),
                reset_value: $$getValue('reset_value'),
                reset_exp: $$getValue('reset_exp'),
                node_group: $$getValue('node_group'),
                limitamount: $$getValue('limitamount'),
                content_extra: contentExtra,
            }

            if ($$.getElementById('traffic-package-enable').checked) {
                data.traffic_package = {
                    class: {
                        min: $$getValue('traffic-package-min'),
                        max: $$getValue('traffic-package-max')
                    }
                }
            } 

            $.ajax({
                type: "PUT",
                url: "/admin/shop/<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
",
                dataType: "json",
                data,
                success: data => {
                    if (data.ret) {
                        $("#result").modal();
                        $$.getElementById('msg').innerHTML = data.msg;
                        window.setTimeout("location.href='/admin/shop'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
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
            if (event.keyCode === 13) {
                login();
            }
        });

        $$.getElementById('submit').addEventListener('click', submit);

    })
<?php echo '</script'; ?>
>
<?php }
}
