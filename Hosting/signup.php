<?
include('geturl.php');
?>

<script type="text/javascript">

function ismaxlength(obj){
var mlength=obj.getAttribute? parseInt(obj.getAttribute("maxlength")) : ""
if (obj.getAttribute && obj.value.length>mlength)
obj.value=obj.value.substring(0,mlength)
}

</script>

<?PHP
$id = md5(rand(6000,99999999999999991000));
?>

<td style="text-align: left;" colspan="21">
<font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">
<form method=post action="http://order.<?php echo $yourdomain?>/register2.php">
<table>
<tr><th style="text-align: left;">Username<td><input type=text name=username size=30 value=""  maxlength="16" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Password<td><input type=password name=password size=30 maxlength="25" onkeyup="return ismaxlength(this)">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Email Address<td><input type=text name=email size=30 value="">
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Category<td><select size="1" name="website_category">
<option>Personal</option>
<option>Business</option>
<option>Hobby</option>
<option>Forum</option>
<option>Adult</option>
<option>Dating</option>
<option>Software / Download</option>
</select>
</td>
<tr><th style="text-align: left;"><td>
<tr><th>&nbsp;<td>
<tr><th style="text-align: left;">Site Language<td>
<select size="1" name="website_language">
<option>English</option>
<option>Non-English</option>
</select>
</td>
<tr><th>&nbsp;<td>&nbsp;
<input type=hidden name=id value="<?PHP echo $id; ?>">
<tr><th style="text-align: left;">Security Code<td><img src="http://order.<?php echo $yourdomain?>/image.php?id=<?PHP echo $id; ?>">
<tr><th>&nbsp;<td>&nbsp;
<tr><th style="text-align: left;">Enter Security Code<td><input type=text name=number size=30>
<tr><th>&nbsp;<td>&nbsp;
<tr><th colspan=2><input type=submit value="Register" name=submit>
</table>
</form>
</span>
<br style="font-family: Helvetica,Arial,sans-serif;">
</font>
<br style="font-family: Helvetica,Arial,sans-serif;">
</span></font>
<font size="-1"><span style="font-family: Helvetica,Arial,sans-serif;">By signing up for <? echo "$yourdomain" ;?> free hosting, you accept and agree to our <a href="terms.php">Terms of Service</a></span></font>

</td>
