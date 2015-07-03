<?php
/*%%SmartyHeaderCode:3964664075595be042bcbc9_64598750%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8d13cd058c8a0657a05f0cf3031db78fcf28201' => 
    array (
      0 => '/var/www/page.tpl',
      1 => 1435874808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3964664075595be042bcbc9_64598750',
  'tpl_function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'buttons' => 0,
    'text' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5595be043dc110_07512708',
  'cache_lifetime' => 3600,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5595be043dc110_07512708')) {
function content_5595be043dc110_07512708 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Thao Framework">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/thao.css">
</head>
    
<body>
    <style>
         html 
         {
             overflow: hidden;
         }
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
        <h1 class="title" style="text-align: center;">Registration</h1>
    </div>
    <div class="content" style="text-align: center;">
        <div class="nav">
          <ul class="center stylized pills transparent" id="mainnav">
    <li class="capitalize"><a href=""></a></li>
</ul><ul class="center stylized pills transparent" id="mainnav">
    <li class="capitalize"><a href=""></a></li>
</ul><ul class="center stylized pills transparent" id="mainnav">
    <li class="capitalize"><a href=""></a></li>
</ul>
        </div>
        <form name="test" method="post" align="center">
                <p><b>NickName:</b><br>
                    <input type="text" size="40">
                </p>
                <p><b>Password:</b><br>
                    <input type="password" size="40">
                </p>
                <p><b>Сonfirm password:</b><br>
                    <input type="password" size="40">
                </p>
                <button type="button" class="green transparent">Log In</button>
            </form>
    </div>
    <div class="footer" style="text-align: center;">
        <div class="blockquote">
            <p>Deamond style!</p>
        </div>
    </div>
</body>
</html><?php }
}
?>