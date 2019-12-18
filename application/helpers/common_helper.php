<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function myconsole($log,$logusr="0")
{
	$CI =& get_instance();
	$username = $CI->session->userdata('EMUSERNAME');
	if ((trim($username) == trim($logusr) || trim($logusr) == 0))
	{
		echo "<pre>";
		echo '<div style="max-height:600px;max-width:100%;width:98%;height:300px;overflow:auto;resize:both;background-color:#333;border-radius:10px;box-shadow:0 0 5px 1px #333; padding:5px;"><div style="padding 3px 30px 5px 0;color:#FF8000;width:auto;height:20px; float:right; ">Oracooli Console</div><div style="max-width:100%; height:92%;width:99%;overflow:auto; padding:5px; text-align:left;word-wrap: break-word;color:#FFF; background-color:#000;">';
		if (is_array($log)> 0)
			print_r($log);
		else if (is_object($log))	
			var_dump($log);
		else
		{
			echo wordwrap($log,100,"\n<br />");
		}
		echo "</div></div></pre>";
	}
}	