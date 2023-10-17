<?php
/* Smarty version 4.3.2, created on 2023-08-28 09:26:56
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ec5a50e705d0_08726236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f6005124f241609d7c66f16482f8fe86944666c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\add.tpl',
      1 => 1693211211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ec5a50e705d0_08726236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127262953664ec5a50e6bda8_37528049', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_127262953664ec5a50e6bda8_37528049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_127262953664ec5a50e6bda8_37528049',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

    <br>
    <br>
    <br><br><br>
<div style=" box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);">
    <h1> Add Car</h1>

    <div ><?php echo $_smarty_tpl->tpl_vars['form']->value;?>
</div>

</div>

<?php
}
}
/* {/block 'content'} */
}
