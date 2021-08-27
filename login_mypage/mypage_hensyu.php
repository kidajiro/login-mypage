<?php
mb_internal_encoding("utf8");

if (empty($_POST['from_mypage'])) {
  header("Location:login_error.php");
}

session_start();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>マイページ編集</title>
  <link rel="stylesheet" href="mypage_hensyu.css">
</head>
<body>
<header>
    <img src="4eachblog_logo.jpg">
    <div class="logout"><a href="log_out.php">ログアウト</a></div>
  </header>
  <main>
    <div class="infoarea">
      <form method="post" action="mypage_update.php">
        <h2>会員情報</h2>
        <p>
          こんにちは！ <?php echo $_SESSION['name']; ?> さん
        </p>
        <img src="<?php echo $_SESSION['picture']; ?>">
        <div class="basic_info">
          <p>氏名：
            <input type="text" class="formbox" size="40" name="name" required value="<?php echo $_SESSION['name']; ?>">
          </p>
          <p>メール：
            <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required value="<?php echo $_SESSION['mail']; ?>">
          </p>
          <p>パスワード：
          <input type="password" class="formbox" size="40" name="password" pattern="^[a-zA-Z0-9]{6,}$" required value="<?php echo $_SESSION['password']; ?>">
          </p>
        </div>
        <div class="comments">
          <textarea class="formbox" name="comments" cols="80" rows="5"><?php echo $_SESSION['comments']; ?></textarea>
        </div>
        <div class="button_area">
          <input type="submit" class="submit_button" size="35" value="この内容に変更する">
        </div>
      </form>
    </div>
  </main>
  <footer>
		© 2018 InterNous.inc. All rights reserved
	</footer>
</body>
</html>