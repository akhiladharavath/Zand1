<?php
/* Smarty version 4.3.2, created on 2023-09-25 05:01:45
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6511062913b353_40448379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8720648d3c19195fa21350d02d6ff5c36da7eca0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\details.tpl',
      1 => 1695614501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6511062913b353_40448379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1845317487651106291254a6_16078513', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_1845317487651106291254a6_16078513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1845317487651106291254a6_16078513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<style>
    
.car-details-container{
 display: flex;
    flex-direction: row;
    
     align-items: stretch;
    justify-content: space-between;
    width: 80%;
    max-width: 1000px;
    border: 1px solid #ccc;
    padding: 20px;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);

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



<br><br><br>
<br>
<h2 style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['selectedMake']->value;?>
 Model Cars</h2>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selectedDetails']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
      <a style="text-decoration: none ;color:black" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl4']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
" class="latest-car">
     <br>
     
<div class="car-details-container">
        
        <div class="image">
        <?php if ($_smarty_tpl->tpl_vars['car']->value['image_data']) {?>
            <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['car']->value['image_data']);?>
" alt="Car Image" width="200" height="200">
        <?php } else { ?>
            <p>No Image</p>
        <?php }?>
        </div>
        <div class="details">
        <h2><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
        <p class="car-details-model"><i style="color:red" class="fa-solid fa-car"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['model'], ENT_QUOTES, 'UTF-8', true);?>
</p>
        <p class="car-details-color"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
</p>
        <p class="car-details-cost"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00Lakhs</p>
    </div>
</div>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php
}
}
/* {/block 'content'} */
}
