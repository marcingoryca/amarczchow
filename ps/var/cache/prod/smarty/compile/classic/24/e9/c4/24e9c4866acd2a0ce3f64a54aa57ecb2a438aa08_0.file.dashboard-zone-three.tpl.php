<?php
/* Smarty version 4.5.5, created on 2025-10-08 06:57:20
  from '/home/host246071/domains/amarczchow.pl/public_html/ps/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68e64390105e47_39570784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e9c4866acd2a0ce3f64a54aa57ecb2a438aa08' => 
    array (
      0 => '/home/host246071/domains/amarczchow.pl/public_html/ps/modules/ps_mbo/views/templates/hook/dashboard-zone-three.tpl',
      1 => 1749548314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68e64390105e47_39570784 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-dashboard-news'));
      });
    }
  } else {
    const dashboardNewsContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    const renderNews = window.mboCdc.renderDashboardNews
    renderNews(dashboardNewsContext, '#cdc-dashboard-news')
  }
<?php echo '</script'; ?>
>

<section id="cdc-dashboard-news" class="dash_news cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
