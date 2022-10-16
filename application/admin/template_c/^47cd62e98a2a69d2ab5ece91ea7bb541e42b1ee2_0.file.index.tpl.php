<?php
/* Smarty version 3.1.30, created on 2020-02-24 15:22:19
  from "/home/amper856/public_html/application/admin/template/pages/representative_system/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e53ea2b24ff02_12414194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47cd62e98a2a69d2ab5ece91ea7bb541e42b1ee2' => 
    array (
      0 => '/home/amper856/public_html/application/admin/template/pages/representative_system/index.tpl',
      1 => 1578364890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_status.tpl' => 1,
  ),
),false)) {
function content_5e53ea2b24ff02_12414194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16195279225e53ea2b244ce7_42330176', "page_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12657167005e53ea2b24e9c6_36685163', "foo");
}
/* {block "page_content"} */
class Block_16195279225e53ea2b244ce7_42330176 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form class="form-horizontal" name="representative_system" id="representative_system"
          method="post" action="<?php echo $_smarty_tpl->tpl_vars['admin_url']->value;?>
/representative_system">
        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>
        <?php $_smarty_tpl->_subTemplateRender("file:form_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"representative_system"), 0, false);
?>

        <div class="form-group">
            <div class="col-md-12">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rep_settings[rep_enabled]"
                               id="rep_enabled"
                               value="true" <?php echo $_smarty_tpl->tpl_vars['representative_settings']->value['rep_enabled'] ? 'checked' : '';?>
> <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['enable_rep_system'];?>

                    </label>
                </div>
            </div>
        </div>
        <hr>
        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['rep_app_req'];?>
</h3>
        <div class="form-group">
            <label for="min_representative_deposit"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_dep_amount'];?>
 (<?php echo strtoupper($_smarty_tpl->tpl_vars['curr_symbol']->value);?>
)</label>
            <div class="col-md-9">
                <input type="text" class="form-control input-auto"
                       name="rep_settings[min_representative_deposit]"
                       id="min_representative_deposit"
                       value="<?php echo $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_deposit'] ? $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_deposit'] : '0';?>
"/>
            </div>
        </div>
        <div class="form-group">
            <label for="min_representative_referral"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_no_referrals'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control input-auto"
                       name="rep_settings[min_representative_referral]"
                       id="min_representative_referral"
                       value="<?php echo $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_referral'] ? $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_referral'] : '0';?>
"/>
            </div>
        </div>
        <div class="form-group">
            <label for="min_representative_active_referral"
                   class="control-label col-md-3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['min_no_active_referrals'];?>
</label>
            <div class="col-md-9">
                <input type="text" class="form-control input-auto"
                       name="rep_settings[min_representative_active_referral]"
                       id="min_representative_active_referral"
                       value="<?php echo $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_active_referral'] ? $_smarty_tpl->tpl_vars['representative_settings']->value['min_representative_active_referral'] : '0';?>
"/>
            </div>
        </div>
        <hr>
        <ul class="nav nav-tabs dq-nav hide" id="dq-tab">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value < 6) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 6; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <li>
                    <a href="#rep_level_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-toggle="tab" role="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['representative_level'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                </li>
            <?php }
}
?>

        </ul>
        <div class="tab-content" id="dq-tab-content">
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value < 6) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 6; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                <div class="tab-pane fade" id="rep_level_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="repr_levels[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][enabled]"
                                               id="repr_level_enabled_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                               value="true" <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable1=ob_get_clean();
echo $_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable1]['id'] > 0 ? 'checked' : '';?>
>
                                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['enable_representative_level'];?>
 <?php echo $_smarty_tpl->tpl_vars['i']->value;?>

                                    </label>
                                </div>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable2]['id'] > 0) {?>
                                    <input type="hidden" name="repr_levels[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][id]" id="repr_level_id_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable3=ob_get_clean();
echo $_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable3]['id'];?>
">
                                <?php }?>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="table-plan" class="table table-bordered table-plan" style="width: 60%">
                                <thead>
                                    <tr>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ref_comm_dep'];?>
 (%)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text"
                                                   class="form-control  text-center"
                                                   name="repr_levels[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][ref_comm_deposit]"
                                                   id="repr_level_ref_comm_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"
                                                   value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable4=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable5=ob_get_clean();
