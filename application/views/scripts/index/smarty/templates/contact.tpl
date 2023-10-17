{extends file="layout.tpl"}

{block name=content}
    
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Styles for the contact container */
.contact-container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    text-align: center;
}

/* Styles for the contact information section */
.contact-info {
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 5px;
    margin-top: 20px;
}

/* Styles for the contact form section */
.contact-form {
    margin-top: 20px;
}

/* Styles for form labels */
label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <br><br>
    <div class="contact-container">
        <h1>Con<span style="border-bottom: 5px solid red; ">tact </span>Us</h1>
        <p>Have questions or need assistance? Feel free to get in touch with us. We're here to help!</p>
        
        <div class="contact-info">
            <h2>Contact Information</h2>
            <ul style=" list-style-type: none;">
                <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                <li><strong>Email:</strong> info@yourcompany.com</li>
                <li><strong>Address:</strong> 123 Main Street, City, Country</li>
            </ul>
        </div>
        
        <br><br><br>
</body>
</html>
{/block}