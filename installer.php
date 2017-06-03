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
* Version 2.2.0-dev
*
*/
/**
 * Extract content of given archive into current directory
 * 
 * Takes either whole archive content or content in specified root directory of 
 * archive.
 * Removes archive file after extraction.
 * 
 * @param string $type Type of archive; either 'tar' or 'zip'
 * @param string $filename Name of archive file
 * @param string $rootDirectory (optional)
 * 
 * @return void
 */
function extractArchive($type, $filename, $rootDirectory = '')
{
    if ( ! in_array($type, ['tar', 'zip'])) {
        return;
    }

    if ($type === 'tar') {
        exec('tar -xzvf ' . $filename);
    } else {
        exec('unzip ' . $filename);
    }

    if ($rootDirectory !== '') {
        exec('mv ' . $rootDirectory . '/* .');
        exec('rm -rf ' . $rootDirectory . '/');
    }

    exec('rm -rf ' . $filename);
}

/**
 * Build URI from given base URI and segments to append
 * 
 * @param string $baseUri eg. 'https://example.org'
 * @param array $segments eg. ['foo', 'bar', 'baz.tar.gz']
 * 
 * @return string URI built from segments, eg. 'https://example.org/foo/bar/baz.tar.gz'
 */
function buildURIFromSegments($baseUri, array $segments)
{
    return implode('/', array_merge([$baseUri], array_filter($segments)));
}

define('MIRROR_URI', 'https://cms-installer.webintosh.at');
define('MIRROR_IMG_PATH', 'img');

