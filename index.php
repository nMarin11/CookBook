<?php
/**initial settings for the smarty tpl engine**/

require_once("smarty/libs/Smarty.class.php");
include("config/config.php");
$smarty = new Smarty();
$smarty->template_dir = 'views';
$smarty->compile_dir = 'tpl';
//redirecting logged user
session_start();
if (isset($_SESSION['username'])) {
	header ('Location: dashboard.php');
}
//defining variables
$cookieMsg = '';
$registerMessage = '';
//setting the cookies
	if(isset($_COOKIE["cookieMsg"])){
	$cookieMsg = $_COOKIE["cookieMsg"];
	unset($_COOKIE['cookieMsg']);
	setcookie('cookieMsg', '', time() - 3600, '/');
	};
if(!empty($_GET['registerMessage'])){
$registerMessage = $_GET['registerMessage'];
};
//assigning the smarty variables
$smarty->assign(
	'cookieMsg',
	$cookieMsg
);

$smarty->assign(
	'registerMessage',
	$registerMessage
);

$smarty->display('index.tpl');
?>