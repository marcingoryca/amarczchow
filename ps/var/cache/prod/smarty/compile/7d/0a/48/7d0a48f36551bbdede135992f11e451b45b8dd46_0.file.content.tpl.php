<?php
/* Smarty version 4.5.5, created on 2025-10-08 06:57:20
  from '/home/host246071/domains/amarczchow.pl/public_html/ps/admin123/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68e64390129cc6_61280228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d0a48f36551bbdede135992f11e451b45b8dd46' => 
    array (
      0 => '/home/host246071/domains/amarczchow.pl/public_html/ps/admin123/themes/default/template/content.tpl',
      1 => 1749548314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68e64390129cc6_61280228 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
