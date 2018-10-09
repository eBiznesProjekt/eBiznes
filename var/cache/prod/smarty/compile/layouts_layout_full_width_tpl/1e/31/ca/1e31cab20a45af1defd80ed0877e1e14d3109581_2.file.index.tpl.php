<?php
/* Smarty version 3.1.32, created on 2018-10-09 19:35:43
  from 'D:\xampp\htdocs\BE\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bbce6ef7ade89_45391546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e31cab20a45af1defd80ed0877e1e14d3109581' => 
    array (
      0 => 'D:\\xampp\\htdocs\\BE\\themes\\classic\\templates\\index.tpl',
      1 => 1539103801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbce6ef7ade89_45391546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66835bbce6ef7a9041_00156336', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_19765bbce6ef7a9c23_98736898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_289185bbce6ef7ab699_25346783 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_24495bbce6ef7aabf7_34768469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_289185bbce6ef7ab699_25346783', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_66835bbce6ef7a9041_00156336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_66835bbce6ef7a9041_00156336',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19765bbce6ef7a9c23_98736898',
  ),
  'page_content' => 
  array (
    0 => 'Block_24495bbce6ef7aabf7_34768469',
  ),
  'hook_home' => 
  array (
    0 => 'Block_289185bbce6ef7ab699_25346783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19765bbce6ef7a9c23_98736898', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24495bbce6ef7aabf7_34768469', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
