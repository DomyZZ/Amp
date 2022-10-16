<?php
/* Smarty version 3.1.30, created on 2020-06-08 21:30:42
  from "/home/hubmmsih/public_html/template/calculator.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5edeae02570bc8_98484558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34b5b81c8de4f346ef1198db5a83fff409f4fcac' => 
    array (
      0 => '/home/hubmmsih/public_html/template/calculator.tpl',
      1 => 1578413627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form_errors.tpl' => 1,
  ),
),false)) {
function content_5edeae02570bc8_98484558 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <style>
        body {
            padding-top: 10px;
            font-family: "Open Sans", "sans-serif";
            font-size: 13px;
        }
        
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        label {
            margin-top: 7px;
            font-weight: normal;
        }

        ul {
            margin-bottom: 0px;
        }

        table {
            margin-bottom: 0px !important;
        }

        .table th
        {
            background: #0a2640;
            color: #fff;
            padding: 8px 10px
        }

        .table td {
            vertical-align: middle;
            padding: 4px 10px
        }


    </style>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <?php if (!$_smarty_tpl->tpl_vars['package']->value) {?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['language']->value['invalid_package'];?>
</div>
            <?php } else { ?>
                    <form class="form" method="post">

                        <?php $_smarty_tpl->_subTemplateRender("file:form_errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('form'=>"calculator"), 0, false);
?>


                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value['hash'];?>
"/>

                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['calculator'];?>
 - <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</b></li>
                            <table class="table table-bordered">
                                
                                <tbody>

                                <tr>
                                    <td width="50%">
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['deposit_amount'];?>
 (<?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;?>
)

                                        </label>
                                    </td>
                                    <td>
                                        <input type="text" name="amount" class="form-control form-control-sm input-sm"
                                               value="<?php echo set_value('amount');?>
" required>
                                    </td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['package']->value['package_duration'] == "forever") {?>
                                    <tr>
                                        <td>
                                            <label>Deposit Duration (<?php echo $_smarty_tpl->tpl_vars['package']->value['earning_interval_unit'];?>
)</label>
                                        </td>
                                        <td>
                                            <input type="text" name="duration" class="form-control form-control-sm input-sm"
                                                   value="<?php echo set_value('duration');?>
" required>
                                        </td>
                                    </tr>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['package']->value['allow_compounding']) {?>
                                    <tr>
                                        <td><label><?php echo $_smarty_tpl->tpl_vars['lang']->value['compounding'];?>
</label></td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == "ranged") {?>
                                                <input type="text" name="compounding" class="form-control form-control-sm input-sm"
                                                       value="<?php echo set_value('compounding');?>
"
                                                       value="<?php echo set_value('compounding');?>
"/>
                                                (<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_min']);?>
% - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['clean'][0][0]->clean($_smarty_tpl->tpl_vars['package']->value['comp_ranged_val_max']);?>
%)
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['package']->value['comp_val_type'] == "solid") {?>
                                                <select name="compounding" class="form-control form-control-sm input-sm">
                                                    <option value="">0%</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['comp_solid_vals'], 'solid_val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['solid_val']->value) {
?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['solid_val']->value;?>
" <?php echo set_value('compounding') == $_smarty_tpl->tpl_vars['solid_val']->value ? 'selected' : '';?>
><?php echo $_smarty_tpl->tpl_vars['solid_val']->value;?>

                                                            %
                                                        </option>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </select>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                                <tr>
                                    <td>
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['total_return'];?>
</label>
                                    </td>
                                    <td>

                                        <?php if ($_smarty_tpl->tpl_vars['result']->value['total_return']) {?>
                                            <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['result']->value['total_return'];?>
</b>
                                        <?php } else { ?>
                                            <span class="text-danger">--</span>
                                        <?php }?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['net_profit'];?>
</label>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['result']->value['net_profit']) {?>
                                            <b><?php echo $_smarty_tpl->tpl_vars['curr_symbol']->value;
echo $_smarty_tpl->tpl_vars['result']->value['net_profit'];?>
</b>
                                        <?php } else { ?>
                                            <span class="text-danger">--</span>
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <button class="btn btn-success btn-sm btn-block"><?php echo $_smarty_tpl->tpl_vars['lang']->value['calculate'];?>
</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </ul>

                    </form>
            <?php }?>

        </div>
    </div>
</div>

</body>


</html><?php }
}
