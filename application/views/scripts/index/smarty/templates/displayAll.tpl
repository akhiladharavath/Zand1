{extends file="layout.tpl"}

{block name=content} 
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
    {foreach $paginator as $car}
        <a style="text-decoration: none" href="{$aboutUrl4}?id={$car.id}">
            <div class="car-box">
                {if $car.image_data}
                  
                    <img src="data:image/jpeg;base64,{$car.image_data|base64_encode}" alt="Car Image" width="250" height="200">
                {else}
                    <p>No Image </p>
                {/if}
                <div style="color:black" class="displayAll">
                    
                <h3>{$car.make|escape}&nbsp;{$car.model|escape}</h3>
               <p  class="car-details-color"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;{$car.cost|escape}.00Lakhs</p>
               
            </div>
             </div>
        </a>
    {/foreach}
</div>
 
<div class="pagination" style="text-align: center">
    
    {include file="paginator.tpl" }
   
</div>

</div>
</div>
</body>
</html>
{/block}