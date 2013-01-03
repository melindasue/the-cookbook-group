<?php
    require("../includes/config.php");    
    //delete user and book name from portfolio table 
    query("DELETE FROM portfolio WHERE uniqueid = ? AND bookname = ?", $_SESSION["uniqueid"], $_POST["bookname"]);
    
    //decrease group count for user in users table by 1
    query("UPDATE users SET groups = groups - 1 WHERE uniqueid = ?", $_SESSION["uniqueid"]);
    redirect($_POST["booklink"]);
?>