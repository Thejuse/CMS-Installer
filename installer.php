<?php 
/*
*
* CMS-Installer
* Copyright (c) jseidl.at | Julian Seidl
*
* MIT License
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
* 
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
<<<<<<< HEAD
* Version 2.1.3
=======
* Version 2.2.0-dev
>>>>>>> eb9e2ad559083ea1ac4d05457532e3b77aa46ee7
*
*/

/**
 * Extract content of given archive into current directory
 * 
 * 1. Extract (unzip / tar -xzvf) content of archive into temporary directory.
 * 2. Move (mv) content of temporary directory into current directory.
 * 3. Remove (rm -rf) temporary directory.
 * 4. Remove (rm -rf) archive.
 * 
 * @param string $type Type of archive; either 'tar' or 'zip'
 * @param string $filename Name of archive file
 * @param string $temporaryDirectory (optional) Inferred from filename if empty
 * 
 * @return void
 */
function extractArchive($type, $filename, $temporaryDirectory = '')
{
    if ( ! in_array($type, ['tar', 'zip'])) {
        return;
    }
    
    $extension = ($type === 'tar') ? '.tar.gz' : '.zip' ;
    
    if ($temporaryDirectory === '') {
        $temporaryDirectory = substr($filename, 0, strpos($filename, $extension));
    }
    
    if ($type === 'tar') {
        exec('tar -xzvf ' . $filename);
    } else {
        exec('unzip ' . $filename);
    }
    
    exec('mv ' . $temporaryDirectory . '/* .');
    exec('rm -rf ' . $temporaryDirectory . '/');
    exec('rm -rf ' . $filename);
}

	// Database
<<<<<<< HEAD
	$version = "v2.1.3";
=======
	$version = "v2.2.0-dev";
