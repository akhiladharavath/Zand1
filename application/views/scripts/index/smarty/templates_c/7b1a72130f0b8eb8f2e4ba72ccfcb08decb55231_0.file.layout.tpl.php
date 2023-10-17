<?php
/* Smarty version 4.3.2, created on 2023-08-27 13:57:58
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64eb4856e02922_37294874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b1a72130f0b8eb8f2e4ba72ccfcb08decb55231' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\layout.tpl',
      1 => 1693141060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:style.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64eb4856e02922_37294874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_assignInScope('contentType', "text/html;charset=utf-8");
$_smarty_tpl->_assignInScope('pageTitle', "Zend Framework Tutorial");?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
        <?php $_smarty_tpl->_subTemplateRender("file:style.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    
        <meta http-equiv="Content-Type" content="<?php echo $_smarty_tpl->tpl_vars['contentType']->value;?>
" />
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    
</head>
<body>
   
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    <main>
        <div id="content">
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14396092764eb4856e017f3_45675180', 'content');
?>

        </div>
    </main>
    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>
</html>


<?php }
/* {block 'content'} */
class Block_14396092764eb4856e017f3_45675180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14396092764eb4856e017f3_45675180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
