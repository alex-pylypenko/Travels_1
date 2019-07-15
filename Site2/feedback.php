<?php
/*
require_once "blocks/head.php";
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/form.css" type="text/css" charset="utf-8">
    
    <meta name="description" content="Info about tourism and travel! Blogs and articles about adventures.">
    <meta name="keywords" content="Tourism, travel, adventure, sea, beach, vacation">
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
                    <h2 class="heading">Contact us</h2>
                    <div style="clear: both"><br></div>
                    
                    <div class="block">
                        <form>
                            <div>
                                <input type="text" id ="name" placeholder="Name" onclick="$(this).css ('border-color', '#ff8800')"><br>
                                <input type="email" id ="email" placeholder="E-mail" onclick="$(this).css ('border-color', '#ff8800')">
                            </div>
                            <div>
                                <textarea id="message" placeholder="Text message here" onclick="$(this).css ('border-color', '#ff8800')"></textarea>
                            </div>
                            <input type="button" id="send" class="btn" value="send">
                        </form>
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
    
    <?php
    require_once "blocks/JS_scripts_send.php";
    ?>
</body>


</html>