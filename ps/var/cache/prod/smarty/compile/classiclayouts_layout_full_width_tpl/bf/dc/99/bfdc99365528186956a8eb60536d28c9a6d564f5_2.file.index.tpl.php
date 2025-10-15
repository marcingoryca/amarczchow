<?php
/* Smarty version 4.5.5, created on 2025-10-08 06:55:38
  from '/home/host246071/domains/amarczchow.pl/public_html/ps/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68e6432ae20ea7_63393332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfdc99365528186956a8eb60536d28c9a6d564f5' => 
    array (
      0 => '/home/host246071/domains/amarczchow.pl/public_html/ps/themes/classic/templates/index.tpl',
      1 => 1746179722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68e6432ae20ea7_63393332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108507210868e6432ae1f439_00685520', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_194180263768e6432ae1f834_16518320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_84062396868e6432ae20142_26828517 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_192024482668e6432ae1fe12_10751913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84062396868e6432ae20142_26828517', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_108507210868e6432ae1f439_00685520 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_108507210868e6432ae1f439_00685520',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_194180263768e6432ae1f834_16518320',
  ),
  'page_content' => 
  array (
    0 => 'Block_192024482668e6432ae1fe12_10751913',
  ),
  'hook_home' => 
  array (
    0 => 'Block_84062396868e6432ae20142_26828517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194180263768e6432ae1f834_16518320', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192024482668e6432ae1fe12_10751913', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
