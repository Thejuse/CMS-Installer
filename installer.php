<?php 
/**
 * CMS-Installer
 * Copyright (c) Webintosh.at | Julian Seidl
 *
 * Version 2.0.0
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 */
	// Database
	$version = "v2.0.0";
	$apps = array(
		"WordPress" => array(
			"name" => "WordPress",
			"version" => "4.7.7",
			"category" => "Blog",
			"link" => "https://wordpress.org",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/wordpress.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/wordpress-4.7.4.tar.gz"
		),
		"Typo3-7" => array(
			"name" => "Typo3",
			"version" => "7.6.16",
			"category" => "CMS",
			"link" => "https://typo3.org",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/typo3.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/t3-7.6.16.tar.gz"
		),
		"MediaWiki" => array(
			"name" => "MediaWiki",
			"version" => "1.28.2",
			"description" => "",
			"category" => "Wiki",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/mediawiki.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/mediawiki-1.28.2.tar.gz"
		),
		"Shopware" => array(
			"name" => "Shopware",
			"version" => "5.22.2",
			"category" => "E-Commerce",
			"link" => "https://de.shopware.com",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/shopware.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/sw-5.22.2.zip"
		),
		"Espocrm" => array(
			"name" => "Espocrm",
			"version" => "4.6.0",
			"category" => "CRM",
			"link" => "https://www.espocrm.com/",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/espocrm.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/EspoCRM-4.6.0.zip"
		),
		"Joomla" => array(
			"name" => "Joomla!",
			"version" => "3.7.0",
			"category" => "CMS",
			"link" => "https://www.joomla.de/",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/joomla.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/joomla-3.7.0.zip"
		),
		"Mybb" => array(
			"name" => "MyBB",
			"version" => "1.8.11",
			"category" => "Forum",
			"link" => "https://mybb.com",
			"img" => "https://cms-installer.webintosh.at/2.0.0/img/mybb.png",
			"download" => "https://cms-installer.webintosh.at/2.0.0/mybb-1.8.11.zip"
		),
	);
	$httpMethod = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
    $cms = filter_input(INPUT_POST, 'cms');
    $btnclass = "";
    $isinstalled = "";
    $installed = "";
    $afterinstall = "";
    if ($httpMethod === 'POST') {
    	$afterinstall = "notshow";
    	$isinstalled = "isinstalled";
    	$installed = "progress-bar-installed";
    	if("Typo3-7" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('tar -xzvf t3-7.6.16.tar.gz');
                    exec('mv typo3_src-7.6.16/* .');
                    exec('rm -rf typo3_src-7.6.16/');
                    exec('ln -s ..'. $pathname .' typo3_src');
                    exec('ln -s typo3_src/typo3 typo3');
                    exec('ln -s typo3_src/index.php index.php');
                    exec('rm -rf t3-7.6.16.tar.gz');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("WordPress" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('tar -xzvf wordpress-4.7.4.tar.gz');
                    exec('mv wordpress/* .');
                    exec('rm -rf wordpress/');
                    exec('rm -rf wordpress-4.7.4.tar.gz');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("MediaWiki" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('tar -xzvf mediawiki-1.28.2.tar.gz');
                    exec('mv mediawiki-1.28.2/* .');
                    exec('rm -rf mediawiki-1.28.2/');
                    exec('rm -rf mediawiki-1.28.2.tar.gz');
                    exec('chmod -R 775 ..'. $pathname .'');
                   	exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("Shopware" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('unzip sw-5.22.2.zip');
                    exec('mv install_5.2.22_0010210a2d8f7c275ca9bbed06b0f213cbb4b048/* .');
                    exec('rm -rf install_5.2.22_0010210a2d8f7c275ca9bbed06b0f213cbb4b048/');
                    exec('rm -rf sw-5.22.2.zip');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("Espocrm" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('unzip EspoCRM-4.6.0.zip');
                    exec('mv EspoCRM-4.6.0/* .');
                    exec('rm -rf EspoCRM-4.6.0/');
                    exec('rm -rf EspoCRM-4.6.0.zip');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("Joomla" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('unzip joomla-3.7.0.zip');
                    exec('mv Joomla_3.7.0-Stable-Full_Package/* .');
                    exec('rm -rf Joomla_3.7.0-Stable-Full_Package/');
                    exec('rm -rf joomla-3.7.0.zip');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    	else if("Mybb" === $cms){
    		foreach ($apps as $items => $item) {
    			if($items === $cms){
    				$pathname = dirname($_SERVER['PHP_SELF']);
    				exec('wget '. $item["download"] .' ');
    				exec('unzip mybb-1.8.11.zip');
                    exec('mv mybb-1.8.11/* .');
                    exec('rm -rf mybb-1.8.11/');
                    exec('rm -rf mybb-1.8.11.zip');
                    exec('chmod -R 775 ..'. $pathname .'');
                    exec('rm -rf installer.php');
    			}
    		}
    	}
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CMS-Installer</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			@import url(https://fonts.googleapis.com/css?family=Oswald);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700);.head{background-color:#212121;padding-top:15px;padding-bottom:15px}.head .head--headline{color:#FFF;font-family:Oswald;font-size:26px;margin-bottom:0}.main{margin-top:20px}.main.notshow{display:none}.main.afterinstall{display:none}.main.afterinstall.isinstalled{display:block!important}.main .cms-list .grid .grid-item{width:50%;padding-left:10px;padding-right:10px}@media (max-width:992px){.main .cms-list .grid .grid-item{width:100%;padding-right:0;padding-left:0}.main .cms-list .grid .grid-item .panel-default .panel-body .col-sm-6:nth-child(2){padding-top:20px}}.main .main--information{margin-top:20px;font-size:13px;font-family:Ubuntu;font-weight:400}.display-table{display:table;width:100%;height:100%}.display-table .display-table-cell{display:table-cell;width:100%;height:100%;vertical-align:middle;text-align:center}.display-table .display-table-cell.left{text-align:left}.display-table .display-table-cell.right{text-align:right}.display-table .display-table-cell.top{vertical-align:top}.display-table .display-table-cell.bottom{vertical-align:bottom}.footer{background-color:#212121;padding-top:15px;padding-bottom:15px}.footer p{color:#FFF;font-family:Ubuntu;font-variant:400;margin-bottom:0}.footer p a{color:#FFF}.footer ul li a{color:#FFF}
		</style>
	</head>
	<body>
		<header class="head">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<p class="head--headline">CMS-Installer</p>
					</div>
				</div>
			</div>
		</header>
		<main class="main <?php echo $afterinstall ?> ">
			<div class="cms-list">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="grid">
								<?php 
									$output = "";
									foreach ($apps as $key => $app){
										$output .= '
											<div class="grid-item">
												<div class="panel panel-default">
													<div class="panel-heading"><i class="fa fa-angle-double-right" aria-hidden="true"></i> '. $app["name"] .'</div>
													<div class="panel-body">
														<div class="row">
															<div class="col-sm-6">
																<img src="'. $app["img"] .'" alt="'. $app["name"] .'" class="img-responsive">	
															</div>
															<div class="col-sm-6">
																<p><b>Category:</b> '. $app["category"] .'</p>
																<p><b>Version:</b> '. $app["version"] .'</p>
															</div>
														</div>
													</div>
													<div class="panel-footer text-right">
														<form action="installer.php" method="post">
															<input type="hidden" name="cms" value="'. $key .'">
															<button class="btn btn-primary" type="submit">Install Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
														</form>
													</div>
												</div>
											</div>';
									}
									echo($output);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main--information">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p class="information--text">All trademarks, service marks and trade names referenced in this material are the property of their respective owners.</p>
						</div>
					</div>
				</div>
			</div>
		</main>
		<main class="main afterinstall <?php echo $isinstalled ?>">
			<div class="container" style="height: 80%; min-height: 600px;">
				<div class="row" style="height: 80%; min-height: 600px;">
					<div class="col-md-12" style="height: 80%; min-height: 600px;">
						<div class="display-table">
							<div class="display-table-cell">
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped <?php echo $installed; ?>" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h2><i class="fa fa-check-square-o" aria-hidden="true"></i> Installed</h2>
								<p><a href="/">Klick me</a>to go to your new CMS</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<p>&copy; <?php echo date("Y"); ?> by <a href="https://jseidl.at">Julian Seidl</a></p>
					</div>
					<div class="col-md-4 text-center">
						<p><?php echo($version); ?></p>
					</div>
					<div class="col-md-4 text-right">
						<ul>
							<li><a href="https://github.com/Thejuse/CMS-Installer/issues">Bug report</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		<script>function masonry(){$(".grid").masonry({itemSelector:".grid-item"})}function progressbar(){$(".progress-bar-installed").animate({width:"100%"},2500)}$(window).load(function(){masonry(),progressbar()});</script>
	</body>
</html>