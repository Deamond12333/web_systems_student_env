<?php /* Smarty version 3.1.27, created on 2015-07-03 09:05:36
         compiled from "/var/www/page.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1770651192559650603a1de7_09884541%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d13cd058c8a0657a05f0cf3031db78fcf28201' => 
    array (
      0 => '/var/www/page.tpl',
      1 => 1435914331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770651192559650603a1de7_09884541',
  'variables' => 
  array (
    'title' => 0,
    'buttons' => 0,
    'text' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559650604bf1a3_74918309',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559650604bf1a3_74918309')) {
function content_559650604bf1a3_74918309 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1770651192559650603a1de7_09884541';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Thao Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/thao.css">
</head>
    
<body>
    <style>
        body
        {
            background-image: url(scr.jpg);
            background-size: cover;
        }
        .nav 
        {
            background-image: url(menu.jpg);
            height: 500px;
            float: left;
            width: 20%;
        }
        .content
        {
            height: 500px;
            width: 80%;
            padding-left: 20px;
        }
    </style>
    <div class="header">
        <h1 class="title" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    </div>
    <div class="content" style="text-align: center;">
        <div class="nav">
          <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>

        </div>
       <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

    </div>
    <div class="footer" style="text-align: center;">
        <div class="blockquote">
            <p><?php echo $_smarty_tpl->tpl_vars['footer']->value;?>
</p>
        </div>
    </div>
</body>
</html><?php }
}
?>