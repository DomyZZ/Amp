<?php
/* Smarty version 3.1.30, created on 2020-06-08 21:29:08
  from "/home/hubmmsih/public_html/template/withdraw.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5edeada4e1f320_16515838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8139b5e721b5183bebd26e9c9280b4ac430d873e' => 
    array (
      0 => '/home/hubmmsih/public_html/template/withdraw.tpl',
      1 => 1578413621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_errors.tpl' => 1,
    'file:form_success.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5edeada4e1f320_16515838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-10">

        <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['disable_withdrawals']) {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_disabled'];?>

            </div>
        <?php } elseif (!$_smarty_tpl->tpl_vars['funds']->value) {?>
            <div class="alert alert-danger">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_no_funds'];?>

            </div>
        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['pending_withdrawals']->value) {?>
                <div class="alert alert-warning">
                    You have pending withdrawals of <a
                            href="pending_withdrawals"><b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['pending_withdrawals']->value;?>
</b></a>
                </div>
            <?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/withdraw" method="post">
                <?php $_smarty_tpl->_subTemplateRender("file:form_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"withdraw"), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("file:form_success.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"withdraw"), 0, false);
?>

                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

                <?php if (!$_smarty_tpl->tpl_vars['confirmation']->value) {?>
                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['select_processor'];?>
</label>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th></th>
                                <th colspan="2">Processor</th>
                                <th>Balance</th>
                                <th>Receiving Account</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['funds']->value, 'fund');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fund']->value) {
?>
                                <tr>
                                    <td width="1%"><input type="radio" name="processor" required
                                                          value="<?php echo $_smarty_tpl->tpl_vars['fund']->value['proc_id'];?>
"
                                                <?php echo set_value('processor') && set_value('processor') == $_smarty_tpl->tpl_vars['fund']->value['proc_id'] ? "checked" : '';?>
 />
                                    </td>
                                    <td width="1%"><img src="images/processors/<?php echo $_smarty_tpl->tpl_vars['fund']->value['proc_icon'];?>
"/></td>
                                    <td width="20%"><?php echo $_smarty_tpl->tpl_vars['fund']->value['proc_name'];?>
 <br/>

                                    </td>
                                    <td>
                                        <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['fund']->value['balance']);?>
</b>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['fund']->value['account']) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['fund']->value['account'];?>

                                        <?php } else { ?>
                                            <a href="edit_profile/wallet_accounts"><em
                                                        class="text-danger">-- <?php echo $_smarty_tpl->tpl_vars['lang']->value['not_set'];?>

                                                    --</em></a>
                                        <?php }?>
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
                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['amount'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)</label>
                        <input type="text" name="amount" class="form-control" value="<?php echo set_value('amount');?>
"
                               required/>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['submit'];?>
</button>
                    </div>
                <?php } else { ?>
                    <h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['confirm_withdrawal'];?>
</h4>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th colspan="2"><?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_details'];?>
</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_amount'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['confirmation']->value['withdrawal_amount'];?>
</td>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['confirmation']->value['fees']) {?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['withdrawal_fees'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['confirmation']->value['fees'];?>
</td>
                            </tr>
                        <?php }?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['receiving_amount'];?>
</td>
                            <td><b><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['receiving_amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['confirmation']->value['currency'];?>
</b></td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['processor'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['proc_name'];?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['receiving_account'];?>
</td>
                            <td><b><?php echo $_smarty_tpl->tpl_vars['confirmation']->value['receiving_account'];?>
</b></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <input type="hidden" name="processor" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['proc_id'];?>
">
                        <input type="hidden" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['confirmation']->value['withdrawal_amount'];?>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
