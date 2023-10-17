<?php
/* Smarty version 4.3.2, created on 2023-09-26 05:03:37
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\display.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651258195b2776_70652745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92c5e02ba676e4fc121f17d6a91776dab59b783e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\display.tpl',
      1 => 1695701013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651258195b2776_70652745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1795922665125819585487_36786809', 'content');
?>

 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_1795922665125819585487_36786809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1795922665125819585487_36786809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
    
    .car-details {
        margin-top: 50px;
        display: flex; 
        align-items: center; 
        justify-content: center; 
        background-color: #f2f2f2; 
        padding: 20px; 
        border: 1px solid #ccc; 
        border-radius: 4px;
    }

    .car-details img {
        width: 500px;
        height: 350px;
        object-fit: cover;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-right:40px;
    }
    .car-details-content {
        /* Add spacing between the image and content */
        margin:0;
    }

    .car-details h3 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .car-details p {
        font-size: 16px;
        margin: 5px 0;
    }

    
    .actions{
        display:flex;
    }
   
     .actions button {
        /* Update styles for the action buttons */
        
        margin-right: 10px;
        font-size: 16px;
        padding: 8px 16px;
        background-color:red; /* Replace #f75d34 with your desired background color */
        border: none;
        border-radius: 4px;
        color: #fff; /* Set the text color to white */
        cursor: pointer;
    }
</style>
<br><br><br>
<div class="car-details">
    <?php if (!empty($_smarty_tpl->tpl_vars['carData']->value['image_data'])) {?>
        <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['carData']->value['image_data']);?>
" alt="Car Image">
    <?php } else { ?>
        No Image
    <?php }?>
    <div class="car-details-content">
        <h3><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['carData']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <div class="disp2">
        <div class="disp">
        <p><strong><i style="color:red" class="fa-solid fa-car"></i>&nbsp;Model:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['carData']->value['model'], ENT_QUOTES, 'UTF-8', true);?>
</p>
        <p style="color:black">&nbsp;<i style="color:red" class="fa-solid fa-gauge fa-xs"></i><b>Mileage</b>:12500</p>
        <p><strong>Color:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['carData']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
</p>
        
        <h2><strong><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i></strong> <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['carData']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00 Lakhs</h2>
        </div>
         
        </div>
        <p>Discover the elegance of the Model . Packed with advanced features and a powerful electric drivetrain, the Model  is a true masterpiece of engineering. </p>
        <div class="actions">
            <form action="<?php echo $_smarty_tpl->tpl_vars['aboutUrl7']->value;?>
" method="GET">
                <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['carData']->value['id'];?>
>
                <button class="button" type="submit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
            </form>
            <form action="<?php echo $_smarty_tpl->tpl_vars['aboutUrl8']->value;?>
" method="GET">
                <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['carData']->value['id'];?>
>
                <button class="button" type="submit"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
                <br><br><br><br>
        </div>
    </div>
</div>
    <br>
   <br><br><br>
<?php
}
}
/* {/block 'content'} */
}
