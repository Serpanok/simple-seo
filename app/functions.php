<?php

function getBaseDomain($url)
{
	$str = preg_replace('#^[a-zA-Z0-9]{1,}:?//#', '', $url);
	$str = preg_replace('#^www\.#', '', $str);
	$str = preg_replace('#^\.{1,}#', '', $str);
	$str = preg_replace('#^\?#', '', $str);
	$str = preg_replace('#/.{0,}#', '', $str);
	
	return $str;
}
