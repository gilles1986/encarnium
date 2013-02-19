<?php /* Smarty version Smarty-3.1.12, created on 2013-01-20 14:33:07
         compiled from "C:\newxampp\htdocs\encarn\Packages\Views\Login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2590250fbf213ad10d9-97057080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1126b742191e97b4ca9b34de992b34fc239a75b0' => 
    array (
      0 => 'C:\\newxampp\\htdocs\\encarn\\Packages\\Views\\Login\\login.tpl',
      1 => 1358688612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2590250fbf213ad10d9-97057080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'test' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50fbf213b336c2_84687236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fbf213b336c2_84687236')) {function content_50fbf213b336c2_84687236($_smarty_tpl) {?><h2>Login</h2>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)>0){?>
Das Formular wurde nicht korrekt ausgefüllt
<ul>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
  <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
<?php } ?>
<?php }?>
</ul>

<p><?php echo $_smarty_tpl->tpl_vars['test']->value;?>
</p>

<form class="form-horizontal" action="index.php" method="POST">
  <div class="control-group">
    <input type="hidden" name="action" value="login" />
    <label class="control-label" for="username">Benutzername</label>
    <input class="controls<?php if ($_smarty_tpl->tpl_vars['request']->value&&!$_smarty_tpl->tpl_vars['request']->value['username']){?> wrongInput<?php }?>" type="text" id="username" name="username"  value="<?php if ($_smarty_tpl->tpl_vars['request']->value&&$_smarty_tpl->tpl_vars['request']->value['username']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['username'];?>
<?php }?>" autocomplete="off" />
  </div>
  <div class="control-group">
    <label class="control-label" for="password">Passwort:</label>
    <input class="controls<?php if ($_smarty_tpl->tpl_vars['request']->value&&!$_smarty_tpl->tpl_vars['request']->value['password']){?> wrongInput<?php }?>" type="password" name="password" value="<?php if ($_smarty_tpl->tpl_vars['request']->value&&$_smarty_tpl->tpl_vars['request']->value['password']){?><?php echo $_smarty_tpl->tpl_vars['request']->value['password'];?>
<?php }?>"/>
  </div>

  <div class="control-group">

  <input class="btn btn-primary btn-large" type="submit" value="Login" />
  </div>
</form>


<?php }} ?>