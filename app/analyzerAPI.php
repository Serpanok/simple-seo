<?php

include('libs/simple_html_dom.php');
include('functions.php');

header('Content-Type: application/json');

ini_set('display_errors','Off');
error_reporting('E_ALL');

$response = array( 'status' => false );

if( isset($_GET['url']) )
{
	$response['url'] = $_GET['url'];
	
	$isTitle		= isset($_GET['title']);
	$isDescription	= isset($_GET['description']);
	$isLinks		= isset($_GET['links']);
	$isH1			= isset($_GET['h1']);
	
	$html = file_get_html($response['url']);
	
	if( $html )
	{
		$response['status'] = true;
		
		if( $isTitle )
		{
			$titles = $html->find('title');
			$response['title'] = isset($titles[0]) ? $titles[0]->plaintext : null;
		}
		
		if( $isDescription )
		{
			$descriptions = $html->find('meta[name=description]');
			$response['description'] = isset($descriptions[0]) ? $descriptions[0]->content : null;
			
			if( $response['description'] === null )
			{
				$descriptions = $html->find('meta[name=Description]');
				$response['description'] = isset($descriptions[0]) ? $descriptions[0]->content : null;
			}
		}
		
		if( $isLinks )
		{
			$response['links'] = 0;
			
			$baseDomain = getBaseDomain($response['url']);
			
			$links = $html->find('a');
			foreach($links as $link)
			{
				$link_baseDomain = getBaseDomain($link->href);
				
				if( $link_baseDomain == '' || $link_baseDomain == $baseDomain )
				{
					$response['links']++;
				}
			}
		}
		
		if( $isH1 )
		{
			$response['h1'] = array();
			
			$h1s = $html->find('h1');
			foreach($h1s as $h1)
			{
				$response['h1'][] = $h1->plaintext;
			}
		}
	}
}

echo json_encode($response);
