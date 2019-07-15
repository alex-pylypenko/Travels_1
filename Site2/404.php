<?php
/*
require_once "blocks/head.php";
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Error 404</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="img/favicon1.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>
    
<body>
    <div id="wrapper">
        <div id="content">
            
            <?php
            require_once "blocks/header.php";
            ?>
            
            <div id="main">
                <div id="news">
                    <h2 class="heading">Error 404</h2>
                    <div style="clear: both"><br></div>
                    
                    <div class="block">
                        Error 404. Go back to main page
                        <a href="index.php">press here</a>
                    </div>
                    
                </div>
            </div>
            
            <?php
            require_once "blocks/aside.php";
            ?>
            
        </div>
        
        <?php
        require_once "blocks/footer.php";   
        ?>
    </div>
    
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <?php
    require_once "blocks/JS_scripts.php";
    ?>
</body>


</html>