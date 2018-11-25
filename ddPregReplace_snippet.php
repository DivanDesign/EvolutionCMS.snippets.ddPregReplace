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
 * @param $inputString_docField {string} — The name of the document field/TV which value is required to get. If the parameter is passed then the input string will be taken from the field/TV and “inputString” will be ignored. Default: —.
 * @param $inputString_docId {integer} — ID of the document which field/TV value is required to get. “inputString_docId” equals the current document id since “inputString_docId” is unset. Default: —.
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

//If we need to get the input string from some document field/TV
if (isset($inputString_docField)){
	$inputString = ddTools::getTemplateVarOutput(
		[$inputString_docField],
		$inputString_docId
	);
	$inputString = $inputString[$inputString_docField];
}

$replace = isset($replace) ? $replace : '';

return preg_replace(
	'/'.$pattern.'/u',
	$replace,
	$inputString
);
?>