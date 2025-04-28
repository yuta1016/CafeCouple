<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>HTML内でのPHP処理</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<h1><?php echo 'タイトルです'; ?></h1>
<?php
    $text = "HTML内でのPHPスクリプト実行処理";
    echo "<p> $text </p>";


    $color = [
        ["sukebera", "saikou", "teikyuubi"],
        ["bbb","bbb","bbb"],
        ["ccc","ccc","ccc"]
    ];

?>

<h1>これはできるの？</h1>

<?php

    foreach ($color as $vals) {
        echo $vals[0].'('.$vals[1].'歳'.$vals[2].')';
        echo '<br>';
    }
?>

<!--カフェ情報-->
<?php
    $MatsueCafes=[
        ["服部珈琲", "MAMP-PRO-Logo.png", "何とかだからおすすめ"],
        ["pâtisserie J.KOWARI","imageBBB","aaaaa"],
        ["Pa.U SOFT CREAM", "imageCCC","sadgasdg"],
    ]
?>


<header>
    <h3 class="pos-left">カップルおすすめCafe</h3>

</header>

<main>
    <h4 class="pos-center heading">カップルがデートに行く時におすすめしたいカフェを紹介！</h4>
    <div class="detail pos-center">
        <p>こんにちは</p>
        <p>島根県でデートする時。。。。。。。。。。。</p>
    </div>

    <div class="cafe-content">
    <?php
        foreach ($MatsueCafes as $vale){
            echo "<div class='cafe-content'>";
            //名前
            echo "<h4 class='cafe-name'>$vale[0]</h4>";
            //写真
            echo "<img class='cafe-img' src='./$vale[1]' alt='画像'>";
            //説明
            echo "<div class='cafe-description'><p>$vale[2]<p></div>";

            echo "</div>";
        }
    ?>
    </div>
</main>

</body>
</html>