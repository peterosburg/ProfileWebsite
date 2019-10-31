<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>        
        <?php 
            include 'headData.php';

            (new HeadData())->createHtmlHead();
        ?>
    </head>
    <body>        
        <div id="fixed_hero">
            <img src="hero_1.jpg" alt="Peter Osburg header image" id="hero" />
        </div>
        
        <div id="content">
            <div id="empty_offset">
                &nbsp;        
            </div>
            <?php
                include 'cardReader.php';
            
                $reader = new cardReader();
            ?>
        </div>

        <div id="footer">
            <!-- It'll be awesome, if you reuse my template, when you would at least mention me -->
            Created 2019 by Peter Osburg<br>
            <span id="imprint">peter.osburg-at-gmail.com</span>
        </div>
    </body>
</html>