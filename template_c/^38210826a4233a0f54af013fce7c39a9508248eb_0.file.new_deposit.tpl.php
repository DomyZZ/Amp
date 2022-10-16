<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:28:33
  from "/home/amper856/public_html/template/new_deposit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eba1394843_25526490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38210826a4233a0f54af013fce7c39a9508248eb' => 
    array (
      0 => '/home/amper856/public_html/template/new_deposit.tpl',
      1 => 1578413624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e53eba1394843_25526490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style type="text/css">
    label {
        width: 100%;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['disable_deposits']) {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_disabled'];?>

            </div>
        <?php } else { ?>
            <form class="form" method="post">
                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_errors'][0][0]->form_errors(array('form'=>"new_deposit"),$_smarty_tpl);?>

                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_success'][0][0]->form_success(array('form'=>"new_deposit"),$_smarty_tpl);?>

                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

                <?php if (!$_smarty_tpl->tpl_vars['confirmation']->value) {?>
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['select_package'];?>
</label>
                        <div class="row">
                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['infobox_packages'][0][0]->infobox_packages(array('assign_var'=>"mod_packages"),$_smarty_tpl);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_packages']->value, 'package');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
?>
                                <div class="col-sm-4">
                                    <label for="package-<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
">

                                        <ul class="list-group package">
                                            <li class="list-group-item list-group-item-secondary text-center">

                                                <input class="float-right mt-1" type="radio" name="package"
                                                       onchange="check_compounding()"
                                                       required id="package-<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" <?php echo $_smarty_tpl->tpl_vars['package']->value['id'] == set_value('package') ? 'checked' : '';?>
/>

                                                <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>

                                            </li>
                                            <li class="list-group-item text-center">
                                                <h1 class="text-primary mb-0">
                                                    <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] == "fixed") {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['package']->value['plan_rate']['rate'];?>
<sup>%</sup>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['package']->value['plan_rate']['rate'];?>
<sup>%</sup>
                                                        -<?php echo $_smarty_tpl->tpl_vars['package']->value['plan_rate']['max_rate'];?>
<sup>%</sup>
                                                    <?php }?>

                                                </h1>
                                                <span><?php echo ucfirst($_smarty_tpl->tpl_vars['package']->value['formatted_earning_info']);?>
</span>
                                            </li>
                                            <li class="list-group-item plan px-3 text"
                                                style="font-size: 90%"><?php echo $_smarty_tpl->tpl_vars['lang']->value['amount_range'];?>
 <span
                                                        class="float-right pull-right"><?php echo $_smarty_tpl->tpl_vars['lang']->value['interest_rate'];?>
</span></li>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['plans'], 'plan');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->value) {
?>
                                                <li class="list-group-item "><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['plan']->value['min_amount'];?>

                                                    -
                                                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['max_amount']) {?>
                                                        <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['plan']->value['max_amount'];?>

                                                    <?php } else { ?>
                                                        &#8734;
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['plan']->value['bonus_value'] > 0) {?>
                                                        <sup style="font-size: 80%">
                                                            +<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['plan']->value['bonus_value'],"2");
echo $_smarty_tpl->tpl_vars['plan']->value['bonus_type'] == "percentage" ? "%" : ((string)$_smarty_tpl->tpl_vars['curr_symbol']->value);?>

                                                            bonus
                                                        </sup>
                                                    <?php }?>
                                                    <span class="float-right pull-right text-primary"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['plan']->value['rate']);?>
%</span>
                                                </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                            <li class="list-group-item">
                                                <?php if ($_smarty_tpl->tpl_vars['package']->value['rate_type'] != 'calendar') {?>
                                                    <a class="btn btn-primary btn-sm btn-block"
                                                       href="javascript:void(0)"
                                                       onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/calculator/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','Calculator','width=350,height=330,left='+(screen.width/2-350/2)+',top='+(screen.height/2-330/2))"><?php echo $_smarty_tpl->tpl_vars['lang']->value['calculate_profit'];?>
</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-primary btn-sm btn-block"
                                                       href="javascript:void(0)"
                                                       onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/past_rates/<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
','View Past Rates','width=350,height=490,left='+(screen.width/2-350/2)+',top='+(screen.height/2-490/2))"><?php echo $_smarty_tpl->tpl_vars['lang']->value['view_past_rates'];?>
</a>
                                                <?php }?>
                                            </li>

                                        </ul>

                                    </label>
                                </div>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>

                    </div>
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['amount'];?>
</label>
                        <input type="text" name="amount" class="form-control" value="<?php echo set_value('amount');?>
