<?php
/*
require_once "blocks/head.php";
*/
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Main page</title>
    <link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/aside.css" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="css/main_page.css" type="text/css" charset="utf-8">
    
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
                    <h2 class="heading">Tourism news</h2>
                    <div style="clear: both"><br></div>
                    
                    <?php
                    for ($i = 0; $i < 6; $i++) {
                        echo '<div class="article">
                            <img src="img/article_1.jpg" alt="test" title="test">
                            <span >Tourism is travel for pleasure or business; also the theory and practice of touring, the business of attracting, accommodating, and entertaining tourists, and the business of operating tours.</span>
                        </div>';  
                    }
                    ?>
                            
                    <div style="clear: both"></div>
                    <a href="" title="See more">
                        <div class="btn">
                            See more...
                        </div>
                    </a>
                    
                </div>
            </div>
            
            <?php
            require_once "blocks/aside.php";
            ?>
            
            <div id="subscribe">
                <span>Subscribe to get the latest news</span>
                <div style="clear: both"><br></div>
                
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fmandruy%2F%3F__tn__%3DkC-R%26eid%3DARCKLjcQ1mPTJsZmFTiIq1Lr2k8PBXg4ZHgPHi32a_smdCegz1yXKP0uHSUo093jsq2h3XyZocpowhL0%26hc_ref%3DARTh_WqY6DLyCohh5RfaDE8POkCatmanfOVO4OM7FDsK9wZ8TV9pVwrjnJpLUJVBxAs%26fref%3Dnf%26__xts__[0]%3D68.ARCMV_iivnKeXCSdSscF5ys_kBa17_NJwVEJUBqJvg0uuLLqnkZaVDNIabALFMtXltskpjgbtcmlPvjDZmMHJWXt2JJCS0W9L94kEYf8tuSK-KSfrwH9o98VmTDu3eJKRk0f53N6wnujRhh7UsJJ6BmlrUEC9FqXV7yEbZjtAHQBBQ7ifV3MQGD8r3etMZRXaLAenWGvIB5Y75TFAhFMk7X8BpBK7L_XYfRsaLytzzIyvI5m1qCRr3m88xDQfDiMJfZqOjojrLnF9Quj24NqBkajy6tf1T0Wg-IIrJ99YA2p3FBsva4IO8unOM5jfyfUT2FPWoldPq-uyDZq0n2Z32sEv9EL49ZyvqEUwJ7N5Jzh2L5VW3YkfsY&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fbucketlisttravelsguide%2F&tabs=timeline&width=350&height=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="350" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                
                <div id="sub_to_project">
                    <span class="heading">Subcribe to be with us</span>
                    <div style="clear: both"><br></div>
                    <p>To get all functions subscribe here</p>
                    
                    <a href="" title="See more">
                        <div class="btn">
                            Learn more about it
                        </div>
                    </a>
                    
                    <div id="one_course">
                        <h2 class="heading">Feedback from our clients</h2>
                        <div style="clear: both"><br></div>
                        <img src="img/Banner_1.jpg">
                    </div>
                    
                </div> 
            </div>
            <div style="clear: both"><br></div>
            <div id="web_sites">
                <span>Do you want to book a trip?</span>
                <a href="" title="Book now">
                    <div class="btn">
                        Book now !
                    </div>
                </a>
            </div>
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