<?php    
    if (!empty($_SESSION["uniqueid"])) {
        require("../templates/navbar.php");
    }
?>

<table>    
    <tr><br/>
        <td style="width:350px;">
            <img alt="Cookbook Group" src="<?php echo $image; ?>"/>
        </td>
        <td>
            <h1 style=""><a href="<?php echo $amazonlink ;?>" target="new"><?php echo $bookname ;?></a></h1>
            <p style="line-height:40px;font-size:30px">Join this Cookbook Group to contribute to the member forum and view the cooking schedule.</p><br/>
            <form action="join.php" method="post">
                <input type='hidden' name='bookname' value="<?php echo $bookname; ?>">
                <input type='hidden' name='booklink' value="<?php echo $booklink; ?>">
                <button type="submit">Join Group</button>
            </form>
        </td>
    </tr>
</table>