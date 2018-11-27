<?php
/* Smarty version 3.1.32, created on 2018-11-14 18:52:40
  from 'D:\xampp\htdocs\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec60e89198e9_70461274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a278dddd313773d95e4b55eda66e1e03b6b5edaf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1541511693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec60e89198e9_70461274 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
