<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:23:28
  from "/home/hubmmsih/public_html/application/admin/template/pages/packages/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e860370ad6ad0_99637453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a684abc6aa523ce9d65abf594509676bc4cb7c22' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/packages/edit.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
    'file:packages/calculator.tpl' => 1,
  ),
),false)) {
function content_5e860370ad6ad0_99637453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20529794925e8603706b76f1_65282566', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21294467565e860370a81932_47707384', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3851679445e860370ac8909_84662975', "foo");
}
/* {block "breadcrumb"} */
class Block_20529794925e8603706b76f1_65282566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/packages"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['packages'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['edit'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_21294467565e860370a81932_47707384 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="edit_package" id="edit_package" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"edit_package"), 0, false);
?>

        <div class="form-group">
            <label for="status_active" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['status'];?>
</label>
            <div class="col-md-9">
                <div class="radio-inline">
                    <input type="radio" value="active" name="status" id="status_active"
                           required <?php echo $_smarty_tpl->tpl_vars['package']->value['status'] == 'active' ? 'checked' : '';?>
>
                    <label for="status_active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active'];?>
</label>
                </div>
                <div class="radio-inline">
                    <input type="radio" value="inactive" name="status" id="status_inactive"
                           required <?php echo $_smarty_tpl->tpl_vars['package']->value['status'] == 'inactive' ? 'checked' : '';?>
>
                    <label for="status_inactive"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['inactive'];?>
</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="closed"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['closed'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="closed"
                               id="closed"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['closed'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['package_name'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control input-md-4" name="name"
                       id="name" value="<?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
"
                       required/>
            </div>
        </div>
        <div class="form-group">
            <label for="package_duration"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['package_expiration'];?>
</label>
            <div class="col-md-9">
                <div class="form-inline">
                    <input type="text" style="width: 70px"
                           class="form-control inline-block text-right"
                           name="package_duration" onkeyup="calculate()"
                           id="package_duration" <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? 'disabled' : '';?>

                           value="<?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? '365' : $_smarty_tpl->tpl_vars['package']->value['package_duration'];?>
"
                           required/>
                    <select class="form-control input-auto inline-block" name="package_duration_unit"
                            id="package_duration_unit" <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? 'disabled' : '';?>
>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['duration_units']->value, 'd_unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d_unit']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['d_unit']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration_unit'] == $_smarty_tpl->tpl_vars['d_unit']->value ? 'selected="selected"' : '';?>
>
                                <?php echo ucfirst($_smarty_tpl->tpl_vars['d_unit']->value);?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select> &nbsp;&nbsp;
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" name="forever"
                                   id="forever"
                                   value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? 'checked="checked"' : '';?>
>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['no_expiry'];?>

                        </label>
                    </div>
                    <div class="checkbox-inline">
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['or'];?>
</label>
                    </div>
                    <div class="checkbox-inline">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_rate'];?>
:
                        <input type="text" style="width: 80px"
                               class="form-control inline-block text-right"
                               name="total_rate_limit"
                               id="total_rate_limit" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['total_rate_limit']);?>
"
                               required/> %
                    </div>
                </div>
            </div>
        </div>
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['earning_settings'];?>
</h3>
        <div class="form-group">
            <label for="earning_interval"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['pay_earnings'];?>
</label>
            <div class="col-md-9">
                <div class="form-inline">
                    <span><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['every'];?>
</span>
                    <input type="text" style="width: 70px"
                           class="form-control inline-block text-right"
                           name="earning_interval" onkeyup="calculate()"
                           id="earning_interval"
                           value="<?php echo $_smarty_tpl->tpl_vars['package']->value['earning_interval'] == 'maturity' ? '1' : $_smarty_tpl->tpl_vars['package']->value['earning_interval'];?>
"
                           required/>
                    <span class="<?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? 'display-none' : '';?>
"
                          id="interval_unit_addon"></span>
                    <select class="form-control input-auto inline-block <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' ? '' : 'hide';?>
"
                            name="earning_interval_unit"
                            id="earning_interval_unit">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['duration_units']->value, 'd_unit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d_unit']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['d_unit']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_interval_unit'] == $_smarty_tpl->tpl_vars['d_unit']->value ? 'selected="selected"' : '';?>
