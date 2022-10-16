<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:40:25
  from "/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/fees_limits.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b18f980f348_36045680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f19598223ae499d097b10c4b0ba49c5de52c4a4' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/payment_gateways/fees_limits.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e7b18f980f348_36045680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17241818325e7b18f96df9d1_47533361', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_704707725e7b18f97feb69_87928187', "page_content");
}
/* {block "breadcrumb"} */
class Block_17241818325e7b18f96df9d1_47533361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['payment_gateways'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['fees_limits'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_704707725e7b18f97feb69_87928187 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-inline form-fees" name="fees_limits" id="fees_limits" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"fees_limits"), 0, false);
?>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>

                            <small class="block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['limits'];?>
)</small>
                        </th>
                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>

                            <small class="block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fees'];?>
)</small>
                        </th>
                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdrawal'];?>

                            <small class="block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['limits'];?>
)</small>
                        </th>
                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdrawal'];?>

                            <small class="block text-muted">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fees'];?>
)</small>
                        </th>
                    </tr>
                </thead>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'proc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['proc']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('proc_settings', unserialize($_smarty_tpl->tpl_vars['proc']->value['settings']));
?>
                    <tr>
                        <td class="text-center" width="1%"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
"
                                                                data-toggle="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
"/></td>
                        <td>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_min_amount]"
                                       class="form-control input-auto input-sm"
                                       id="set_deposit_min_amount_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_min_amount'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_min_amount'] : '0';?>
"
                                       placeholder="Min"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_max_amount]"
                                       class="form-control input-auto input-sm"
                                       id="set_deposit_max_amount_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_max_amount'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_max_amount'] : '0';?>
"
                                       placeholder="Max"/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['deposit'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fee'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_fee_percentage]"
                                       class="form-control input-sm"
                                       id="set_deposit_fee_percentage_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_fee_percentage'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_fee_percentage'] : '0';?>
"/>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_fee_solid]"
                                       class="form-control input-sm"
                                       id="set_deposit_fee_solid_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_fee_solid'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_fee_solid'] : '0';?>
"/>
                                <small class="text-muted">(% + <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</small>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fee'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_min_fee]"
                                       class="form-control input-sm"
                                       id="set_deposit_min_fee_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_min_fee'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_min_fee'] : '0';?>
"
                                       placeholder="Min"/>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[deposit_max_fee]"
                                       class="form-control input-sm"
                                       id="set_deposit_max_fee_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_max_fee'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['deposit_max_fee'] : '0';?>
"
                                       placeholder="Max"/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdraw'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_min_amount]"
                                       class="form-control input-auto input-sm"
                                       id="set_withdraw_min_amount_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_min_amount'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_min_amount'] : '0';?>
"
                                       placeholder="Min"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdraw'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_max_amount]"
                                       class="form-control input-auto input-sm"
                                       id="set_withdraw_max_amount_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_max_amount'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_max_amount'] : '0';?>
"
                                       placeholder="Max"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['daily_limit'];?>
</label>
                                <input type="text" class="form-control input-sm"
                                       name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_daily_limit]"
                                       id="withdraw_daily_limit"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_daily_limit'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_daily_limit'] : '0';?>
"/>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['withdraw'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fee'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_fee_percentage]"
                                       class="form-control input-sm"
                                       id="set_withdraw_fee_percentage_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_fee_percentage'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_fee_percentage'] : '0';?>
"/>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_fee_solid]"
                                       class="form-control input-sm"
                                       id="set_withdraw_fee_solid_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_fee_solid'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_fee_solid'] : '0';?>
"/>
                                <small class="text-muted">(% + <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</small>
                            </div>
                            <div class="form-group">
                                <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
/<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['fee'];?>
</label>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_min_fee]"
                                       class="form-control input-sm"
                                       id="set_withdraw_min_fee_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_min_fee'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_min_fee'] : '0';?>
"
                                       placeholder="Min"/>
                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
[withdraw_max_fee]"
                                       class="form-control input-sm"
                                       id="set_withdraw_max_fee_<?php echo $_smarty_tpl->tpl_vars['proc']->value['id'];?>
"
                                       value="<?php echo $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_max_fee'] ? $_smarty_tpl->tpl_vars['proc_settings']->value['withdraw_max_fee'] : '0';?>
"
                                       placeholder="Max"/>
                            </div>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
}
