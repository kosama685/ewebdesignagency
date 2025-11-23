<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?
include('geturl.php');    
?>
<head>
<title>Register a domain name</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="title"><a href="index.php"><h1><? echo "$yourdomain" ;?> Web Hosting Service</h1></a></div>
<? include ('nav.php'); ?>
      <div class="clr"> </div>
    </div>
  </div>
  <div class="slider2">
    <div class="slider2_resize">
      <h2>Domain Name</h2>
      <p><font color = white>No daily hit limits, unlimited disk space, no maximum file size, cPanel control panel and 100's of extra features not available on free hosting.</font></p>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="bloga_resize2">
    <div class="bloga_resizee">
      <div class="menu_sub">
        <ul>
        </ul>
      </div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="body_resize">

<table style="text-align: left; width: 1000px;" border="0"
cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="vertical-align: top; width: 50px;"><img  src="images/ssnetlogo.png" vspace="5">
</td>
<td style="vertical-align: top;"><h2><? echo "$yourdomain" ;?> Domain registration is powered by ifastnet.com</h2> 
</td>
</tr>
</tbody>
</table>
<table style="text-align: left; width: 500px;" border="0"
 cellpadding="0" cellspacing="0">
 <tbody>
 <tr>
 <td><p class="sidebar_domain_search_left"><h1>Search for your domain name :</h1></td>
 </tr>
 <tr>
 <td>
 <form action="https://ifastnet.com/portal/domainchecker.php"  method="post">
<input name="direct" value="true" type="hidden">
<input name="domain" class="freshwhite" size="34" type="text">
<select name="ext">
<option>.info</option>
<option>.com</option>
<option>.net</option>
<option>.org</option>
<option>.cc</option>
<option>.co.uk</option>
<option>.biz</option>
<option>.bz</option>
<option>.eu</option>
<option>.mobi</option>
<option>.us</option>
<option>.name</option>
   </select>
<br><br><br>
   </td>
   </tr>
   <tr>
<td><input value="Check Now" type="submit">
</td>
   </form>
   </tr>
   </tbody>
   </table>

      <div class="clr"></div>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
  </div>
</div>
<div class="footer">
  <div class="footer_resize">
    <p class="leftt">Copyright © <? echo "$yourdomain" ;?>. All Rights Reserved</p>
    <p class="rightt">&nbsp;</p>
    <div class="clr"></div>
  </div>
  <div class="clr"></div>
</div>
</body>
</html>
