<?php

mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];

$original_pic_name = $_FILES['picture']['name'];
$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>マイページ登録確認</title>
  <link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>
<body>
  <header>
    <img src="4eachblog_logo.jpg">
  </header>
  <main>
    <div class="confirmarea">
      <h2>会員登録</h2>
      <p>こちらの内容で登録しても宜しいでしょうか？</p>
      <div>
        氏名：<?php echo $_POST['name']; ?>
      </div>
      <div>
        メール：<?php echo $_POST['mail']; ?>
      </div>
      <div>
        パスワード：<?php echo $_POST['password']; ?>
      </div>
      <div>
        プロフィール写真：<?php echo $original_pic_name; ?>
      </div>
      <div>
        コメント：<?php echo $_POST['comments']; ?>
      </div>
      <div class="buttonarea">
        <form action="register.php">
          <input type="submit" class="button1" value="戻って修正する">
        </form>
        <form method="post" action="register_insert.php">
          <input type="submit" class="button2" value="登録する">
          <input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
          <input type="hidden" name="mail" value="<?php echo $_POST['mail']; ?>">
          <input type="hidden" name="password" value="<?php echo $_POST['password']; ?>">
          <input type="hidden" name="picture" value="<?php echo $path_filename; ?>">
          <input type="hidden" name="comments" value="<?php echo $_POST['comments']; ?>">
        </form>
      </div>
    </div>
  </main>
  <footer>
    ©︎ 2018 InterNous.inc. All rights reserved
  </footer>
</body>
</html>