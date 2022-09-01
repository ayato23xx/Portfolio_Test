<!doctype html>
<html lang="ja">
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ayato Portfolio</title>
	<meta content="亜矢斗のポートフォリオです。個人制作物やスキルなど色々おいています。" name="description">
	<meta name="keywords" content="Ayato,AyatoVR,Portfolio,ポートフォリオ,あやと,亜矢斗">
	<!-- OGPタグ -->
	<meta property="og:title" content="Ayato Portfolio" />
	<meta property="og:description" content="亜矢斗のポートフォリオです。" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://ayatovr.jp/portfolio/" />
	<meta property="og:image" content="https://ayatovr.jp/wp-content/uploads/2022/08/20200521.jpg" />
	<meta property="og:site_name" content="Ayato Portfolio" />
	<meta property="og:locale" content="ja_JP"  />
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@VR_Ayato">
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	 <link rel="stylesheet" href="css/style.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
    <!-- jQuery・JavaScript読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/script.js"></script>
  </head>
<!-----------[ヘッダー]---->
	<header>
<!-------[ヘッダー画像]---->
	</header>
<body>
<!-------[ナビゲーションバー]---->
<div class="container">
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #e3f2fd;">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">亜矢斗のポートフォリオ</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#gnavi">
				<span class="sr-only">メニュー</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div> 
		<div id="gnavi" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#Home">TOP</a></li>
				<li><a href="#Profile">Profile</a></li>
				<li><a href="#Product">Product</a></li>
				<li><a href="#Contact">Contact</a></li>
			</ul>
		</div>
		</nav>
	</div>	
<!-- ホーム -->
	<section id="Home" class="bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>このページは、亜矢斗のポートフォリオです。<br>
					私は小学生の頃からパソコンに触れ、色々な言語に触れたりサーバー構築などを趣味で行っていました。<br>
					専門学校は情報系の学校に進学し、専門学校在籍中にSonyからPSVRが発売されVRに興味を持ち始めました<br>
					卒業後、Windows Mixed Realityを友達から頂き本格的にVRの世界に入ることになりました。<br>
					2019年からUnityや3Dモデリングツールを使った創作活動を本格的に開始し各種イベントに参加、企画などしてきました。<br>
					</p>
				</div>
			</div>
		</div>
	</section>
<!-- プロフィール -->
	<section id="Profile" class="bg_color1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="center-block"><h2 class="text-center">PROFILE</h2></div>
					<p class="name_title">名前：亜矢斗</p>
					<p>情報系の専門学校に3年間在籍し、最近は独学でUnity等でゲーム制作やVR開発の勉強をしてきました。</p>
					<p>個人活動としてVR上でのイベントを開催したり創作活動にも力を入れています。</p>
				</div>
			</div>
		</div>
	</section>
<!-- スキル -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="center-block"><h2 class="text-center">SKILL</h2></div>
					<p>私のスキルを下記に表形式で技術・使用年数・使いこなせる度合い（星5）で表示しています。</p>
					<img src="img/game_skill.png" width="35%" >
					<img src="img/server_skill.png" width="35%" >
					
					<br>
					<img src="img/web_skill.png" width="35%" >
					<img src="img/program_skill.png" width="35%" >
				</div>
				<div class="col-md-12">
					<p><b>取得済資格</b></p>
					<table>
						<tr>
							<td>C言語プログラミング能力認定試験　3級</td>
						</tr>
						<tr>
							<td>Java™プログラミング能力認定試験　3級</td>
						</tr>
						<tr>
							<td>情報処理技術者能力認定試験　2級</td>
						</tr>
						<tr>
							<td>情報活用検定 J検　1級</td>
						</tr>
						<tr>
							<td>Microsoft Office Specialist　PowerPoint2010</td>
						</tr>
					</table>
					<br>
					<p><b>その他</b></p>
					<b>使えるツール</b><br>
					VisualStudio Community,VSCode,CPad,Adobe Premier Pro,Adobe After Effects,Unity,Unreal Engin
					<br>
					<b>触っただけ</b><br>
					Visual Basic、Python、
					<br>
				</div>
			</div>
		</div>
	</section>
