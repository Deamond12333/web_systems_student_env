<?php /* Smarty version 3.1.27, created on 2015-07-03 09:20:29
         compiled from "/var/www/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:298762439559653dd776ea0_29113265%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2156526ef96429fa407f912c480b91fb53236c21' => 
    array (
      0 => '/var/www/login.tpl',
      1 => 1435915169,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298762439559653dd776ea0_29113265',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559653dd87aff4_19962196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559653dd87aff4_19962196')) {
function content_559653dd87aff4_19962196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '298762439559653dd776ea0_29113265';
?>
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
        <button type="submit" class="green transparent">Log In</button>
    </form><?php }
}
?>