<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<!--
大きさ指定。phpはhtmlと違ってpcのサイズにならなそう
スマホサイズに設定
-->
<meta name="viewport"
   content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" />


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
        [
            "服部珈琲",
            "hattorikohi.jpg",
            "服部珈琲" ,
            "広々とした落ち着いた空間で、ケーキやサラダなど様々な物が味わえるカフェ。木の温もりを感じる店内は、ソファ席も多く、ふたりでゆっくり過ごしたいデートにぴったりです", 
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12996.586914359143!2d133.02689731121066!3d35.475913320038664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3557050eed5ea9c9%3A0x970d2c13ed1eefab!2z5pyN6YOo54-I55Cy5bel5oi_IOm7kueUsOW6lw!5e0!3m2!1sja!2sjp!4v1745841681399!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        ["スカラベ別邸","sukarabebebettei.jpg","スカラベ別邸","和モダンな空間でゆったり過ごせる、隠れ家のようなカフェ。上品で落ち着いた店内は、大人のデートにぴったり。目の前でモンブランをしてくれるやつあるよ!(語彙力)。"]
    ]
?>


<header>
    <h3 class="pos-left site-name">【松江市】カップルおすすめCafe</h3>

</header>

<main>
    <h4 class="title pos-center">デート時に行くおすすめしたい【松江市】カフェを紹介！</h4>
    <div class="detail">
        <p> 松江でデートするなら、カフェ一択！<br>
            松江でデートするとなったら行くとこ無いよね、、だったらカフェに行こう！<br>
            本記事では、カップルにぴったりな松江市内のおしゃれカフェをたっぷり紹介しています。ふたりでのんびり過ごしたいとき、ちょっと特別な気分を味わいたいときにぴったりのお店ばかり。次のデート先に迷ったら、ぜひ参考にして、素敵な時間を過ごしてくださいね！</p>
    </div>

    <hr>

    <div class="cafe-content">
    <?php
        foreach ($MatsueCafes as $vale){
            echo "<div class='cafe-content'>";
            //名前
            echo "<h4 class='cafe-name'>$vale[0]</h4>";
            //写真
            echo "<div class='pos-center'><img class='cafe-img' src='./images/$vale[1]' alt='$vale[2]'></div>";
            //説明
            echo "<div class='cafe-description'><p>$vale[3]<p></div>";

            echo $vale[4];

            echo "</div>";

            echo "<hr>";
        }
    ?>
    </div>
</main>

</body>
</html>