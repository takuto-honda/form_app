<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>
<body>
<form action="contact.php" method="POST">
    <label for="your_name">氏名</label>
    <input type="text" id="your_name" name="name" value="<?php if(!empty($_POST["your_name"])) {echo $_POST["your_name"];}?>">
    <br>
    <label for="email">メールアドレス</label>
    <input type="text" id="email" name="name" value="<?php if(!empty($_POST["email"])) {echo $_POST["email"];}?>">
    <br>
    <input type="radio" name="gender" id="gender1" value="0" 
    <?php if(isset($_POST['gender']) && $_POST['gender'] === '0' )
    { echo 'checked'; } ?>>
    <label for="gender1">男性</label>
    <input type="radio" name="gender" id="gender2" value="1"
    <?php if(isset($_POST['gender']) && $_POST['gender'] === '1' )
    { echo 'checked'; } ?>>
    <label for="gender2">女性</label>
    <br>
    <label for="age">年齢</label>
    <select id="age" name="age">
      <option value="">選択してください</option>
      <option value="1">〜19歳</option>
      <option value="2">20歳〜29歳</option>
      <option value="3">30歳〜39歳</option>
      <option value="4">40歳〜49歳</option>
      <option value="5">50歳〜59歳</option>
      <option value="6">60歳〜</option>
    </select>
    <br>
    <label for="contact">お問い合わせ内容</label>
    <textarea id="contact" row="3" name="contact"><?php if(!empty($_POST['contact'])){echo h($_POST['contact']) ;} ?></textarea>
    <br>
    <input type="checkbox" id="caution" name="caution" value="1">
    <label for="caution">注意事項にチェックする</label>
    <br>
    <input type="submit" name="btn_confirm" value="確認する">
  </form>
</body>
</html>