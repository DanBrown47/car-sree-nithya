<?php
define("CSS_PATH", "css/");
?>

<!DOCTYPE html>
<html lang="en" class="wide">
<head>
    <title>Shortcodes</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/rd-mailform-2.css"/>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <style>
        
        main{
            color: #212121;
            background: #f7f7f7;
        }
 
        .icon-short-code {
          font-size: 16px;
            line-height: 2;
        }
                     

        .icon-short-code .box__left {
          padding-right: 10px;
          color: black;
        }

        h2{
            font-size: 45px;
            line-height: 1.7;
        }

        h3{
            font-weight: 700;
            text-transform: uppercase;
            font-size: 28px;
            line-height: 1.7;
        }

		h2 + h3{
			margin-top: 30px;
		}

		h3 + .row{
			margin-top: 20px;
		}

		.row + h3{ 
			margin-top: 60px;	
		}


        .box .box__left, 
        .box .box__right,
        .box .box__body { 
          display: table-cell;
          vertical-align: middle;
        }


        div.row div.clear-shortcode-xs-6 {
                margin-top: 0;
                margin-bottom: 0;
            }

         @media (max-width: 600px){
            div.row div.clear-shortcode-xs-6 {
                width: 100%;
            }
         }

        

         @media (min-width: 1200px){
             div.row div.clear-shortcode-xs-6:nth-child(3n+4){
                clear: left;
             }
          }

         @media (min-width: 992px) and (max-width: 1199px) {
            div.row div.clear-shortcode-xs-6:nth-child(3n+4) {
              clear: left;
            }
          }

         @media (min-width: 500px) and (max-width: 991px) {
            div.row div.clear-shortcode-xs-6:nth-child(2n+3) {
              clear: left;
            }
          }

        .page [class^="box"] + * {
            margin-top: 10px;
        }
        .page .icon {
            display: inherit;
        }
        

    </style>

    <!--[if lt IE 10]>
    <div
        style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                            HEADER
    =========================================================-->
    <header>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <!-- Brend -->
            <div class="rd-navbar-brand">
              <div class="rd-navbar-brand__name">
                <a href="./">
                  <span class="text-primary rd-navbar-brand__icon car-repire-icon-33"></span>
                  Car<span class="text-primary">repair</span>
                </a>
              </div>
            </div>
            <!-- END Brand -->

            <address class="contact-info">
              <p>
                28 Jackson Blvd Ste 1020 Chicago IL 60604-2340
              </p>
              <a class="bold heading-3" href="callto:#">
                <span class="text-icon-sm text-primary">
                  <span class="icon fa-phone"></span>
                  <span class="note">
                    24/7
                  </span>
                </span>
                800-2345-6789
              </a>
            </address>

          </div>
        </div>
      </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main class="content">
        <!-- Shortcodes -->
        <section class="well-md">
            <div class="container">

                <!-- Icons -->
                <?php
                $packs = array( 
                    "font-awesome","material-icons", "hotel-pictograms", "material-design", "linecons", "fl-sympletts",
                    "fl-squared-ui", "fl-soft-icons", "fl-simpleicon-communication",
                    "fl-real-estate-3", "fl-puppets", "fl-outicons", "fl-line-ui",
                    "fl-line-icon-set", "fl-justicons", "fl-icon-works", "fl-great-icon-set",
                    "fl-glypho", "fl-free-chaos", "fl-flat-icons-set-2", "fl-fill-round-icons",
                    "fl-dripicons", "fl-drawing-tools", "fl-demo-icons", "fl-demo-icons", "fl-crisp-icons",
                    "fl-continuous", "fl-clear-icons", "fl-chapps", "fl-budicons-launch", "fl-budicons-free",
                    "fl-bigmug-line", "fl-36-slim-icons", "beach-icons", "arrows", "car-repire"
                );

                $di = new RecursiveDirectoryIterator(CSS_PATH);
                $files = array();
                $fa = 0;
                foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
                    if (in_array(basename($filename, ".css"), $packs)) {                     
                        if (basename($filename, ".css") != "font-awesome"){
                            array_push($files, $filename);
                            echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";                              
                        }                  
                        else{
                            $fa = 1;
                        }
                        
                    } 
                }

                if($fa){
                    array_push($files, "css\\font-awesome.css");
                    echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";                                  
                }

                if (count($files) > 0) {
                    echo '<h2>Icons</h2>';
                    foreach ($files as $i => $filename) {
                        echo '<h3>' . basename($filename, ".css") . '</h3>';
                        echo '<div class="row flow-offset-1">';
                        $handle = fopen($filename, "r");
                        $icons = array(); 

                        while (($line = fgets($handle)) !== false) {  
                            if (preg_match("/\.(" . ( (basename($filename, ".css") == "material-design") || (basename($filename, ".css") == "hotel-pictograms") ? "(flaticon)|(material-design)" : basename($filename, ".css")) . "-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                array_push($icons, $result[1]);  
                            }                            
                          

                            switch (basename($filename, ".css")) {
                                case 'font-awesome':
                                    if(preg_match("/\.(fa-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                      array_push($icons, $result[1]);  
                                    }
                                    break;                                                      
                                
                            }
                        } 

                       

                        if (count($icons) <= 10){
                            $bp = ceil(count($icons) / 5);                            
                        }
                        else{
                            $bp = ceil(count($icons) / 10);
                        }

                        foreach ($icons as $i => $value) {
                            if (fmod($i + $bp, $bp) == 0) {
                                if ($i != 0) {
                                    echo '</div>';
                                }
                                echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 ">';
                            }
                            echo '<div class="box icon-short-code">';
                            echo '<div class="box__left">';
                            echo '<div class="icon ' . $value . '"></div>';
                            echo '</div>';
                            echo '<div class="box__body"> .' . $value . '</div>';
                            echo '</div>';
                            if ($i == count($icons) - 1) {
                                echo '</div>';
                            }
                        }

                        echo '</div>'; 
                        fclose($handle);
                    }                    
                }
                ?>
                <!-- END Icons -->
            </div>
        </section>
        <!-- END Shortcodes -->
    </main> 


    <!--========================================================
                            FOOTER
    =========================================================-->
    <footer class="well-4">
        <div class="container">
              <p class="rights">
                Car Repair © <span id="copyright-year"></span> All Rights Reserved
              </p>
        </div>
      </footer>

</div>
<script src="js/script.js"></script>
</body>
</html>