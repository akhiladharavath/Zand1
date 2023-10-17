{extends file="layout.tpl"}

{block name=content} 

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
<h2 style="text-align: center">{$selectedMake} Model Cars</h2>
 {foreach $selectedDetails as $car}
      <a style="text-decoration: none ;color:black" href="{$aboutUrl4}?id={$car.id}" class="latest-car">
     <br>
     
<div class="car-details-container">
        
        <div class="image">
        {if $car.image_data}
            <img src="data:image/jpeg;base64,{$car.image_data|base64_encode}" alt="Car Image" width="200" height="200">
        {else}
            <p>No Image</p>
        {/if}
        </div>
        <div class="details">
        <h2>{$car.make|escape}</h2>
        <p class="car-details-model"><i style="color:red" class="fa-solid fa-car"></i>&nbsp;{$car.model|escape}</p>
        <p class="car-details-color">{$car.color|escape}</p>
        <p class="car-details-cost"><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i>&nbsp;{$car.cost|escape}.00Lakhs</p>
    </div>
</div>
       {/foreach}


{/block}