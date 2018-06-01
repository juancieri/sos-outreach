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
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="gray-block">
                                <h4 class="post-item-title">User Login</h4>
                                <form class="form" data-toggle="validator">
                                    <div class="form-group">
                                        <label class="control-label">USERNAME (Email)</label>
                                        <input type="text" name="username" class="form-control" required data-required-error="Required Field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">PASSWORD</label>
                                        <input type="password" name="password" class="form-control" required data-required-error="Required Field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" name="submit" class="post-item-btn">Login+</button>
                                    </div>
                                    <div class="form-group">
                                        <a href="#">forgot password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="gray-block">
                                <h4 class="post-item-title">Participant Application</h4>
                                <form class="form" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">First name</label>
                                                <input type="text" name="firstname" class="form-control" required data-required-error="Required Field">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Last name</label>
                                                <input type="text" name="lastname" class="form-control" required data-required-error="Required Field">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Day of birth (mm/dd/yy)</label>
                                        <input type="date" name="birth" class="form-control" required data-required-error="Required Field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" name="submit" class="post-item-btn">Login+</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="gray-block">
                                <h4 class="post-item-title">Staff Application</h4>
                                <form class="form" data-toggle="validator">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">First name</label>
                                                <input type="text" name="firstname" class="form-control" required data-required-error="Required Field">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label">Last name</label>
                                                <input type="text" name="lastname" class="form-control" required data-required-error="Required Field">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Day of birth (mm/dd/yy)</label>
                                        <input type="date" name="birth" class="form-control" required data-required-error="Required Field">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" name="submit" class="post-item-btn">Login+</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <h1 class="section-title">Program Payment</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis  nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat;</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h4 class="post-item-title">Winter Programs</h4>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingOne">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Front Range / Pay In Full
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingTwo">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Eagle and summit countries / pay in full
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="headingThree">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Eagle and summit countries / pay in installments
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading04">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
                                        Leadville / pay in full
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse04" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading04">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading05">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
                                        Leadville / pay in installments
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse05" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading05">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                            <h4 class="post-item-title">Youth Agency</h4>
                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading06">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse06" aria-expanded="false" aria-controls="collapse06">
                                        Pay in full
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse06" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headin06">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                            <h4 class="post-item-title">Misc Payment Amount</h4>
                            <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading07">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse07" aria-expanded="false" aria-controls="collapse06">
                                        Pay in full
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse07" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headin07">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="section bg-white">
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
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h4 class="post-item-title">Eagle country</h4>
                            
                            <div id="calendar">
                                <div class="calendar-header">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-angle-left"></i> </a></li>
                                        <li> <h4>December 2017</h4> </li>
                                        <li><a href="#"> <i class="fa fa-angle-right"></i> </a></li>
                                    </ul>
                                </div>
                                <div class="calendar-body table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Sunday</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><button type="button">1</button></td>
                                            </tr>
                                            <tr>
                                                <td><button type="button">2</button></td>
                                                <td><button type="button" class="active">3</button></td>
                                                <td><button type="button">4</button></td>
                                                <td><button type="button">5</button></td>
                                                <td><button type="button">6</button></td>
                                                <td><button type="button">7</button></td>
                                                <td><button type="button">8</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div id="calendar-results">
                                
                                <div class="result">
                                    <h5>Tuesday 3<span>rd</span></h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                
                                <div class="result">
                                    <h5>Tuesday 12<span>th</span></h5>
                                    <p>Lorem ipsum</p>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>     
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="panel-group" id="accordion4" role="tablist" aria-multiselectable="true">
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading08">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
                                        Programs
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse08" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headin08">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                               <div class="panel panel-default">
                                  <div class="panel-heading" role="tab" id="heading09">
                                     <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
                                        Students Resources
                                        </a>
                                     </h4>
                                  </div>
                                  <div id="collapse09" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headin09">
                                     <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                     </div>
                                  </div>
                               </div>
                            </div>
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