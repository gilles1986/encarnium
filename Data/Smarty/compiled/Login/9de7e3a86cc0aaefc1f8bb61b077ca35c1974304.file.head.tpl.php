<?php /* Smarty version Smarty-3.1.12, created on 2013-01-20 14:33:07
         compiled from "C:\newxampp\htdocs\encarn\Packages\Views\_main\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:900850fbf213a39e72-04427423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9de7e3a86cc0aaefc1f8bb61b077ca35c1974304' => 
    array (
      0 => 'C:\\newxampp\\htdocs\\encarn\\Packages\\Views\\_main\\head.tpl',
      1 => 1358688611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '900850fbf213a39e72-04427423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'scripts' => 0,
    'css' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50fbf213a59440_78715671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fbf213a59440_78715671')) {function content_50fbf213a59440_78715671($_smarty_tpl) {?><!doctype html>
<html>
 <head>
  <title>
      <?php if (isset($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }?>
  </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Test-Homepage</title>
	<meta name="description" content="">
	<meta name="author" content="">
 	<?php echo $_smarty_tpl->tpl_vars['scripts']->value;?>

 	<?php echo $_smarty_tpl->tpl_vars['css']->value;?>

 </head>
 <body><?php }} ?>