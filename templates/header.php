<!DOCTYPE html>
<html>
    <head>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        
        <?php if (isset($title)): ?>
            <title>Cookbook Group: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Cookbook Group</title>
        <?php endif ?>
        
    </head>
    <body>
        <div class="container-fluid">
            <div id="top">
            <!--<a id="title-link" href="index.php"><h1 id="title">the cookbook group</h1></a>-->
            <h1 id="title">the cookbook group</h1>
            <span class="social-icons">
            <a class="icon" href="http://www.facebook.com"><img src="img/facebook.png" target="new" width="50px" height="50px"></a>
            <a class="icon" href="http://www.twitter.com"><img src="img/twitter.png" target="new" width="50px" height="50px"></a>           
            </span>                        
            </div>
            </div>
            <div id="middle">           
