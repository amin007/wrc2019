<?php
class JsonHandler
{
#==========================================================================================
#------------------------------------------------------------------------------------------
	protected static $_messages = array(
		JSON_ERROR_NONE => 'No error has occurred',
		JSON_ERROR_DEPTH => 'The maximum stack depth has been exceeded',
		JSON_ERROR_STATE_MISMATCH => 'Invalid or malformed JSON',
		JSON_ERROR_CTRL_CHAR => 'Control character error, possibly incorrectly encoded',
		JSON_ERROR_SYNTAX => 'Syntax error',
		JSON_ERROR_UTF8 => 'Malformed UTF-8 characters, possibly incorrectly encoded'
	);
#------------------------------------------------------------------------------------------
	public static function encode($value, $options = 0)
	{
		$result = json_encode($value, $options);
		if($result){return $result;}

		throw new \RuntimeException(static::$_messages[json_last_error()]);
	}
#------------------------------------------------------------------------------------------
	public static function decode($json, $assoc = false)
	{
		$result = json_decode($json, $assoc);
		if($result){return $result;}

		throw new \RuntimeException(static::$_messages[json_last_error()]);
	}
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
#==========================================================================================
}

$text[][] = "A strange string to pass, maybe with some ø, æ, å characters.";
$text[][] = '(4) Termasuk: (a) pembuatan marjerin
(b) pembuatan mélanges dan sapuan seumpamanya';

/*foreach(mb_list_encodings() as $chr)
{
	echo mb_convert_encoding($text, 'UTF-8', $chr)." : ".$chr."<br>";    
}*/

//echo mb_convert_encoding($text, 'UTF-8');

//$data = iconv(mb_detect_encoding($text, mb_detect_order(), true), "UTF-8", $text);
//$data = json_encode($text, $options = 0);
$json = JsonHandler::encode($text);
$kira = count($text);
//echo $data;
$t = '"draw":1,"recordsTotal":' . $kira . ',"recordsFiltered":' . $kira . ',';
header("Content-Type: application/json;charset=utf-8");
echo "{ $t \"data\":$json }";


