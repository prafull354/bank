<?php
session_start();
?>
<h2> welcome: <span style="color:red"><?php echo $_SESSION['username']; ?> </span></h2>
<a href="logout.php">Logout</a>