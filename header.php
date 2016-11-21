<header>
	<h1>ChatBlog</h1>
	<?php
		echo "Bonjour " . $_SESSION['pseudo'] . "! <br/>";
	?>
	
	<form action="deconnexion.php" method="POST">
		<input type="submit" value="déconnexion" />
	</form>
</header>