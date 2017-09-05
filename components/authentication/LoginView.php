<script type="text/JavaScript" src="js/sha512.js"></script>
<script type="text/JavaScript" src="authentication/js/forms.js"></script>

<?php
    if (isset($_GET['error'])) {
        echo '<p class="error">Error Logging In!</p>';
    }
?>

<form action="includes/process_login.php" method="post" name="login_form">
    Email: <input type="text" name="email" />
    Password: <input type="password" name="password" id="password"/>
    <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
</form>

<?php
    if (login_check($mysqli) == true)
    {
        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
        echo '<p>Do you want to change user? <a href="includes/process_logout.php">Log out</a>.</p>';
    }
    else
    {
        echo '<p>Currently logged ' . $logged . '.</p>';
        echo "<p>If you don't have a login, please <a href='process_register.php'>register</a></p>";
    }
?>