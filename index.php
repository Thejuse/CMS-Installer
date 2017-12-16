<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jBoilerplate</title>

		<!-- CSS -->
		<link rel="stylesheet" href="less/style.css">
	</head>
	<body>
		<!-- Header + Menu -->
		<header class="head">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 logo">
                        <img src="img/logo.svg" alt="logo" id="logo">
                    </div>
                    <div class="col-6 quick-navigation text-right">
                       <div class="display-table">
                           <div class="display-table-cell right">
                                <ul>
                                    <li><a href="https://github.com/Thejuse/CMS-Installer" class="hvr-grow"><i class="fab fa-github"></i></a></li>
                                    <li><a href="#info" onclick="info()" class="hvr-grow"><i class="fas fa-info"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</header>

		<!-- Content Section -->
		<main class="content">
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 sidebar">
                        <nav>
                            <ul>
                                <li><a href="#cms" class="scroll-trigger"><i class="far fa-list-alt"></i> CMS</a></li>
                                <li><a href="#cloud" class="scroll-trigger"><i class="fas fa-cloud"></i> Cloud</a></li>
                                <li><a href="#crm" class="scroll-trigger"><i class="far fa-chart-bar"></i> CRM</a></li>
                                <li><a href="#shop" class="scroll-trigger"><i class="fas fa-shopping-cart"></i> E-Commerce</a></li>
                                <li><a href="#forum" class="scroll-trigger"><i class="fas fa-bullhorn"></i> Forum</a></li>
                                <li><a href="#wiki" class="scroll-trigger"><i class="fas fa-info"></i> Wiki</a></li>
                                <li><a href="#members" class="scroll-trigger"><i class="fas fa-users"></i> Membership</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-9 page-content">
                        <div class="top-cms">
                        
                        </div>
                        <div class="cms-list">
                            <div class="category" id="cms">
                                <!-- WordPress -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/wordpress.png" alt="Wordpress">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>WordPress</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="4.9.1">4.9.1</option>
                                                        <option value="4.9">4.9</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Typo3 -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/typo3.png" alt="Typo3">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>Typo3</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="8.7.9">8.7.9</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Joomla -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/joomla.png" alt="Joomla">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>Joomla</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="3.8.3">3.8.3</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Concrete 5 -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/concrete5.png" alt="Concrete 5">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>Concrete 5</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="8.3.0">8.3.0</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- ImpressPages -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/impresspages.png" alt="ImpressPages">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>ImpressPages</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="5.0.3">5.0.3</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Grav CMS -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/grav.png" alt="Grav">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>Grav</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="1.3.10">1.3.10</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- October CMS -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cms/octobercms.png" alt="OctoberCMS">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>OctoberCMS</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option value="installer">Installer</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category" id="cloud">
                                <!-- NextCloud -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cloud/nextcloud.png" alt="NextCloud">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>NextCloud</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="12.0.4">12.0.4</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- OwnCloud -->
                                <div class="cms">
                                    <div class="row">
                                        <div class="col-lg-4 cms-image">
                                            <img src="img/cloud/owncloud.png" alt="NextCloud">
                                        </div>
                                        <div class="col-lg-8">
                                            <h2>OwnCloud</h2>
                                            <form action="#">
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option selected disabled>Version</option>
                                                        <option value="10.0.4">10.0.4</option>
                                                    </select>
                                                </div>
                                                <button class="btn btn-primary hvr-grow" type="submit">Install <i class="fas fa-angle-double-right"></i></button>
										    </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category" id="crm">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</main>

        <!-- JQuery -->
        <script src="javascript/external/jQuery/jquery.js"></script>
        <!-- PopperJS - Required for Bootstrap 4 -->
        <script src="javascript/popperjs/popper.js"></script>
        <!-- Bootstrap 4.0 -->
        <script src="javascript/external/bootstrap/bootstrap-4.0/bootstrap.js"></script>
        <!-- Sweetalert -->
        <script src="javascript/external/sweetalert/sweetalert.js"></script>
        <!-- Isotopes -->
        <script src="javascript/external/isotope/isotope.js"></script>
        <!-- Custom Script -->
        <script src="javascript/script.js"></script>
	</body>
</html>