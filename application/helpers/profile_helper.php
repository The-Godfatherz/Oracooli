<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('get_follows'))
{
	/**
	 * Get imagepath
	 *
	 * @param	string
	 * @param	bool	checks to see if the path exists
	 * @return	string
	 */
	function get_follows($userId)
	{
		$CI = get_instance();
		$CI->load->model('profile_model');
		return $CI->profile_model->getFollowers($userId);
	}
}

if ( ! function_exists('get_following'))
{
	/**
	 * Get imagepath
	 *
	 * @param	string
	 * @param	bool	checks to see if the path exists
	 * @return	string
	 */
	function get_following($userId)
	{
		$CI = get_instance();
		$CI->load->model('profile_model');
		return $CI->profile_model->getFollowing($userId);
	}
}