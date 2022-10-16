<?php
/* Smarty version 3.1.30, created on 2020-04-02 16:56:41
  from "/home/hubmmsih/public_html/application/admin/template/pages/email_templates/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e861949735aa4_10839598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7275888a316cd9af5ad4dde35745f2752fd7558' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/email_templates/edit.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e861949735aa4_10839598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13057113425e8619496ead21_12371041', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9047815015e8619497272b7_13445112', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8633667525e861949733243_32030720', "foo");
}
/* {block "breadcrumb"} */
class Block_13057113425e8619496ead21_12371041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/email_templates"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['email_templates'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['edit'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "page_content"} */
class Block_9047815015e8619497272b7_13445112 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="edit_email_tmpl" id="edit_email_tmpl"
          method="post" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/email_templates/<?php echo $_smarty_tpl->tpl_vars['email_tmpl']->value['id'];?>
/edit">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <h5 class="title-1">
                <?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['email_template'];?>
 (#<?php echo $_smarty_tpl->tpl_vars['email_tmpl']->value['id'];?>
)
                <sub>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/email_templates">
                        <i class="fa fa-arrow-circle-left"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['back_email_templates'];?>

                    </a>
                </sub>
           </h5>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"edit_email_tmpl"), 0, false);
?>

        <div class="form-group">
            <label for="name" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['name'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control" required name="name"
                       id="name"
                       value="<?php echo $_smarty_tpl->tpl_vars['email_tmpl']->value['name'];?>
"/>
            </div>
        </div>
        <div class="form-group">
            <label for="subject" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['subject'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control" required name="subject"
                       id="subject"
                       value="<?php echo $_smarty_tpl->tpl_vars['email_tmpl']->value['subject'];?>
"/>
            </div>
        </div>
        <div class="form-group">
            <label for="html_content" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['message'];?>
</label>
            <div class="col-md-9">
                                <textarea name="html_content" required
                                          id="html_content" class="form-control"
                                          placeholder="......"><?php echo $_smarty_tpl->tpl_vars['email_tmpl']->value['html_content'];?>
</textarea>
            </div>
        </div>
        <hr>
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button> &nbsp;
            <button type="button" class="btn btn-success"
                    onclick="selected_action('edit_email_tmpl', 'test')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['test_mail'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_8633667525e861949733243_32030720 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- ckeditor js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            "use strict";
            CKEDITOR.replace('html_content', {
                height: '300px',
                fullPage: false,
                allowedContent: true,
                toolbarGroups: [
                    {name: 'document', groups: ['mode', 'document']},
                    {name: 'clipboard', groups: ['clipboard', 'undo']},
                    {name: 'basicstyles', groups: ['basicstyles']},
                    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'paragraph']},
                    '/',
                    {name: 'links', groups: ['links']},
                    { name: 'insert', groups: [ 'insert' ] },
                ]
            });
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
