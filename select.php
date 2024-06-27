<?php

require_once ('funcs.php');

//1.  DB接続します
// insert.phpからコピペ
//本番環境データベース
$prod_db = "pontaro_kadai02_table";
//本番環境host
$prod_host = "mysql640.db.sakura.ne.jp";
//本番環境ID
$prod_id = "pontaro";
//本番環境pass 
$prod_pass = "pontaro-";
//2. DB接続します
try {
    //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname='. $prod_db . ';charset=utf8;host='. $prod_host ,$prod_id,$prod_pass);
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}


//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM kadai02_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= h($result['date']. 
        '/' . $result['material'] . 
        '/' . $result['form'] .
        '/' . $result['thickness'] .
        '/' . $result['size'] .
        '/' . $result['price']);
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>見積集積結果一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">


<!-- Main[Start] -->
<legend>見積もり結果表示</legend>
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

<!-- foot[Start] -->
<footer>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録に戻る</a>
      </div>
    </div>
  </nav>
</footer>
<!-- foot[End] -->

</body>
</html>