"
                               required/>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['package']->value['allow_compounding']) {?>
                            <div class="form-group package-compounding" id="package-compounding-<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
"
                                 style="display: none">
                                <?php if ($_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == "ranged") {?>
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['compounding'];?>
</label>
                                    <input type="text" name="compounding" class="form-control"
                                           value="<?php echo set_value('compounding');?>
"/>
                                    (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_min']);?>
% - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_max']);?>
%)
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == "solid") {?>
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['compounding'];?>
</label>
                                    <select name="compounding" class="form-control">
                                        <option value="">0%</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['comp_solid_vals'], 'solid_val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['solid_val']->value) {
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['solid_val']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['solid_val']->value;?>
%</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </select>
                                <?php }?>
                            </div>
                        <?php }?>

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['pay_from'];?>
</label> <br/>

                        <table class="table table-bordered">
                            <tbody>
                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['allow_dep_from_acc']) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'processor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['processor']->value) {
?>
                                    <?php if ($_smarty_tpl->tpl_vars['processor']->value['balance'] > 0) {?>
                                        <tr>
                                            <td width="1%">
                                                <input type="radio" required
                                                       name="processor" <?php echo set_value('processor') == "account-".((string)$_smarty_tpl->tpl_vars['processor']->value['id']) ? "checked" : '';?>


                                                       value="account-<?php echo $_smarty_tpl->tpl_vars['processor']->value['id'];?>
">

                                            </td>
                                            <td width="1%"><img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['processor']->value['icon'];?>
"/></td>
                                            <td>

                                                <?php echo $_smarty_tpl->tpl_vars['lang']->value['account_balance'];?>
 : <?php echo $_smarty_tpl->tpl_vars['processor']->value['name'];?>

                                                ( <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['processor']->value['balance']);?>
 )

                                            </td>
                                        </tr>
                                    <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php }?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'processor');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['processor']->value) {
?>
                                <tr>
                                    <td width="1%">
                                        <input type="radio"

                                               name="processor"
                                               required <?php echo set_value('processor') == $_smarty_tpl->tpl_vars['processor']->value['id'] ? "checked" : '';?>


                                               value="<?php echo $_smarty_tpl->tpl_vars['processor']->value['id'];?>
">

                                    </td>
                                    <td width="1%"><img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['processor']->value['icon'];?>
"/></td>
                                    <td>

                                        <?php echo $_smarty_tpl->tpl_vars['processor']->value['name'];?>


                                    </td>
                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </tbody>
                        </table>

                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
</button>
                    </div>
                <?php } else { ?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_deposit'];?>
</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_details'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['package'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['package_name'];?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['confirmation']->value['deposit_amount'];?>
</td>
                        </tr>
                        <?php if (!$_smarty_tpl->tpl_vars['confirmation']->value['pay_from_balance']) {?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['payment_amount'];?>
</td>
                                <td><b><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['payment_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['confirmation']->value['payment_currency'];?>
</b></td>
                            </tr>
                        <?php }?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['pay_from'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['proc_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['confirmation']->value['pay_from_balance'] ? strtolower($_smarty_tpl->tpl_vars['lang']->value['account_balance']) : '';?>
</td>
                        </tr>

                        </tbody>
                    </table>
                    <div class="form-group">
                        <input type="hidden" name="processor" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['proc_id'];?>
">
                        <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['deposit_amount'];?>
">
                        <input type="hidden" name="package" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['package_id'];?>
">
                        <input type="hidden" name="compounding" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['compounding'];?>
">
                        <input type="hidden" name="pay_from_balance" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['pay_from_balance'];?>
">
                        <input type="hidden" name="confirmation" value="true">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
</button>
                    </div>
                <?php }?>

            </form>
        <?php }?>

    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

    function check_compounding() {

        var package_obj = document.querySelector('input[name="package"]:checked');

        if (package_obj !== null) {
            var package_id = package_obj.value;

            var package_compoundings = document.querySelectorAll('.package-compounding'),
                i = 0,
                l = package_compoundings.length;

            if (package_compoundings !== null) {
                for (i; i < l; i++) {
                    package_compoundings[i].style.display = 'none';
                }

                var package_compounding = document.getElementById("package-compounding-" + package_id);

                if (package_compounding !== null) {
                    package_compounding.style.display = "block";
                }
            }


        }


    }

    function check_balances() {
        var proc_obj = document.querySelector('input[name="processor"]:checked');

        if (proc_obj !== null) {
            var proc_id = proc_obj.value;

            var processor_balances = document.querySelectorAll('.processor_balances'),
                i = 0,
                l = processor_balances.length;

            for (i; i < l; i++) {
                processor_balances[i].style.display = 'none';
            }

            var processor_balance = document.getElementById('balance-' + proc_id);
            if (typeof (processor_balance) !== 'undefined' && processor_balance !== null) {
                processor_balance.style.display = "block";
            }
        }
    }

    window.addEventListener("DOMContentLoaded", function () {
        check_compounding();
        check_balances();
    }, false);

<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
