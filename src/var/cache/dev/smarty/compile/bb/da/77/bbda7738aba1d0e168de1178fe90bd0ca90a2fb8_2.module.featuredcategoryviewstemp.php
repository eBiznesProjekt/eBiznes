<?php
/* Smarty version 3.1.32, created on 2019-01-02 20:12:41
  from 'module:featuredcategoryviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2d0d29a0f342_46321378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbda7738aba1d0e168de1178fe90bd0ca90a2fb8' => 
    array (
      0 => 'module:featuredcategoryviewstemp',
      1 => 1546454947,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5c2d0d29a0f342_46321378 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/featuredcategory/views/templates/hook/featuredcategory17.tpl -->
<div id="featured-category-products-block-center" class="featured-products clearfix">
    <h1 class="products-section-title text-uppercase "><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured products','d'=>'Module.FeaturedCategory.Shop'),$_smarty_tpl ) );?>
</h1>
    <?php if (isset($_smarty_tpl->tpl_vars['products']->value) && $_smarty_tpl->tpl_vars['products']->value) {?>
        <div class="products">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <ul id="categoryfeatured" class="categoryfeatured tab-pane">
            <li class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No featured products at this time.','d'=>'Module.FeaturedCategory.Shop'),$_smarty_tpl ) );?>
</li>
        </ul>
    <?php }?>
</div><!-- end /var/www/html/modules/featuredcategory/views/templates/hook/featuredcategory17.tpl --><?php }
}
