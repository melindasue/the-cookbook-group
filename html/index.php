<?php

    // configuration
    require("../includes/config.php");
    
    if (empty($_SESSION["uniqueid"])) {
    redirect("login.php");
    }
    
    //determine if new user
    $count = query("SELECT groups FROM users WHERE uniqueid = ?", $_SESSION["uniqueid"]);
    $groups = $count[0]["groups"];

    //render correct page
    if ($groups == 0)
    {
        render("grouplist.php", ["title" => "Grouplist"]);
    }
    else 
        render("portfolio.php", ["title" => "Portfolio"]);
 
?>
