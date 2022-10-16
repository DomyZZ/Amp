<?php
/* Smarty version 3.1.30, created on 2020-03-25 09:12:29
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b207d92e232_52016680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33f7a99178f578ebd4430d944e6148c79ccbb5b6' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/index.tpl',
      1 => 1582120402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
    'file:payment_gateways/proc/".((string)$_smarty_tpl->tpl_vars[\'proc\']->value[\'nick\']).".tpl' => 2,
    'file:payment_gateways/proc/custom.tpl' => 1,
  ),
),false)) {
function content_5e7b207d92e232_52016680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5817526995e7b207d90f139_77967349', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15108149625e7b207d926bd0_22520430', "foo");
}
/* {block "page_content"} */
class Block_5817526995e7b207d90f139_77967349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['active_processors']->value, 'proc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['proc']->value) {
?>
                <form class="payment-gateways" name="payment_gateways_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
"
                      id="<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" method="post" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways/<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
/update">
                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
" />
                    <div class="panel <?php echo $_smarty_tpl->tpl_vars['proc']->value['hidden'] == 'yes' ? 'panel-warning' : 'panel-primary';?>
">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
"
                                     style="margin-top: -2px"> &nbsp;<?php echo strtoupper($_smarty_tpl->tpl_vars['proc']->value['name']);?>

                                <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-danger btn-xs"
                                   onclick="confirm_delete('<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['confirm_payment_gateway_delete'];?>
', '<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways/<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
/deactivate');"
                                   style="float: right;color: #fff"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deactivate'];?>
</a>
                            </div>
                        </div>
                        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"payment_gateway_".((string)$_smarty_tpl->tpl_vars['proc']->value['nick'])), 0, true);
?>

                        <div class="panel-body">
                            <div class="form-group">
                                <label class="checkbox-inline"
                                       for="hidden_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
">
                                    <input type="checkbox" name="hidden"
                                           id="hidden_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
"
                                           value="true" <?php echo $_smarty_tpl->tpl_vars['proc']->value['hidden'] == 'yes' ? 'checked=""' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['do_not_show_site'];?>

                                </label>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['proc']->value['p_type'] == "system") {?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['sci_details'];?>
</h5>
                                        <small class="help-block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['for_deposit_addfunds'];?>
)
                                            <a href="#" class="pull-right" id="sci-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
" data-toggle="modal"
                                               data-target="#help-sci-<?php ob_start();
