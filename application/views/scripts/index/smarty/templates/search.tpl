{extends file="layout.tpl"}
{block name=content}
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
    {foreach $cars as $car}
        <a  style="text-decoration: none" href="{$aboutUrl4}?id={$car.id}">
        
            <div class="car-result">
                <div class="image">
                {if $car.image_data}
                    <img class="car-image" src="data:image/jpeg;base64,{$car.image_data|base64_encode}" alt="Car Image" width="100" height="100">
                {else}
                    No Image
                {/if}
                </div>
                <div class="details">
                <div class="car-details"> <h2>{$car.make|escape}</h2></div>
               <div class="car-details"> <h3><i style="color:red" class="fa-solid fa-car"></i>&nbsp;{$car.model|escape}</h3></div>
               
               <div class="car-details"> <h3><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;{$car.cost|escape}.00Lakhs</h3></div>
               <div class="car-details"> <p>{$car.color|escape}&nbsp;Color</p></div>
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
    {/foreach}
</div>

    </body>
        </html>
        {/block}