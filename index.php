<html>
<title>11240062 Website Pribadi</title>
<head>
</head>
<body bgcolor="white">
<table border="1" width="100%" cellspacing="0" cellpadding="0">
<tr>
  <td colspan="2" height="130">
    <img src="header.jpg"width="100%" height="130">
  </td>
</tr>

<tr>
  <td width="150" height="400" valign="top">
    <table border="1" width="100%" cellspacing="0" cellpadding="0">
      <tr bgcolor="#D4AF37"><td><b>MENU</b></td></tr>
	  <tr><td><a href="index.php?menu=beranda">BERANDA</a></td></tr>
      <tr><td><a href="index.php?menu=profil">PROFIL</a></td></tr>
	  <tr><td><a href="index.php?menu=cv">CV</a></td></tr>
      <tr><td><a href="index.php?menu=galeri">GALERI</a></td></tr>
    </table>
  </td>
 <td valign="center" align="center" 
	style="background: linear-gradient(to bottom right, #F4BD00, #1E90FF); color: black;">
    <?php
	if (isset($_GET['menu'])) {
		$menu = $_GET['menu'];
		if ($menu == "profil") {
			include "profil.html";
		} elseif ($menu == "cv") {
			include "cv.html";
		} elseif ($menu == "galeri") {
			include "galeri.html";
		} else {
			echo "<h1>SELAMAT DATANG DI WEBSITE SAYA</h1>";
		}
	} else {
		echo "<h1>SELAMAT DATANG DI WEBSITE SAYA</h1>";
	}
    ?>
  </td>
</tr>
<td colspan="2" height="80">
  <img src="footer.jpg"width="100%" height="80">
</td>

</table>
</body>
</html>
