<?php
/**
 * ddPregReplace
 * @version 1.0.1 (2013-09-17)
 * 
 * @desc Searches “str” for matches to “pattern” and replaces them with “replace”.
 * 
 * @param $str {string} — Строка на входе. @required
 * @param $pattern {string} — Шаблон для замены (регулярное выражение). @required
 * @param $replace {string} — На что надо заменить. Default: ''.
 * 
 * @copyright 2013 DivanDesign {@link http://www.DivanDesign.biz }
 */

$replace = isset($replace) ? $replace : '';

return preg_replace(
	'/'.$pattern.'/u',
	$replace,
	$str
);
?>