echo (($_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system']).('-')).($_smarty_tpl->tpl_vars['proc']->value['nick']);
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['proc']->value['type'] == 'fiat' ? $_smarty_tpl->tpl_vars['proc']->value['nick'] : ($_smarty_tpl->tpl_vars['proc']->value['payment_details']['payment_system'] ? $_prefixVariable1 : ('coinpayments_api-').($_smarty_tpl->tpl_vars['proc']->value['nick']));?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['how_to'];?>

                                                ?
                                            </a>
                                        </small>
                                        <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/".((string)$_smarty_tpl->tpl_vars['proc']->value['nick']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"sci"), 0, true);
?>

                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['api_details'];?>
</h5>
                                        <small class="help-block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['for_withdraw'];?>
)
                                            <a href="#" class="pull-right" data-toggle="modal" id="api-<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
"
                                               data-target="#help-api-<?php ob_start();
echo (($_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system']).('-')).($_smarty_tpl->tpl_vars['proc']->value['nick']);
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['proc']->value['type'] == 'fiat' ? $_smarty_tpl->tpl_vars['proc']->value['nick'] : ($_smarty_tpl->tpl_vars['proc']->value['payment_details']['api']['payment_system'] ? $_prefixVariable2 : ('coinpayments-').($_smarty_tpl->tpl_vars['proc']->value['nick']));?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['how_to'];?>

                                                ?
                                            </a>
                                        </small>
                                        <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/".((string)$_smarty_tpl->tpl_vars['proc']->value['nick']).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"api"), 0, true);
?>

                                        <div class="form-group"
                                             style="background: transparent !important;text-align: right;margin-bottom: 10px">
                                            <a href="javascript:void(0)"
                                               onclick="test_api('<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
', <?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['test_api'];?>
</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['proc']->value['p_type'] == "custom") {?>
                                <div class="row" id="custom_<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
">
                                    <div class="col-md-12">
                                        <?php $_smarty_tpl->_subTemplateRender("file:payment_gateways/proc/custom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <div class="panel-footer">
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['req_admin_secondary_pass']) {?>
                                <div class="form-group">
                                    <label class="text-danger"
                                           style="font-size: 12px"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['admin_secondary_password'];?>
: </label>
                                    <input type="password" class="form-control input-sm input-md-3"
                                           name="alt_password" id="alt_password"
                                           required />
                                </div>
                            <?php }?>
                            <button type="submit"
                                    class="btn btn-success btn-sm"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
                        </div>
                    </div>
                </form>
                <?php
}
} else {
?>

                <div class="no-payment-gateways">
                    <strong class="text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['no_active_payment_gateways'];?>
</strong>
                    <br> <span class="text-muted"><?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['activate_from_right'];?>
</span>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
        <div class="col-sm-12 col-md-4">
            <!-- Inactive payment gateways -->
            <div class="panel panel-default pgt-list" id="pgt-list-sticky">
                <div class="panel-heading">
                    <div class="panel-title">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['payment_gateways'];?>

                    </div>
                </div>
                <div class="panel-body">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'proc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['proc']->value) {
?>
                        <div class="pgt-box" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['proc']->value['status'] == 'active') {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways#<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
"
                                   class="btn btn-sm btn-block btn-success" readonly>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
" />
                                    <span><?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
</span>
                                </a>
                            <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways/<?php echo $_smarty_tpl->tpl_vars['proc']->value['nick'];?>
/activate"
                                   class="btn btn-sm btn-block btn-default">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
" />
                                    <span><?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
</span>
                                </a>
                            <?php }?>
                        </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_15108149625e7b207d926bd0_22520430 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- BlockUI js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/jqueryBlockUI/jquery.blockUI.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- ckeditor js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $(document).ready(function () {
            $('.custom_p_details').each(function (e) {
                CKEDITOR.replace(this.id, {
                    height: '300px',
                    fullPage: false,
                    allowedContent: true,
                    toolbarGroups: [
                        {name: 'document', groups: ['mode', 'document']},
                        {name: 'basicstyles', groups: ['basicstyles']},
                        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'paragraph']}
                    ]
                });
            });

            function pgtSticky() {
                var pgt_list = document.getElementById("pgt-list-sticky");
                var pgt_list_sticky = pgt_list.offsetTop;

                if (window.pageYOffset > pgt_list_sticky) {
                    pgt_list.classList.add("pgt-list-sticky");
                } else {
                    pgt_list.classList.remove("pgt-list-sticky");
                }
            }

            window.onscroll = function () {
                pgtSticky()
            };

        });

        function show_ps_details(type, nick) {

            var ps = ["coinpayments", "coinpayments_api", "blockio", "blocktrail", "stripe", "blockcypher", "paykassa", "paykassa_api"];

            var ps_len = ps.length;

            for (var i = 0; i < ps_len; i++) {
                console.log($('#' + type + '_' + nick + '_payment_system').val());
                if ($('#' + type + '_' + nick + '_payment_system').val() === ps[i]) {
                    $('#' + type + '_' + ps[i] + '_' + nick).removeClass('hide');
                } else {
                    $('#' + type + '_' + ps[i] + '_' + nick).addClass('hide');
                }
            }

            $('#' + type + '-' + nick).attr({'data-target': '#help-' + type + '-' + $('#' + type + '_' + nick + '_payment_system').val() + '-' + nick})

        }

        function change_fields(c_id, i_id) {
            if ($('#' + c_id + ':checked').val()) {
                $('#' + i_id).removeAttr('disabled');
            } else {
                $('#' + i_id).attr({'disabled': 'true'});
            }
        }

        function change_fee_type(id1, id2) {
            if ($('#' + id2).val() == 'solid')
                $('#' + id1).addClass('hide');
            else
                $('#' + id1).removeClass('hide');
        }

        function test_api(nick, id) {
            var url = dqs_admin_url + '/payment_gateways/' + nick + '/test_api';

            $.blockUI({
                message: 'Please wait...', css: {
                    border: 'none',
                    padding: '15px',
                    left: '40%',
                    width: '300px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({
                type: "POST",
                dataType: "json",
                url: url,
                data: $('form#' + nick).serialize() + '&' + $.param({'id': id}),
                success: function (data) {
                    $.unblockUI();
                    alert(data['title'] + " : " + data['text']);
                },
                error: function () {
                    $.unblockUI();
                    alert('Failed!');
                }
            });

        }
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
