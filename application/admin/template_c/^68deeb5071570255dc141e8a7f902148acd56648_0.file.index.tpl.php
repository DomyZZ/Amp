<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:44:16
  from "/home/amper856/public_html/application/admin/template/pages/file_manager/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ef5075fb46_44140092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68deeb5071570255dc141e8a7f902148acd56648' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/file_manager/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ef5075fb46_44140092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3154177115e53ef50751de2_51152195', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5818138855e53ef5075a761_57912857', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8383042355e53ef5075ecb2_78808519', "foo");
}
/* {block "head"} */
class Block_3154177115e53ef50751de2_51152195 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/elFinder/css/elfinder.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/elFinder/css/theme.css" rel="stylesheet" type="text/css"/>
<?php
}
}
/* {/block "head"} */
/* {block "page_content"} */
class Block_5818138855e53ef5075a761_57912857 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['demo_restriction']->value) {?>
        <div class="alert alert-sm alert-danger alert-dismissible" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['lang']->value['error']['page_not_available_in_demo'];?>

        </div>
    <?php } else { ?>
        <div id="elfinder"></div>
    <?php }
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_8383042355e53ef5075ecb2_78808519 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- jquery-ui -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <!-- Elfinder -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/elFinder/js/elfinder.min.js" type="text/javascript"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        if ($('#elfinder').length > 0) {
            $('#elfinder').elfinder({
                url: dqs_admin_url + '/file_manager/init',
                defaultView: 'list',
                height: '600'
            });
        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
