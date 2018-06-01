<?php
$titlePage = "Resources";
$pageDescription = "";
$pageKeywords = "";
require("part-head.php");
?>

    <body id="resources-page">
      
        <?php include_once("analyticstracking.php") ?>
        
        <?php require("part-header.php"); ?>
        
        <main>
            
            <section class="fullHeight" style="background-image: url('img/contact-banner.jpg');">
                <img src="img/misc.png" alt="" class="header-misc">
            </section>
            
            <section class="section bg-white separator-before">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Youth Registration</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat;</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-white separator-before">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Program Payment</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat;</p>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-white separator-before">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Regional Information</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat;</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                            <img id="impact-map" src="img/map.png" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
        
        <?php require("part-footer.php"); ?>
        
        <?php require("part-script.php"); ?>
        
        <script>
            $(document).ready(function(){
                initCarousel();
                initLettering();
            });
        </script>
        
    </body>
</html>