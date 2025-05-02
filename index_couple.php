<!DOCTYPE html>
<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0KRS846BKY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0KRS846BKY');
</script>

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
      user-scalable=yes"
/>
<meta name="description" content="松江市でデートにおすすめのカフェを厳選紹介！堀川沿いの和カフェからおしゃれな隠れ家カフェまで、カップルに人気のスポットを写真付きで詳しく解説。営業時間やアクセス情報も掲載。次のデート先探しに役立つ情報満載。">
<meta name="keywords" content="松江, 松江市, デート, カフェ, デートスポット, カップル, おすすめカフェ, 隠れ家カフェ, おしゃれカフェ, 人気カフェ">



<title>松江市デートにおすすめのカフェ10選｜雰囲気の良い人気店から隠れ家まで</title>
<link href="style.css" rel="stylesheet">



</head>
<body>
<!--カフェ情報-->
<?php
    $MatsueCafes = [
        [
            "服部珈琲",
            "hattorikohi.jpg",
            "松江市のカフェ 服部珈琲の内観",
            "広々とした落ち着いた空間で、ケーキやサラダなど様々な物が味わえるカフェ。木の温もりを感じる店内は、ソファ席も多く、ふたりでゆっくり過ごしたいデートにぴったりです",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12996.586914359143!2d133.02689731121066!3d35.475913320038664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3557050eed5ea9c9%3A0x970d2c13ed1eefab!2z5pyN6YOo54-I55Cy5bel5oi_IOm7kueUsOW6lw!5e0!3m2!1sja!2sjp!4v1745841681399!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "スカラベ別邸",
            "sukarabebebettei.jpg",
            "松江市のカフェ スカラベ別邸の内観",
            "和モダンな空間でゆったり過ごせる、隠れ家のようなカフェ。上品で落ち着いた店内は、大人のデートにぴったり。目の前でモンブランをしてくれるやつあるよ!(語彙力)。",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d203.08852819118886!2d133.05465694070259!3d35.46923873649244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35570503361c1d1b%3A0x6b0a724985055842!2zU2NhcmFiIOWIpemCuCDml6XmnKzojLbjgqvjg5Xjgqcv44Op44Oz44OB!5e0!3m2!1sja!2sjp!4v1745898064512!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "Pa.U SOFT CREAM（パウソフトクリーム）",
            "pausoft.jpg",
            "松江市のカフェ Pa.U SOFT CREAM（パウソフトクリーム）のアイス 窓からの景色",
            "スイーツ好き必見！大山ミルクの絶品ソフトクリームが楽しめる癒し空間。犬の足跡が目印のキュートなカフェ。素材にこだわった濃厚なソフトは、心も体もとろけるおいしさ。おしゃれな店内で、写真映えもバッチリ！",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d683.1106396037342!2d133.04826488947324!3d35.468652677932454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35570561fc94a8df%3A0x1927f7ea75951efc!2zUGEuVSBTT0ZUIENSRUFNICjjg5Hjgqbjgr3jg5Xjg4jjgq_jg6rjg7zjg6Ap!5e0!3m2!1sja!2sjp!4v1745896574956!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "十三夜",
            "jusanya.jpg",
            "十三夜",
            "和の静けさに癒される、大人の隠れ家カフェ。落ち着いた和の空間で、季節の和菓子や日本茶を味わえる。時間がゆっくりと流れるような感覚を味わいたい人にぴったり。窓から堀川をみれるよ。",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d812.2949385897007!2d133.0578745928738!3d35.47509611914349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355705c1c8344d3d%3A0x5085a92eaa3bd818!2z5Y2B5LiJ5aSc!5e0!3m2!1sja!2sjp!4v1745896615283!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "Bookcafe DOOR",
            "door.jpeg",
            "松江のカフェ Bookcafe DOORの内観",
            "本とコーヒーに囲まれる、知的で優しいひととき。豊富な書籍と心地よいBGM、香り高いコーヒーが自慢。ひとり時間を過ごすのにも、友達との語らいにも◎。",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1624.794445139027!2d133.05745057721126!3d35.464970963620374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355705ae837e77e9%3A0xc853e23091fd65c0!2sBookcafe%20DOOR!5e0!3m2!1sja!2sjp!4v1745896651910!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "Café Cozy",
            "cozy.jpg",
            "松江市のカフェ Café Cozyの内観",
            "まったり過ごせる癒し空間。都会の喧騒を忘れてリラックス。白を基調にした清潔感のある内装が印象的。こだわりのラテとスイーツで、ゆっくりとしたカフェタイムを。",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.676975851438!2d133.0605082954006!3d35.46279072343222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355704e380ab5fb9%3A0xc89866a2e2c70ae8!2sCaf%C3%A9%20Cozy!5e0!3m2!1sja!2sjp!4v1745896686196!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
        [
            "アマトウ",
            "amatou.jpg",
            "松江市のカフェ アマトウのケーキ ニュースの画面",
            "スイーツにこだわる“甘党”のための、極上カフェ。店名の通り、スイーツ好きにはたまらないラインナップ。ケーキやパフェはもちろん、季節限定のメニューにも注目！",
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6498.210698487389!2d133.05083088512347!3d35.47693720161153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35570509d10c463f%3A0x765009a1064b7b66!2z44Ki44Oe44OI44Km!5e0!3m2!1sja!2sjp!4v1745896724486!5m2!1sja!2sjp" width="320" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ],
    ];
?>




<header>
    <h2 class="pos-left site-name">【松江市】カップルおすすめカフェ</h2>

</header>

<img class="cover" src="./images/matsueshi.jpg" alt="松江市">

<main>
    <h1 class="title pos-center">デート時に行くおすすめしたい【松江市】カフェを紹介！</h1>
    <div class="detail">
        <p> 松江でデートするなら、カフェ一択！<br>
            松江でデートするとなったら行くとこ無いよね、、だったらカフェに行こう！<br>
            本記事では、カップルにぴったりな松江市内のおしゃれカフェをたっぷり紹介しています。ふたりでのんびり過ごしたいとき、ちょっと特別な気分を味わいたいときにぴったりのお店ばかり。次のデート先に迷ったら、ぜひ参考にして、素敵な時間を過ごしてくださいね！</p>
    </div>

    <h2 style="font-size: 18px; text-align: center;">【松江市】カップルおすすめCafe↓↓↓↓↓↓↓</h2>

    <hr>

    <div class="cafe-content">
    <?php
        foreach ($MatsueCafes as $vale){
            echo "<div class='cafe-content'>";
            //名前
            echo "<h3 class='cafe-name'>$vale[0]</h3>";
            //写真
            echo "<div class='pos-center'><img class='cafe-img' src='./images/$vale[1]' alt='$vale[2]'></div>";
            //説明
            echo "<div class='cafe-description'><p>$vale[3]<p></div>";

            echo "<div class='pos-center'>$vale[4]</div>";

            echo "</div>";

            echo "<hr>";
        }
    ?>
    </div>
</main>

<footer>
    <p>
        ここに記入してないおすすめカフェも沢山あるから色々調べてみてね！
    </p>
</footer>

</body>
</html>