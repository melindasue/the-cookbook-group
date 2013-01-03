<?php        
    require("../templates/navbar.php");
        
    print("<h3 class='listhead'>Your Cookbook Groups</h3>");
        
    //return list of user's groups
    $rows = query("SELECT bookname FROM portfolio WHERE uniqueid = ?", $_SESSION["uniqueid"]);
    $array_count = count($rows);               
?>
        
<table class="table">
    <tr>
    <?php
        //displays info for each of user's groups in new row
        $count = 0;
        foreach ($rows as $row) 
        {            
            $count++;
            $bookinfo = query("SELECT image, booklink, googledoc FROM books WHERE bookname = ?", $row["bookname"]);
            $bookname = $row["bookname"];
            $image = $bookinfo[0]["image"]; 
            $booklink = $bookinfo[0]["booklink"]; 
            $googledoc = $bookinfo[0]["googledoc"]; 
            $text = 'Cookbook Image';                  
            print("<td><a class='cookbook' href=" . $booklink . "><img alt=" . $text . " src=" . $image . "></a></td>"); 
                //print("<td><a href=" . $booklink . "><h3>" . $bookname . "</h3></a>");
                //print("<a href=" . $googledoc . "><h4>> View the cooking schedule</h4></a></td>");      
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

