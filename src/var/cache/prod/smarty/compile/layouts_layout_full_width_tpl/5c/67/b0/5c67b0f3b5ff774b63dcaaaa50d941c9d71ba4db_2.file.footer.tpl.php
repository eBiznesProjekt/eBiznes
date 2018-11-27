<?php
/* Smarty version 3.1.32, created on 2018-11-14 13:35:58
  from 'D:\xampp\htdocs\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec16ae78f813_52480126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c67b0f3b5ff774b63dcaaaa50d941c9d71ba4db' => 
    array (
      0 => 'D:\\xampp\\htdocs\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1541511693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec16ae78f813_52480126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206405bec16ae78bba7_60458757', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_206405bec16ae78bba7_60458757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_206405bec16ae78bba7_60458757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
