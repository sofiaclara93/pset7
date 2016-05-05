<?php
 
    // configuration
    require("../includes/config.php"); 
 
    // if user reached page via GET 
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        
        render("quote_form.php", ["title" => "Quote"]);
    }
 
    // else if user reached page via POST 
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $stock = lookup($_POST["symbol"]);
 
        if ($stock === false)
        {
        	apologize("The stock could not be found");
        }
 
        render("stock_price.php", ["stock" => $stock]);
 
    }
 
?>
