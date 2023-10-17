<?php
/* Smarty version 4.3.2, created on 2023-09-26 05:16:44
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65125b2ccb65d9_08114236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13d5e8e58ee80a395ad69467caee03d81fe4e319' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\search.tpl',
      1 => 1695701788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65125b2ccb65d9_08114236 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38381126965125b2cc8c581_27506958', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_38381126965125b2cc8c581_27506958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_38381126965125b2cc8c581_27506958',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
    <style>
 .car-result { 
       color:black;
     display: flex;
    flex-direction: row;
    
     align-items: stretch;
    justify-content: space-between;
    width: 80%;
    max-width: 1000px;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    margin:9px;
   }
  
  
  .image {
    flex: 1;
    max-width: 40%;
    padding: 20px;
    position: relative;
    overflow: hidden;
  }

  .image img {
   width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
  }

  .details {
     
    flex: 1;
    padding: 20px;
  }
</style>

    </head>
    <body>
 <br><br><br>
<div class="grid-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
        <a  style="text-decoration: none" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl4']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
">
        
            <div class="car-result">
                <div class="image">
                <?php if ($_smarty_tpl->tpl_vars['car']->value['image_data']) {?>
                    <img class="car-image" src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['car']->value['image_data']);?>
" alt="Car Image" width="100" height="100">
                <?php } else { ?>
                    No Image
                <?php }?>
                </div>
                <div class="details">
                <div class="car-details"> <h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
</h2></div>
               <div class="car-details"> <h3><i style="color:red" class="fa-solid fa-car"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['model'], ENT_QUOTES, 'UTF-8', true);?>
</h3></div>
               
               <div class="car-details"> <h3><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00Lakhs</h3></div>
               <div class="car-details"> <p><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;Color</p></div>
               <button style=" font-size: 18px; 
    padding: 10px 40px; 
    background-color:red; 
    color: #fff; 
    border: none;
    border-radius: 5px;
    cursor: pointer;">View Details</button>
                </div>
                </div>
            
        </a> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

    </body>
        </html>
        <?php
}
}
/* {/block 'content'} */
}
