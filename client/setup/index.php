﻿<?php
	//This is required to get the international text strings dictionary
    require_once '../internationalize.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<title>HydroServer Lite Web Client: Install</title>-->
<title><?php echo $TitleInstall;?></title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="../favicon.ico" >

<link href="../styles/main_css.css" rel="stylesheet" type="text/css" media="screen" />

<!-- JQuery JS -->
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>

</head>

<body background="../images/bkgrdimage.jpg">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><img src="../images/WebClientBanner.png" width="960" height="200" alt="Adventure Learning Banner" /></td>
  </tr>
  
  <tr>
    <td width="240" valign="top" bgcolor="#f2e6d6">
    </td>
    <td width="720" valign="top" bgcolor="#FFFFFF"><blockquote><br />
      <h1><!--Welcome to Installation--><?php echo $InstallationWelcome;?></h1>
        <p><!--This setup script will guide you to install Hydroserver Lite on your web server. Please make sure you have the database details ready before you proceed.--><?php echo $InstallGuide;?></p>
        <!--<p><a href="edit_mainconfig.php" class="button">Begin Installation</a></p>-->
        <p><a href="edit_mainconfig.php" class="button"><?php echo $BeginInstallation;?></a></p>
        <p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

    </blockquote></td>
  </tr>
  <tr>
    <script src="../js/footer.js"></script>
  </tr>
</table>

</body>
</html>
