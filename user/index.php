<?php
require_once '../inc/init.php'; 

global $loggedInUser;

if (!$loggedInUser) {
  $returnPage = isset($_GET['page']) ? esc($_GET['page']) : '';
  echo "<script>location.href='".ROOT_URL."auth?page=login'</script>";
  exit;
}

// if ($_GET['page'] == 'dashboard' && $loggedInUser->user_type == 'admin') {
//   echo "<script>location.href='".ROOT_URL."admin?page=dashboard'</script>";
//   exit;
// }

$page = 'profile';
if(isset($_GET['page'])) {
  $page = $_GET['page'];
}
?>
<?php include ROOT_PATH . 'user/template-parts/header.php'; ?>

<?php include "pages/$page.php"; ?>

<?php include ROOT_PATH . 'user/template-parts/footer.php'; ?>