{if $pageCount}
<div class="fg-toolbar tableFooter">
    {*
    <div class="dataTables_info" id="checkAll_info">
        {$firstItemNumber} - {$lastItemNumber} of {$totalItemCount}
    </div>
    *}

    <div class="dataTables_paginate paging_full_numbers" id="checkAll_paginate">
        {* First page link *}
        {*
        {if isset($previous)}
            <a class="first paginate_button" tabindex="0" id="checkAll_first" href="?page={$first}">First</a>
        {else}
            <a class="first paginate_button paginate_button_disabled" tabindex="0" id="checkAll_first">First</a>
        {/if}
        *}

        {* Previous page link *}
        {if isset($previous)}
            <a class="previous paginate_button" tabindex="0" id="checkAll_previous" href="?page={$previous}">Previous</a>
        {else}
            <a class="previous paginate_button paginate_button_disabled" tabindex="0" id="checkAll_previous">Previous</a>
        {/if}
        {* end Previous page link *}

        <span>
            {foreach from=$pagesInRange item=page}
                {if $page == $current}
                    <a class="paginate_active" tabindex="0">{$page}</a>
                {else}
                    <a class="paginate_button" tabindex="0" href="?page={$page}">{$page}</a>
                {/if}
            {/foreach}
        </span>

        {* Next page link *}
        {if isset($next)}
            <a class="next paginate_button" tabindex="0" id="checkAll_next" href="?page={$next}">Next</a>
        {else}
            <a class="next paginate_button paginate_button_disabled" tabindex="0" id="checkAll_next">Next</a>
        {/if}
        {* end Next page link *}

        {* Last page link *}
        {* 
        {if isset($next)}
            <a class="last paginate_button" tabindex="0" id="checkAll_last" href="?page={$last}">Last</a>
        {else}
            <a class="last paginate_button paginate_button_disabled" tabindex="0" id="checkAll_last">Last</a>
        {/if}
        *}
        {* Last page link *}
    </div>
</div>
{/if}

