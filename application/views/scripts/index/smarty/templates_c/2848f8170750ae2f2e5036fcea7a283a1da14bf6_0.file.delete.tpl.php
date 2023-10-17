<?php
/* Smarty version 4.3.2, created on 2023-09-25 19:55:31
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6511d7a3b8c5f0_30746143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2848f8170750ae2f2e5036fcea7a283a1da14bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\delete.tpl',
      1 => 1695668110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511d7a3b8c5f0_30746143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13150017276511d7a3b782c2_28079211', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_13150017276511d7a3b782c2_28079211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13150017276511d7a3b782c2_28079211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<style>
   .delete{
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      font-size: 30px;
   } 
   
   
</style>
 <br><br><br>
<div class="delete">
    <br><br>
<p>Are you sure that you want to delete 
  '<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['album']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
' by 
  '<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['album']->value['model'], ENT_QUOTES, 'UTF-8', true);?>
'?
  '<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['album']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
'?
</p>
<br>
<form action="<?php echo $_smarty_tpl->tpl_vars['aboutUrl8']->value;?>
" method="post">
    <div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['id'];?>
" />
        <input style="background-color: red;color:white;font-size:20px;width: 90px;border:0;border-radius: 3px" type="submit" name="del" value="Yes" />
     
        <input style="background-color: red;color:white;font-size:20px;width: 90px;border:0;border-radius: 3px" type="submit" name="del" value="No" />
    </div>
        <br>
</form>
        <br><br><br><br><br><br>
</div>

<?php
}
}
/* {/block 'content'} */
}