>
                                <?php echo ucfirst($_smarty_tpl->tpl_vars['d_unit']->value);?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select> &nbsp;&nbsp;
                    <div class="checkbox-inline" id="checkbox_at_maturity">
                        <label>
                            <input type="checkbox" name="maturity" id="maturity"
                                   value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['package_duration'] != 'forever' && $_smarty_tpl->tpl_vars['package']->value['earning_interval'] == 'maturity' ? 'checked="checked"' : '';?>
>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['at_maturity'];?>

                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group <?php echo ($_smarty_tpl->tpl_vars['package']->value['earning_interval'] != 'maturity' && $_smarty_tpl->tpl_vars['package']->value['earning_interval_unit'] != 'days') || ($_smarty_tpl->tpl_vars['package']->value['package_duration'] == 'forever' && $_smarty_tpl->tpl_vars['package']->value['earning_interval_unit'] != 'days') ? 'display-none' : '';?>
"
             id="earning_days">
            <label class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earning_days'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[sun]"
                           id="earning_day_sun" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['sun'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_sun"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['sunday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[mon]"
                           id="earning_day_mon" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['mon'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_mon"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['monday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[tue]"
                           id="earning_day_tue" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['tue'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_tue"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['tuesday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[wed]"
                           id="earning_day_wed" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['wed'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_wed"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['wednesday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[thu]"
                           id="earning_day_thu" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['thu'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_thu"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['thursday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[fri]"
                           id="earning_day_fri" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['fri'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_fri"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['friday'];?>
</label>
                </div>
                <div class="checkbox-inline">
                    <input type="checkbox" name="earning_days[sat]"
                           id="earning_day_sat" <?php echo $_smarty_tpl->tpl_vars['package']->value['earning_days']['sat'] ? 'checked="checked"' : '';?>

                           value="true">
                    <label for="earning_day_sat"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['saturday'];?>
</label>
                </div>
            </div>
        </div>
        
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['earning_rates'];?>
</h3>
        <div class="form-group">
            <label class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['rate_type'];?>
</label>
            <div class="col-md-9">
                <select class="form-control input-auto" disabled>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['package']->value['rate_type'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label'][($_smarty_tpl->tpl_vars['package']->value['rate_type']).('_rate')];?>
</option>
                </select>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="table-responsive" style="margin-top: 10px">
            <table id="table-plan" class="table table-bordered table-plan table-plan-1">
                <thead>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] != 'calendar') {?>
                            <th></th>
                        <?php }?>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_amount'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max_amount'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)
                            <small class="block"><em><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_unlimited'];?>
</em></small>
                        </th>
                        <th>
                            <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['rate'];?>

                        </th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['bonus'];?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_smarty_tpl->_assignInScope('new_plans', ((string)($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'calendar' ? 0 : 3)));
?>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value+$_smarty_tpl->tpl_vars['new_plans']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value+$_smarty_tpl->tpl_vars['new_plans']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <tr style="background-color: #f9f9f9;">
                            <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'calendar') {?>
                                <input type="hidden" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][row]" value="true">
                                <input type="hidden" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][id]"
                                       value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plans']->value[$_prefixVariable1]['id'];?>
">
                            <?php } else { ?>
                                <td width="2%" class="text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['i']->value > 0) {?>
                                        <input type="checkbox" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][row]"
                                               id="plans_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                               onchange="enable_plan(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
)" <?php echo $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? 'checked="checked"' : '';?>

                                               value="true">
                                    <?php } else { ?>
                                        <input type="hidden" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][row]" value="true">
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value) {?>
                                        <input type="hidden" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][id]"
                                               value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable2=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plans']->value[$_prefixVariable2]['id'];?>
">
                                    <?php }?>
                                </td>
                            <?php }?>
                            <td>
                                <input type="text"
                                       class="form-control input-sm" <?php echo $_smarty_tpl->tpl_vars['i']->value == 0 || $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? '' : 'disabled="disabled"';?>

                                       required
                                       name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][min_amount]" id="min_amount_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['min_amount']);?>
"/>
                            </td>
                            <td>
                                <input type="text"
                                       class="form-control input-sm" <?php echo $_smarty_tpl->tpl_vars['i']->value == 0 || $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? '' : 'disabled="disabled"';?>

                                       name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][max_amount]" id="max_amount_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['max_amount']);?>
