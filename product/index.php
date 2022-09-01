<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Ayato　Portfolio</title>
		<!-- CSS読み込み(自動再読み込み)-->
		<link rel="stylesheet" href="../css/style.css?<?php echo date('Ymd-Hi'); ?>" type="text/css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<script>
$(function() {
	//プロフィール表示
	$('.btn2').click(function(){
		//alert("aaaaa");
		$('.wrapper1').css('display', 'none');
		$('.wrapper3').css('display', 'block');
		});
	});

</script>

	<!-- メイン画面部分 -->
	<div class="wrapper1">
	</div>
	
	<!-- タブメニュー部分 -->
	<div class="wrapper2">
	<table>
		<tr>
			<td></td>
			<td><a href="../#profile" class="btn2">Profile</a></td>
			<td><a href="#">Product</a></td>
			<td><a href="../../">Blog</a></td>
			<td>Contact</td>
			<td><a href="https://www.facebook.com/">Facebook</a></td>
			<td><a href="https://github.com/ayato23xx">GitHub</a></td>
			<td>Distributed</a></td>
			<td><a href="https://drive.google.com/drive/folders/1MpYS1LwBmxOvHOzO-8nhBzQYQubSzzLX?usp=sharing">GoogleDrive</a></td>
		</tr>
	</table>
	
	<!-- 著作表示 -->
	<address>
		Copyright &copy; 2016-2022 Ayato. All Rights Reserved.<br />
	</address>
	</div>
</body>
</html>