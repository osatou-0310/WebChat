<?php
  define("CHAT", "chat.txt");
  date_default_timezone_set("Asia/Tokyo");

  if( $_SERVER["REQUEST_METHOD"] == "POST" ){
    // echo $_POST["message"];
    $text = $_POST["message"]. "," . date("m月d日 H時i分s秒") . "\n";
    file_put_contents( CHAT, $text, FILE_APPEND );
  }

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡易チャット</title>
    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
    <link rel="stylesheet" href="styles.css">
  </head>


  <body>
    <div class="wrap">
      <ul>
        <!-- <li>ああああああああ<span>02月25日 15時33分</span></li>
        <li>ああああああああ<span>02月25日 15時33分</span></li>
        <li>ああああああああ<span>02月25日 15時33分</span></li> -->
      </ul>
    </div>

    <form action="index.php" method="post">
      <input type="text" name="message">
      <button type="submit">送信</button>
    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="chat.js" charset="utf-8"></script>

  </body>
</html>
