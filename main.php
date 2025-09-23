<?php
$name = $_POST['name'] ?? ''; // nameがなければ’’を使用
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>入力フォーム</title>
</head>

<body>
  <form method="post">
    <label>お名前は: <input type="text" name="name"></label>
    <button type="submit">送信</button>
  </form>
  <?php if ($name !== ''): ?>
    <p>私の名前は <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> です。</p>
  <?php endif; ?>
</body>
</html>