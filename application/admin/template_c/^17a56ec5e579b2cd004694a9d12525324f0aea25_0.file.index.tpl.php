<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:25:09
  from "/home/amper856/public_html/application/admin/template/pages/exchange_system/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ead50e80e9_84808274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17a56ec5e579b2cd004694a9d12525324f0aea25' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/exchange_system/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53ead50e80e9_84808274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8256625085e53ead50e0028_09042656', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2724417045e53ead50e76d8_62000150', "foo");
}
/* {block "page_content"} */
class Block_8256625085e53ead50e0028_09042656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="exchange_system" id="exchange_system" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <input type="hidden" name="action" value="exchange"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"exchange_system"), 0, false);
?>

        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="exchange[ex_enabled]"
                               id="ex_enabled" value="true"
                               onchange="ex_rates_hide('ex_enabled', 'ex_rates')" <?php echo $_smarty_tpl->tpl_vars['settings']->value['exchange']['ex_enabled'] ? 'checked' : '';?>
>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['enable_ex_sys'];?>
</label>
                </div>
            </div>
        </div>
        <hr>
        <div id="ex_rates" <?php echo $_smarty_tpl->tpl_vars['settings']->value['exchange']['ex_enabled'] ? '' : 'class="hide"';?>
>
            <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['exchange_fees'];?>
</h3>
            <?php if (!empty($_smarty_tpl->tpl_vars['processors']->value) && sizeof($_smarty_tpl->tpl_vars['processors']->value) > 1) {?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'proc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['proc']->value) {
?>
                                    <th class="text-center">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminbase']->value;?>
/payment_gateways">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['proc']->value['icon'];?>
"
                                                 rel="tooltip" title="<?php echo $_smarty_tpl->tpl_vars['proc']->value['name'];?>
"/>
                                        </a>
                                    </th>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['src']->value) {
?>
                                <tr>
                                    <th class="text-center" width="1%">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/payment_gateways">
                                            <img
                                                    src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/img/processors/<?php echo $_smarty_tpl->tpl_vars['src']->value['icon'];?>
"
                                                    data-toggle="tooltip"
                                                    title="<?php echo $_smarty_tpl->tpl_vars['src']->value['name'];?>
"/>
                                        </a>
                                    </th>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['processors']->value, 'dest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['dest']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['src']->value['id'] != $_smarty_tpl->tpl_vars['dest']->value['id']) {?>
                                            <?php ob_start();
echo (($_smarty_tpl->tpl_vars['src']->value['nick']).('_')).($_smarty_tpl->tpl_vars['dest']->value['nick']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('exrate_solid', ((string)$_smarty_tpl->tpl_vars['settings']->value['exchange']["exrate_solid_".$_prefixVariable1]));
?>
                                            <?php ob_start();
echo (($_smarty_tpl->tpl_vars['src']->value['nick']).('_')).($_smarty_tpl->tpl_vars['dest']->value['nick']);
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('exrate_percentage', ((string)$_smarty_tpl->tpl_vars['settings']->value['exchange']["exrate_percentage_".$_prefixVariable2]));
?>
                                            <td>
                                                <div class="block">
                                                    <input style="width: 90%" type="text"
                                                           name="exchange[exrate_percentage_<?php echo $_smarty_tpl->tpl_vars['src']->value['nick'];?>
_<?php echo $_smarty_tpl->tpl_vars['dest']->value['nick'];?>
]"
                                                           class="form-control inline-block text-center"
                                                           id="exrate_percentage_<?php echo $_smarty_tpl->tpl_vars['src']->value['nick'];?>
_<?php echo $_smarty_tpl->tpl_vars['dest']->value['nick'];?>
"
                                                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['exrate_percentage']->value;
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['exrate_percentage']->value ? $_prefixVariable3 : '0';?>
"/>
                                                    <small class="text-muted inline-block">
                                                        %
                                                    </small>
                                                </div>
                                                <div class="block">
                                                    <input style="width: 90%" type="text"
                                                           name="exchange[exrate_solid_<?php echo $_smarty_tpl->tpl_vars['src']->value['nick'];?>
_<?php echo $_smarty_tpl->tpl_vars['dest']->value['nick'];?>
]"
                                                           class="form-control inline-block text-center"
                                                           id="exrate_solid_<?php echo $_smarty_tpl->tpl_vars['src']->value['nick'];?>
_<?php echo $_smarty_tpl->tpl_vars['dest']->value['nick'];?>
"
                                                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['exrate_solid']->value;
$_prefixVariable4=ob_get_clean();
echo $_smarty_tpl->tpl_vars['exrate_solid']->value ? $_prefixVariable4 : '0';?>
"/>
                                                    <small class="text-muted inline-block"><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
</small>
                                                </div>
                                            </td>
                                        <?php } else { ?>
                                            <td align="center">
                                                <span class="text-danger">N/A</span>
                                            </td>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </tbody>
                    </table>
                    <small class="help-block text-muted clearfix"><?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['disable_ex_set'];?>
</small>
                </div>
            <?php } else { ?>
                <div class="alert alert-warning">
                    <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['active_atleast_two_proc'];?>

                </div>
            <?php }?>
            <hr>
        </div>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_2724417045e53ead50e76d8_62000150 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        
        function ex_rates_hide(i, j) {
            if ($('#' + i + ':checked').val()) {
                $('#' + j).removeClass('hide');
            }
            else {
                $('#' + j).addClass('hide');
            }
        }
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
