<!DOCTYPE html>

<html>

<head>

<title>C8H10N4O2 * ☕️ * </title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-language" content="pl">
  <meta name ="description" content="opis zawartosci strony">
  <meta name="author" content="dane autora">



</head>
<link rel="stylesheet" href="Style/arkusz.css" />
<body class="body_mod">
<table width="960" border="1" align="center" class="main_tbl">
  <tr>
    <td colspan="2" height="200">
      <figure>
        <img src="images/ziarna.png">
      </figure>
    </td>
  </tr>
  <tr>
    <td width="200" height="200" valign="top">
	<table cellspacing="0"  width="200" border="1" class="panel_tbl" >
    <tr>
      <td class="panel_tbl_single">
        <a type="submit" class="btn" href="index.php?id=1">Strona główna</a>
      </td>
    </tr>
    <tr>
      <td class="panel_tbl_single">
        <a type="submit" class="btn" href="index.php?id=2">Rodzaje kawy</a>
      </td>
    </tr>
    <tr>
      <td class="panel_tbl_single">
        <a class="btn" type="submit" href="index.php?id=3">Zamów kawę</a>
      </td>
    </tr>
    <tr>
      <td  class="panel_tbl_single">
        <a class="btn" href="index.php?id=4">Kawowy Kalkulator</a>
      </td>
    </tr>
   

  </table>
		</td>
		<td>

<p>
<?PHP
    if(empty($_GET["id"])) $_GET["id"]=1;
    if($_GET["id"]==1) include("main.php");
    if($_GET["id"]==2) include("coffee_types.php");
    if($_GET["id"]==3) include("order.php");
    if($_GET["id"]==4) include("coffee_calc.php");
    if($_GET["id"]==5) include("receive.php");
?>
</p>

		</td>
  </tr>
  <tr>
    <td colspan="2" height="50" class="footer">Copyright © 2023 All Rights Reserved</td>
  </tr>

</table>
</body>
</html>
