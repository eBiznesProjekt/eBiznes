<?php
/* Smarty version 3.1.32, created on 2019-01-03 19:10:03
  from 'module:productcommentsproductcom' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5c2e4ffbee4574_83549835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef52c2fd720b69606a7340db85e126eaa0332c5b' => 
    array (
      0 => 'module:productcommentsproductcom',
      1 => 1541544008,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2e4ffbee4574_83549835 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/productcomments/productcomments_reviews.tpl --><div class="comments_note">
    <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value > 0 && Configuration::get('PRODUCT_COMMENTS_LIST') == 1) {?>
        <div class="star_content clearfix">
            <?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= 5; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
                    <div class="star"></div>
                <?php } else { ?>
                    <div class="star star_on"></div>
                <?php }?>
            <?php
}
}
?>
        </div>
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('%s Review(s)',$_smarty_tpl->tpl_vars['nbComments']->value),'mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp</span>
    <?php }?>
</div><!-- end /var/www/html/modules/productcomments/productcomments_reviews.tpl --><?php }
}