"/>
                            </td>
                            <td class="text-center">
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control input-sm text-right" <?php echo $_smarty_tpl->tpl_vars['i']->value == 0 || $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? '' : 'disabled="disabled"';?>

                                           name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][rate]" id="rate_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                           required <?php echo $_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'calendar' ? 'placeholder="Min rate"' : '';?>

                                           value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['rate']);?>
"/>
                                    <span class="input-group-addon">%</span>
                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'calendar' && $_smarty_tpl->tpl_vars['i']->value == 0) {?>
                                        <input type="text"
                                               class="form-control input-sm text-right"
                                               name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][max_rate]" id="max_rate_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" required
                                               value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['max_rate']);?>
" placeholder="Max Rate"/>
                                        <span class="input-group-addon">%</span>
                                    <?php }?>
                                </div>
                            </td>
                            <td>
                                <div class="input-group">
                                    <input type="text"
                                           class="form-control input-sm text-right" <?php echo $_smarty_tpl->tpl_vars['i']->value == 0 || $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? '' : 'disabled="disabled"';?>

                                           name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][bonus_value]" id="bonus_value_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                           value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['bonus_value']);?>
"/>
                                    <span class="input-group-btn">
                                                      <select class="form-control input-sm input-auto" <?php echo $_smarty_tpl->tpl_vars['i']->value == 0 || $_smarty_tpl->tpl_vars['i']->value < $_smarty_tpl->tpl_vars['total_plans']->value ? '' : 'disabled="disabled"';?>

                                                              name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][bonus_type]" id="bonus_type_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                              style="width: auto">
                                                          <option value="solid" <?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['bonus_type'] == 'solid' ? 'selected="selected"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
</option>
                                                          <option value="percentage" <?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['bonus_type'] == 'percentage' ? 'selected="selected"' : '';?>
>%</option>
                                                      </select>
                                                </span>
                                </div>
                                <div class="checkbox-inline">
                                    <label><input type="checkbox" name="plans[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][bonus_dest]"
                                                  id="bonus_dest_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                  value="true" <?php echo $_smarty_tpl->tpl_vars['plans']->value[$_smarty_tpl->tpl_vars['i']->value]['bonus_dest'] == 1 ? 'checked="checked"' : '';?>
> <small><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['add_bonus_balance'];?>
</small></label>
                                </div>
                            </td>
                        </tr>
                    <?php }
}
?>

                    <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'calendar') {?>
                        <tr id="calendar_rates">
                            <td colspan="5">
                                <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['calendar_rates'];?>
</h3>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs dq-nav">
                                    <li>
                                        <a href="#cal_rates_last_15" data-toggle="tab" role="tab">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat((time()-(60*60*24*14)),'d-M-Y');?>

                                            to <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat((time()-(60*60*24*1)),'d-M-Y');?>

                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#cal_rates_cur_15" data-toggle="tab" role="tab">
                                            Today to <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat((time()+(60*60*24*14)),'d-M-Y');?>

                                        </a>
                                    </li>
                                    <li>
                                        <a href="#cal_rates_next_15" data-toggle="tab" role="tab">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat((time()+(60*60*24*15)),'d-M-Y');?>

                                            to <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat((time()+(60*60*24*30)),'d-M-Y');?>

                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panels -->
                                <div class="tab-content">
                                    <div class="tab-pane fade"
                                         id="cal_rates_last_15">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['j']->value = 14;
if ($_smarty_tpl->tpl_vars['j']->value > 0) {
for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value > 0; $_smarty_tpl->tpl_vars['j']->value--) {
?>
                                                        <?php $_smarty_tpl->_assignInScope('cal_date', strtotime(date('d-M-Y',strtotime((('-').($_smarty_tpl->tpl_vars['j']->value)).(' day')))));
?>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates" <?php echo set_value("rate_type") != 'calendar' ? 'disabled' : '';?>

                                                                   id="calendar_rates_date_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   readonly
                                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['cal_date']->value,'d-M-Y');?>
">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates"
                                                                   tabindex="<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   name="calendar_rates[<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
]"
                                                                   id="calendar_rates_rate_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   onkeyup="check_var_rates(<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
)"
                                                                   value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cal_date']->value;
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plans']->value[0]['calendar_rates'][$_prefixVariable3];?>
">
                                                            <span id="cal_rate_error_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                  class="text-danger hide"></span>
                                                        </div>
                                                    <?php }
}
?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade in active"
                                         id="cal_rates_cur_15">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['j']->value = 0;
