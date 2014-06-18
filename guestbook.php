<?php 
require 'file.php';
require 'add_entry.php';
require 'get_entries.php';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"> 
<HTML>
<HEAD>
<TITLE>Guestbook</TITLE>
</HEAD>

<BODY>
<?php echo $guestbook; ?>

<form name="gb" action="<?php $_SERVER['SCRIPT_NAME']?>" method="post">
<table>
  <tr>
    <td class="tdhead">Name</td>
    <td><input type="text" name="formName" value="" size="30" maxlength="50"></td>
  </tr>
  <tr>
    <td class="tdhead">Email</td>
    <td><input type="text" name="formEmail" value="" size="30" maxlength="100"></td>
  </tr>
  <tr>
    <td class="tdhead">Comment</td>
    <td><textarea name="formComment" rows="5" cols="30"></textarea></td>
  </tr>
  <tr>
    <td> </td>
    <td><input type="submit" name="submit" value="submit" >
    	<input type="reset" name="reset" value="reset"></td>
  </tr>
</table>
</form>

</BODY>
</HTML>

