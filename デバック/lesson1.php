<?php
// デバック練習
// 氏名入力時に入力内容が表示されるようにプログラムを完成させてください。
// プログラム内にバグが含まれているので正常に動くように修正してください。
error_reporting(E_ALL);
ini_set('display_errors', 1);

// フォームが送信されていない場合にのみフォームを表示
if (empty($_POST)) {
    ?>

    <!DOCTYPE html>
    <html lang="ja">
    <head>
    <meta charset="utf-8">
    <title>デバック練習</title>
    </head>
    <body>
        <section>
        <form action="" method="post">
            <label>姓</label>
            <input type="text" name="last_name"/>
            <label>名</label>
            <input type="text" name="first_name" />
            <input type="submit" value="送信する"/>
        </form>
        </section>
    </body>
    </html>

    <?php
} else {
    // フォームが送信された場合の処理
    if (isset($_POST['last_name']) && isset($_POST['first_name'])) {
        $lastName = htmlspecialchars($_POST['last_name'], ENT_QUOTES, 'UTF-8');
        $firstName = htmlspecialchars($_POST['first_name'], ENT_QUOTES, 'UTF-8');
        if ($lastName != "" && $firstName != "") {
            echo '私の名前は ' . $lastName . ' ' . $firstName . ' です。';
        }
    }
}
?>