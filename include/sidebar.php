<div class="frontpage" id="sidebar">
<ul>
<li><a href="index.php">Acasa</a></li><br />
<?php if(!isset($_SESSION['account'])) {?><li><a href="login.php">Logare</a></li>
<?php } else { ?><li><a href="logout.php">Delogare</a></li><?php } ?>
</ul>
</div>