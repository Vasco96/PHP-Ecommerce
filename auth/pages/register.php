<?php

$nome = '';
$cognome = '';
$email = '';
$password = '';
$confirm_password = '';
$nomeattivita = '';
$city = '';
$cap = '';

if (isset($_POST['register'])) {

  global $alertMsg;
  $errors = false;
  //var_dump($_POST); die;

  $nome = esc($_POST['nome']);
  $cognome = esc($_POST['cognome']);
  $email = esc($_POST['email']);
  $password = esc($_POST['password']);
  $confirm_password = esc($_POST['confirm_password']);

  $nomeattivita = esc($_POST['nome_attività']);
  $city = esc($_POST['city']);
  $cap = esc($_POST['cap']);

  if ($nome != '' AND $cognome != '' AND $email != '' AND $password != '' AND $confirm_password != '' AND $nomeattivita != '' AND $city != '' AND $cap != '' ) {

    $userMgr = new UserManager();

    if(!$errors AND !$userMgr->isValidEmail($email)) {
      $alertMsg = 'invalid_email';
      $errors = true;
    }

    if(!$errors AND !$userMgr->isValidPassword($password)) {
      $alertMsg = 'invalid_password';
      $errors = true;
    }

    if(!$errors AND !$userMgr->passwordsMatch($password, $confirm_password)){
      $alertMsg = 'passwords_not_match';
      $errors = true;
    }

    if(!$errors AND $userMgr->userExists($email)){
      $alertMsg = 'user_already_exists';
      $errors = true;
    }

    if (!$errors ) {
      $userId = $userMgr->register($nome, $cognome, $email, $password);
      if ($userId > 0){
        $userMgr->createAddress($userId, $nomeattivita, $city, $cap);
        echo "<script>location.href='".ROOT_URL."auth?page=login&msg=registered';</script>";
        exit;
      } else {
        $alertMsg = 'err';
      }     
    }
  } else {
    $alertMsg = 'mandatory_fields';
  }
}
?>

<div class="row">
  <div class="columnAccediRegistrati"><a href="<?php echo ROOT_URL; ?>auth?page=login">ACCEDI</a></div>
  <div class="columnRegistratiRegistrati"><a>REGISTRATI</a></div>
</div>
<br>

<form method="post" class="form">
        <div class="inputfield">
          <label>NOME:</label>
          <input name="nome" type="text" class="input" value="<?php echo esc_html($nome); ?>">
       </div>  
       <div class="inputfield">
          <label>COGNOME:</label>
          <input name="cognome" type="text" class="input" value="<?php echo esc_html($cognome); ?>">
       </div>  
       <div class="inputfield">
          <label>EMAIL:</label>
          <input name="email" type="text" class="input" value="<?php echo esc_html($email); ?>">
       </div> 
       <div class="inputfield">
          <label>PASSWORD:</label>
          <input name="password" type="password" class="input" value="<?php echo esc_html($password); ?>">
       </div> 
       <div class="inputfield">
          <label>CONFERMA PASSWORD:</label>
          <input name="confirm_password" type="password" class="input" value="<?php echo esc_html($confirm_password); ?>">
       </div> 
       <div class="inputfield">
          <label>NOME ATTIVITA':</label>
          <input name="nome_attività" type="text" class="input" value="<?php echo esc_html($nomeattivita); ?>">
       </div> 
       
      <div class="inputfield">
        <br>
        <input type="submit" value="Registrati" class="btn" name="register">
      </div>
</form>
</div>	

<!--
<div class="login-content">
			<form action="index.html">
				<img src="">

  <h2 class="title">Registrati</h5>
    <div class="input-div one">
    <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Nome</h5>
        <input  type="text" class="input" value="<?php echo esc_html($nome); ?>">
      </div>
    </div>
    <div class="input-div one">
    <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Cognome</h5>
        <input  type="text" class="input" value="<?php echo esc_html($cognome); ?>">
      </div>
    </div>
    <div class="input-div one">
    <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Email</h5>
        <input  type="text" class="input" value="<?php echo esc_html($email); ?>">
      </div>
    </div>
    <div class="input-div one">
    <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Password</h5>
        <input  type="text" class="input" value="<?php echo esc_html($password); ?>">
      </div>
    </div>
    <div class="input-div one">
      <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Conferma Password</h5>
        <input  type="text" class="input"value="<?php echo esc_html($confirm_password); ?>">
      </div>
    </div>
    <div class="input-div one">
    <div class="i">
        <i class="fas fa-user"></i>
      </div>
      <div class="div">
        <h5>Nome Attività</h5>
        <input  type="text" class="input" value="<?php echo esc_html($nomeattivita); ?>">
      </div>
    </div>

    <input type="submit" class="btn" value="Registrati">

    <a class="underline " href="<?php echo ROOT_URL; ?>auth?page=login">Già Possiedi un account? Accedi</a>
  
</form>-->

