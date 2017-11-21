<?php
/**
 * コマンドラインガチャ
 */

#-----------------------------------------#
# カード
#-----------------------------------------#
$card = [
	  ["SR", "バハムート",   "ID101"]
	, ["R",  "イフリート",   "ID202"]
	, ["R",  "シヴァ",       "ID203"]
	, ["R",  "タイタン",     "ID301"]
	, ["N",  "チョコボ",     "ID302"]
	, ["N",  "デブチョコボ", "ID303"]
	, ["N",  "モーグリ",     "ID304"]
	, ["N",  "カーバンクル", "ID305"]
	, ["N",  "ケットシー",   "ID306"]
	, ["N",  "サボテンダー", "ID307"]
];

#-----------------------------------------#
# オプション取得
#-----------------------------------------#
$loop = $argv[1];
//エラー処理

#-----------------------------------------#
# ガチャ回数分ループする
#-----------------------------------------#
for( $i=0; $i<$loop; $i++ ){
	// カードを決定する
	$draw = rand(0, 9);

	// 値を取り出す
	$rare = $card[$draw][0];
	$name = $card[$draw][1];
	$id   = $card[$draw][2];

	// 表示する
}


