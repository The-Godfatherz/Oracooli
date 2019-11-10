<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_imagepath'))
{
	/**
	 * Get imagepath
	 *
	 * @param	string
	 * @param	bool	checks to see if the path exists
	 * @return	string
	 */
	function get_imagepath($path = "")
	{
		if($path != ""){
			if (preg_match('#^(http:\/\/|https:\/\/|www\.|ftp|php:\/\/)#i', $path))
			{
				return $path;
			}else{
				return str_replace("index.php/","",base_url()).'images/'.$path;
			}	
		}else{
			return str_replace("index.php/","",base_url()).'images/avatar.png';
		} 	
	}
}