<?php
	echo "PHPアプリケーションでのiniファイルの操作検証<br>";

	# 同階層にあるconfig.iniファイルを連想配列の形式で読み込む
	$ini = parse_ini_file('config.ini');

	# 連想配列の形式で読み込まれたiniファイルの中身を出力する
	print_r($ini);