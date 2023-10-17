<?php
/* Smarty version 4.3.2, created on 2023-09-26 06:00:36
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651265747c6081_37869917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e10a0973dbb78a42041685c07bd3ec8d671e49b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\index.tpl',
      1 => 1695702445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651265747c6081_37869917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12112977346512657479d833_95541772', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'content'} */
class Block_12112977346512657479d833_95541772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12112977346512657479d833_95541772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<!DOCTYPE html>
<html>
<head>
    <style>
         body {
     box-sizing: border-box;
    min-height: 1000px;
    overflow: auto;
       font-family: Arial, sans-serif;
    background-color: #f2f2f2;
 }
 .imageBox{
     width:100%;
     height:80vh;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-repeat: no-repeat;
     background-image: url("https://gaadiwaadi.com/wp-content/uploads/2022/03/Charge-Cars-1967-Ford-Mustang-EV-img1.jpg");
       background-size:cover;
       background-position:center;
 }

 .button{
     text-align: center;
     justify-content: center;
     justify-items: center;
     margin-top: 60px;
 }



/*latest car*/
.latestCar{
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color:white;
}
.latest-cars-list{
    width:350px;
    height:400px;
   display:flex;
}
.latest-car-item{
    margin:5px;
    width:280px;
    height:350px;
  
     background-color: white;
     align-items: center;
     justify-content: center;
}
img{
width:400px;
height:200px;
display: flex;
box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}
.latestCars{
    line-height: 0;
    text-align: left;
    align-items: center;
     justify-content: center;
}



.big-container {
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color: white; 
    padding: 20px; 
}
.car-container{
     width:350px;
    height:400px;
   display:flex;
}

.car-box {
   margin:5px;
    width:280px;
    height:350px;
  
     background-color: white;
     align-items: center;
     justify-content: center;
}

/* Style for the most searched cars container */
.most-searched-cars{
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color:white;
}
.car-list{
    width:400px;
    height:400px;
   display:flex;
   margin-left:10px;
}
.car{
    margin:10px;
    width:250px;
    height:350px;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
     background-color: white;
     align-items: center;
     justify-content: center;
}
img{
width:250px;
height:250px;
display: flex;
}
.mostDetails{
    line-height: 0;
    text-align: center;
    align-items: center;
     justify-content: center;
}
   h1{
      color:black;}
.Logomake{
    border: 1px solid #ddd; 
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color: white;
     margin-bottom:20px;
    
}
.carLogo4 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
    margin-top: 5px;
     background-color: white; 
    padding: 60px;
}
.car-logo-item1{
    text-align: center;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
   
  
}

.Logo{
    width:150px;
    height:100px;
}

#car-make1 {
    color:black;
    margin-top: 10px;
    font-size: 14px;
}

.slideshow-container {
    max-width: 100%;
    position: relative;
   
    margin: auto;
}

/* Style for individual slides */
.slide {
    display: none;
    width: 100%;
    height: 400px; /* Adjust the height as needed */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}

/* Style for the fade animation */
.fade {
    animation-name: fade;
    animation-duration: 2s;
}

@keyframes fade {
    0% {
        opacity: 0.2;
    }
    100% {
        opacity: 2;
    }
}
.dot-container {
    text-align: center;
    margin-top: 20px;
}

/* Style for individual dots */
.dot {
    height: 10px;
    width: 10px;
    margin: 0 5px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.3s ease;
}

/* Style for the active dot */
.dot.active {
    background-color: red;
}
/* Styles for the background container */
.background-container {
    display: flex;
    gap: 10px;
    /* Adjust the gap as needed */
}

/* Styles for the left background */
.background-left {
    flex: 1;
    background-image: url('https://img.freepik.com/premium-photo/road-trip-young-beautiful-woman-car-asphalt-highway-space-text_495423-32031.jpg?size=626&ext=jpg&ga=GA1.1.853384077.1686118778&semt=ais'); /* Replace with your image URL */
    background-size: cover;
   
    padding: 120px; /* Add padding to center the content */
    color:white; /* Text color on the background */
    text-align: left;
    background-position: center top;
   }

/* Styles for the right background */
.background-right {
    flex: 1;
    background-image: url('https://img.freepik.com/free-photo/man-try-fix-car-engine-problem-local-road-chiang-mai-thailand_1150-10490.jpg?size=626&ext=jpg&ga=GA1.1.853384077.1686118778&semt=ais'); /* Replace with your image URL */
    background-size: cover;
    padding: 120px; /* Add padding to center the content */
    color: #fff; /* Text color on the background */
    text-align: left;
}
.content {
    position: absolute;
    left: 20px; /* Adjust the distance from the left edge */
     /* Center vertically */
    transform: translateY(-50%); /* Adjust for vertical centering */
}
.content1 {
    left: 20px; /* Adjust the distance from the left edge */
     /* Center vertically */
    transform: translateY(-50%); /* Adjust for vertical centering */
}

