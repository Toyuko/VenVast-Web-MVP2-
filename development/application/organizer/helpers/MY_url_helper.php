<?php 

function base_url($uri = '', $type='')
{
	$CI =& get_instance();
	//$CI->load->library('language');
	
	if($type == "page")
	{
		//$language_abbr = $CI->language->returnLanguageAbbreviation();
	
		if($_SERVER["HTTP_HOST"] == "localhost" || strpos($_SERVER["HTTP_HOST"],"192.168") !== false)
		{
			//$base_url = $CI->config->base_url($uri) . "index.php/$language_abbr/";
			
			$base_url = $CI->config->base_url($uri) . "organizer.php/";
		}
		else
		{
			//$base_url = $CI->config->base_url($uri) . "index.php/$language_abbr/";
			//$base_url = $CI->config->base_url($uri) . "index.php/";
			//$base_url = $CI->config->base_url($uri);
			
			$base_url = $CI->config->base_url($uri) . "organizer.php/";
		}
	}
	else
	{
	
		$base_url = $CI->config->base_url($uri);
	}
		
	return $base_url;
}

function cleanValue($value)
{
	$replace_vars = array(
		"  " => " ",
		" - " => "-",
		" " => "-",
		":" => "",
		";" => "",
		"." => "",
		"," => "",
		"\\" => "",
		"/" => "",
		"?" => "",
		"'" => "",
		'"' => "",
		")" => "",
		"(" => "",
		"*" => "",
		"&" => "-and-",
		"^" => "",
		"%" => "",
		"$" => "",
		"#" => "",
		"@" => "",
		"!" => "",
		"~" => "",
		"`" => "",
		"<" => "",
		">" => "",
		"|" => "",
		"=" => "",
		"+" => "",
		"[" => "",
		"]" => "",
		"{" => "",
		"}" => ""
	);
	
	$clean_value = trim(strtolower(strtr($value, $replace_vars)));
	
	return $clean_value;
}

?>