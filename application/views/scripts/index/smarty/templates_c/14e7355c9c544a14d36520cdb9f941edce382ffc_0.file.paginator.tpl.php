<?php
/* Smarty version 4.3.2, created on 2023-09-03 16:12:20
  from 'C:\xampp\htdocs\Zand1\Zand1\application\views\scripts\index\smarty\templates\paginator.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f4a254ea8ad6_75375216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e7355c9c544a14d36520cdb9f941edce382ffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zand1\\Zand1\\application\\views\\scripts\\index\\smarty\\templates\\paginator.tpl',
      1 => 1693753936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f4a254ea8ad6_75375216 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
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


<?php if ($_smarty_tpl->tpl_vars['pageCount']->value) {?>
<div class="fg-toolbar tableFooter">
    
    <div class="dataTables_paginate paging_full_numbers" id="checkAll_paginate">
        <?php if ((isset($_smarty_tpl->tpl_vars['previous']->value))) {?>
            <a class="previous paginate_button" tabindex="0" id="checkAll_previous" href="?page=<?php echo $_smarty_tpl->tpl_vars['previous']->value;?>
">Previous</a>
        <?php } else { ?>
            <a class="previous paginate_button paginate_button_disabled" tabindex="0" id="checkAll_previous">Previous</a>
        <?php }?>

        <span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagesInRange']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['current']->value) {?>
                    <a class="paginate_active" tabindex="0"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                <?php } else { ?>
                    <a class="paginate_button" tabindex="0" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </span>
        <?php if ((isset($_smarty_tpl->tpl_vars['next']->value))) {?>
            <a class="next paginate_button" tabindex="0" id="checkAll_next" href="?page=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
">Next</a>
        <?php } else { ?>
            <a class="next paginate_button paginate_button_disabled" tabindex="0" id="checkAll_next">Next</a>
        <?php }?>
  
    </div>
</div>
<?php }?>

<?php }
}