.offer-container {
    display: flex;
    justify-content: space-between;
    width: 80%;
    margin: 0 auto;
    
}

/* Styles for each offer block */
.offer {
   
    text-align: center;
    /* Background color for the block */
    color: #fff; /* Text color for the block */
    width: 60%; /* Adjust the width as needed */
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    margin-right: 0;
    /* Set height to 100% */
}

/* Styles for the offer details */
.offer-details {
    padding: 20px;
     line-height: 0.5;
}

/* Styles for the vertical line */
.vertical-line {
    width: 2px;
    height: 100px; /* Adjust the height as needed */
    background-color: #333;
    margin-bottom: 0;
}
.car-slider-container {
        position: relative;
        overflow: hidden;
    }

    .car-slider {
        display: flex;
        transition: transform 0.3s ease-in-out;
        width: 1500px;
        overflow-x: scroll;
    }
    .car-slider::-webkit-scrollbar{
    display: none;
    }
    #back, #next{
        display:flex;
        align-items: center;
        width:5px;
        cursor:pointer;
        margin:30px;
        color:red;
        font-size: 24px;
    }
   
    .car {
        flex: 0 0 auto;
        margin-right: 20px; /* Adjust the spacing between cards as needed */
    }

    .slider-navigation {
      display:flex;
      align-items:center;
      justify-content: center;
      margin:10px auto;
    }
        </style>
</head>
<body>
<br>
<br><br>
    <div class="slideshow-container">
       <div class="slide fade" style="background-image: url('https://gaadiwaadi.com/wp-content/uploads/2022/03/Charge-Cars-1967-Ford-Mustang-EV-img1.jpg');"><br> <br> 
          <h1 style="text-align:center; color:white;font-size: 35px;margin-bottom: 0px;"><i>Find Your Dream Car with CarLuxePro</i> </h1>
          <p style="text-align:center; color:white;margin-bottom: 0px;">Transforming Car Shopping: Unveiling the Ultimate Way to Discover Your Dream Car.Master the Art of Car Shopping: Navigate to Your Dream Car with Precision</p>
          <div style="text-align: left;padding: 10px;">
          <a style="text-decoration: none" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl1']->value;?>
" > 
          <div class="button">
          <button   style="font-size: 18px; 
           padding: 10px 40px; background-color:#e51e20; color: #fff;border: none;border-radius: 5px;cursor: pointer;" >Explore Now <i style="color:white" class="fa-solid fa-arrow-right"></i></button>
           </div>
           </div>
       </div>
       <div class="slide fade" style="background-image: url('https://wallpaperaccess.com/full/5636721.jpg');"><div class="offer-container">
               
         <div class="offer">
             <br><br><br><br><br><br><br><br><br><br><br><br>
            <h2></h2>
             <div class="offer-details">
                 <h1 style="color:white">New Model cars</h1>
            <h1 style="color:white">The Badess.Reborn </h1>
             </div>
        </div>
               <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="vertical-line"></div>
        <div class="offer">
            <h2></h2>
             <div  class="offer-details">
                 <h1 style="color:white"> special Introductory  Price </h1>
            <h1 style="color:white">Starting From$34,9990</h1>
             </div>
        </div>
       </div></div>
       <div class="slide fade" style="background-image: url('https://www.boschaftermarket.com/xrm/media/images/country_specific/in/equipment_15/1073_as-esitronic_diagnostic_software_res_800x450.jpg');">
            <h2 style="text-align:center; color:white;"><br><br><i>Maintain, Repair, and Enhance Your Vehicle Here</i></h2>
            <p style="text-align:center; color:white;">
            Experience a Full Spectrum of Automotive Excellence: Where Quality Maintenance, Expert Repairs, and Vehicle Enhancements Converge</p>
        </div>
       <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    </div>
 <br>
