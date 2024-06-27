<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */



//1. POSTデータ取得
$date = $_POST['date'];
$material = $_POST['material'];
$form = $_POST['form'];
$thickness = $_POST['thickness'];
$size = $_POST['size'];
$price = $_POST['price'];


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

//３．データ登録SQL作成
// 1. SQL文を用意
  $stmt = $pdo->prepare('INSERT INTO kadai02_table(id, material, form, thickness, size, price, date) 
  VALUES (NULL, :material, :form, :thickness, :size, :price, :date)');

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':material', $material, PDO::PARAM_STR);
$stmt->bindValue(':form', $form, PDO::PARAM_STR);
$stmt->bindValue(':thickness', $thickness, PDO::PARAM_STR);
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':price', $price, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: index.php');

}
?>
