<?php
/* Smarty version 3.1.32, created on 2018-11-14 08:28:37
  from 'D:\xampp\htdocs\modules\ps_wirepayment\views\templates\hook\infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bebcea5d07fc4_69652621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f12b3e703cf049606276d7a3de1b5bf982b5548' => 
    array (
      0 => 'D:\\xampp\\htdocs\\modules\\ps_wirepayment\\views\\templates\\hook\\infos.tpl',
      1 => 1541511688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bebcea5d07fc4_69652621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
<img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
