 <div class="all-content-wrapper" >

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="height: ;">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area"  >
            <div class="header-top-area" style="background-color: rgba(122,122,122,0.6);" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n" >
                                            <ul class="nav navbar-nav mai-top-nav" style="background-color: rgba(122,122,122,0.2);" >
                                                <li class="nav-item"><a href="../?title=Accueil" class="nav-link">Home</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                               
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name"> <?php if (isset($_SESSION['user'])) {
                                                                # code...
                                                           echo(ucfirst( strtolower( $_SESSION['user']->getNom() ))); } ?> </span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                        
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                      <!--  
                                                      <li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>My Account</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-money author-log-ic"></span>User Billing</a>
                                                        </li>
                                                        <li><a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                        </li>
                                                    -->

                                                        <li><a href="deconnexion.php"><span class="edu-icon edu-locked author-log-ic"></span>Deconnexion</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>