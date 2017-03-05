<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Web-Service Installer</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<style>
			footer ul{
				list-style-type: none;
			}
			footer ul li{
				display: inline-block;
				padding-left: 20px;
			}
			footer{
				margin-top: 80px;
			}
			.installer{
				margin-top: 50px;
			}
			.howTo{
				list-style: decimal;
			}
		</style>
	</head>
	<body>
		<?php
			$output = "";
			$toPageOutput = "";
			if($_POST['cms'] == null){

			}
			else if($_POST['cms'] == 'Typo3 7.6.16'){
				$output ='<div class="alert alert-success"> '. $_POST['cms'] .' is now installed!</div>';
				$toPageOutput = "<p><strong>Your CMS is installed</strong></p><p>Open your Page <a href="/">Here</a></p>";
				shell_exec('wget https://downloads.sourceforge.net/project/typo3/TYPO3%20Source%20and%20Dummy/TYPO3%207.6.16/typo3_src-7.6.16.tar.gz');
				shell_exec('tar -xzvf typo3_src-7.6.16.tar.gz');
				shell_exec('mv typo3_src-7.6.16/* .');
				shell_exec('rm -rf typo3_src-7.6.16/');
				shell_exec('ln -s ../public_html typo3_src');
				shell_exec('ln -s typo3_src/typo3 typo3');
				shell_exec('ln -s typo3_src/index.php index.php');
				shell_exec('rm -rf typo3_src-7.6.16.tar.gz');
				shell_exec('chmod -R 777 ../public_html');
				shell_exec('rm -rf install_script.php');
			}
			else if($_POST['cms'] == 'WordPress (German)'){
				$output ='<div class="alert alert-success"> '. $_POST['cms'] .' is now installed!</div>';
				$toPageOutput = "<p><strong>Your CMS is installed</strong></p><p>Open your Page <a href="/">Here</a></p>";
				shell_exec('wget https://de.wordpress.org/latest-de_DE.zip');
				shell_exec('unzip latest-de_DE.zip');
				shell_exec('mv wordpress/* .');
				shell_exec('rm -rf wordpress/');
				shell_exec('rm -rf latest-de_DE.zip');
				shell_exec('chmod -R 777 ../public_html');
				shell_exec('rm -rf install_script.php');
			}
			else if($_POST['cms'] == 'WordPress (All Languages)'){
				$output ='<div class="alert alert-success"> '. $_POST['cms'] .' is now installed!</div>';
				$toPageOutput = "<p><strong>Your CMS is installed</strong></p><p>Open your Page <a href="/">Here</a></p>";
				shell_exec('wget https://wordpress.org/latest.tar.gz');
				shell_exec('tar -xzvf latest.tar.gz');
				shell_exec('mv wordpress/* .');
				shell_exec('rm -rf wordpress/');
				shell_exec('rm -rf latest.tar.gz');
				shell_exec('chmod -R 777 ../public_html');
				shell_exec('rm -rf install_script.php');
			}
			else{
				$output ='<div class="alert alert-danger"><strong>Error!</strong> Please choose a CMS!</div>';
				$toPageOutput = "";
			}
		?>
		<!-- Alerts -->
		<div class="container" style="margin-top: 30px;">
			<div class="row">
				<div class="col-sm-12">
					<?php echo $output ?>
				</div>
			</div>
		</div>
		
		<!-- Headline -->
		<h1 class="text-center">Web-Service Installer</h1>

		<!-- Installer -->
		<div class="container installer">
			<div class="row">
				<div class="col-md-4">
					<form action="install_script.php" method="post">
						<div class="form-group">
							<label for="exampleSelect1">Choose your CMS:</label>
							<select class="form-control" id="cms" name="cms">
								<option>== Choose your CMS ==</option>
								<option>Typo3 7.6.16</option>
								<option>WordPress (German)</option>
								<option>WordPress (All Languages)</option>
							</select>
						</div>
						<button type="submit" class="btn btn-primary">Install</button>
					</form>
				</div>
				<div class="col-md-4 text-center">
					<?php echo $toPageOutput ?>
				</div>
				<div class="col-md-4">
					<ul class="howTo">
						<li>
							<p>Choose your CMS</p>
						</li>
						<li>
							<p>Click on Install</p>
						</li>
						<li>
							<p>Install is finished. Then go to your Page</p>
						</li>
						<li>
							<p>Type in your Database credentials and add an User</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>&copy; <?php echo date("Y"); ?> coded by <a href="http://jseidl.at">Julian Seidl</a></p>
					</div>
					<div class="col-sm-6 text-right">
						<ul>
							<li><a href="https://github.com/Thejuse/CMS-Installer/issues">Feature Request</a></li>
							<li><a href="https://github.com/Thejuse/CMS-Installer/issues">Report Bug</a></li>
							<li><a href="mailto:hi@jseidl.at">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</body>
</html>