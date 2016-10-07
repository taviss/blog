<?php

/**
 * @author Tavi
 * @copyright 2013
 */
 ?>

<div class="frontpage" id="menu">
<a href="index.php" class="navbar" style="margin-left:10px;">Acasa</a>
<?php if(CheckLogged()) { ?><a href="add_post.php" class="navbar" style="margin-left: 10px;">Postare noua</a> <?php } ?>
<a href="downloads/site.rar" class="navbar" style="margin-left:10px;">Descarca</a>
<?php if(!CheckLogged()) { ?><a href="login.php" class="navbar" style="margin-left:10px;">Logare</a>
<?php } else { ?><a href="logout.php" class="navbar" style="margin-left:10px;">Delogare[<?php echo $_SESSION['account']?>]</a> <?php } ?>
</div>