<div class="Logomake" >
    <br>
    <h1 style="text-align: center" >MOST <span style="border-bottom: 5px solid red; ">POPULAR</span> BRANDS<h1>
       <div class="carLogo4" >
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MakeLogo']->value, 'logo');
$_smarty_tpl->tpl_vars['logo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->do_else = false;
?>
  <a style="text-decoration: none" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl2']->value;?>
?make=<?php echo $_smarty_tpl->tpl_vars['logo']->value['make'];?>
" >
    <div class="car-logo-item1" >
      <div class="logo3">
         <img src="data:image/png;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['logo']->value['make_logo']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['logo']->value['make'];?>
" class="Logo">
      </div>
      <div class="make-name-box">
         <p id="car-make1" ><?php echo $_smarty_tpl->tpl_vars['logo']->value['make'];?>
</p>
      </div>
    </div>
  </a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
</div>

<br>
<div class="background-container">
        <div class="background-left">
            <div class="content">
            <h1 style="color:white">TATA </h1>
            <p>Top Tata Car Models: A Comprehensive Overview</p>
            </div>
        </div>
        <div class="background-right">
            <div class="content1">
            <h1 style="color:white">Services Available </h1>
            <p>The Importance of Regular Car Maintenance: A Guide to Longevity</p>
            </div>
        </div>
    </div>
<br><br>

<div class="latestCar">
<div style="margin-left: 20px;" >
    <br>
    <h1 style="text-align: center">LATE<span style="border-bottom: 5px solid red; ">EST CA</span>RS</h1>
    <br>
    
    <div class="slider-navigation">
                <p id="back"> <i class="fa-sharp fa-solid fa-less-than"></i></p>
            <div class="car-slider">
                
    <div class="latest-cars-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
            <a style="text-decoration: none ;color:black" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl4']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
" class="latest-car">
                <div class="latest-car-item">
                   <?php if ($_smarty_tpl->tpl_vars['car']->value['image_data']) {?>
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['car']->value['image_data']);?>
" alt="Car Image" width="200" height="200">
                <?php } else { ?>
                    <p>No Image</p>
                <?php }?>
                <div class="latestCars">
                    <h3 class="latest-car-make"><?php echo $_smarty_tpl->tpl_vars['car']->value['make'];?>
</h3>
                    <p style="color:black"><i style="color:red" class="fa-solid fa-gauge fa-xs"></i>&nbsp;Mileage:12500</p>
                     <p  class="car-details-color"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00Lakhs</p>
                     <button style="font-size: 18px; 
    padding: 10px 40px; 
    background-color:red; 
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;" >View Details </button>
                </div>
                </div>
            </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
        <p id="next"> <i class="fa-sharp fa-solid fa-greater-than"></i></p>
            </div>
</div>
</div> </div>
<br><br>

            

<div class="searchCar">
    <?php if ((isset($_smarty_tpl->tpl_vars['mostSearchedCars']->value)) && $_smarty_tpl->tpl_vars['mostSearchedCars']->value) {?>
    <div class="most-searched-cars">
        <br>
        <br>
        <h1 style="text-align: center">MOST <span style="border-bottom: 5px solid red; ">SEARCHED </span>CARS</h1>
        
            <div class="slider-navigation">
                <p id="back"> <i class="fa-sharp fa-solid fa-less-than"></i></p>
            <div class="car-slider">
            <div class="car-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mostSearchedCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>
                <a style="text-decoration: none;color:black" href="<?php echo $_smarty_tpl->tpl_vars['aboutUrl4']->value;?>
?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['id'];?>
" class="latest-car">
                    <div class="car">
                        <?php if ($_smarty_tpl->tpl_vars['car']->value['image_data']) {?>
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($_smarty_tpl->tpl_vars['car']->value['image_data']);?>
" alt="Car Image" width="400" height="200">
                        <?php } else { ?>
                        <p>No Image</p>
                        <?php }?>
                        <div class="mostDetails">
                            <h3><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['make'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
                            <p style="color:black"><i style="color:red" class="fa-solid fa-gauge fa-xs"></i>&nbsp;Mileage:12500</p>
                            <p class="car-details-color"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['car']->value['cost'], ENT_QUOTES, 'UTF-8', true);?>
.00Lakhs</p>
                        </div>
                    </div>
                </a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            </div>
        
                <p id="next"> <i class="fa-sharp fa-solid fa-greater-than"></i></p>
            </div>  
            
    </div>
    <?php }?>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
  let slideIndex = 0;

function showSlides() {
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName("dot");
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    slideIndex++;
    
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

function currentSlide(n) {
    slideIndex = n;
    showSlides();
}

showSlides(); // Start the slideshow
// Start the slideshow

    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
    // jQuery is required for this script
    $(document).ready(function () {
        
    
        let scroll=document.querySelector(".car-slider");
        let back1=document.getElementById("back");
        let next1=document.getElementById("next");
        next1.addEventListener("click",()=>{
            scroll.style.scrollBehaviour="smooth";
            scroll.scrollLeft +=900;
        });
         back1.addEventListener("click",()=>{
             scroll.style.scrollBehaviour="smooth";
            scroll.scrollLeft -=900;
        });
        
    });  
       
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
