<?php

    require("../includes/config.php");
    
    //get book's info
    $bookinfo = query("SELECT bookname, amazonlink, image, booknum, googledoc, booklink, formlink FROM books WHERE booknum = ?", $_GET["booknum"]);
    $bookname = $bookinfo[0]["bookname"];
    $amazonlink = $bookinfo[0]["amazonlink"];
    $image = $bookinfo[0]["image"];
    $booknum = $bookinfo[0]["booknum"];  
    $googledoc = $bookinfo[0]["googledoc"]; 
    $booklink = $bookinfo[0]["booklink"];
    $formlink = $bookinfo[0]["formlink"];
    
    //user signed in
    if (!empty($_SESSION["uniqueid"])) {

        $userinfo = query("SELECT uniqueid, bookname FROM portfolio WHERE uniqueid = ? AND bookname = ?", $_SESSION["uniqueid"], $bookname);
    
        //if user is not a group member
        if (empty($userinfo))    
        {
            //show join button
            render("group.php", ["title" => $bookname, "bookname" => $bookname, "amazonlink" => $amazonlink, "image" => $image, "booklink" => $booklink]);
        }
    
        else
        {
            //show discussion form and leave button
            render("member.php", ["title" => $bookname, "bookname" => $bookname, "amazonlink" => $amazonlink, "image" => $image, "googledoc" => $googledoc, "booklink" => $booklink, "formlink" => $formlink]);
        }
    }
    //user not signed in
    else
        render("group-no.php", ["title" => $bookname, "bookname" => $bookname, "amazonlink" => $amazonlink, "image" => $image]);
        
?>