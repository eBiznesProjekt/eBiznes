<?php
/* Smarty version 3.1.32, created on 2019-01-02 20:27:49
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2d10b5521481_02336308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1543347307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d10b5521481_02336308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12039117125c2d10b54f2ae9_84057972', 'page_content_container');
?>

	
	<?php echo '<script'; ?>
>
	// Feature detects Navigation Timing API support.
	if (window.performance) {
	  // Gets the number of milliseconds since page load
	  // (and rounds the result since the value must be an integer).
	  var timeSincePageLoad = Math.round(performance.now());

	  // Sends the timing hit to Google Analytics.
	  ga('send', 'timing', 'JS Dependencies', 'load', timeSincePageLoad);
	}
	<?php echo '</script'; ?>
><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8081955185c2d10b54f8f12_66761489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10340840205c2d10b5507f43_77760442 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_11344545275c2d10b5502000_68130569 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10340840205c2d10b5507f43_77760442', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12039117125c2d10b54f2ae9_84057972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12039117125c2d10b54f2ae9_84057972',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8081955185c2d10b54f8f12_66761489',
  ),
  'page_content' => 
  array (
    0 => 'Block_11344545275c2d10b5502000_68130569',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10340840205c2d10b5507f43_77760442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8081955185c2d10b54f8f12_66761489', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11344545275c2d10b5502000_68130569', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