if ($_smarty_tpl->tpl_vars['j']->value < 15) {
for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value < 15; $_smarty_tpl->tpl_vars['j']->value++) {
?>
                                                        <?php $_smarty_tpl->_assignInScope('cal_date', strtotime(date('d-M-Y',strtotime((('+').($_smarty_tpl->tpl_vars['j']->value)).(' day')))));
?>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates" <?php echo set_value("rate_type") != 'calendar' ? 'disabled' : '';?>

                                                                   id="calendar_rates_date_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   readonly
                                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['cal_date']->value,'d-M-Y');?>
">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates"
                                                                   tabindex="<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   name="calendar_rates[<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
]"
                                                                   id="calendar_rates_rate_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   onkeyup="check_var_rates(<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
)"
                                                                   value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cal_date']->value;
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plans']->value[0]['calendar_rates'][$_prefixVariable4];?>
">
                                                            <span id="cal_rate_error_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                  class="text-danger hide"></span>
                                                        </div>
                                                    <?php }
}
?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade"
                                         id="cal_rates_next_15">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['j']->value = 15;
if ($_smarty_tpl->tpl_vars['j']->value < 30) {
for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value < 30; $_smarty_tpl->tpl_vars['j']->value++) {
?>
                                                        <?php $_smarty_tpl->_assignInScope('cal_date', strtotime(date('d-M-Y',strtotime((('+').($_smarty_tpl->tpl_vars['j']->value)).(' day')))));
?>
                                                        <div class="form-group">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates" <?php echo set_value("rate_type") != 'calendar' ? 'disabled' : '';?>

                                                                   id="calendar_rates_date_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   readonly
                                                                   value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['dtformat'][0][0]->dtformat($_smarty_tpl->tpl_vars['cal_date']->value,'d-M-Y');?>
">
                                                            <input type="text"
                                                                   class="form-control input-sm input-auto inline-block calendar-rates"
                                                                   tabindex="<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   name="calendar_rates[<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
]"
                                                                   id="calendar_rates_rate_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                   onkeyup="check_var_rates(<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
)"
                                                                   value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['cal_date']->value;
$_prefixVariable5=ob_get_clean();
echo $_smarty_tpl->tpl_vars['plans']->value[0]['calendar_rates'][$_prefixVariable5];?>
">
                                                            <span id="cal_rate_error_<?php echo $_smarty_tpl->tpl_vars['cal_date']->value;?>
"
                                                                  class="text-danger hide"></span>
                                                        </div>
                                                    <?php }
}
?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="form-group">
            <label for="return_principal"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['return_principal'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="return_principal"
                               id="return_principal"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['return_principal'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['compounding'];?>
</h3>
        <div class="form-group">
            <label for="allow_compounding" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_compounding'];?>

            </label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="allow_compounding"
                               id="allow_compounding"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="comp_min_dep" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount_limits'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
 & <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
)
            </label>
            <div class="col-md-9">
                <input type="text"
                       class="form-control inline-block input-auto" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                       name="comp_min_dep" id="comp_min_dep" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_min_dep']);?>
"
                       placeholder="Min"/>
                <input type="text"
                       class="form-control inline-block input-auto" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                       name="comp_max_dep" id="comp_max_dep" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_max_dep']);?>
"
                       placeholder="Max"/> <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>

            </div>
        </div>
        <div class="form-group">
            <label for="comp_val_type" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['type'];?>
</label>
            <div class="col-md-9">
                <select class="form-control input-auto inline-block"
                        name="comp_val_type" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                        id="comp_val_type" onchange="change_c_type_values()">
                    <option value="ranged" <?php echo $_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == 'ranged' ? 'selected="selected"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ranged'];?>
</option>
                    <option value="solid" <?php echo $_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == 'solid' ? 'selected="selected"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['solid'];?>
</option>
                </select>
            </div>
        </div>
        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == 'ranged' ? '' : 'hide';?>
