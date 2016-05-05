<?php
 
    // configuration
	require("../includes/config.php");
 
    // if user reached page via GET 
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        render("register_form.php", ["title" => "Register"]);
    }
 
    // else if user reached page via POST
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["username"]))
        {
            apologize("Provide a username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("Provide a password.");
        }
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must confirm your password.");
        }
        else if ($_POST["confirmation"] != $_POST["password"])
        {
        	apologize("Password and confirmation do not match");
        }
 
        // query 
        $success = CS50::query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"]));
 
        if ($success === false)
        {
        	apologize("Account creation failed");
        } 
        else {
        	$rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
	    	$id = $rows[0]["id"];
 
	        // remember that user's now logged in by storing user's ID in session
	        $_SESSION["id"] = $id;
 
	        // redirect to portfolio
	        redirect("/"); 
        }   	
 
        
	}
?>
