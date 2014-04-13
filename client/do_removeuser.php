<?php
//check for required fields
if ((!$_POST['username'])) {
	header("Location: removeuser.php");
	exit;
}

require_once 'internationalize.php';

//check authority to be here
require_once 'authorization_check.php';

//connect to server and select database
require_once 'database_connection.php';

//add the user's data
$sql ="DELETE FROM moss_users WHERE username='$_POST[username]'";

$result = @mysql_query($sql,$connection)or die(mysql_error());

//get a good message for display upon success
if ($result) {

$msg ="<p class=em2>$Congrats $_POST[username]. $Another</p>";
}

//Display the appropriate user authority to add depending on the user's authority
if ($_COOKIE[power] == "admin"){
	//select the users
	$sql ="Select username FROM moss_users WHERE (authority='teacher' OR authority='student') ORDER BY username";
	$result = @mysql_query($sql,$connection)or die(mysql_error());
	$num = @mysql_num_rows($result);
	if ($num < 1) {
    	$msg2 = "<P><em2>$sorry</em></p>";
	} else {
	while ($row = mysql_fetch_array ($result)) {
		$users = $row["username"];
		$option_block .= "<option value=$users>$users</option>";
		}
	}
}
elseif ($_COOKIE[power] == "teacher"){
	//select the users
	$sql ="SELECT username FROM moss_users WHERE authority LIKE 'student' ORDER BY username";
	$result = @mysql_query($sql,$connection)or die(mysql_error());
	$num = @mysql_num_rows($result);
	if ($num < 1) {
    	$msg2 = "<P><em2>$sorry</em></p>";
	} else {
	while ($row = mysql_fetch_array ($result)) {
		$users = $row["username"];
		$option_block .= "<option value=$users>$users</option>";
		}
	}
}
elseif ($_COOKIE[power] == "student"){
	header("Location: unauthorized.php");
	exit;	
	}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $WebClient; ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="bookmark" href="favicon.ico" >
<link href="styles/main_css.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</head>

<body background="images/bkgrdimage.jpg">
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2"><img src="images/WebClientBanner.png" width="960" height="200" alt="logo" /></td>
  </tr>
  <tr>
    <td colspan="2" align="right" valign="middle" bgcolor="#3c3c3c"><?php require_once 'header.php'; ?></td>
  </tr>
  <tr>
    <td width="240" valign="top" bgcolor="#f2e6d6"><?php echo "$nav"; ?></td>
    <td width="720" valign="top" bgcolor="#FFFFFF"><blockquote><br /><p class="em" align="right"><?php echo $RequiredFieldsAsterisk; ?></p><?php echo "$msg"; ?>&nbsp;<?php echo "$msg2"; ?>
      <!--<h1>Remove an Existing User</h1>-->
      <h1><?php echo $RemoveExistingUser; ?></h1>
      <p>&nbsp;</p>
      <FORM METHOD="POST" ACTION="do_removeuser.php">
        <table width="300" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <!-- <td width="100" valign="top"><strong>Username:</strong></td>-->
          <td width="100" valign="top"><strong><?php echo $UserName; ?></strong></td>
          <!--<td width="200" valign="top"><select name="username" id="username"><option value="">Select a username....</option><?php echo "$option_block"; ?></select>*</td>-->
          <td width="200" valign="top"><select name="username" id="username"><option value=""><?php echo $SelectUsernameEllipisis; ?></option><?php echo "$option_block"; ?></select>*</td>
        </tr>
        <tr>
          <td width="100" valign="top">&nbsp;</td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <!--<td valign="top"><input type="SUBMIT" name="submit" value="Remove User" class="button" style="width: 110px" /></td>-->
          <td valign="top"><input type="SUBMIT" name="submit" value=<?php echo $RemoveUser; ?> class="button" style="width:auto" /></td>
        </tr>
      </table>
  </FORM>
      <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </blockquote>
    <p></p></td>
  </tr>
  <tr>
    <script src="js/footer.js"></script>
  </tr>
</table>
</body>
</html>