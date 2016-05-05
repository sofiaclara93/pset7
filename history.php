<?php
 
    // configuration
    require("../includes/config.php"); 
 
    $transactions = CS50::query("SELECT * FROM history WHERE id = ?", $_SESSION["id"]);
 
    render("history_form.php", ["transactions" => $transactions, "title" => "History"]);
 
?>
