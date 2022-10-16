<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:31:14
  from "/home/hubmmsih/public_html/application/admin/template/pages/referral_system/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e860542779cc7_18894309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a39f96b0e5fd84e84ccf93ab70fb2fcf131aed61' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/referral_system/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e860542779cc7_18894309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2464877975e860542754583_24014969', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19597483565e860542775375_63236199', "foo");
}
/* {block "page_content"} */
class Block_2464877975e860542754583_24014969 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="referral_system" id="referral_system"
          method="post" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/referral_system">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"referral_system"), 0, false);
?>


        <ul class="nav nav-tabs dq-nav hide" id="dq-tab">
            <li>
                <a href="#deposit" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>
</a>
            </li>
            
        </ul>
        <div class="tab-content" id="dq-tab-content">
            <div class="tab-pane fade" id="deposit">
                <div class="panel-body">
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['referral_programs'];?>
</h3>
                    <div class="form-group">
                        <label for="ref_min_deposit_amount"
                               class="control-label col-md-2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_dep_amount'];?>
</label>
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
</span>
                                <input type="text" class="form-control input-sm input-auto"
                                       name="ref_settings[ref_min_deposit_amount]"
                                       id="ref_min_deposit_amount" size="25"
                                       value="<?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['ref_min_deposit_amount'] ? $_smarty_tpl->tpl_vars['referral_settings']->value['ref_min_deposit_amount'] : '0';?>
"/>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table id="table-plan" class="table table-bordered table-plan">
                            <thead>
                                <tr class="tr-color">
                                    <th></th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['program_name'];?>
</th>
                                    <th colspan="2" class="text-center">
                                        <select name="ref_settings[ref_deposit_type]"
                                                id="ref_deposit_type"
                                                class="form-control input-sm inline-block"
                                                style="box-shadow: none">
                                            <option value="ref"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_referrals'];?>
</option>
                                            <option value="ref_active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_active_referrals'];?>

                                            </option>
                                            <option value="ref_total_deposit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_deposit_referrals'];?>

                                            </option>
                                        </select>
                                    </th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['commission'];?>
 (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="text-center">
                                        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
</b>
                                        <br>
                                        <small id="min_type_label"></small>
                                    </td>
                                    <td class="text-center">
                                        <b><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
</b>
                                        <br>
                                        <small id="max_type_label"></small>
                                    </td>
                                    <td></td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <tr style="background-color: #f9f9f9;">
                                        <td width="1%" class="text-center">
                                            <input type="checkbox"
                                                   name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][row]"
                                                   id="ref_deposit_programs_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   onchange="enable_ref_prog(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, 'deposit')" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value ? 'checked="checked"' : '';?>

                                                   value="true">
                                            <?php if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value) {?>
                                                <input type="hidden"
                                                       name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][id]"
                                                       value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['ref_deposit_programs']->value[$_prefixVariable1]['id'];?>
">
                                            <?php }?>
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center ref_req" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value ? '' : 'disabled="disabled"';?>

                                                   name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][name]"
                                                   id="name_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->tpl_vars['ref_deposit_programs']->value[$_smarty_tpl->tpl_vars['i']->value]['name'];?>
"/>
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center ref_req" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value ? '' : 'disabled="disabled"';?>

                                                   name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][min]"
                                                   id="min_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['ref_deposit_programs']->value[$_smarty_tpl->tpl_vars['i']->value]['min']);?>
"/>
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center ref_req" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value ? '' : 'disabled="disabled"';?>

                                                   name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][max]"
                                                   id="max_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['ref_deposit_programs']->value[$_smarty_tpl->tpl_vars['i']->value]['max']);?>
"/>
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center ref_req" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_ref_deposit_programs']->value ? '' : 'disabled="disabled"';?>

                                                   name="ref_deposit_programs[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][ref_comm]"
                                                   id="ref_comm_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['ref_deposit_programs']->value[$_smarty_tpl->tpl_vars['i']->value]['ref_comm']);?>
"/>
                                        </td>
                                    </tr>
                                <?php }
}
?>

                            </tbody>
                        </table>
                    </div>
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['other_ref_levels'];?>
</h3>
                    <div class="table-responsive">
                        <table id="table-plan" class="table table-bordered table-plan">
                            <thead>
                                <tr class="tr-color">
                                    <th></th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['level'];?>
</th>
                                    <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['commission'];?>
 (%)</th>
                                    <th class="text-center">
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_dep_amount'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < 9) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 9; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                                    <?php $_smarty_tpl->_assignInScope('ref_level', $_smarty_tpl->tpl_vars['i']->value+2);
?>
                                    <tr>
                                        <td width="1%" class="text-center">
                                            <input type="checkbox"
                                                   name="ref_settings[other_ref_deposit_levels][<?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
][row]"
                                                   id="ref_level_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   onchange="enable_ref_levels(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, 'deposit')" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['other_ref_deposit_levels'][$_smarty_tpl->tpl_vars['ref_level']->value]['row'] ? 'checked="checked"' : '';?>

                                                   value="true">
                                        </td>
                                        <td width="2%" align="center"
                                            style="vertical-align: middle;">
                                            <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
