<?php
// echo '<pre>';var_dump($_POST);echo '</pre>';exit;
session_start();
$pageFlag = 0;
if(!empty($_POST['top'])) {
  $pageFlag = 0;
}
if(!empty($_POST['btn_confirm'])) {
  $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])) {
  $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>
<body>
  <!-- 入力画面 -->
  <?php if($pageFlag === 0): ?>
    <form action="contact.php" method="POST">
      <label for="your_name">氏名</label>
      <input type="text" id="your_name" name="your_name" value="<?php if(!empty($_POST["your_name"])) {echo $_POST["your_name"];}?>">
      <br>
      <label for="email">メールアドレス</label>
      <input type="text" id="email" name="email" value="<?php if(!empty($_POST["email"])) {echo $_POST["email"];}?>">
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
      <textarea id="contact" row="3" name="contact"><?php if(!empty($_POST['contact'])){echo $_POST['contact'] ;} ?></textarea>
      <br>
      <input type="checkbox" id="caution" name="caution" value="1">
      <label for="caution">注意事項にチェックする</label>
      <br>
      <input type="submit" name="btn_confirm" value="確認する">
    </form>
  <?php endif; ?>

  <!-- 確認画面 -->
  <?php if($pageFlag === 1): ?>
    <form action="contact.php" method="POST">
      氏名
      <?php echo $_POST['your_name'] ;?>
      <br>
      メールアドレス
      <?php echo $_POST['email'] ;?>
      <br>
      性別
      <?php 
        if($_POST['gender'] === '0'){ echo '男性'; }
        if($_POST['gender'] === '1'){ echo '女性'; }
      ?>
      <br>
      年齢
      <?php
        if($_POST['age'] === '1'){ echo '〜19歳' ;}
        if($_POST['age'] === '2'){ echo '20歳〜29歳' ;}
        if($_POST['age'] === '3'){ echo '30歳〜39歳' ;}
        if($_POST['age'] === '4'){ echo '40歳〜49歳' ;}
        if($_POST['age'] === '5'){ echo '50歳〜59歳' ;}
        if($_POST['age'] === '6'){ echo '60歳〜' ;}
      ?>

      <br>
      お問い合わせ内容
      <?php echo $_POST['contact'] ;?>
      <br>

      <input type="submit" name="back" value="戻る">
      <input type="submit" name="btn_submit" value="送信する">
    </form>
  <?php endif; ?>

  <!-- 送信完了画面 -->
  <?php if($pageFlag === 2) : ?>
    <form action="contact.php">
      送信が完了しました。
      <br>
      <input type="submit" name="top" value="トップページへ戻る">
    </form>
  <?php endif; ?>
</body>
</html>