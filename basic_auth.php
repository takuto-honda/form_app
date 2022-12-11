<?php
  echo __FILE__;
  // パスワード暗号化
  echo(password_hash('password123', PASSWORD_BCRYPT));
?>