</span>
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center"
                                                   name="ref_settings[other_ref_deposit_levels][<?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
][ref_comm]"
                                                   id="ref_level_comm_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['referral_settings']->value['other_ref_deposit_levels'][$_smarty_tpl->tpl_vars['ref_level']->value]['ref_comm']);?>
" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['other_ref_deposit_levels'][$_smarty_tpl->tpl_vars['ref_level']->value]['row'] ? '' : 'disabled="disabled"';?>
 />
                                        </td>
                                        <td>
                                            <input type="text"
                                                   class="form-control input-sm text-center"
                                                   name="ref_settings[other_ref_deposit_levels][<?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
][ref_min_deposit_amount]"
                                                   id="ref_level_min_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['referral_settings']->value['other_ref_deposit_levels'][$_smarty_tpl->tpl_vars['ref_level']->value]['ref_min_deposit_amount']);?>
" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['other_ref_deposit_levels'][$_smarty_tpl->tpl_vars['ref_level']->value]['row'] ? '' : 'disabled="disabled"';?>
 />
                                        </td>
                                    </tr>
                                <?php }
}
?>

                            </tbody>
                        </table>
                    </div>
                    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['referral_settings'];?>
</h3>
                    <div class="form-group">
                        <label for="force_upline"
                               class="control-label col-md-5"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['force_upline_during_reg'];?>
</label>
                        <div class="col-md-7">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="ref_settings[force_upline]"
                                       id="force_upline"
                                       value="true" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['force_upline'] ? 'checked=""' : '';?>
>
                                <label for="force_upline"></label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="show_refdetails"
                               class="control-label col-md-5"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['show_ref_details_in_member'];?>
</label>
                        <div class="col-md-7">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="ref_settings[show_refdetails]"
                                       id="show_refdetails"
                                       value="true" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['show_refdetails'] ? 'checked=""' : '';?>
>
                                <label for="show_refdetails"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="payrefcomm_ifinvested"
                               class="control-label col-md-5"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['pay_ref_comm_made_inv'];?>
</label>
                        <div class="col-md-7">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox"
                                       name="ref_settings[payrefcomm_ifinvested]"
                                       id="payrefcomm_ifinvested"
                                       value="true" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['payrefcomm_ifinvested'] ? 'checked=""' : '';?>
>
                                <label for="payrefcomm_ifinvested"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="donotpayrefcomm_ifbalinvested"
                               class="control-label col-md-5"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['do_not_pay_ref_comm_from_acc'];?>
</label>
                        <div class="col-md-7">
                            <div class="checkbox checkbox-success">
                                <input type="checkbox"
                                       name="ref_settings[donotpayrefcomm_ifbalinvested]"
                                       id="donotpayrefcomm_ifbalinvested"
                                       value="true" <?php echo $_smarty_tpl->tpl_vars['referral_settings']->value['donotpayrefcomm_ifbalinvested'] ? 'checked=""' : '';?>
>
                                <label for="donotpayrefcomm_ifbalinvested"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <hr>
        <button type="submit" class="btn btn-primary"
                onclick="update_tab_form('referral_system')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_19597483565e860542775375_63236199 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        jQuery(function ($) {
            "use strict"; // Start of use strict

            $('#ref_enabled').change(function () {
                if ($('#ref_enabled:checked').val()) {
                    $('.ref_req').attr({'required': 'true'});
                }
                else {
                    $('.ref_req').removeAttr('required');
                }
            });

            $('#type').change(function () {
                var selected_text = $('#type option:selected').text();
                $('#min_type_label').text('(' + selected_text + ')');
                $('#max_type_label').text('(' + selected_text + ')');
            });

            $('#type').trigger('change');

        });

        function enable_ref_prog(ref_id, type) {
            if ($('#ref_' + type + '_programs_' + ref_id + ':checked').val()) {
                $('#name_' + type + '_' + ref_id).removeAttr('disabled');
                $('#min_' + type + '_' + ref_id).removeAttr('disabled');
                $('#max_' + type + '_' + ref_id).removeAttr('disabled');
                $('#ref_comm_' + type + '_' + ref_id).removeAttr('disabled');
            }
            else {
                $('#name_' + type + '_' + ref_id).attr({'disabled': 'true'});
                $('#min_' + type + '_' + ref_id).attr({'disabled': 'true'});
                $('#max_' + type + '_' + ref_id).attr({'disabled': 'true'});
                $('#ref_comm_' + type + '_' + ref_id).attr({'disabled': 'true'});
            }

        }

        function enable_ref_levels(ref_id, type) {
            if ($('#ref_level_' + type + '_' + ref_id + ':checked').val()) {
                $('#ref_level_comm_' + type + '_' + ref_id).removeAttr('disabled');
                $('#ref_level_min_' + type + '_' + ref_id).removeAttr('disabled');
            }
            else {
                $('#ref_level_comm_' + type + '_' + ref_id).attr({'disabled': 'true'});
                $('#ref_level_min_' + type + '_' + ref_id).attr({'disabled': 'true'});
            }

        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