" id="c_ranged_vals">
            <label for="comp_ranged_val_min" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ranged_values'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min'];?>
 & <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max'];?>
)
            </label>
            <div class="col-md-9">
                <input type="text"
                       class="form-control inline-block input-auto" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                       name="comp_ranged_val_min" id="comp_ranged_val_min"
                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_min']);?>
" placeholder="Min"/>
                <input type="text"
                       class="form-control inline-block input-auto" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                       name="comp_ranged_val_max" id="comp_ranged_val_max"
                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_max']);?>
"
                       placeholder="Max"/> %
            </div>
        </div>
        <div class="form-group <?php echo $_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == 'solid' ? '' : 'hide';?>
" id="c_solid_vals">
            <label for="comp_solid_vals" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['solid_values'];?>

            </label>
            <div class="col-md-9">
                <input type="text"
                       class="form-control inline-block input-auto" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_compounding'] ? 'disabled="disabled"' : '';?>

                       name="comp_solid_vals" id="comp_solid_vals" size="30"
                       value="<?php echo $_smarty_tpl->tpl_vars['package']->value['comp_solid_vals'];?>
" placeholder="10,20,30....."/> <span
                        class="">%</span>
                <em class="help-block text-muted inline-block">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['seperated_commas'];?>
)</em>
            </div>
        </div>
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['principal_withdrawal'];?>
</h3>
        <div class="form-group">
            <label for="allow_p_withdrawal" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_p_withdrawal'];?>

            </label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="allow_p_withdrawal"
                               id="allow_p_withdrawal"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_p_withdrawal'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="p_withdraw_fee" class="control-label col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['p_withdrawal_fee'];?>

            </label>
            <div class="col-md-9">
                <input type="text" class="form-control inline-block input-auto text-right"
                        <?php echo !$_smarty_tpl->tpl_vars['package']->value['allow_p_withdrawal'] ? 'disabled="disabled"' : '';?>

                       name="p_withdraw_fee" id="p_withdraw_fee"
                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['p_withdraw_fee']);?>
"/> %
            </div>
        </div>
        <div id="p_wdr_ext_set">
            <div class="form-group">
                <label for="p_withdraw_min_days" class="control-label col-md-3">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['p_min_wdr_days'];?>

                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control inline-block input-auto text-right"
                            <?php echo !$_smarty_tpl->tpl_vars['package']->value['allow_p_withdrawal'] ? 'disabled="disabled"' : '';?>

                           name="p_withdraw_min_days" id="p_withdraw_min_days"
                           value="<?php echo $_smarty_tpl->tpl_vars['package']->value['p_withdraw_min_days'];?>
"/> <?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value['label']['days']);?>

                </div>
            </div>
            <div class="form-group">
                <label for="p_withdraw_max_days" class="control-label col-md-3">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['p_max_wdr_days'];?>

                </label>
                <div class="col-md-9">
                    <input type="text" class="form-control inline-block input-auto text-right"
                            <?php echo !$_smarty_tpl->tpl_vars['package']->value['allow_p_withdrawal'] ? 'disabled="disabled"' : '';?>

                           name="p_withdraw_max_days" id="p_withdraw_max_days"
                           value="<?php echo $_smarty_tpl->tpl_vars['package']->value['p_withdraw_max_days'];?>
"/> <?php echo strtolower($_smarty_tpl->tpl_vars['lang']->value['label']['days']);?>

                </div>
            </div>
        </div>
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['miscellaneous'];?>
</h3>
        <div class="form-group">
            <label for="allow_dep_package"
                   class="control-label control-md-label-1 col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_dep_after_package'];?>
</label>
            <div class="col-md-9">
                <select name="allow_dep_package" id="allow_dep_package" class="form-control input-auto">
                    <option value="0" <?php echo $_smarty_tpl->tpl_vars['package']->value['allow_dep_package'] == '0' ? 'selected="selected"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['no_restriction'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" <?php ob_start();
