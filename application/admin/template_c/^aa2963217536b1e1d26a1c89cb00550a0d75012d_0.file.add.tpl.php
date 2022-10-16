<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:25:56
  from "/home/amper856/public_html/application/admin/template/pages/users/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb045a28f2_04403213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa2963217536b1e1d26a1c89cb00550a0d75012d' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/add.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53eb045a28f2_04403213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11471013455e53eb04593f57_36413770', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14328711195e53eb045a0e82_28525330', "page_content");
}
/* {block "breadcrumb"} */
class Block_11471013455e53eb04593f57_36413770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['users'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['add'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_14328711195e53eb045a0e82_28525330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="add_user" id="add_user" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"add_user"), 0, false);
?>

        <div class="form-group">
            <label for="username" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="username"
                       id="username" placeholder="john678" value="<?php echo set_value("username");?>
"
                       required/>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="email" class="form-control" name="email" id="email"
                       value="<?php echo set_value("email");?>
"
                       placeholder="aaaaaaaa@zzz.yyy" required/>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['password'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="password"
                       id="password" placeholder="**********"
                       required/>
            </div>
        </div>
        <hr>
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['save'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
}
