<?php

/**
 * @author Tavi
 * @copyright 2013
 */
 include('include/functions.php');
 include('include/header.php');

?>
<form method="post" action="login2.php" id="loginform">

<strong>Username:</strong><br />

<input type="text" name="user" class="style" value=""/><br />

<strong>Parola:</strong><br />

<input type="password" name="password" class="style" value=""/><br />

<input type="reset" value="Reset" style="margin-left:0;" class="buton_mare"/>

<input type="submit" value="Logare" class="buton_mare"/>

</form>
<?php
include('include/sidebar.php');
include('include/footer.php');
?>