<?php
/* Smarty version 3.1.30, created on 2020-08-06 08:38:58
  from "/home/hubmmsih/public_html/application/admin/template/pages/login/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f2bc1a2117541_17921057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab035a82473a6a91d006e4b91aca4dec04cb53e' => 
    array (
      0 => '/home/hubmmsih/public_html/application/admin/template/pages/login/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5f2bc1a2117541_17921057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20249473025f2bc1a21113e3_41648057', "body");
}
/* {block "body"} */
class Block_20249473025f2bc1a21113e3_41648057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="wrapper">
        <div class="container" style="margin-top: 100px">

            <div class="row">
                <div class="col-md-offset-3 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <i class="fa fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['title']['login'];?>

                                <small class="block" style="margin-left: 12px; font-size: 80%">
                                    <strong><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['login_sub_title'];?>
</strong>
                                </small>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="loginform" name="loginform" method="post">
                                <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
" />
                                <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"admin_login"), 0, false);
?>

                                <div class="form-group">
                                    <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="username" type="text" class="form-control" name="username"
                                               autocomplete="off"
                                               placeholder="Username" required autofocus
                                               value="<?php echo set_value('username');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['password'];?>
</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input id="pass" type="password" class="form-control" name="password"
                                               autocomplete="off"
                                               placeholder="******" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['login'];?>
</button>
                            </form>
                        </div>
                    </div>
                    <div>
                        Copyright © <b>Dqscript 2019-2020</b>.
                        <small>All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
