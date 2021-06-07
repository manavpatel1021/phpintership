<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Manav Patel</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './themepart/menu.php';
include './themepart/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">content goes here </a></h2>
				
				<div style="clear: both;">&nbsp;</div>

				<div class="entry">
					content goes here
                                        
                                        
				</div>
                                <form action="formdata.php" method="post">
            <table>
                <tr>
                    <td>Name:-</td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td>email id:-</td>
                    <td><input type="email" name="mail" required></td>
                </tr>
                <tr>
                    <td>password:-</td>
                    <td><input type="password" name="pass" required></td>
                </tr>
                <tr>
                    <td>mobile no:-</td>
                    <td><input type="number" name="mobile"  required  ></td>
                </tr>
                <tr>
                    <td><input type="submit"></td>
                    <td><input type="reset"></td>
                </tr>
            </table>
        </form>
                                
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<?php
                include './themepart/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php 
include './themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>