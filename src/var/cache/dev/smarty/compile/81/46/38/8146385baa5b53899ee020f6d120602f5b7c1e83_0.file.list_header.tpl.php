<?php
/* Smarty version 3.1.32, created on 2019-01-02 20:09:55
  from '/var/www/html/admin797qdgens/themes/default/template/controllers/categories/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2d0c831723e1_71679053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8146385baa5b53899ee020f6d120602f5b7c1e83' => 
    array (
      0 => '/var/www/html/admin797qdgens/themes/default/template/controllers/categories/helpers/list/list_header.tpl',
      1 => 1541511684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2d0c831723e1_71679053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17958180735c2d0c82ee79d1_73284027', 'override_header');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10755966575c2d0c83087dd5_67724291', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_17958180735c2d0c82ee79d1_73284027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_17958180735c2d0c82ee79d1_73284027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<ul class="breadcrumb cat_bar2">
		<?php $_smarty_tpl->_assignInScope('i', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories_tree']->value, 'category', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
?>
		<li>
			<?php if ($_smarty_tpl->tpl_vars['i']->value++ == 0) {?>
				<i class="icon-home"></i>
				<?php $_smarty_tpl->_assignInScope('params_url', '');?>
			<?php } elseif (isset($_smarty_tpl->tpl_vars['category']->value['id_category'])) {?>
				<?php ob_start();
echo intval($_smarty_tpl->tpl_vars['category']->value['id_category']);
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('params_url', "&id_category=".$_prefixVariable1."&viewcategory");?>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['category']->value['id_category']) && $_smarty_tpl->tpl_vars['category']->value['id_category'] == $_smarty_tpl->tpl_vars['categories_tree_current_id']->value) {?>
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' ));?>

        <a class="edit" href="<?php echo $_smarty_tpl->tpl_vars['category']->value['edit_link'];?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Global'),$_smarty_tpl ) );?>
">
          &nbsp;<i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Admin.Global'),$_smarty_tpl ) );?>

        </a>
			<?php } else { ?>
				<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current']->value,'html','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['params_url']->value,'html','UTF-8' ));?>
&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['name'],'html','UTF-8' ));?>
</a>
			<?php }?>
		</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
<?php
}
}
/* {/block 'override_header'} */
/* {block 'leadin'} */
class Block_10755966575c2d0c83087dd5_67724291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_10755966575c2d0c83087dd5_67724291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['delete_category']->value) && $_smarty_tpl->tpl_vars['delete_category']->value) {?>
		<div class="panel">
			<form action="<?php echo $_smarty_tpl->tpl_vars['REQUEST_URI']->value;?>
" method="post">
			<div class="panel-heading">
				<?php if ($_smarty_tpl->tpl_vars['need_delete_mode']->value) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'What do you want to do with the products associated with this category?','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deleting multiple categories','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>

				<?php }?>
			</div>

			<?php if ($_smarty_tpl->tpl_vars['need_delete_mode']->value) {?>
				<div class="radio">
					<label for="deleteMode_linkanddisable">
						<input type="radio" name="deleteMode" value="linkanddisable" id="deleteMode_linkanddisable" checked="checked" />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to associate the products without other categories to the parent category, then disable these products for now. I re-enable them when they are moved in their new category.','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>
 <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Recommended)','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>
</strong>
					</label>
				</div>
				<div class="radio">
					<label for="deleteMode_link">
						<input type="radio" name="deleteMode" value="link" id="deleteMode_link" />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to associate the products without other categories to the parent category, and keep them enabled.','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>

					</label>
				</div>
				<div class="radio">
					<label for="deleteMode_delete">
						<input type="radio" name="deleteMode" value="delete" id="deleteMode_delete" />
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I want to remove the products which are listed only within this category and no others.','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>

					</label>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deleting this category will remove products linked only within this category and no others. Are you sure you want to continue?','d'=>'Admin.Catalog.Notification'),$_smarty_tpl ) );?>
</div>
				<input type="hidden" name="deleteMode" value="delete" id="deleteMode_delete" />

			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['POST']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value != 'deleteMode') {?>
					<?php if (is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
							<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['val']->value,'html','UTF-8' ));?>
" />
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php } else { ?>
						<input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['key']->value,'html','UTF-8' ));?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'html','UTF-8' ));?>
" />
					<?php }?>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<div class="panel-footer">
					<button type="submit" name="cancel" class="btn btn-default">
						<i class="icon-remove"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</button>
					<button type="submit" class="btn btn-default">
						<i class="icon-trash text-danger"></i>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

					</button>
				</div>
			</form>
		</div>
	<?php }
}
}
/* {/block 'leadin'} */
}
