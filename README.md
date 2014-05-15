インストール
------------

 ダウンロード後、任意のフォルダに展開

 使い方
 ------

(1)__autoloadを設定  
(2)コンテキスト生成  
`$g7msg = new mg\g7\Context ();`  
(3)パース  
`$obj = $g7msg->parse ( $message );`  
  
サンプルプログラムコマンド投入  
(1)サンプルフォルダに移動  
`cd g7-master/src/example`  
(2)サンプルプログラム実行  
`php example_from_file.php datafile [HL7ファイル]`  
例)php example_from_file.php datafile/PPR_ZD1.hl7  