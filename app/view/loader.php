<?php
namespace View;
class Loader
{
	public static function loader($cache = false)
	{
		$twig = new \Twig_Environment(new \Twig_Loader_Filesystem(dirname(__FILE__)), array('cache' => $cache));;
			
			return $twig;
	} 
}