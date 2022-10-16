<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:51
  from "/home/amper856/public_html/application/admin/template/pages/users/referrals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb3bb2a3d2_42729237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f06e20d86f9fa68a8ba9bb6cb29fe872c8ae461' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/referrals.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/manage.tpl' => 1,
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53eb3bb2a3d2_42729237 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7171341275e53eb3bafa798_40927877', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6153303845e53eb3bb1fbf5_88215634', "manage_user");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1416161195e53eb3bb28d19_75651544', "foo");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:users/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "head"} */
class Block_7171341275e53eb3bafa798_40927877 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Select2 -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block "head"} */
/* {block "manage_user"} */
class Block_6153303845e53eb3bb1fbf5_88215634 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['referrals'];?>
</h3>
    <form name="manage_referrals" id="manage_referrals" method="post"
          action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/referrals">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <input type="hidden" name="ref" value="1"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_referrals"), 0, false);
?>

        <div class="table-responsive">
            <table class="table table-striped-left">
                <tbody>
                <tr>
                    <td width="50%">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_referrals'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['total_refs']->value;?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['active_dep_referrals'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['total_act_refs']->value;?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['upline'];?>

                    </td>
                    <td>
                        <select name="upline" id="upline" class="form-control inline-block" style="width: 60%"></select>
                        <button type="submit" class="btn btn-success btn-sm inline-block"
                                style="line-height: 1.9"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set'];?>

                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </form>
    <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['direct_referrals'];?>
</h3>
    <?php if ($_smarty_tpl->tpl_vars['all_referrals']->value) {?>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
</th>
                    <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['total_deposits'];?>
</th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['all_referrals']->value, 'ref');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ref']->value) {
?>
                    <tr>
                        <td>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['ref']->value['u_id'];?>
/profile" data-toggle="tooltip"
                               title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['manage'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['user'];?>
"><?php echo $_smarty_tpl->tpl_vars['ref']->value['username'];?>
</a>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['ref']->value['email'];?>

                        </td>
                        <?php if ($_smarty_tpl->tpl_vars['ref']->value['dep_amount']) {?>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncdec'][0][0]->truncdec($_smarty_tpl->tpl_vars['ref']->value['dep_amount'],$_smarty_tpl->tpl_vars['curr_decp']->value);?>

                            </td>
                        <?php } else { ?>
                            <td>--</td>
                        <?php }?>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </tbody>
            </table>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning ">
            <i class="fa fa-exclamation-triangle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['msg']['no_ref_found'];?>

        </div>
    <?php }
}
}
/* {/block "manage_user"} */
/* {block "foo"} */
class Block_1416161195e53eb3bb28d19_75651544 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Select2 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $(document).ready(function () {
            
            <?php if ($_smarty_tpl->tpl_vars['upline_user']->value) {?>
            var newOption = new Option('<?php echo $_smarty_tpl->tpl_vars['upline_user']->value['username'];?>
', <?php echo $_smarty_tpl->tpl_vars['upline_user']->value['id'];?>
, true, true);
            $('#upline').append(newOption);
            <?php }?>
            
            $('#upline').select2({
                placeholder: "Select an upline",
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: dqs_admin_url + '/users/search',
                    dataType: 'json',
                    type: "GET",
                    quietMillis: 250,
                    data: function (term, page) {
                        return {
                            name: term.term
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: data
                        };
                    }
                }
            });
        });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
