<?php
/* Smarty version 4.3.2, created on 2023-09-11 06:46:30
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64fea9b649f7f9_14457121',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88f4695f133553b5db14d0347402873d6ba3e94c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\navbar.tpl',
      1 => 1694411186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fea9b649f7f9_14457121 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
 
    
    .navbar {
        height: 65px;
    background-color: #fff; 
    color:black;
    position:fixed;
    top:0;
    left:0;
    width:100%;
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    padding: 15px; 
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
     box-sizing: border-box;
}



.search-bar {
    display: flex; 
     align-items: center;
    
}

.search-bar form {
    display: flex; 
    margin-left: 10px; 
}

.search-bar input[type="text"]{
   
    height:25px;
    width: 300px;
    padding: 5px; 
}
.navbar a.active{

color:black;}

.navbar a {
    text-decoration: none;
    color: black;
    font-size: 20px;
    margin-left: 15px;
    padding: 5px;
    transition: background-color 0.3s ease;
    
}

.navbar a:hover {
    color:red; /* Change the background color on hover */
    /* Change the text color on hover */
}
nav{
flex:1;
text-align: right;

}
nav ul{
display:inline-block;
list-style-type: none;
}
nav ul li{
display:inline-block;
margin-right: 3px;
font-size:10px;
}
#searchbtn{
    border: 0;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    display: inline-block;
    height: 48px;
    position: absolute;
    right: 0;
    top: 0;
    width: 60px;
    
}
</style>


<html>
    <head>
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head><!-- comment -->
    <body>
       
<header class="navbar">
    <a style="font-size:30px" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl']->value;?>
"><b>CarLuxe<span style="color:red">PRO</span></b></a>
   
     
       <nav>
             <ul>
                 <li> <div class="search-bar">
            <form action="<?php echo $_smarty_tpl->tpl_vars['aboutUrl5']->value;?>
" method="GET">
            <input style="height: 31px;background-color: #f7f7f7;border:0;border-left: 1px solid rgba(36,39,44,.1);
    border-radius: 4px 0 0 4px;
    box-shadow: inset 0 1px 4px 0 rgba(0,0,0,.1);
    color: #24272c;" type="text" name="search" placeholder="Search...">
            
            <button  class="fa fa-search" type="submit" style="background-color: black;color:white;border:0;border-radius: 0 4px 4px 0; cursor: pointer;
    display: inline-block;  height: 40px;width: 50px;">&nbsp;&nbsp;&nbsp;</button>
        </form>
    </div> </li>
                 <li>  <a href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl3']->value;?>
" class="active">About</a></li>
                 <li> <a href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl6']->value;?>
">Add Car</a></li>
                 <li>  <a href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl9']->value;?>
" class="active">Contact</a></li>
        </ul>
        </nav>
    </div>
    </header>
    </body>
        </html><?php }
}
