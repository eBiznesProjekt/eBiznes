<?php
/* Smarty version 3.1.32, created on 2019-01-06 20:36:47
  from '/var/www/html/modules/productcomments/views/templates/admin/_configure/helpers/list/list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c3258cf3c6735_15031323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f00e714acc5bf2a67aa238afd50703d47d1649d0' => 
    array (
      0 => '/var/www/html/modules/productcomments/views/templates/admin/_configure/helpers/list/list_content.tpl',
      1 => 1541544008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3258cf3c6735_15031323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<tbody>
<?php if (count($_smarty_tpl->tpl_vars['list']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'tr', false, 'index');
$_smarty_tpl->tpl_vars['tr']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['tr']->value) {
$_smarty_tpl->tpl_vars['tr']->iteration++;
$__foreach_tr_64_saved = $_smarty_tpl->tpl_vars['tr'];
?>
        <tr<?php if ($_smarty_tpl->tpl_vars['position_identifier']->value) {?> id="tr_<?php echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
_<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['position']['position'])) {
echo $_smarty_tpl->tpl_vars['tr']->value['position']['position'];
} else { ?>0<?php }?>"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['class'])) {
echo $_smarty_tpl->tpl_vars['tr']->value['class'];
}?> <?php if ((1 & $_smarty_tpl->tpl_vars['tr']->iteration / 1)) {?>odd<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['tr']->value['color']) && $_smarty_tpl->tpl_vars['color_on_bg']->value) {?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value['color'];?>
"<?php }?> >
            <?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value) {?>
                <td class="row-selector text-center">
                    <?php if (isset($_smarty_tpl->tpl_vars['list_skip_actions']->value['delete'])) {?>
                        <?php if (!in_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],$_smarty_tpl->tpl_vars['list_skip_actions']->value['delete'])) {?>
                            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
$_prefixVariable5 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['checked_boxes']->value) && is_array($_smarty_tpl->tpl_vars['checked_boxes']->value) && in_array($_prefixVariable5,$_smarty_tpl->tpl_vars['checked_boxes']->value)) {?> checked="checked"<?php }?> class="noborder"/>
                        <?php }?>
                    <?php } else { ?>
                        <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];?>
"<?php ob_start();
echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
$_prefixVariable6 = ob_get_clean();
if (isset($_smarty_tpl->tpl_vars['checked_boxes']->value) && is_array($_smarty_tpl->tpl_vars['checked_boxes']->value) && in_array($_prefixVariable6,$_smarty_tpl->tpl_vars['checked_boxes']->value)) {?> checked="checked"<?php }?> class="noborder"/>
                    <?php }?>
                </td>
            <?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_display']->value, 'params', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12426584625c3258ce96e622_28821675', "open_td");
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7722530315c3258ceac5b53_79881605', "td_content");
?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6987770345c3258cf10d647_29313693', "close_td");
?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <?php if ($_smarty_tpl->tpl_vars['multishop_active']->value && $_smarty_tpl->tpl_vars['shop_link_type']->value) {?>
                <td title="<?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>
">
                    <?php if (isset($_smarty_tpl->tpl_vars['tr']->value['shop_short_name'])) {?>
                        <?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_short_name'];?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->tpl_vars['tr']->value['shop_name'];?>

                    <?php }?>
                </td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['has_actions']->value) {?>
                <td class="text-right">
                    <?php $_smarty_tpl->_assignInScope('compiled_actions', array());?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actions']->value, 'action', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value])) {?>
                            <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                                <?php $_smarty_tpl->_assignInScope('action', $_smarty_tpl->tpl_vars['action']->value);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['action']->value == 'delete' && count($_smarty_tpl->tpl_vars['actions']->value) > 2) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['compiled_actions']) ? $_smarty_tpl->tpl_vars['compiled_actions']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = 'divider';
$_smarty_tpl->_assignInScope('compiled_actions', $_tmp_array);?>
                            <?php }?>
                            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['compiled_actions']) ? $_smarty_tpl->tpl_vars['compiled_actions']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['action']->value];
$_smarty_tpl->_assignInScope('compiled_actions', $_tmp_array);?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 0) {?>
                        <?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?><div class="btn-group-action"><?php }?>
                        <div class="btn-group pull-right">
                            <?php echo $_smarty_tpl->tpl_vars['compiled_actions']->value[0];?>

                            <?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?>
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-caret-down"></i>&nbsp;
                                </button>
                                <ul class="dropdown-menu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['compiled_actions']->value, 'action', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['action']->value) {
?>
                                        <?php if ($_smarty_tpl->tpl_vars['key']->value != 0) {?>
                                            <li<?php if ($_smarty_tpl->tpl_vars['action']->value == 'divider' && count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 3) {?> class="divider"<?php }?>>
                                                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'divider') {
echo $_smarty_tpl->tpl_vars['action']->value;
}?>
                                            </li>
                                        <?php }?>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>
                        </div>
                        <?php if (count($_smarty_tpl->tpl_vars['compiled_actions']->value) > 1) {?></div><?php }?>
                    <?php }?>
                    <?php if (Module::getInstanceByName('reviewsreply') != false) {?>
                        <?php if (((Module::getInstanceByName('reviewsreply')->active !== null ))) {?>
                            <?php if (Module::getInstanceByName('reviewsreply')->active == true && $_smarty_tpl->tpl_vars['identifier']->value == 'id_product_comment') {?>
                                <div class="pull-right">
                                    <a onclick="$(this).closest('tr').next('tr').show();" class="btn btn-small btn-default"><i class="icon-pencil"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply'),$_smarty_tpl ) );?>
</a>
                                </div>
                            <?php }?>
                        <?php }?>
                    <?php }?>
                </td>
            <?php }?>
        </tr>
        <?php if (Module::getInstanceByName('reviewsreply') != false) {?>
            <?php if (((Module::getInstanceByName('reviewsreply')->active !== null ))) {?>
                <?php if (Module::getInstanceByName('reviewsreply')->active == true && $_smarty_tpl->tpl_vars['identifier']->value == 'id_product_comment') {?>
                    <tr style="display:none;">
                        <td colspan="8" class="center" style="padding:8px">
                            <?php $_smarty_tpl->_assignInScope('reply', rreply::getByIdProductCommentAll($_smarty_tpl->tpl_vars['tr']->value['id_product_comment']));?>
                            <form method="post">
                                <input type="hidden" name="action" value="addreply"/>
                                <input type="hidden" name="id_product_comment" value="<?php echo $_smarty_tpl->tpl_vars['tr']->value['id_product_comment'];?>
"/>
                                <?php if (isset($_smarty_tpl->tpl_vars['reply']->value[0])) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['reply']->value[0]->body)) {?>
                                        <input type="hidden" name="id_rreply" value="<?php echo $_smarty_tpl->tpl_vars['reply']->value[0]->id_rreply;?>
"/>
                                    <?php }?>
                                <?php }?>
                                <textarea name="body" style="height:100px; margin-bottom:20px;" class="col-lg-12"><?php if (Tools::getValue('action') == 'addreply' && Tools::getValue('id_product_comment') == $_smarty_tpl->tpl_vars['tr']->value['id_product_comment']) {
echo Tools::getValue('body');
} elseif (isset($_smarty_tpl->tpl_vars['reply']->value[0])) {
if (isset($_smarty_tpl->tpl_vars['reply']->value[0]->body)) {
echo $_smarty_tpl->tpl_vars['reply']->value[0]->body;
}
}?></textarea>
                                <div class="col-lg-12">
                                    <button class="btn btn-large btn-success">
                                        <i class="icon-save"></i> <?php if (isset($_smarty_tpl->tpl_vars['reply']->value[0])) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save reply'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add reply'),$_smarty_tpl ) );
}?>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['tr'] = $__foreach_tr_64_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} else { ?>
    <tr>
        <td class="list-empty" colspan="<?php echo count($_smarty_tpl->tpl_vars['fields_display']->value)+1;?>
">
            <div class="list-empty-msg">
                <i class="icon-warning-sign list-empty-icon"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No records found'),$_smarty_tpl ) );?>

            </div>
        </td>
    </tr>
<?php }?>
</tbody><?php }
/* {block "open_td"} */
class Block_12426584625c3258ce96e622_28821675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'open_td' => 
  array (
    0 => 'Block_12426584625c3258ce96e622_28821675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <td
                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['position'])) {?>
                        id="td_<?php if (!empty($_smarty_tpl->tpl_vars['position_group_identifier']->value)) {
echo $_smarty_tpl->tpl_vars['position_group_identifier']->value;
} else { ?>0<?php }?>_<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value];
if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count') > 1) {?>_<?php echo intval(($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tr_count')-1));
}?>"
                    <?php }?>
                    class="<?php if (!$_smarty_tpl->tpl_vars['no_link']->value) {?>pointer<?php }