echo $_smarty_tpl->tpl_vars['value']->value['id'];
$_prefixVariable6=ob_get_clean();
echo $_smarty_tpl->tpl_vars['package']->value['allow_dep_package'] == $_prefixVariable6 ? 'selected="selected"' : '';?>
><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="disable_autowithdraw"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['disable_auto_wdr_package'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="disable_autowithdraw"
                               id="disable_autowithdraw"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['disable_autowithdraw'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="disable_autowithdraw"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['apply_bonus_from_balance'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="apply_bonus_from_balance"
                               id="apply_bonus_from_balance"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['package']->value['apply_bonus_from_balance'] ? 'checked="checked"' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="disable_autowith_ifdep_more_than"
                   class="control-label control-md-label-1 col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['disable_auto_wdr_dep_more'];?>
 <span class="text-muted">(<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</span>
            </label>
            <div class="col-md-9">
                <input type="text" class="form-control input-md-3 inline-block"
                       name="disable_autowith_ifdep_more_than" id="disable_autowith_ifdep_more_than"
                       value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['disable_autowith_ifdep_more_than']);?>
"/>
                <em class="help-block text-muted inline-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_norestriction'];?>
</em>
            </div>
        </div>
        <div class="form-group">
            <label for="max_dep_count" class="control-label control-md-label-1 col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max_dep_allow_package'];?>

            </label>
            <div class="col-md-9">
                <input type="text" class="form-control input-md-2 inline-block"
                       name="max_dep_count" id="max_dep_count"
                       value="<?php echo $_smarty_tpl->tpl_vars['package']->value['max_dep_count'];?>
"/>
                <em class="help-block text-muted inline-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_unlimited_dep'];?>
</em>
            </div>
        </div>
        <div class="form-group">
            <label for="max_act_dep_count" class="control-label control-md-label-1 col-md-3">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['max_act_dep_allow_user'];?>

            </label>
            <div class="col-md-9">
                <input type="text" class="form-control input-md-2 inline-block"
                       name="max_act_dep_count" id="max_act_dep_count"
                       value="<?php echo $_smarty_tpl->tpl_vars['package']->value['max_act_dep_count'];?>
"/>
                <em class="help-block text-muted inline-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['set_zero_unlimited_act_dep'];?>
</em>
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
    <div class="clearfix"></div>
    <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == 'fixed') {?>
        <?php $_smarty_tpl->_subTemplateRender("file:packages/calculator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_3851679445e860370ac8909_84662975 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Moment js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/moment/jquery.moment.js"
            type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/moment/moment-range.min.js"
            type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        jQuery(function ($) {
            "use strict"; // Start of use strict

            $("#calc_date").datepicker({format: 'dd-mm-yyyy'});

            $("input[name^='earning_days[']").change(function () {
                calculate();
            });

            $('#package_duration_unit').change(function () {
                $('#interval_unit_addon').text($(this).val().ucfirst());
                if ($(this).val() === 'days' && !$('#maturity:checked').val()) {
                    $('#earning_days').show();
                } else {
                    $('#earning_days').hide();
                }

                hide_p_wdr_ext($(this).val());

                calculate();
            });

            $('#earning_interval_unit').change(function () {
                if ($(this).val() === 'days') {
                    $('#earning_days').show();
                } else {
                    $('#earning_days').hide();
                }

                hide_p_wdr_ext($(this).val());

                calculate();
            });

            $('#maturity').change(function () {
                if ($('#maturity:checked').val()) {
                    $('#earning_interval').attr({'disabled': 'true'});
                    $('#earning_days').hide();
                } else {
                    $('#earning_interval').removeAttr('disabled');
                    if ($('#package_duration_unit').val() == 'days') {
                        $('#earning_days').show();
                    }
                }
                calculate();
            });

            $('#forever').change(function () {
                if ($('#forever:checked').val()) {
                    $('#package_duration').attr({'disabled': 'true'});
                    $('#package_duration_unit').attr({'disabled': 'true'});
                    $('#return_principal').removeAttr('checked').attr({'disabled': 'true'});
                    $('#interval_unit_addon').hide();
                    $('#checkbox_at_maturity').hide();
                    $('#earning_interval_unit').removeClass('hide').trigger('change');
                    $('#maturity').removeAttr('checked').trigger('change');
                    if ($('#earning_interval_unit').val() == 'days') {
                        $('#earning_days').show();
                    } else {
                        $('#earning_days').hide();
                    }
                } else {
                    $('#package_duration').removeAttr('disabled');
                    $('#package_duration_unit').removeAttr('disabled').trigger('change');
                    $('#return_principal').removeAttr('disabled');
                    $('#interval_unit_addon').show();
                    $('#checkbox_at_maturity').show();
                    $('#earning_interval_unit').addClass('hide');
                    $('#maturity').trigger('change');
                    if ($('#package_duration_unit').val() == 'days') {
                        $('#earning_days').show();
                    } else {
                        $('#earning_days').hide();
                    }
                }
                calculate();
            });

            $('#return_principal').change(function() {
                calculate();
            });

            $('#allow_compounding').change(function () {
                if ($('#allow_compounding:checked').val()) {
                    $('#comp_min_dep').removeAttr('disabled');
                    $('#comp_max_dep').removeAttr('disabled');
                    $('#comp_val_type').removeAttr('disabled');
                    $('#comp_ranged_val_min').removeAttr('disabled');
                    $('#comp_ranged_val_max').removeAttr('disabled');
                    $('#comp_solid_vals').removeAttr('disabled');
                    $('#c_compound').removeClass('hide');
                } else {
                    $('#comp_min_dep').attr({'disabled': 'true'});
                    $('#comp_max_dep').attr({'disabled': 'true'});
                    $('#comp_val_type').attr({'disabled': 'true'});
                    $('#comp_ranged_val_min').attr({'disabled': 'true'});
                    $('#comp_ranged_val_max').attr({'disabled': 'true'});
                    $('#comp_solid_vals').attr({'disabled': 'true'});
                    $('#c_compound').addClass('hide');
                }
                calculate();
            });

            $('#allow_p_withdrawal').change(function () {
                if ($('#allow_p_withdrawal:checked').val()) {
                    $('#p_withdraw_fee').removeAttr('disabled');
                    $('#p_withdraw_min_days').removeAttr('disabled');
                    $('#p_withdraw_max_days').removeAttr('disabled');
                } else {
                    $('#p_withdraw_fee').attr({'disabled': 'true'});
                    $('#p_withdraw_min_days').attr({'disabled': 'true'});
                    $('#p_withdraw_max_days').attr({'disabled': 'true'});
                }
                calculate();
            });

            $('#forever').trigger('change');
            $('#allow_compounding').trigger('change');
            $('#allow_p_withdrawal').trigger('change');
        });

        function enable_plan(plan_id) {
            if ($('#plans_' + plan_id + ':checked').val()) {
                $('#min_amount_' + plan_id).removeAttr('disabled');
                $('#max_amount_' + plan_id).removeAttr('disabled');
                $('#bonus_value_' + plan_id).removeAttr('disabled');
                $('#bonus_type_' + plan_id).removeAttr('disabled');
                $('#bonus_dest_' + plan_id).removeAttr('disabled');
                $('#rate_' + plan_id).removeAttr('disabled');
            } else {
                $('#min_amount_' + plan_id).attr({'disabled': 'true'});
                $('#max_amount_' + plan_id).attr({'disabled': 'true'});
                $('#bonus_value_' + plan_id).attr({'disabled': 'true'});
                $('#bonus_type_' + plan_id).attr({'disabled': 'true'});
                $('#bonus_dest_' + plan_id).attr({'disabled': 'true'});
                $('#rate_' + plan_id).attr({'disabled': 'true'});
            }
        }

        function check_var_rates(date) {
            if (!$('#calendar_rates_rate_' + date).val() || (parseFloat($('#calendar_rates_rate_' + date).val()) >= parseFloat($('#rate_0').val()) && parseFloat($('#calendar_rates_rate_' + date).val()) <= parseFloat($('#max_rate_0').val()))) {
                $('#cal_rate_error_' + date).addClass('hide');
            } else {
                $('#cal_rate_error_' + date).text('Rate must be within ' + $('#rate_0').val() + ' and ' + $('#max_rate_0').val());
                $('#cal_rate_error_' + date).removeClass('hide');
            }
        }

        function change_c_type_values() {
            if ($('#comp_val_type').val() === 'solid') {
                $('#c_solid_vals').removeClass('hide');
                $('#c_ranged_vals').addClass('hide');
            } else {
                $('#c_solid_vals').addClass('hide');
                $('#c_ranged_vals').removeClass('hide');
            }
        }

        function hide_p_wdr_ext(val) {
            if (val === 'hours' || val === 'minutes') {
                $('#p_wdr_ext_set').hide();
            } else {
                $('#p_wdr_ext_set').show();
            }
        }

        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
