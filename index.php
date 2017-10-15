<?php
include "include/globals.php";
include "include/f_users.php";

if (!isset($_COOKIE["wellness_login"])) {
	// User is not logged in
	header('Location: login.php');
}
else {
	setcookie("wellness_login",$_COOKIE["wellness_login"],time()+3600);
?>
<?php get_header_text("home","Home",get_fullname($_COOKIE["wellness_login_id"])); ?>

<p>Point Balance: <span class="pbal"><?php echo rand(2, 200); ?></span></p>

<?php
	get_footer_text();
}
?>