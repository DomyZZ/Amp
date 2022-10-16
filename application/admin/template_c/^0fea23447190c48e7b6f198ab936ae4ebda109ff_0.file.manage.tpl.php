<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:26:55
  from "/home/amper856/public_html/application/admin/template/pages/users/manage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53eb3f6fab47_61526180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fea23447190c48e7b6f198ab936ae4ebda109ff' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/users/manage.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53eb3f6fab47_61526180 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12153475675e53eb3f6cda55_08319181', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2272672625e53eb3f6d0c77_96828830', "page_subtitle");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3138072725e53eb3f6d5c51_88463822', "breadcrumb");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17206249235e53eb3f6f9160_59166425', "page_content");
}
/* {block "title"} */
class Block_12153475675e53eb3f6cda55_08319181 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 | <?php echo strtoupper($_smarty_tpl->tpl_vars['lang']->value['title']['manage_user']);?>
 - <?php echo strtoupper($_smarty_tpl->tpl_vars['lang']->value['title'][$_smarty_tpl->tpl_vars['cur_page']->value]);
}
}
/* {/block "title"} */
/* {block "page_subtitle"} */
class Block_2272672625e53eb3f6d0c77_96828830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<small><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</small><?php
}
}
/* {/block "page_subtitle"} */
/* {block "breadcrumb"} */
class Block_3138072725e53eb3f6d5c51_88463822 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <li>
        <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['users'];?>
</a>
    </li>
    <li class="active"><?php echo $_smarty_tpl->tpl_vars['lang']->value['breadcrumb']['manage'];?>
</li>
<?php
}
}
/* {/block "breadcrumb"} */
/* {block "manage_user"} */
class Block_13914535995e53eb3f6f83e0_77048543 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "manage_user"} */
/* {block "page_content"} */
class Block_17206249235e53eb3f6f9160_59166425 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="nav nav-tabs">
        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == "profile" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/profile"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['profile'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == "wallet_accounts" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/wallet_accounts"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['wallet_accounts'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == "funds" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/funds"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['funds'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == "referrals" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/referrals"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['referrals'];?>
</a>
        </li>
        <li <?php echo $_smarty_tpl->tpl_vars['cur_page']->value == "access_log" ? 'class="active"' : '';?>
>
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/access_log"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['access_log'];?>
</a>
        </li>
       
        <li class="pull-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/mass_mail"><i
                        class="fa fa-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['send_mail'];?>
</a>
        </li>
        <li class="pull-right">
            <a href="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/users/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/send_bonus_penalty"><i
                        class="fa fa-money"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['send_bonus_penalty'];?>
</a>
        </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="<?php echo $_smarty_tpl->tpl_vars['cur_page']->value;?>
">
            <div class="panel-body">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13914535995e53eb3f6f83e0_77048543', "manage_user", $this->tplIndex);
?>

            </div>
        </div>
    </div>
<?php
}
}
/* {/block "page_content"} */
}
