<?php
/* Smarty version 3.1.30, created on 2020-02-25 09:16:26
  from "/home/amper856/public_html/application/admin/template/pages/mass_mail/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e54e5ea614256_72642514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d8ffb4bb89c7b2ac479f7c45724e9e2f611604a' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/mass_mail/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e54e5ea614256_72642514 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18427316015e54e5ea5f3ef2_18185765', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9033192235e54e5ea60c218_06673565', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19074298835e54e5ea611db9_90506697', "foo");
}
/* {block "head"} */
class Block_18427316015e54e5ea5f3ef2_18185765 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Select2 -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/select2/css/select2.min.css" rel="stylesheet"/>
<?php
}
}
/* {/block "head"} */
/* {block "page_content"} */
class Block_9033192235e54e5ea60c218_06673565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="mass_mail" id="mass_mail" method="post">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"mass_mail"), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
            <div class="form-group">
                <label for="username"
                       class="control-label col-sm-3 text-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['username'];?>
</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username"
                           value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
" readonly/>
                </div>
            </div>
        <?php } else { ?>
            <div class="form-group">
                <label for="to" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['to'];?>
</label>
                <div class="col-md-9">
                    <select name="to" id="to" class="form-control" required>
                        <option value="specific_users">Specific Users (one or more users)
                        </option>
                        <option value="all_users" selected>All users</option>
                        <option value="deposit_users">All users which have made a deposit</option>
                        <option value="non_deposit_users">All users which haven't made a deposit
                        </option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <option value="deposit_to_packageid_<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">All users which have made a
                                                                             deposit
                                                                             to <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
                </div>
            </div>
            <div class="form-group" id="select_users">
                <label for="users" class="control-label col-sm-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['select_users'];?>
</label>
                <div class="col-sm-9">
                    <select name="users[]" id="users"
                            class="form-control select2-width-md select2-width-sm"
                            multiple="multiple" required>
                    </select>
                </div>
            </div>
        <?php }?>
        <div class="form-group">
            <label for="subject" class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['subject'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="subject"
                       id="subject" value="<?php echo $_smarty_tpl->tpl_vars['mail_data']->value['subject'];?>
"
                       required/>
            </div>
        </div>
        <div class="form-group">
            <label for="description"
                   class="control-label col-sm-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['message'];?>
</label>
            <div class="col-md-9">
                <textarea name="html_content" required id="html_content" class="form-control" placeholder="......"><?php echo $_smarty_tpl->tpl_vars['mail_data']->value['html_content'];?>
</textarea>
            </div>
        </div>
        <hr>
            <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['send'];?>
</button> &nbsp;
            <button type="button" class="btn btn-success"
                    onclick="selected_action('mass_mail', 'test')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['test_mail'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_19074298835e54e5ea611db9_90506697 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!-- Select2 -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/select2/js/select2.min.js"><?php echo '</script'; ?>
>
    <!-- ckeditor js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_assets']->value;?>
/assets/plugins/ckeditor/ckeditor.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        
        $(document).ready(function () {
            $("#to").change(function () {
                if ($(this).children(":selected").val() == 'specific_users') {
                    $('#select_users').show();
                    $('#users').removeAttr('disabled').attr({'required': 'true'});
                }
                else {
                    $('#users').removeAttr('required').attr({'disabled': 'true'});
                    $('#select_users').hide();
                }
            });
            $('#users').select2({
                multiple: true,
                minimumInputLength: 2,
                allowClear: true,
                placeholder: 'Choose specific users....',
                id: function(i) {
                    console.log(i);
                    return i;
                },
                ajax: {
                    type: 'post',
                    url: dqs_admin_url + '/users/search',
                    allowClear: true,
                    dataType: 'json',
                    delay: 250,
                    params: {
                        contentType: "application/json"
                    },
                    data: function(term, page) {
                        //Code for dummy ajax response
                        return {
                            name: term.term,
                            selected_users: $('#users').val(),
                            type: 'multiple',
                            delay: 0
                        };
                    },
                    processResults: function (data) {
                        console.log(data);
                        return {
                            results: data
                        };
                    },
                    cache: false
                },
                formatResult: function(i) {
                    console.log("formatresult: "+i);
                    return '<div>' + i.name + '(' + i.email + ')' + '</div>';
                }, // Formats results in drop down
                formatSelection: function(i) {
                    console.log("formatSelection: "+i);
                    return '<div>' + i.name + '(' + i.email + ')' + '</div>';
                },
                escapeMarkup: function(m) {
                    return m;
                }
            });
            CKEDITOR.replace('html_content', {
                height: '300px',
                fullPage: true,
                allowedContent: true
            });
            $('#to').trigger('change');
        });
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "foo"} */
}
