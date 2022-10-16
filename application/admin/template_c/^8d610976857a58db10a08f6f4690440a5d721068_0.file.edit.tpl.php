<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:51:22
  from "/home/hubmmsih/public_html/application/admin/template/pages/staff_roles/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1b8aadba88_92399572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d610976857a58db10a08f6f4690440a5d721068' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/staff_roles/edit.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e7b1b8aadba88_92399572 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/hubmmsih/public_html/application/third_party/Smarty/plugins/modifier.replace.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2375369655e7b1b8aa65d71_78063975', "page_subtitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1633063535e7b1b8aa71d41_34936734', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9390986135e7b1b8aacecc0_17945657', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19975571565e7b1b8aad97d7_88653925', "foo");
}
/* {block "page_subtitle"} */
class Block_2375369655e7b1b8aa65d71_78063975 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<small><?php echo $_smarty_tpl->tpl_vars['staff_role']->value['type'];?>
</small><?php
}
}
/* {/block "page_subtitle"} */
/* {block "breadcrumb"} */
class Block_1633063535e7b1b8aa71d41_34936734 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staff_roles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['staff_roles'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['edit'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_9390986135e7b1b8aacecc0_17945657 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form name="edit_staff_role" id="edit_staff_role" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"edit_staff_role"), 0, false);
?>

        <a href="#" onclick="select_all_links()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['select_all'];?>
</a>
        |
        <a href="#" onclick="unselect_all_links()"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['unselect_all'];?>
</a>
        <?php $_smarty_tpl->_assignInScope('i', 0);
?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['access_lists']->value, 'lists', false, 'group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['lists']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
?>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>
                <div class="row" style="margin-bottom: 10px">
            <?php }?>
            <div class="col-md-3">
                <h3 class="title select_all" id="<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
" onclick="select_sub_links('<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
')" style="cursor: pointer"><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['group']->value,'_',' ');?>
</h3>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lists']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <?php $_smarty_tpl->_assignInScope('list', (($_smarty_tpl->tpl_vars['group']->value).("_")).($_smarty_tpl->tpl_vars['k']->value));
?>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="permissions[<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
]" class="roles roles_<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
"
                                       id="<?php echo $_smarty_tpl->tpl_vars['list']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['staff_role']->value['permissions'][$_smarty_tpl->tpl_vars['list']->value] ? 'checked=""' : '';?>

                                       value="true">
                                <?php echo ($_smarty_tpl->tpl_vars['group']->value).('_');
echo $_smarty_tpl->tpl_vars['v']->value[2];?>
</label>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <?php if ($_smarty_tpl->tpl_vars['i']->value == 4) {?>
                <?php $_smarty_tpl->_assignInScope('i', 0);
?>
                </div>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['i']->value > 0) {?>
            </div>
        <?php }?>
        <div class="clearfix"></div>
        <hr>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['staff_role']->value['id'];?>
"/>
        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_19975571565e7b1b8aad97d7_88653925 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        function select_all_links() {
            $(".roles").prop('checked', true);
        }
        function unselect_all_links() {
            $(".roles").prop('checked', false);
        }
        function select_sub_links(cl) {
            if($('#'+cl).hasClass('select_all')) {
                $('.roles_' + cl).prop('checked', true);
                $('#' + cl).removeClass('select_all').addClass('unselect_all');
            }
            else {
                $('.roles_' + cl).prop('checked', false);
                $('#' + cl).removeClass('unselect_all').addClass('select_all');
            }
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