// Database
$version = "v2.2.0-dev";
$apps = [
    "WordPress" => [
        "name" => "WordPress",
        "version" => "4.7.6",
        "category" => "Blog / CMS",
        "link" => "https://wordpress.org",
        "img" => "wordpress.png",
        "archive" => [
            "file" => "wordpress-4.7.6.tar.gz",
            "type" => "tar",
            "root-folder" => "wordpress"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Typo3-7" => [
        "name" => "Typo3",
        "version" => "7.6.18",
        "category" => "CMS",
        "link" => "https://typo3.org",
        "img" => "typo3.png",
        "archive" => [
            "file" => "t3-7.6.18.tar.gz",
            "type" => "tar",
            "root-folder" => "typo3_src-7.6.18"
        ],
        "mirror-version" => "2.1.0",
        "post-install" => function($pathname) {
            exec('ln -s ..' . $pathname . ' typo3_src');
            exec('ln -s typo3_src/typo3 typo3');
            exec('ln -s typo3_src/index.php index.php');
        }
    ],
    "MediaWiki" => [
        "name" => "MediaWiki",
        "version" => "1.28.2",
        "category" => "Wiki",
        "link" => "https://www.mediawiki.org",
        "img" => "mediawiki.png",
        "archive" => [
            "file" => "mediawiki-1.28.2.tar.gz",
            "type" => "tar",
            "root-folder" => "mediawiki-1.28.2"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Shopware" => [
        "name" => "Shopware",
        "version" => "5.2.24",
        "category" => "E-Commerce",
        "link" => "https://de.shopware.com",
        "img" => "shopware.png",
        "archive" => [
            "file" => "sw-5.2.24.zip",
            "type" => "zip",
            "root-folder" => ""
        ],
        "mirror-version" => "2.1.0"
    ],
    "Espocrm" => [
        "name" => "Espocrm",
        "version" => "4.7.0",
        "category" => "CRM",
        "link" => "https://www.espocrm.com",
        "img" => "espocrm.png",
        "archive" => [
            "file" => "EspoCRM-4.7.0.zip",
            "type" => "zip",
            "root-folder" => "EspoCRM-4.7.0"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Joomla" => [
        "name" => "Joomla!",
        "version" => "3.7.2",
        "category" => "CMS",
        "link" => "https://www.joomla.de",
        "img" => "joomla.png",
        "archive" => [
            "file" => "joomla-3.7.2.zip",
            "type" => "zip",
            "root-folder" => ""
        ],
        "mirror-version" => "2.1.0"
    ],
    "Mybb" => [
        "name" => "MyBB",
        "version" => "1.8.12",
        "category" => "Forum",
        "link" => "https://mybb.com",
        "img" => "mybb.png",
        "archive" => [
            "file" => "mybb-1.8.12.zip",
            "type" => "zip",
            "root-folder" => "Upload"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Impresspages" => [
        "name" => "ImpressPages",
        "version" => "5.2.0",
        "category" => "CMS",
        "link" => "https://www.impresspages.org",
        "img" => "impresspages.png",
        "archive" => [
            "file" => "ip-5.2.0.zip",
            "type" => "zip",
            "root-folder" => "ImpressPages"
        ],
        "mirror-version" => "2.1.0"
    ],
    "NextCloud" => [
        "name" => "NextCloud",
        "version" => "12.0.0",
        "category" => "Cloud / Datastorage",
        "link" => "https://nextcloud.com",
        "img" => "nextcloud.png",
        "archive" => [
            "file" => "nextcloud-12.0.0.zip",
            "type" => "zip",
            "root-folder" => "nextcloud"
        ],
        "mirror-version" => "2.1.0"
    ],
    "OwnCloud" => [
        "name" => "OwnCloud",
        "version" => "10.0.1",
        "category" => "Cloud / Datastorage",
        "link" => "https://owncloud.org",
        "img" => "owncloud.png",
        "archive" => [
            "file" => "owncloud-10.0.1.zip",
            "type" => "zip",
            "root-folder" => "owncloud"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Grav" => [
        "name" => "Grav",
        "version" => "1.2.4",
        "category" => "CMS",
        "link" => "https://getgrav.org",
        "img" => "grav.png",
        "archive" => [
            "file" => "grav-1.2.4.zip",
            "type" => "zip",
            "root-folder" => "grav-admin"
        ],
        "mirror-version" => "2.1.0"
    ],
    "Concrete5" => [
        "name" => "Concrete5",
        "version" => "8.1.0",
        "category" => "CMS",
        "link" => "https://www.concrete5.org",
        "img" => "concrete5.png",
        "archive" => [
            "file" => "concrete5-8.1.0.zip",
            "type" => "zip",
            "root-folder" => ""
        ],
        "mirror-version" => "2.2.0"
    ],
    "phpBB" => [
        "name" => "phpBB",
        "version" => "3.2.0",
        "category" => "Forum",
        "link" => "https://www.phpbb.de/",
        "img" => "phpbb.png",
        "archive" => [
            "file" => "phpBB-3.2.0.zip",
            "type" => "zip",
            "root-folder" => "phpBB3"
        ],
        "mirror-version" => "2.2.0"
    ],
    "osTicket" => [
        "name" => "osTicket",
        "version" => "1.10.0",
        "category" => "HelpDesk",
        "link" => "http://osticket.com/",
        "img" => "osticket.png",
        "archive" => [
            "file" => "osTicket-v1.10.zip",
            "type" => "zip",
            "root-folder" => "upload"
        ],
        "mirror-version" => "2.2.0"
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

        exec('wget ' . buildURIFromSegments(MIRROR_URI, [
            $apps[$cms]['mirror-version'],
            $apps[$cms]['archive']['file']
        ]));

        extractArchive(
            $apps[$cms]['archive']['type'],
            $apps[$cms]['archive']['file'],
            $apps[$cms]['archive']['root-folder']
        );

        if (isset($apps[$cms]['post-install']) && is_callable($apps[$cms]['post-install'])) {
            $apps[$cms]['post-install']($pathname);
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
                                        $imgUri = buildURIFromSegments(MIRROR_URI, [
                                            MIRROR_IMG_PATH,
                                            $app['img']
                                        ]);
                                        $output .= '
                                            <div class="grid-item">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading"><i class="fa fa-angle-double-right" aria-hidden="true"></i> '. $app["name"] .'</div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <img src="'.  $imgUri .'" alt="'. $app["name"] .'" class="img-responsive">	
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
                    <div class="col-md-4">
                        <p>&copy; <?php echo date("Y"); ?> by <a href="https://jseidl.at">jSeidl</a></p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p><?php echo($version); ?></p>
                    </div>
                    <div class="col-md-4 text-right">
                        <ul>
                            <li><a href="https://github.com/webintosh/CMS-Installer/issues">Bug report</a></li>
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
