<?php
	include_once('functions.inc');
	$stkcount_inverters = array();
	$stkcount_panels = array();
	
	session_start();	
	if ($_SESSION['AUTH'] != 1) {
		header("location: login.php");
	}
	
	include('header.php');

?><br>
<ul style="padding-left:100px;line-height:25px">
<li><a href="/commissions-list.php">Solargain Commissions</a></li>
<li><a href="/commissions-user.php">Solargain User Manager</a></li>
</ul>



</body>
</html>

