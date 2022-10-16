<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:43:07
  from "/home/amper856/public_html/application/admin/template/pages/profile/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ef0bdbb3e5_69847940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63717b279a8a5bf48d15725990a06665938c79cb' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/profile/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53ef0bdbb3e5_69847940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4171539765e53ef0bdb8723_38033246', "page_content");
}
/* {block "page_content"} */
class Block_4171539765e53ef0bdb8723_38033246 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="manage_admin_profile" id="manage_admin_profile" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"manage_admin_profile"), 0, false);
?>

        <div class="form-group">
            <label for="username" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="text" class="form-control input-sm input-md-3" name="username"
                       id="username"
                       placeholder="john678" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
"
                       required/>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['email'];?>
 <span
                        class="required">*</span></label>
            <div class="col-md-9">
                <input type="email" class="form-control input-sm input-md-3" name="email" id="email"
                       placeholder="aaaaaaaa@zzz.yyy" required value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['email'];?>
"/>
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['password'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control input-sm input-auto inline-block"
                       name="password" required
                       id="password" disabled placeholder="**hidden**"/>
                <a href="javascript:void(0)" id="set_new_password"
                   onclick="set_new_pass('set_new_password','cancel_new_password','password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['set_new'];?>
</a>
                <a href="javascript:void(0)" class="hide" id="cancel_new_password"
                   onclick="cancel_new_pass('set_new_password','cancel_new_password','password')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['cancel'];?>
</a>
            </div>
        </div>
        <div class="form-group">
            <label for="allow_multiple_log_sess" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['allow_multiple_sess'];?>
</label>
            <div class="col-md-9">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="allow_multiple_log_sess"
                               id="allow_multiple_log_sess" value="true" <?php echo $_smarty_tpl->tpl_vars['admin']->value['allow_multiple_log_sess'] ? 'checked' : '';?>
>
                    </label>
                </div>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label class="control-label col-md-3 text-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['admin_current_password'];?>
</label>
            <div class="col-md-9">
                <input type="password" class="form-control input-sm input-md-3"
                       name="current_password"
                       id="current_password" required/>
            </div>
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