<!-- プロダクト -->
	<section id="Product" class="bg_color1">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="center-block"><h2 class="text-center">PRODUCT</h2></div>
				</div>
				<div class="col-md-12 flex">
					<div>
						<p>VirtualCast向け外部ツール</p>
						<p>VirtualCastで利用できる外部ツールをVC#で作成しました。</p>
						<p>2018年中旬</p>
					</div>
					<div>
						<p>VRChat向けワールド制作</p>
					</div>
					<div>
						<p>VR住宅展覧会</p>
						<p>2021年夏に企画主催したVRでの住宅展覧会イベントです。</p>
						<p><a href="https://twitter.com/VRHouseExpo" >VR住宅展覧会（Twitter）</a></p>
					</div>
				</div>
				
				<div class="col-md-12 flex">
					<div>
						<p>I社様 予約システム</p>
						<p>予約及び精算統合システムの開発をしました。</p>
						<p>2020年上期</p>
					</div>
					<div>
						<p>自社向け 売上管理システム</p>
						<p>自社で使用することを前提に開発しました。</p>
						<p>今までExcel管理だったのをシステム管理化しました。</p>
						<p>2021年下旬</p>
					</div>
					<div>
						<p>Unityゲーム制作</p>
						<p>個人制作の各種ゲーム置き場です。</p>
						<a href="product/demo/VT/index.html">デモアプリA</a>
					</div>
				</div>
				※企業案件は許諾済みの物のみ掲載しております。
				<p><a href="product/index.php">全てのProductはこちらのリンクから</a></p>
			</div>
		</div>
	</section>
<!-- データ -->
	<section id="Contact" class="bg_color">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="center-block"><h2 class="text-center">DATA</h2></div>
					2018年春　VirtualCastとVRChatを始める<br>
					2018年夏　Windows Mixed Reality を友達から頂く<br>
					2019年夏　HTC VIVE CEを購入<br>
					2019年秋　VirtualMarket3出展<br>
					2019年冬　Valve Indexを購入<br>
					2020年春　VirtualMarket4出展<br>
					2020年夏　Cluster Game Jam 2020 in Summer参加・エレコム賞受賞<br>
					2020年冬　Cluster Game Jam 2020 in Winter 参加・UnityJapan賞受賞<br>
					2020年冬　VirtualMarket5出展<br>
					2021年春　OculusQuest2をUnityJapan様より頂く<br>
					2021年夏　Cluster Game Jam 2021 in Summer 参加<br>
					2021年夏　VirtualMarket6-Mall出展<br>
					2021年夏　VR住宅展覧会を企画・主催<br>
					<br>
					<b>パソコンスペック</b><br>
					・CPU：AMD Ryzen 9 3900　・メモリ：32GB　・GPU：NVIDIA RTX3060-12GB　・ストレージ：m.2SSD 1TB、SSD、HDD
					<br>
					<b>家にあるもの</b><br>
					Valve Index、Viveベースステーション1.0、ViveTracker2018*3、OculusQuest2<br><br>
				</div>
<!-- コンタクト -->
				<div class="col-md-4">
					<div class="center-block"><h2 class="text-center">CONTACT</h2></div>
					<b>私への連絡や各種リンクは下記から。</b><br>
					<br>
					・制作物の販売場所：<a href="https://ayatomykg.booth.pm/">https://ayatomykg.booth.pm/</a><br>
					<br>
					・制作物の無償配布場所：<a href="https://drive.google.com/drive/folders/1MpYS1LwBmxOvHOzO-8nhBzQYQubSzzLX?usp=sharing">GoogleDrive</a><br>
					<br>
					・GitHub：<a href="https://github.com/ayato23xx">https://github.com/ayato23xx</a><br>
					<br>
					・Twitter：<a href="https://twitter.com/VR_Ayato">https://twitter.com/VR_Ayato</a><br>
					<br>
					・Blog：<a href="https://ayatovr.jp/">https://ayatovr.jp/</a><br>
					<br>
					・Qiita：<a href="https://qiita.com/Ayato23xx">https://qiita.com/Ayato23xx</a><br>
					<br>
					<b>関連リンク</b><br>
					・<a href="https://note.com/unityjapan/n/nddb432839e1b">即席の大人数チームが48時間のゲームジャムで入賞できた開発テクニック＆チームビルディング - Unity Japan</a><br>
				</div>
			</div>
		</div>
	</section>
</body>
<!-------[フッター]---->
<footer>
	<div class="container">
		<div class="text-center">&copy; 2016-2022 亜矢斗VR.</div>
	</div>
</footer>
</html>
