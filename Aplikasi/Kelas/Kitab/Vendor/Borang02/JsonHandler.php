<?php
namespace Aplikasi\Kitab;//echo __NAMESPACE__;
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
		//$result = \Aplikasi\Kitab\JsonHandler::semakdata($result);
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
	public static function semakdata($result)
	{
		$my_encoding_list = array(
			"UTF-8",
			"UTF-7",
			"UTF-16",
			"UTF-32",
			"ISO-8859-16",
			"ISO-8859-15",
			"ISO-8859-10",
			"ISO-8859-1",
			"Windows-1254",
			"Windows-1252",
			"Windows-1251",
			"ASCII",
			#add yours preferred
		);

		#remove unsupported encodings
		$encoding_list = array_intersect($my_encoding_list, mb_list_encodings());

		#detect 'finally' the encoding
		$result = mb_detect_encoding($result,$encoding_list,true);

		return $result;
	}
#------------------------------------------------------------------------------------------
/*
		try
		{
		}
		catch ()
		{
		}
*/
#------------------------------------------------------------------------------------------
#==========================================================================================
}
