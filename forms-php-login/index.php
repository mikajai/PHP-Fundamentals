<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<form action="handleForm.php" method="POST">
		<p>Username <input type="text" placeholder="" name="firstName"></p>
		<p>Password <input type="password" placeholder="" name="password"></p>
		<p><input type="submit" value="Login" name="submitBtn"></p>
	</form>

    <!-- Logout button -->
    <a href="unset.php"><input type="submit" value="Logout" name="logoutBtn"></a>

    <!-- Displays "user logged in" and "user password" information after logging in -->
	<?php if (isset($_SESSION['firstName'])): ?>
        <h2>User logged in: <?php echo $_SESSION['firstName']; ?></h2>
        <h2>User password: <?php echo $_SESSION['password']; ?></h2>
    <?php endif; ?>  <!-- Used to terminate the if condition -->

    <!-- displays message when a user is logged in and tries to log another -->
    <?php if (isset($_GET['message'])): ?>
        <p style="color: black;"><?php echo $_GET['message']; ?></p>
    <?php endif; ?>
</body>
</html>