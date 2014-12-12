<?php
	echo "PHPアプリケーションでのiniファイルの操作検証<br>";

	# 同階層にあるconfig.iniファイルを連想配列の形式で読み込む
	$ini = parse_ini_file('config.ini');

	# 連想配列の形式で読み込まれたiniファイルの中身を出力する
	print_r($ini);
	echo "<br>";

	# iniファイルの設定を検証する
	# config.iniファイル内のtest_messageの値を設定する
	if($ini['test_message'] == "mogumogu"){
		$ini['test_message'] = "hogehoge";
	}else{
		$ini['test_message'] = "mogumogu";
	}

	# config.iniファイルを開く
	$fp = fopen('config.ini', 'w');

	# foreachで該当する値を更新する
	foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");

	# config.iniファイルを閉じる
	fclose($fp);

	# 連想配列の形式で読み込まれたiniファイルの中身を出力する
	print_r($ini);
