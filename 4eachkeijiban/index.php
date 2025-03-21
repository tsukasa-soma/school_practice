<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4each_keijiban</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <!-- <form method="post" action="insert.php">
        name="handlename"
        neme="title"
        name="comments" -->

    <?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");
    $stmt = $pdo->query("select * from 4each_keijiban");

    ?>

    <header>

        <div class="logo">
            <img src="./images/header/4eachblog_logo.jpg">
        </div>

        <div class="menu">
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </div>

    </header>

    <main>

        <div id="main_container">
            <div class="contents">

                <div class="top_area">
                    <h1>プログラミングに役立つ掲示板</h1>
                </div>

                <div class="main_form">

                    <h3>入力フォーム</h3>

                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label>
                            <br>
                            <input type="text" class="text" size="35" name="handlename">
                        </div>

                        <div>
                            <label>タイトル</label>
                            <br>
                            <input type="text" class="text" size="35" name="title">
                        </div>

                        <div>
                            <label>コメント</label>
                            <br>
                            <textarea cols="35" rows="7" name="comments"></textarea>
                        </div>

                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                    </form>

                </div>

                <?php

                while ($row = $stmt->fetch()) {

                    echo "<div class='main_board'>";

                    echo "<h3>" . $row['title'] . "</h3>";

                    echo "<div class='thread'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by " . $row['handlename'] . "</div>";

                    echo "</div>";

                    echo "</div>";
                }

                ?>

            </div>





            <div class="side">
                <div class="s_box1">
                    <h3>人気の記事</h3>
                    <ul>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                </div>
                <div class="s_box2">
                    <h3>オススメリンク</h3>
                    <ul>
                        <li>インターノウス株式会社</li>
                        <li>XMAPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Braketsのダウンロード</li>
                    </ul>
                </div>
                <div class="s_box3">
                    <h3>カテゴリ</h3>
                    <ul>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>

        </div>

    </main>

</body>

<footer>
    <p>copyright © inte©rnous | 4each blog the which provides A to Z about programming.</p>
</footer>

</html>