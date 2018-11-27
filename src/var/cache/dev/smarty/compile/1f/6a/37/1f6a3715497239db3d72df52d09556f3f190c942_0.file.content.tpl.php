<?php
/* Smarty version 3.1.32, created on 2018-11-27 18:51:58
  from '/var/www/html/admin797qdgens/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd843e14c4f3_39140425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6a3715497239db3d72df52d09556f3f190c942' => 
    array (
      0 => '/var/www/html/admin797qdgens/themes/default/template/content.tpl',
      1 => 1541511684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd843e14c4f3_39140425 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