>>>>>>> eb9e2ad559083ea1ac4d05457532e3b77aa46ee7
	$apps = [
		"WordPress" => [
			"name" => "WordPress",
			"version" => "4.8",
			"category" => "Blog / CMS",
			"category-desc" => "cms",
			"link" => "https://wordpress.org",
			"img" => "https://cms-installer.webintosh.at/img/wordpress.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/wordpress-4.8.tar.gz"
		],
		"Typo3-7" => [
			"name" => "Typo3",
			"version" => "7.6.19",
			"category" => "CMS",
			"category-desc" => "cms",
			"link" => "https://typo3.org",
			"img" => "https://cms-installer.webintosh.at/img/typo3.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/t3-7.6.19.tar.gz"
		],
		"MediaWiki" => [
			"name" => "MediaWiki",
			"version" => "1.28.2",
			"category" => "Wiki",
			"category-desc" => "wiki",
			"link" => "https://www.mediawiki.org",
			"img" => "https://cms-installer.webintosh.at/img/mediawiki.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/mediawiki-1.28.2.tar.gz"
		],
		"Shopware" => [
			"name" => "Shopware",
			"version" => "5.2.26",
			"category" => "E-Commerce",
			"category-desc" => "shop",
			"link" => "https://de.shopware.com",
			"img" => "https://cms-installer.webintosh.at/img/shopware.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/sw-5.2.26.zip"
		],
		"Espocrm" => [
			"name" => "Espocrm",
			"version" => "4.7.2",
			"category" => "CRM",
			"category-desc" => "crm",
			"link" => "https://www.espocrm.com",
			"img" => "https://cms-installer.webintosh.at/img/espocrm.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/EspoCRM-4.7.2.zip"
		],
		"Joomla" => [
			"name" => "Joomla!",
			"version" => "3.7.2",
			"category" => "CMS",
			"category-desc" => "cms",
			"link" => "https://www.joomla.de",
			"img" => "https://cms-installer.webintosh.at/img/joomla.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/joomla-3.7.2.zip"
		],
		"Mybb" => [
			"name" => "MyBB",
			"version" => "1.8.12",
			"category" => "Forum",
			"category-desc" => "foro",
			"link" => "https://mybb.com",
			"img" => "https://cms-installer.webintosh.at/img/mybb.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/mybb-1.8.12.zip"
		],
		"Impresspages" => [
			"name" => "ImpressPages",
			"version" => "5.2.0",
			"category" => "CMS",
			"category-desc" => "cms",
			"link" => "https://www.impresspages.org",
			"img" => "https://cms-installer.webintosh.at/img/impresspages.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/ip-5.2.0.zip"
		],
		"NextCloud" => [
			"name" => "MyBB",
			"version" => "12.0.0",
			"category" => "Cloud / Datastorage",
			"category-desc" => "cloud",
			"link" => "https://nextcloud.com",
			"img" => "https://cms-installer.webintosh.at/img/nextcloud.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/nextcloud-12.0.0.zip"
		],
		"OwnCloud" => [
			"name" => "OwnCloud",
			"version" => "10.0.2",
			"category" => "Cloud / Datastorage",
			"category-desc" => "cloud",
			"link" => "https://owncloud.org",
			"img" => "https://cms-installer.webintosh.at/img/owncloud.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/owncloud-10.0.2.zip"
		],
		"Grav" => [
			"name" => "Grav",
			"version" => "1.2.4",
			"category" => "CMS",
			"category-desc" => "cms",
			"link" => "https://owncloud.org",
			"img" => "https://cms-installer.webintosh.at/img/grav.png",
			"download" => "https://cms-installer.webintosh.at/2.1.2/grav-1.2.4.zip"
		]
	];
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
        
        if (array_key_exists($cms, $apps)) {
            $pathname = dirname(filter_input(INPUT_SERVER, 'PHP_SELF'));
            
            exec('wget ' . $apps[$cms]['download'] . ' ');
            
            switch ($cms) {
                case 'Typo3-7':
                    extractArchive('tar', 't3-7.6.19.tar.gz', 'typo3_src-7.6.19');
                    
                    exec('ln -s ..' . $pathname . ' typo3_src');
                    exec('ln -s typo3_src/typo3 typo3');
                    exec('ln -s typo3_src/index.php index.php');
                    
                    break;
                
                case 'WordPress':
                    extractArchive('tar', 'wordpress-4.8.tar.gz', 'wordpress');
                    
                    break;
                
                case 'MediaWiki':
                    extractArchive('tar', 'mediawiki-1.28.2.tar.gz');
                    
                    break;
                
                case 'Shopware':
                    extractArchive(
                        'zip',
                        'sw-5.2.26.zip',
                        'sw-5.2.26'
                    );
                    
                    break;
                
                case 'Espocrm':
                    extractArchive('zip', 'EspoCRM-4.7.2.zip');
                    
                    break;
                
                case 'Joomla':
                    extractArchive(
                        'zip',
                        'joomla-3.7.2.zip',
                        'Joomla_3.7.2-Stable-Full_Package'
                    );
                    
                    break;
                
                case 'Mybb':
                    extractArchive('zip', 'mybb-1.8.12.zip');
                    
                    break;
                
                case 'Impresspages':
                    extractArchive('zip', 'ip-5.2.0.zip', 'ImpressPages');
                    
                    break;
                
                case 'NextCloud':
                    extractArchive('zip', 'nextcloud-12.0.0.zip', 'nextcloud');
                    
                    break;
                
                case 'OwnCloud':
                    extractArchive('zip', 'owncloud-10.0.2.zip', 'owncloud');
                    
                    break;
                
                case 'Grav':
                    extractArchive('zip', 'grav-1.2.4.zip', 'grav-admin');
                    
                    break;
            }
            
            exec('chmod -R 775 ..' . $pathname);
            exec('rm -rf installer.php');
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
			@import url(https://fonts.googleapis.com/css?family=Oswald);@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700);.footer p,.footer p a,.footer ul li a{color:#FFF}.head{background-color:#212121;margin-bottom:10px;border-bottom:5px solid #3c0}.footer p,.navbar{margin-bottom:0}.btn-primary,.btn-primary:hover{border-color:#3BEA01;transition:.3s linear}.head .head--headline{color:#FFF;font-family:Oswald;font-size:26px;margin-bottom:0}.main{margin-top:20px}.main.afterinstall,.main.notshow{display:none}.main.afterinstall.isinstalled{display:block!important}.main .cms-list .grid .grid-item{width:50%;padding-left:10px;padding-right:10px}@media (max-width:992px){.main .cms-list .grid .grid-item{width:100%;padding-right:0;padding-left:0}.main .cms-list .grid .grid-item .panel-default .panel-body .col-sm-6:nth-child(2){padding-top:20px}}.main .main--information{margin-top:20px;font-size:13px;font-family:Ubuntu;font-weight:400}.btn-primary{background-color:#3c0}.btn-primary:hover{background-color:#3BEA01}.display-table{display:table;width:100%;height:100%}.display-table .display-table-cell{display:table-cell;width:100%;height:100%;vertical-align:middle;text-align:center}.display-table .display-table-cell.left{text-align:left}.display-table .display-table-cell.right{text-align:right}.display-table .display-table-cell.top{vertical-align:top}.display-table .display-table-cell.bottom{vertical-align:bottom}.footer{background-color:#212121;padding-top:15px;padding-bottom:15px;border-top:5px solid #3c0}.footer p{font-family:Ubuntu;font-variant:400}
		</style>
	</head>
	<body>
		<header class="head">
			<div class="navbar navbar-inverse">
    			<div class="container-fluid">
        			<div class="navbar-header">
			            <a class="head--headline" href="https://cmsinstaller.jseidl.at">CMS-Installer</a>
			            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>
			        <div class="navbar-collapse collapse" id="navbar-main">
			            <ul class="nav navbar-nav navbar-right" id="filters">
			                <li><a data-filter="*">All</a></li>
			                <li><a data-filter=".cms">CMS</a></li>
			                <li><a data-filter=".cloud">Cloud</a></li>
			                <li><a data-filter=".crm">CRM</a></li>
			                <li><a data-filter=".shop">E-Commerce</a></li>
			                <li><a data-filter=".foro">Forum</a></li>
			                <li><a data-filter=".wiki">Wiki</a></li>
			            </ul>
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
											<div class="grid-item transition '. $app["category-desc"] .'"  data-category="'. $app["category-desc"] .'">
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
																<p><b>Website:</b> <a href="'. $app["link"] .'">'. $app["link"] .'</a></p>
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
						<div class="display-table" style="height: 80%; min-height: 600px;">
							<div class="display-table-cell">
								<div class="progress">
									<div class="progress-bar progress-bar-info progress-bar-striped <?php echo $installed; ?>" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h2><i class="fa fa-check-square-o" aria-hidden="true"></i> Installed</h2>
								<p><a href="/">Click me</a> to go to your new CMS</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-4">
						<p>&copy; <?php echo date("Y"); ?> by <a href="https://jseidl.at">jSeidl</a></p>
					</div>
					<div class="col-xs-4 text-center">
						<p><?php echo($version); ?></p>
					</div>
					<div class="col-xs-4 text-right">
						<ul>
							<li><a href="https://github.com/webintosh/CMS-Installer/issues">Bug report</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
		<script>function progressbar(){$(".progress-bar-installed").animate({width:"100%"},2500)}$(window).load(function(){progressbar();var r=$(".grid").isotope({itemSelector:".grid-item",layoutMode:"masonry"});$("#filters").on("click","a",function(){var t=$(this).attr("data-filter");r.isotope({filter:t})})});</script>
	</body>
</html>