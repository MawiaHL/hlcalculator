<?php 
require_once('cal.php'); 
?>
<!doctype html>
<head>
<title>Mizo Web Developer & Designer Calculator</title>
</head>
<body>
<div align="center">
  <center>
<form method="POST">
<p>Squares, square root leh cube zawn nan chuan field hmasa zawk chiah hi fill up tur a ni ang.<br></p>
<table border="0" cellspacing="4" width="304" id="calculator" height="140">
  <tr>
    <td width="300" align="center" height="40">
    <h3>Mizo Web Developer & Designer Calulator Ver 1.0</h3>
    </td>
  </tr>
  <tr>
    <td width="300" align="center" height="24">
    <input type="number" name="this" title="number eng pawh chhu la" size="10"><br>
    <input type="number" name="that" size="10" value="0"></td>
  </tr>
  <tr>
    <td width="300" align="center" height="24">
    <input type="submit" value="Belhna" name="chhut">
    <input type="submit" value="Paihna" name="chhut">
    <input type="submit" value="Puntirna" name="chhut">
    <input type="submit" value="Semna" name="chhut"><br>
    <input type="submit" value="SquareZawnna" name="chhut">
    <input type="submit" value="CubeZawnna" name="chhut">
    <input type="submit" value="SquareRootZawnna" name="chhut">&nbsp;
    <input type="submit" value="reset">&nbsp;
    </td>
  </tr>
  <tr>
    <td width="300" align="center" height="20"><br><b>Result: <?php echo $result; ?><br><?php echo $buaina; ?></b></td>
  </tr>
  <tr>
    <td width="300" align="center" height="20"><br><a href="https://www.facebook.com/mawiahl">Developed by Mawia HL</a></td>
  </tr>
</table>
</form>
  </center>
</div>
</body>
</html>