echo $_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable4]['ref_comm_deposit'] ? clean_zeros($_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable5]['ref_comm_deposit']) : '0';?>
"/>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['legend']['other_ref_levels'];?>
</h3>
                        <div class="table-responsive">
                            <table id="table-plan" class="table table-bordered table-plan" style="width: 60%">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['level'];?>
</th>
                                        <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['ref_comm_dep'];?>
 (%)</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable6=ob_get_clean();
if (!empty($_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable6]['other_ref_levels'])) {?>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['i']->value;
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('other_ref_levels', unserialize($_smarty_tpl->tpl_vars['repr_levels']->value[$_prefixVariable7]['other_ref_levels']));
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('other_ref_levels', NULL);
?>
                                    <?php }?>
                                    <?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['j']->value = 0;
if ($_smarty_tpl->tpl_vars['j']->value < 9) {
for ($_foo=true;$_smarty_tpl->tpl_vars['j']->value < 9; $_smarty_tpl->tpl_vars['j']->value++) {
?>
                                        <?php $_smarty_tpl->_assignInScope('ref_level', $_smarty_tpl->tpl_vars['j']->value+2);
?>
                                        <tr>
                                            <td width="1%" class="text-center">
                                                <input type="checkbox"
                                                       name="repr_levels[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][other_ref_levels][<?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
][row]"
                                                       id="other_ref_level_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"
                                                       onchange="enable_ref_levels(<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
)" <?php echo $_smarty_tpl->tpl_vars['other_ref_levels']->value[$_smarty_tpl->tpl_vars['ref_level']->value]['row'] ? 'checked="checked"' : '';?>

                                                       value="true">
                                            </td>
                                            <td width="2%" align="center"
                                                style="vertical-align: middle;">
                                                <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
</span>
                                            </td>
                                            <td>
                                                <input type="text"
                                                       class="form-control  text-center"
                                                       name="repr_levels[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][other_ref_levels][<?php echo $_smarty_tpl->tpl_vars['ref_level']->value;?>
][ref_comm_deposit]"
                                                       id="other_ref_level_deposit_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['other_ref_levels']->value[$_smarty_tpl->tpl_vars['ref_level']->value]['ref_comm_deposit'] ? $_smarty_tpl->tpl_vars['other_ref_levels']->value[$_smarty_tpl->tpl_vars['ref_level']->value]['ref_comm_deposit'] : '0';?>
" <?php echo $_smarty_tpl->tpl_vars['other_ref_levels']->value[$_smarty_tpl->tpl_vars['ref_level']->value]['row'] ? '' : 'disabled="disabled"';?>
 />
                                            </td>
                                            
                                        </tr>
                                    <?php }
}
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php }
}
?>

        </div>
        <hr>
        <button type="submit" class="btn btn-primary"
                onclick="update_tab_form('representative_system')"><?php echo $_smarty_tpl->tpl_vars['lang']->value['label']['update'];?>
</button>
    </form>
<?php
}
}
/* {/block "page_content"} */
/* {block "foo"} */
class Block_12657167005e53ea2b24e9c6_36685163 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 type="text/javascript">
        jQuery(function ($) {
            "use strict"; // Start of use strict

            $('#rep_enabled').change(function () {
                if ($('#rep_enabled:checked').val()) {
                    $('.ref_req').attr({'required': 'true'});
                } else {
                    $('.ref_req').removeAttr('required');
                }
            });

        });

        function enable_ref_levels(i, j) {
            if ($('#other_ref_level_' + i + '_' + j + ':checked').val()) {
                $('#other_ref_level_deposit_' + i + '_' + j).removeAttr('disabled');
                $('#other_ref_level_earning_' + i + '_' + j).removeAttr('disabled');
            } else {
                $('#other_ref_level_deposit_' + i + '_' + j).attr({'disabled': 'true'});
                $('#other_ref_level_earning_' + i + '_' + j).attr({'disabled': 'true'});
            }

        }
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "foo"} */
}
