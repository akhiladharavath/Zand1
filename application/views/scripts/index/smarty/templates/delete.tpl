{extends file="layout.tpl"}

{block name=content} 

<style>
   .delete{
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
      font-size: 30px;
   } 
   
   
</style>
 <br><br><br>
<div class="delete">
    <br><br>
<p>Are you sure that you want to delete 
  '{$album.make|escape}' by 
  '{$album.model|escape}'?
  '{$album.color|escape}'?
</p>
<br>
<form action="{$aboutUrl8}" method="post">
    <div>
        <input type="hidden" name="id" value="{$album.id}" />
        <input style="background-color: red;color:white;font-size:20px;width: 90px;border:0;border-radius: 3px" type="submit" name="del" value="Yes" />
     
        <input style="background-color: red;color:white;font-size:20px;width: 90px;border:0;border-radius: 3px" type="submit" name="del" value="No" />
    </div>
        <br>
</form>
        <br><br><br><br><br><br>
</div>

{/block}