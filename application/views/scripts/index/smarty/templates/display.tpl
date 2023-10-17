{extends file="layout.tpl"}
{block name=content}
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
    {if !empty($carData.image_data)}
        <img src="data:image/jpeg;base64,{$carData.image_data|base64_encode}" alt="Car Image">
    {else}
        No Image
    {/if}
    <div class="car-details-content">
        <h3>{$carData.make|escape}</h3>
        <div class="disp2">
        <div class="disp">
        <p><strong><i style="color:red" class="fa-solid fa-car"></i>&nbsp;Model:</strong> {$carData.model|escape}</p>
        <p style="color:black">&nbsp;<i style="color:red" class="fa-solid fa-gauge fa-xs"></i><b>Mileage</b>:12500</p>
        <p><strong>Color:</strong> {$carData.color|escape}</p>
        
        <h2><strong><i style="color:red" class="fa-solid fa-indian-rupee-sign"></i></strong> {$carData.cost|escape}.00 Lakhs</h2>
        </div>
         
        </div>
        <p>Discover the elegance of the Model . Packed with advanced features and a powerful electric drivetrain, the Model  is a true masterpiece of engineering. </p>
        <div class="actions">
            <form action="{$aboutUrl7}" method="GET">
                <input type="hidden" name="id" value={$carData.id}>
                <button class="button" type="submit"><i class="fa-solid fa-pen-to-square"></i>Edit</button>
            </form>
            <form action="{$aboutUrl8}" method="GET">
                <input type="hidden" name="id" value={$carData.id}>
                <button class="button" type="submit"><i class="fa-solid fa-trash"></i>Delete</button>
            </form>
                <br><br><br><br>
        </div>
    </div>
</div>
    <br>
   <br><br><br>
{/block}
 