if (isset($_smarty_tpl->tpl_vars['params']->value['position']) && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?> dragHandle<?php }
if (isset($_smarty_tpl->tpl_vars['params']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['class'];
}
if (isset($_smarty_tpl->tpl_vars['params']->value['align'])) {?> <?php echo $_smarty_tpl->tpl_vars['params']->value['align'];
}?>"
                    <?php if ((!isset($_smarty_tpl->tpl_vars['params']->value['position']) && !$_smarty_tpl->tpl_vars['no_link']->value && !isset($_smarty_tpl->tpl_vars['params']->value['remove_onclick']))) {?>
                        onclick="document.location = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_index']->value,'html','UTF-8' ));?>
&amp;<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['identifier']->value,'html','UTF-8' ));?>
=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['identifier']->value],'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['view']->value) {?>&amp;view<?php } else { ?>&amp;update<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['table']->value,'html','UTF-8' ));
if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>&amp;page=<?php echo intval($_smarty_tpl->tpl_vars['page']->value);
}?>&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
'">
                    <?php } else { ?>
                        >
                    <?php }?>
                <?php
}
}
/* {/block "open_td"} */
/* {block "default_field"} */
class Block_10663765125c3258cf017160_15837980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
--<?php
}
}
/* {/block "default_field"} */
/* {block "td_content"} */
class Block_7722530315c3258ceac5b53_79881605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_7722530315c3258ceac5b53_79881605',
  ),
  'default_field' => 
  array (
    0 => 'Block_10663765125c3258cf017160_15837980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['prefix'])) {
echo $_smarty_tpl->tpl_vars['params']->value['prefix'];
}?>
                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_success']) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_success']) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?><span class="badge badge-success"><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_warning']) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning']) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?><span class="badge badge-warning"><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_danger']) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger']) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?><span class="badge badge-danger"><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['color']) && isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']])) {?>
                    <span class="label color_field" style="background-color:<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']];?>
