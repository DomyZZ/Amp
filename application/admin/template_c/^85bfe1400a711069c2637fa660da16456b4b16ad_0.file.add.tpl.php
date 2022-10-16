<?php
/* Smarty version 3.1.30, created on 2020-03-25 08:28:41
  from "/home/hubmmsih/public_html/application/admin/template/pages/staffs/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7b1639664ad4_87758316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bfe1400a711069c2637fa660da16456b4b16ad' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/staffs/add.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e7b1639664ad4_87758316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2875058015e7b163962d2f4_92312937', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157746665e7b163965fc26_64012583', "page_content");
}
/* {block "breadcrumb"} */
class Block_2875058015e7b163962d2f4_92312937 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/staffs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['staffs'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['add'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_157746665e7b163965fc26_64012583 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="add_staff" id="add_staff" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"add_staff"), 0, false);
?>

        <div class="form-group">
            <label for="username" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="text" class="form-control input-sm input-md-4" name="username"
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
                <input type="email" class="form-control input-sm input-md-4" name="email" id="email"
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
                <input type="text" class="form-control input-sm input-md-4" name="password"
                       id="password" placeholder="**********"
                       required/>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['role'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <select class="form-control input-sm" name="type" id="type" required>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['type'];?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
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
