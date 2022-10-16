<?php
/* Smarty version 3.1.30, created on 2020-07-04 13:26:44
  from "/home/hubmmsih/public_html/template/login_redirect.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f0083941f5a60_81390648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42707237a1226a19d52c49447b50623310e37cbc' => 
    array (
      0 => '/home/hubmmsih/public_html/template/login_redirect.tpl',
      1 => 1578413618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f0083941f5a60_81390648 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>
        <?php echo $_smarty_tpl->tpl_vars['settings']->value['general']['site_name'];?>

    </title>
    <meta http-equiv="refresh" content="1;url=<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/dashboard"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        #content {
            max-width: 100%;
            margin: 150px auto;
            text-align: center;
            height: 400px !important;
        }

        h3
        {
            font-weight: 300;
        }

        img {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div id="content">
    <img src="images/loader.gif"/>
    <h3>Welcome <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h3>
    Please wait while you are redirected to your <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/dashboard">dashboard</a></a>
</div>
</body>
</html>
<?php }
}
