<?php
/* Smarty version 3.1.30, created on 2020-08-11 12:26:50
  from "/home/hubmmsih/public_html/template/captcha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f328e8a8bc787_23645232',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fef6268bb60613118a62e247a70028d258465008' => 
    array (
      0 => '/home/hubmmsih/public_html/template/captcha.tpl',
      1 => 1578413624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f328e8a8bc787_23645232 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['captcha_type'] == "standard") {?>
        <div class="row">
            <div class="col-sm-4">
                <img id="captcha" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/captcha" onclick="document.getElementById('captcha').src = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/captcha?' + Math.random(); return false" /> 
            </div>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="captcha"
                       value="" required>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['general']['captcha_type'] == "google_recaptcha") {?>
        <div class="row">
            <div class="col-sm-12">
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['captcha']->value['site_key'];?>
"></div>
            </div>
        </div>
    <?php }?>

</div><?php }
}
