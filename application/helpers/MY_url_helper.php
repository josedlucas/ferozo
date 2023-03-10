<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/url_helper.html
 */

// ------------------------------------------------------------------------

function url_title($str, $separator = 'dash', $lowercase = FALSE)
{
	$str=strtr($str,$array=array("À"=> "A","Á"=>"A","Â"=>"A","Ã"=>"A","Ä"=>"A","Å"=>"A","à"=>"a","á"=>"a","â"=>"a","ã"=>"a","ä"=>"a","å"=>"a","Ò"=>"O","Ó"=>"O","Ô"=>"O","Õ"=>"O","Ö"=>"O","Ø"=>"O","ò"=>"o","ó"=>"o","ô"=>"o","õ"=>"o","ö"=>"o","ø"=>"o","È"=>"E","É"=>"E","Ê"=>"E","Ë"=>"E","è"=>"e","é"=>"e","ê"=>"e","ë"=>"e","Ç"=>"C","ç"=>"c","Ì"=>"I","Í"=>"I","Î"=>"I","Ï"=>"I","ì"=>"i","í"=>"i","î"=>"i","ï"=>"i","Ù"=>"U","Ú"=>"U","Û"=>"U","Ü"=>"U","ù"=>"u","ú"=>"u","û"=>"u","ü"=>"u","ÿ"=>"y","Ñ"=>"N","ñ"=>"n"));
	if ($separator == 'dash')
	{
		$search  = '_';
		$replace = '-';
	}
	else
	{
		$search  = '-';
		$replace = '_';
	}

	$trans = array(
		'&\#\d+?;'    => '',
		'&\S+?;'    => '',
		'\s+'     => $replace,
		'[^a-z0-9\-\._]'  => '',
		$replace.'+'   => $replace,
		$replace.'$'   => $replace,
		'^'.$replace   => $replace,
		'\.+$'     => ''
	);

	$str = strip_tags($str);

	foreach ($trans as $key => $val)
	{
		$str = preg_replace("#".$key."#i", $val, $str);
	}

	if ($lowercase === TRUE)
	{
		$str = strtolower($str);
	}
	return trim(stripslashes($str));
}


function inv_url_title($str,$lowercase = FALSE)
{
	$str = preg_replace("#[_-]+#i", ' ', $str);
	if ($lowercase === TRUE)
	{
		$str = strtolower($str);
	}
	return $str;
}

/* End of file url_helper.php */
/* Location: ./system/helpers/url_helper.php */