<?php
/* Smarty version 3.1.32, created on 2018-11-27 19:07:10
  from '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bfd87ce45f1e6_64007478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a921ffd3f4999c0482a012dd64450fbdb46d37' => 
    array (
      0 => '/var/www/html/modules/ps_googleanalytics/views/templates/hook/ps_googleanalytics.tpl',
      1 => 1543341111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfd87ce45f1e6_64007478 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
	(window.gaDevIds=window.gaDevIds||[]).push('d6YPbH');
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    <?php if ($_smarty_tpl->tpl_vars['gaCrossdomainEnabled']->value) {?>
        ga('create', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', 'auto', {'allowLinker': true});
        ga('require', 'linker');
        ga('linker:autoLink', [
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['shop']->value['id_shop'] != $_smarty_tpl->tpl_vars['currentShopId']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['useSecureMode']->value) {?>'<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['domain_ssl'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php } else { ?>'<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['shop']->value['domain'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'<?php }?>,
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ]);
    <?php } else { ?>
        ga('create', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gaAccountId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', 'auto');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['userId']->value && !$_smarty_tpl->tpl_vars['backOffice']->value) {?>
        ga('set', 'userId', '<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['userId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['gaAnonymizeEnabled']->value) {?>
        ga('set', 'anonymizeIp', true);
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['backOffice']->value) {?>
        ga('set', 'nonInteraction', true);
    <?php }?>

    ga('require', 'ec');
<?php echo '</script'; ?>
>

<?php }
}
