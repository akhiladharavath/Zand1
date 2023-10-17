<?php
/* Smarty version 4.3.2, created on 2023-09-11 06:52:43
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64feab2b83a720_32953057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419691667e33ac76315afae4478b06765a76d269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\about.tpl',
      1 => 1694411557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64feab2b83a720_32953057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160837512564feab2b838621_39835311', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_160837512564feab2b838621_39835311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_160837512564feab2b838621_39835311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

<style>
    .about{
        display:flex;
         font-family: Arial, Helvetica, sans-serif;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color: #f5f5f5;
    margin:10px;
    }
    .about1{
         display:flex;
         margin:15px;
         width:90%;
    }
</style>

<div>
   
    
</div>
<br><br><br> 
<h1 style="text-align:center">Ab<span style="border-bottom: 5px solid red; ">out </span>Us</h1>
<div class="about">
    

<div class="about1">
    <img style=" height: 300px;width:500px" src="https://www.hyundai.com/content/dam/hyundai/in/en/data/vehicle-thumbnail/1600x590_i20.png">
   
<p>
    <br><br><br>
CarLuxePRO.com is India's leading car search venture that helps users buy cars that are right for them. Its website and app carry rich automotive content such as expert reviews, detailed specs and prices, comparisons as well as videos and pictures of all car brands and models available in India. The company has tie-ups with many auto manufacturers, more than 4000 car dealers and numerous financial institutions to facilitate the purchase of vehicles.

CarLuxePRO.com has launched many innovative features toCarDekho.com
</p>


<br>
</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