;color:<?php if (Tools::getBrightness($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['params']->value['color']]) < 128) {?>white<?php } else { ?>#383838<?php }?>">
                <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['params']->value['active'])) {?>
                            <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                        <?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['callback'])) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['params']->value['maxlength']) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>
                                <span title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' ));?>
</span>
                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                            <?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['activeVisu'])) {?>
						<?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                            <i class="icon-check-ok"></i>



<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled','d'=>'Admin.Global'),$_smarty_tpl ) );?>

						<?php } else { ?>




                            <i class="icon-remove"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Disabled','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                        <?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['position'])) {?>
						<?php if (!$_smarty_tpl->tpl_vars['filters_has_value']->value && $_smarty_tpl->tpl_vars['order_by']->value == 'position' && $_smarty_tpl->tpl_vars['order_way']->value != 'DESC') {?>
                            <div class="dragGroup">
								<div class="positions">
									<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

								</div>
							</div>
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['position']+1;?>

                        <?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['image'])) {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['icon'])) {?>
						<?php if (is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class'])) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['class'];?>
"></i>




<?php } else { ?>




                                <img src="../img/admin/<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['src'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['alt'];?>
"/>
                            <?php }?>
                        <?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'price') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0], array( array('price'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]),$_smarty_tpl ) );?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['float'])) {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'date') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>0),$_smarty_tpl ) );?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'datetime') {?>
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'full'=>1),$_smarty_tpl ) );?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'decimal') {?>
						<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'percent') {?>
						<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%'),$_smarty_tpl ) );?>

					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'bool') {?>
            <?php if ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == 1) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                        <?php } elseif ($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] == 0 && $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value] != '') {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

                        <?php }?>
										<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['type']) && $_smarty_tpl->tpl_vars['params']->value['type'] == 'editable' && isset($_smarty_tpl->tpl_vars['tr']->value['id'])) {?>




                            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['tr']->value['id'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
" class="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>




<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'color') {?>
						<?php if (!is_array($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value])) {?>
                            <div style="background-color: <?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
;" class="attributes-color-container"></div>




<?php } else { ?>
                        



                            <img src="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]['texture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['tr']->value['name'];?>
" class="attributes-color-container"/>
                        <?php }?>
					<?php } elseif (isset($_smarty_tpl->tpl_vars['params']->value['maxlength']) && Tools::strlen($_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value]) > $_smarty_tpl->tpl_vars['params']->value['maxlength']) {?>




                            <span title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],$_smarty_tpl->tpl_vars['params']->value['maxlength'],'...' )),'html','UTF-8' ));?>
</span>
                        <?php } else { ?>
                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value],'html','UTF-8' ));?>

                        <?php }?>
                    <?php } else { ?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10663765125c3258cf017160_15837980', "default_field", $this->tplIndex);
?>

                    <?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['suffix'])) {
echo $_smarty_tpl->tpl_vars['params']->value['suffix'];
}?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['color']) && isset($_smarty_tpl->tpl_vars['tr']->value['color'])) {?>
                    </span>
                <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_danger']) && $_smarty_tpl->tpl_vars['params']->value['badge_danger'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_danger']) && $_smarty_tpl->tpl_vars['tr']->value['badge_danger'] == $_smarty_tpl->tpl_vars['params']->value['badge_danger']) {?></span><?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_warning']) && $_smarty_tpl->tpl_vars['params']->value['badge_warning'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_warning']) && $_smarty_tpl->tpl_vars['tr']->value['badge_warning'] == $_smarty_tpl->tpl_vars['params']->value['badge_warning']) {?></span><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['params']->value['badge_success']) && $_smarty_tpl->tpl_vars['params']->value['badge_success'] && isset($_smarty_tpl->tpl_vars['tr']->value['badge_success']) && $_smarty_tpl->tpl_vars['tr']->value['badge_success'] == $_smarty_tpl->tpl_vars['params']->value['badge_success']) {?></span><?php }?>
                <?php
}
}
/* {/block "td_content"} */
/* {block "close_td"} */
class Block_6987770345c3258cf10d647_29313693 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'close_td' => 
  array (
    0 => 'Block_6987770345c3258cf10d647_29313693',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    </td>
                <?php
}
}
/* {/block "close_td"} */
}
