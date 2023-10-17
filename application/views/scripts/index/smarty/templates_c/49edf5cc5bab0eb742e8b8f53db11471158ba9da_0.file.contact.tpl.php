<?php
/* Smarty version 4.3.2, created on 2023-09-11 06:53:42
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64feab6653c197_21778805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49edf5cc5bab0eb742e8b8f53db11471158ba9da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\contact.tpl',
      1 => 1694411618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64feab6653c197_21778805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112488280764feab6653a6a8_42045164', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_112488280764feab6653a6a8_42045164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_112488280764feab6653a6a8_42045164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Styles for the contact container */
.contact-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Styles for the contact information section */
.contact-info {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 5px;
    margin-top: 20px;
}

/* Styles for the contact form section */
.contact-form {
    margin-top: 20px;
}

/* Styles for form labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <br><br>
    <div class="contact-container">
        <h1>Con<span style="border-bottom: 5px solid red; ">tact </span>Us</h1>
        <p>Have questions or need assistance? Feel free to get in touch with us. We're here to help!</p>
        
        <div class="contact-info">
            <h2>Contact Information</h2>
            <ul style=" list-style-type: none;">
                <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                <li><strong>Email:</strong> info@yourcompany.com</li>
                <li><strong>Address:</strong> 123 Main Street, City, Country</li>
            </ul>
        </div>
        
        <br><br><br>
</body>
</html>
<?php
}
}
/* {/block 'content'} */
}
