<style>
    /* Pagination container */
.fg-toolbar {
    margin-top: 20px;
    text-align: center;
}

/* Pagination links */
.paginate_button {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 2px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Active page link */
.paginate_active {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 2px;
    font-weight: bold;
    background-color: red;
    color: #fff;
    border: 1px solid #007bff;
    border-radius: 3px;
    border:0;
}

/* Disabled page link */
.paginate_button_disabled {
    display: inline-block;
    padding: 5px 10px;
    margin: 0 2px;
    text-decoration: none;
    color: #ccc;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Previous and Next links */
.previous, .next {
    display: inline-block;
    padding: 5px 10px;
    text-decoration: none;
    color: #333;
    border: 1px solid #ccc;
    border-radius: 3px;
}

/* Add some margin to the Next link */
.next {
    margin-left: 10px;
}

</style>


{if $pageCount}
<div class="fg-toolbar tableFooter">
    
    <div class="dataTables_paginate paging_full_numbers" id="checkAll_paginate">
        {if isset($previous)}
            <a class="previous paginate_button" tabindex="0" id="checkAll_previous" href="?page={$previous}">Previous</a>
        {else}
            <a class="previous paginate_button paginate_button_disabled" tabindex="0" id="checkAll_previous">Previous</a>
        {/if}

        <span>
            {foreach from=$pagesInRange item=page}
                {if $page == $current}
                    <a class="paginate_active" tabindex="0">{$page}</a>
                {else}
                    <a class="paginate_button" tabindex="0" href="?page={$page}">{$page}</a>
                {/if}
            {/foreach}
        </span>
        {if isset($next)}
            <a class="next paginate_button" tabindex="0" id="checkAll_next" href="?page={$next}">Next</a>
        {else}
            <a class="next paginate_button paginate_button_disabled" tabindex="0" id="checkAll_next">Next</a>
        {/if}
  
    </div>
</div>
{/if}

