<?php
/* Smarty version 3.1.30, created on 2020-02-02 16:05:16
  from "/home/amper856/public_html/amperium_test_site/template/contact.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e36f33c34c488_23933034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f34fd58024095ccf7dc67b233580c55d982288e' => 
    array (
      0 => '/home/amper856/public_html/amperium_test_site/template/contact.tpl',
      1 => 1578413619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:form_errors.tpl' => 1,
    'file:form_success.tpl' => 1,
    'file:captcha.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5e36f33c34c488_23933034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-6">
        <form class="form" method="post">

            <?php $_smarty_tpl->_subTemplateRender("file:form_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"contact"), 0, false);
?>

            <?php $_smarty_tpl->_subTemplateRender("file:form_success.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"contact"), 0, false);
?>


            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

            <div class="form-group">
                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_name'];?>
</label>
                <input class="form-control" id="name" name="name" value="<?php echo set_value("name");?>
" required type="text">
            </div>
            <div class="form-group">
                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['your_email'];?>
</label>
                <input class="form-control" id="email" name="email" value="<?php echo set_value("email");?>
" required type="email">
            </div>
            <div class="form-group">
                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['subject'];?>
</label>
                <input class="form-control" id="subject" name="subject" value="<?php echo set_value("subject");?>
" required type="text">
            </div>
            <div class="form-group">
                <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</label>
                <textarea class="form-control" name="description" required id="description" rows="10"
                          cols="40"><?php echo set_value("description");?>
</textarea>
            </div>
            
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['req_captcha'] && $_smarty_tpl->tpl_vars['settings']->value['general']['use_support_captcha']) {?>
                <?php $_smarty_tpl->_subTemplateRender("file:captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php }?>

            <div class="form-group">
                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['send_message'];?>
</button>
            </div>
        </form>

    </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
