<?php
/* Smarty version 3.1.32, created on 2018-11-14 13:04:16
  from 'module:pswirepaymentviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bec0f404c4205_00686516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75bdf601ec9e01aea0e9e66eb6225ba1b66af2dd' => 
    array (
      0 => 'module:pswirepaymentviewstemplat',
      1 => 1542056828,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl' => 1,
  ),
),false)) {
function content_5bec0f404c4205_00686516 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['status']->value == 'ok') {?>
    <p>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order on %s is complete.','sprintf'=>array($_smarty_tpl->tpl_vars['shop_name']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
<br/>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please send us a bank wire with:','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>

    </p>
    <?php $_smarty_tpl->_subTemplateRender('module:ps_wirepayment/views/templates/hook/_partials/payment_infos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <p>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Proszę podaj numer zamówienie: %s w opisie przelewu.','sprintf'=>array($_smarty_tpl->tpl_vars['reference']->value),'d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
<br/>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wysłaliśmy Tobie też tą informację na e-mail.','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>

    </p>
    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Jak dostaniemy zapłatę, to od razu wyślemy twoje zamówienie','d'=>'Modules.Wirepayment.Shop'),$_smarty_tpl ) );?>
</strong>
    <p>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Jeśli masz pytania, komentarze lub obawy, skontaktuj się z naszym [1]zespołem obsługi klienta[/1].','d'=>'Modules.Wirepayment.Shop','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['contact_url']->value)."'>",'[/1]'=>'</a>')),$_smarty_tpl ) );?>

    </p>
<?php } else { ?>
    <p class="warning">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our [1]expert customer support team[/1].','d'=>'Modules.Wirepayment.Shop','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['contact_url']->value)."'>",'[/1]'=>'</a>')),$_smarty_tpl ) );?>

    </p>
<?php }
}
}
