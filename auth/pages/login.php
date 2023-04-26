<?php

$email = '';
$password = '';

if (isset($_POST['login'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $userMgr = new UserManager();

  $userObj = $userMgr->login($email, $password);

  if ($userObj) {
    $_SESSION['user'] = serialize($userObj);
    if (isset($_SESSION['client_id'])) {
      $cartMgr = new CartManager();
      //var_dump($_SESSION); die;
      $cartMgr->mergeCarts();
    }
    echo "<script>location.href='".ROOT_URL."user?page=dashboard';</script>";
    exit;
  } else {
    global $alertMsg;
    $alertMsg = 'login_err';
  }
}
?>

<div class="row">
  <div class="columnAccediAccedi"><a >ACCEDI</a></div>
  <div class="columnRegistratiAccedi"><a href="<?php echo ROOT_URL; ?>auth?page=register">REGISTRATI</a></div>
</div>
<br>

    <form method="post" class="form">
        <div class="inputfield">
          <label>EMAIL:</label>
          <input name="email" id="email" type="text" class="input" value="<?php echo $email; ?>">
       </div>  
       <div class="inputfield">
          <label>PASSWORD:</label>
          <input name="password" id="password" type="password" class="input" value="<?php echo $password; ?>">
       </div>  
       <a class="forget_password" href="#">Password dimenticata?</a>
       
      <div class="inputfield">
        <br>
        <input type="submit" value="Accedi" class="btn" name="login">
      </div>
</form>
</div>	