<?php
$titlePage = "Impact";
$pageDescription = "";
$pageKeywords = "";
require("part-head.php");
?>

    <body id="impact-page">
      
        <?php include_once("analyticstracking.php") ?>
        
        <?php require("part-header.php"); ?>
        
        <main>
            
            <section class="fullHeight" style="background-image: url('img/impact-banner.jpg');">
                <img src="img/misc.png" alt="" class="header-misc">
            </section>
            
            <!-- PROGRAM IMPACT -->
            <section class="section bg-white separator-before">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Program Impact</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat;</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="number-item">
                                <span>96%</span>
                                <h4 class="post-item-title">SOS youth<br> plan to atend<br> college</h4>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="number-item">
                                <span>61%</span>
                                <h4 class="post-item-title">SOS graduates<br>who returned to<br>mentor peers</h4>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="number-item">
                                <span>92%</span>
                                <h4 class="post-item-title">Total expenses<br>goes directly<br>to programs</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <blockquote class="text-center">
                                “[SOS] is truly a life-changing experience for the students and an incentive for them to improve and excel because they know that their ability to participate in this activity is dependent upon appropriate behavior from the beginning of the school year until the Ski Trip occurs. Participating in this new activity encouraged them to want to try other new things, and improved their self-esteem and self-confidence because even though it was hard at first, they learned that you keep on trying and that failing one time does not make you a failure.”
                                <span>-Ida Daniels, Hallett Fundamental Academy </span>
                            </blockquote>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p>Many peer organizations, associations and funders recognize SOS Outreach as a leader in program evaluation.  In 2008 and again in 2011, RRC Associates from Boulder, Colorado facilitated an in-depth survey of SOS participants.  Highlights of impacts include:</p>
                            <ul>
                                <li>Almost all SOS participants believe it is important to stay in school (96.7%) and intend to go to college (93.9%)</li>
                                <li>Most SOS participants feel that SOS helps them do better in school (90.6%), helps them feel proud of themselves (92.6%) and provides leadership opportunities (89%)</li>
                                <li>89% of SOS participants feel that SOS teaches them to be healthier</li>
                                <li>Participants exercise more frequently</li>
                                <li>60% of college-age past SOS participants surveyed were currently enrolled in college, compared to 28% of high school seniors from high-poverty schools who continued to college nationally in 2011 (Pell Institute)</li>
                                <li>SOS Participants display a significant increase in hope for the future and scored higher than their peer group on measures of self-esteem</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="section-subtitle text-center terciary">POSITIVE ACADEMIC IMPACTS ON SOS PARTICIPANTS</h2>
                            <ul>
                                <li>Increase in attendance</li>
                                <li>Increase in GPA among middle and high school participants</li>
                                <li>Better performance on Colorado State Assessments (TCAP) in Mathematics</li>
                            </ul>
                            <p>SOS’s intensive evaluation process captures the characteristics of the individuals served by the program including: age, cultural background, school of attendance, socioeconomic status, and pre-existing beliefs and behaviors related to SOS program objectives.</p>
                            <p>The Up2Us Center for Sports-Based Youth Development has identified SOS nationally for its innovative impact on youth.  In 2012, SOS was also the focus of a doctoral dissertation that investigated the process by which at-risk youth build resiliency.  Dr. Lisa Schrader’s findings demonstrated that the longer students are engaged in the core value based leadership program, the more they are integrating and utilizing the benefits in all areas of their lives.  The opportunities SOS provides including engagement with positive adult role models and the longevity of its program; create the organization’s impacts.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h3 class="section-subtitle text-center terciary top-margin">2013-2014 Fiscal Year: 4,569 Youth</h3>
                            <img src="img/fiscal-year.png" alt="2013-2014 Fiscal Year" class="img-responsive">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /PROGRAM IMPACT -->
            
            <!-- FACES OF SOS -->
            <?php require('part-faces.php'); ?>
            <!-- /FACES OF SOS -->
            
            <!-- Join the Family -->
            <?php require('part-join.php'); ?>
            <!-- /Join the Family -->
            
        </main>
        
        <?php require("part-footer.php"); ?>
        
        <?php require("part-script.php"); ?>
        
    </body>
</html>