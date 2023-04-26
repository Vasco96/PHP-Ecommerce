<?php
require_once '../inc/init.php'; 

global $loggedInUser;

$page = isset($_GET["page"]) ? $_GET["page"] : 'login';

if ($loggedInUser && $page != 'logout') {
  Header('Location: ' . ROOT_URL);
  exit;
}

?>
<?php include ROOT_PATH . 'auth/template-parts/header.php'; ?>
<?php include "pages/$page.php"; ?>
<?php include ROOT_PATH . 'auth/template-parts/footer.php'; ?>