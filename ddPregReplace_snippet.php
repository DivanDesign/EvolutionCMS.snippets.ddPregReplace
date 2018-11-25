<?php
/**
 * ddStrFormatter
 * @version 1.0 (2013)
 * 
 * @desc Заменяет по шаблону.
 * 
 * @param $str {string} - Строка на входе. @required
 * @param $pattern {string} - Шаблон для замены (регулярное выражение). @required
 * @param $replace {string} - На что надо заменить. Default: ''.
 * 
 * @copyright 2013 DivanDesign {@link http://www.DivanDesign.biz }
 */

$replace = isset($replace) ? $replace : '';

return preg_replace('/'.$pattern.'/', $replace, $str);
?>