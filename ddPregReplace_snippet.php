<?php
/**
 * ddPregReplace
 * @version 1.0.1 (2013-09-17)
 * 
 * @desc Searches “inputString” for matches to “pattern” and replaces them with “replace”.
 * 
 * @uses PHP >= 5.4.
 * @uses (MODX)EvolutionCMS.libraries.ddTools >= 0.23.
 * 
 * @param $inputString {string} — The input string. @required
 * @param $pattern {string} — Шаблон для замены (регулярное выражение). @required
 * @param $replace {string} — На что надо заменить. Default: ''.
 * 
 * @copyright 2013 DivanDesign {@link http://www.DivanDesign.biz }
 */

//Include (MODX)EvolutionCMS.libraries.ddTools
require_once $modx->getConfig('base_path').'assets/libs/ddTools/modx.ddtools.class.php';

//Backward compatibility
extract(ddTools::verifyRenamedParams(
	$params,
	[
		'inputString' => 'str'
	]
));


$replace = isset($replace) ? $replace : '';

return preg_replace(
	'/'.$pattern.'/u',
	$replace,
	$inputString
);
?>