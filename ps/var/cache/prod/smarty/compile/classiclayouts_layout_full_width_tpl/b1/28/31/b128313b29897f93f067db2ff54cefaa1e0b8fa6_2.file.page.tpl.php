<?php
/* Smarty version 4.5.5, created on 2025-10-08 06:55:38
  from '/home/host246071/domains/amarczchow.pl/public_html/ps/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_68e6432ae28943_40180883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b128313b29897f93f067db2ff54cefaa1e0b8fa6' => 
    array (
      0 => '/home/host246071/domains/amarczchow.pl/public_html/ps/themes/classic/templates/page.tpl',
      1 => 1746179722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68e6432ae28943_40180883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25710699668e6432ae24e83_66684377', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_158334235468e6432ae25612_74344641 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_164481752468e6432ae251d7_13553109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158334235468e6432ae25612_74344641', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_174705077268e6432ae27344_80001691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_145147523768e6432ae27803_64392478 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_38110235268e6432ae26fa7_12246316 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174705077268e6432ae27344_80001691', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145147523768e6432ae27803_64392478', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_123847771168e6432ae28196_12747207 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_120542784768e6432ae27ea8_78442979 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123847771168e6432ae28196_12747207', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_25710699668e6432ae24e83_66684377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25710699668e6432ae24e83_66684377',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_164481752468e6432ae251d7_13553109',
  ),
  'page_title' => 
  array (
    0 => 'Block_158334235468e6432ae25612_74344641',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_38110235268e6432ae26fa7_12246316',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_174705077268e6432ae27344_80001691',
  ),
  'page_content' => 
  array (
    0 => 'Block_145147523768e6432ae27803_64392478',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_120542784768e6432ae27ea8_78442979',
  ),
  'page_footer' => 
  array (
    0 => 'Block_123847771168e6432ae28196_12747207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164481752468e6432ae251d7_13553109', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38110235268e6432ae26fa7_12246316', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120542784768e6432ae27ea8_78442979', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
