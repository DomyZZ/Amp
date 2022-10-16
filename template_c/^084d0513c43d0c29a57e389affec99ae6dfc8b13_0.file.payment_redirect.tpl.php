<?php
/* Smarty version 3.1.30, created on 2020-07-04 13:28:40
  from "/home/hubmmsih/public_html/template/payment_redirect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0084087aa088_75166836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '084d0513c43d0c29a57e389affec99ae6dfc8b13' => 
    array (
      0 => '/home/hubmmsih/public_html/template/payment_redirect.tpl',
      1 => 1578413629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0084087aa088_75166836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }


        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }
        

        #container {
            margin: 10px;
        }

        p {
            margin: 12px 15px 12px 15px;
        }
    </style>
</head>
<body>
<div id="container">
    <h1>Initializing Payment</h1>
    <p>Redirecting you to <?php echo $_smarty_tpl->tpl_vars['proc_name']->value;?>
 ....</p>	</div>
    <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

</body>
</html><?php }
}
