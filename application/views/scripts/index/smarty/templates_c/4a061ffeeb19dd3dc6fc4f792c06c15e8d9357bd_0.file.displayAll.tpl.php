<?php
/* Smarty version 4.3.2, created on 2023-09-26 05:21:08
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\displayAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65125c34b6a950_11554675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a061ffeeb19dd3dc6fc4f792c06c15e8d9357bd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\displayAll.tpl',
      1 => 1695702064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:paginator.tpl' => 1,
  ),
),false)) {
function content_65125c34b6a950_11554675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87262963365125c34b53834_99989069', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_87262963365125c34b53834_99989069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_87262963365125c34b53834_99989069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<!DOCTYPE html>
<html>
<head>
   
    <style>
        body{
    background-color: #f2f2f2;
}

    .big-container {
        align-items: center;
        text-align: center;
        
    
}

.car-box {
    background-color: #fff; 
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
  border-radius: 12px;

    display: inline-block;
    margin: 10px; 
    box-sizing: border-box;
    text-align: left;
}

/* Style for car images */
.car-image {
    max-width: 100%; 
    height: auto; 
    border: 1px solid #ccc;
    background-color: red;
   
}
.displayAll{
    margin-left: 5px;
line-height: 0;

    
}
.pagination{
margin-bottom: 15px;
}
    </style>
</head>

<body>
    <br> <br> <br> 
<div class="big-container">
    <h1 style="text-align: center">ALL <span style="border-bottom: 5px solid red; ">TYPES</span> CARS</h1>
<div class="car-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <a style="text-decoration: none" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl4']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
">
            <div class="car-box">
                <?php if ($_smarty_tpl->tpl_vars['car']->value['image_data']) {?>
                  
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['car']->value['image_data']);?>
" alt="Car Image" width="250" height="200">
                <?php } else { ?>
                    <p>No Image </p>
                <?php }?>
                <div style="color:black" class="displayAll">
                    
                <h3><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['model'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
               <p  class="car-details-color"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00Lakhs</p>
               
            </div>
             </div>
        </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
 
<div class="pagination" style="text-align: center">
    
    <?php $_smarty_tpl->_subTemplateRender("file:paginator.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
</div>

</div>
</div>
</body>
</html>
<?php
}
}
/* {/block 'content'} */
}
