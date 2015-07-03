<?php /* Smarty version 3.1.27, created on 2015-07-02 22:41:07
         compiled from "/var/www/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20802146015595be03e991c0_38369027%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daa7257c2e67cf431a731caa96e2a8c1956ddc76' => 
    array (
      0 => '/var/www/nav.tpl',
      1 => 1435854477,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20802146015595be03e991c0_38369027',
  'variables' => 
  array (
    'activity' => 0,
    'link' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5595be04143379_73534523',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5595be04143379_73534523')) {
function content_5595be04143379_73534523 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20802146015595be03e991c0_38369027';
?>
<ul class="center stylized pills transparent" id="mainnav">
    <li class="capitalize<?php echo $_smarty_tpl->tpl_vars['activity']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a></li>
</ul><?php }
}
?>