<?php /* Smarty version Smarty-3.1.12, created on 2013-01-20 14:33:27
         compiled from "C:\newxampp\htdocs\encarn\Packages\Views\_main\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1698850fbf2271de3c8-54096436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b90419a4c296e0f3c81e4c3aea2c03fbfff03024' => 
    array (
      0 => 'C:\\newxampp\\htdocs\\encarn\\Packages\\Views\\_main\\main.tpl',
      1 => 1358688611,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1698850fbf2271de3c8-54096436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tplType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50fbf227247737_23090218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fbf227247737_23090218')) {function content_50fbf227247737_23090218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php if (isset($_smarty_tpl->tpl_vars['tplType']->value)){?>
    <?php echo $_smarty_tpl->getSubTemplate ("../tplTypes/".((string)$_smarty_tpl->tpl_vars['tplType']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("../tplTypes/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('end.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>