<?php
require './mail.php';
if(!empty($_POST['mail'])){
	$mail = new Mail();
	$mailBody = [
		'subject' => 'お問い合わせメール',
		'to' => 'unimr.13@gmail.com',
		'text' => "メールアドレス\n".$_POST['address']."\n\n内容\n".$_POST['comment']
	];

	$re = $mail->sendmail($mailBody);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>portfolio</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Noto+Serif+JP" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function(){
		$('.moreLink').on('click', function(event) {
			event.preventDefault();
			$('#moreInfo').removeClass('d-none');
			$(event.target).addClass('d-none');
		});

		$('.closeLink').on('click', function(event) {
			event.preventDefault();
			$('#moreInfo').addClass('d-none');
			$('.moreLink').removeClass('d-none');
		});
	});

	$(function(){
		$('.moreLink').on('click', function(){
			$(this).next().slideToggle(slow/400/fast);
		});

		$('.closeLink').on('click', function(){
			$(this).next().slideToggle(slow/400/fast);
		});
	});
</script>

<!-- ヘッダー -- >
<header class="site-width">

	<!-- ナビ -->
	<div class="top-logo">
		Portfolio
	</div>

	<nav class="top-nav site-width">

		<ul>
			<li><a href="#profile">わたしについて</a></li>
			<li><a href="#skill">できること</a></li>
			<li><a href="#product">つくったもの</a></li>
			<li><a href="#contact">おといあわせ</a></li>
		</ul>

	</nav>

</header>

<!-- メインコンテンツ -->
<main class="site-width">
	
	<!-- プロフィール -->
	<section id="profile" class="contents">
		<h1 class="title">・ わたしについて ・</h1>
		<img class="me" src="img/me.png"></img>
		<div class="about">
			<h2 class="prof">#MK</h2>
			<p>山形県新庄市出身。Webデザイナー志望。情報系の大学を中退し、独学でプログラミングを勉強中。占い・心理テスト、お絵かきが趣味。</p>
			<p>特技は食べることとちょこっと料理。好きな食べ物は肉、得意料理はオムライス。</p>
			<a href="" class="moreLink">more</a>
			
			<div id="moreInfo" class="d-none">
				<br>
				<p>人との繋がりを大切にし、クライアントに寄り添った仕事をすることを心掛けています。</p>
				<p>見知らぬ人の新しい価値観を取り入れ、生かすことが得意です。</p>
				<p>臨機応変に対応しながら、より良いものを生み出そうと努力することが出来ます。</p>
				<p>また、地域のイベントやボランティア活動に参加することが好きです。</p>
				<br>
				<p>大学在学中に映像制作・ビジュアルプログラミング（vvvv・Touch designer）・3DCG・デザインに触れました。</p>
				<p>小学校から高校までは女子バレー部で9年間プレーヤーとしてバレーボールを楽しみました。<br>
				大学では写真部と美術部に所属し、作品制作に努め...てはいませんでしたが、部活動やオープンキャンパスを通してOB・OGの方々と積極的に関わることで、自分の世界を広げることが出来ました！</p>
				<br>
				<a href="" class="closeLink">close</a>
			</div>
		</div>
	</section>

	<!-- スキル -->
	<section id="skill" class="contents">
		<h1 class="title">・ できること ・</h1>

		<table>
			<tr>
				<th>写真</th>
				<td>撮影・編集</td>
				<td>1年半</td>
			</tr>
			<tr>
				<th>Adobe Illustrator</th>
				<td>サイトデザイン・名刺作成</td>
				<td>半年</td>
			</tr>
			<tr>
				<th>プログラミング</th>
				<td>サイト制作（HTML/CSS/jQuery/PHP）</td>
				<td>半年</td>
			</tr>
			<tr>
				<th>運転</th>
				<td>普通自動車（AT限定）</td>
				<td>半年</td>
			</tr>
			<tr>
				<th>イラスト作成</th>
				<td>アイコン・バナー</td>
				<td>趣味程度</td>
			</tr>
			<tr>
				<th>スポーツ</th>
				<td>バレーボール・スキー・スノーボード・水泳</td>
				<td>下手の横好き</td>
			</tr>
		</table>
	</section>

	<!-- プロダクト -->
	<section id="product" class="contents">
		<h1 class="title">・ つくったもの ・</h1>

		<h2 class="sub-title">デザイン</h2>

		<div class="design">
			<div class="panel">
				<h3>サイトデザイン/LocalStyle/3ヶ月</h3>
				<img class="product-img" src="img/site01.png">
				<img class="product-img" src="img/site02.png">
				<p class="text">八王子に店舗を構える名店の商品を取り扱うショッピングサイトです。ロゴ、画面モックを担当しました。『たくさんの人に親しんで利用してもらえる、名店の品を取り扱うショッピングサイト』をコンセプトに、20~60代まで幅広い年代の方が利用しやすいデザイン、親しみやすい色づかいを意識して制作しました。また、八王子以外の地域のサイトにも利用しやすいように考案しました。</p>
			</div>

			<div class="panel">
				<h3>名刺/ozone creatives/1ヶ月</h3>
				<img class="product-img" src="img/card01.png">
				<img class="product-img" src="img/card02.png">
				<p class="text">所属していたデザイン団体の名刺です。指定されたロゴを使用し、オゾンの色である淡い青色をキーカラーとしてデザインしました。メンバーがとても自由な人たちなので、『個性的で楽しいデザイン団体』をコンセプトに作成しました。文字の並びや大きさなどに拘りました。しかし、名刺管理アプリなどでスキャンしてデータ化するのは難しいです（笑）</p>
			</div>
		</div>

			<h2 class="sub-title">写真・イラスト</h2>
			<div class="art">
				
				<div class="panel">
					
					<h3>キイロ/山形/2018</h3>
					<img class="product-img" src="img/pic01.png">
				</div>

				<div class="panel">
					
					<h3>暮らし/東京/2017</h3>
					<img class="product-img" src="img/pic02.png">
				</div>

				<div class="panel">
					<h3>夢中</h3>
					<img class="product-img" src="img/pic04.png">
				</div>
			</div>

			<p class="text"></p>
			</div>
	
	</section>

	<!-- コンタクト -->
	<section id="contact" class="contents">
		<h1 class="title">・ おといあわせ ・</h1>

		<p>気になることがあれば、お気軽にご連絡ください。</p>
		<form action="" method="post">

			<label>
				<p>メールアドレス</p>
				<input type="text" name="address" value="<?=(isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '')?>">
			</label>
			<label>
				<p>内容</p>
				<textarea cols="80" rows="10" name="comment"><?=(isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : '')?></textarea>
			</label>

			<?php
			if(isset($re)){
				if($re){
					echo "送信しました。<br>\n";
				}else{
					echo "送信できませんでした。<br>\n";
				}
			}
			?>
			<input type="submit" name="mail" value="送信">
		</form>
	</section>

</main>
<footer>
	<p>Copyright MK. All Rights Reserved.</p>
</footer>

</body>
</html>
