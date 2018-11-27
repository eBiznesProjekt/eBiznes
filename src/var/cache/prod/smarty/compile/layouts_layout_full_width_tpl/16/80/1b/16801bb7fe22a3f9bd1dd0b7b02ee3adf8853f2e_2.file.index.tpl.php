<?php
/* Smarty version 3.1.32, created on 2018-11-14 22:46:06
  from 'D:\xampp\htdocs\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec979e7b2744_39259755',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16801bb7fe22a3f9bd1dd0b7b02ee3adf8853f2e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\themes\\classic\\templates\\index.tpl',
      1 => 1541511693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec979e7b2744_39259755 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213435bec979e7a9d45_31627777', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_86205bec979e7aaa68_93147057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_240745bec979e7ac4c1_47644901 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_282775bec979e7aba82_12620005 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_240745bec979e7ac4c1_47644901', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_213435bec979e7a9d45_31627777 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_213435bec979e7a9d45_31627777',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_86205bec979e7aaa68_93147057',
  ),
  'page_content' => 
  array (
    0 => 'Block_282775bec979e7aba82_12620005',
  ),
  'hook_home' => 
  array (
    0 => 'Block_240745bec979e7ac4c1_47644901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86205bec979e7aaa68_93147057', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_282775bec979e7aba82_12620005', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
