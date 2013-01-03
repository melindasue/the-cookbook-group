<?php
     
    //user signed in
    if (!empty($_SESSION["uniqueid"])) {
        require("../templates/navbar.php");
        $groups = query("SELECT groups FROM users WHERE uniqueid = ?", $_SESSION["uniqueid"]);
        $groups = $groups[0]["groups"];
        if ($groups == 0) {
            print("<h3 class='listhead-center'>You aren't in any Groups yet.<br/>All Cookbook Groups:</h3><br/>");            
        }
        else {
            print("<h3 class='listhead'>All Cookbook Groups</h3>");
        }
    }
    
    //user not signed in
    else {
        require("../templates/navbar2.php");
        print("<h3 class='listhead-center'>Welcome! Browse our Cookbook Groups:</h3><br/>");
    }
    
    //return list of all books in database    
    $rows = query("SELECT * FROM books");
    $array_count = count($rows);             
?>     
      
<table class="table">
    <tr>
    <?php
        $count = 0;
        foreach($rows as $row)
        {            
            //returns book info
            $count++;
            $bookinfo = query("SELECT image, bookname, booklink, amazonlink, formlink FROM books");
            $image = $bookinfo[0]["image"]; 
            $bookname = $bookinfo[0]["bookname"];
            $booklink = $bookinfo[0]["booklink"]; 
            $amazonlink = $bookinfo[0]["amazonlink"]; 
            $formlink = $bookinfo[0]["formlink"]; 
            $text = 'Cookbook Image';                 
            
            print("<td><a class='cookbook' href=". $row["booklink"] . "><img alt=" . $text . " src=" . $row["image"] ."></a></td>"); 
            
            if($count % 3 === 0)
            {                
                print("</tr>");                
                if ($count < $array_count)
                {
                print("<tr>");
                }                
            }            
         }
    ?>    
    </tr>
</table>