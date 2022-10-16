<?php
/* Smarty version 3.1.30, created on 2020-04-02 15:23:29
  from "/home/hubmmsih/public_html/application/admin/template/pages/packages/calculator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e860371006525_77211164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ea566ffa74eb9f20a794f40073578c0b33848d6' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/packages/calculator.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e860371006525_77211164 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row" id="calculator">
    <div class="col-md-6">
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['earning_calculator'];?>
</h3>
        <table class="table table-bordered table-striped-left">
            <tbody>
                
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['amount'];?>
</td>
                    <td>
                        <div class="input-group">
                            <div class="input-group-addon input-sm"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
</div>
                            <input type="text" name="calc_amount" id="calc_amount" onkeyup="calculate()"
                                   class="form-control input-sm">
                        </div>
                    </td>
                </tr>
                <tr id="c_compound" class="hide">
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['compound'];?>
</td>
                    <td>
                        <div class="input-group">
                            <input type="text" name="calc_compound" id="calc_compound" onkeyup="calculate()"
                                   class="form-control input-sm" value="0">
                            <div class="input-group-addon input-sm">%</div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['principal'];?>
</td>
                    <td id="calc_principal" class="text-danger">
                        --
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['earning_count'];?>
</td>
                    <td id="calc_period" class="text-danger">
                        --
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['rate'];?>
</td>
                    <td id="calc_rate" class="text-danger">
                        --
                    </td>
                </tr>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['return'];?>
</td>
                    <td id="calc_earnings" class="text-danger">
                        --
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" style="background: none">
                        <button type="button" class="btn btn-xs btn-success"
                                onclick="calculate()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['calculate'];?>
</button>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div><?php }
}
