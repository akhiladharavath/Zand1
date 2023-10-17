<?php
/* Smarty version 4.3.2, created on 2023-09-26 05:14:05
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65125a8d764810_43291656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '165534bc43d45f62cacc30be1a60b91c709ddcbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\edit.tpl',
      1 => 1695701641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65125a8d764810_43291656 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169992034865125a8d760999_50956970', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_169992034865125a8d760999_50956970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_169992034865125a8d760999_50956970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<br><br>
<br>
<div style=" box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
    <h1> Edit Car</h1>

    <div ><?php echo $_smarty_tpl->tpl_vars['form']->value;?>
</div>

</div>
<?php
}
}
/* {/block 'content'} */
}
