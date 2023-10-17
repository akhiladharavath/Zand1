{assign var="contentType" value="text/html;charset=utf-8"}
{assign var="pageTitle" value="Zend Framework Tutorial"}

{* Output the doctype and HTML tags *}
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    {* Set the content type and title *}
    {include file="style.tpl"}
    
    
        <meta http-equiv="Content-Type" content="{$contentType}" />
    <title>{$pageTitle}</title>
    
</head>
<body>
   
    <header>
        {include file="navbar.tpl"}
    </header>
    <main>
        <div id="content">
            
            {block name=content}{/block}
        </div>
    </main>
    <footer>
        {include file="footer.tpl"}
    </footer>
</body>
</html>


