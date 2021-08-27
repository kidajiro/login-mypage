<?php
session_start();
if(isset($_SESSION['id'])){
  header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <header>
    <img src="4eachblog_logo.jpg">
    <div class="register"><a href="register.php">新規登録</a></div>
  </header>
  <main>
    <form method="post" action="mypage.php">
      <h2>ログイン</h2>
      <div class="form_content">
        <label>メールアドレス</label><br>
        <input type="text" class="formbox" size="60" name="mail" value="<?php 
          if(isset($_COOKIE['login_keep'])) {
            echo $_COOKIE['mail']; 
          }
        ?>">
      </div>
      <div class="form_content">
      <label>パスワード</label><br>
        <input type="password" class="formbox" size="60" name="password" value="<?php 
          if(isset($_COOKIE['login_keep'])) {
            echo $_COOKIE['password']; 
          }
        ?>">
      </div>
      <div class="form_content">
        <label>
          <input type="checkbox" class="formbox" size="60" name="login_keep" value="login_keep" <?php
            if(isset($_COOKIE['login_keep'])) {
              echo "checked='checked'";
            }
          ?>>ログイン状態を保持する
        </label>
      </div>
      <input type="submit" class="submit_button" size="35" value="ログイン">
    </form>
  </main>
  <footer>
		© 2018 InterNous.inc. All rights reserved
	</footer>
</body>
</html>

