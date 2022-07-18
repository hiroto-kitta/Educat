<?php
//データベースの処理
$dsn = 'mysql:host=localhost;dbname=english_test;charset=utf8';
$user = 'English_test';
$pass = 'rootroot';

try{
    $dbh = new PDO($dsn, $user, $pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    //echo '接続成功';
    //sqlの準備
    $sql = 'SELECT * FROM questins';
    //sqlの実行
    $stmt = $dbh->query($sql);
    //sqlの結果を受け取る
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    //var_dump($result);
   // $dbh = null;
}catch(PDOException $e){
    echo '接続失敗'.$e->getMessage();
    exit();
};

//var_dump($dbh)
?>
<?php 
//乱数の発生
$randomQuestionNumber = rand(0,1);

$num = $randomQuestionNumber

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英語のテスト</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="educat.css">
</head>
<header>
  <div class="all">
    <div class="container">
    <div class="header-logo">
        <img src="logo.png"height="60px">
    </div>
        <div class="header-right">
          <a href="#">テスト問題一覧</a>
          <a href="#">新規登録</a>
          <a href="#" class="login">ログイン</a>
        </div>
      </div>
</header>
<div class="main">
      <div class="index">
      <ul>
        <li>1.be動詞 一般動詞　</li>
        <li>2.be動詞 一般動詞 3人称単数</li>
        <li>3.be動詞 一般動詞 過去形</li>
        <li>4.助動詞</li>
      </ul>
        
      <p>問題選択画面(このページ）</p>

    </div>
  <div class="main-right">
    <div class="title">
      <h1> Question</h1>
    </div>

    <div class="que-right">
      <div class="top-wrapper">
        <!-- <h1>問題番号<?php echo $result[$num]['id']?></h1> -->
        <h1><?php echo $result[$num]['content']?></h1>
      </div>
      <div class=hidden-disp>
        <input type="checkbox" id="disp">
        <label  class="btn answer"for="disp">回答</label>
        <div class="check">
          <div class="check-right">
            <h1><?php echo $result[$num]['answer']?></h1>
          </div>
          <div class="check-left">
    <!-- <div class="btn-wrapper"> -->
            <input type="radio" id="scale" name="scales" checked>
            <label for="scale" class="aa correct">正解</label>
    <!-- </div> -->
    <!-- <div class="btn-wrapper"> -->
            <input type="radio" id="scale" name="scales">
            <label for="scale" class="aa miss">不正解</label>
    <!-- </div> -->
             <div class="btn-wrapper">
              <a href="#" class="btn next">次の問題へ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</html>