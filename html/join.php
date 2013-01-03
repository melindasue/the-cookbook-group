<?php
    require("../includes/config.php");    
    //update portfolio table to include user and book name
    query("INSERT INTO portfolio (uniqueid, bookname) VALUES(?,?)", $_SESSION["uniqueid"], $_POST["bookname"]);
    
    //increase group count for user in users table by 1
    query("UPDATE users SET groups = groups + 1 WHERE uniqueid = ?", $_SESSION["uniqueid"]);
    redirect($_POST["booklink"]);
?>