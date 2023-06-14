<?php

/**
 * Simply append app version to prevent unwanted cache
 * be url ha ezafe nemishe
 */
function assetUrl($url)
{
    $hash          = md5(config('app.version'));
    $shouldAddHash = !preg_match("/^http|^https|\/\//", $url);
    return $shouldAddHash ? asset($url . "?r={$hash}") : asset($url);
}
function removeNulls($var)
{
    $null = array("null", "");
//    return(!in_array($var,$null ));
    return(true);
}
function emptyStringToNull($array)
{
    return array_map(function($value) {
        return ($value === "" or $value === "Null" or $value === "null")? NULL : $value;
    }, $array);
}
/**
 * Value ro be onvane key sabt mizare
 */
function dropdownArray(array $arr)
{
	$output = [];

	foreach($arr as $key => $val) {
		$output[$val] = $val;
	}

	return $output;
}

/**
 * Get numbers from string
 */
function getNumbers($value)
{
	return preg_replace("/[^\d]/", '', $value);
}

/**
 * Convert br to nl
 */
function brToNl($text) {
	return preg_replace("/<br\/>/", "\n", $text);
}

/**
 * Hijri Date
 */
function hDate($format, $time = null) {
	$time = $time ?: time();
	$date = \GeniusTS\HijriDate\Hijri::convertToHijri(date("Y-m-d H:i:s", $time));
	return $date->format($format);
}

/**
 * jDate Easier Access
 */
function jDate($format, $time = null) {
	$time = $time ?: time();
	return \jDate::date($format, $time);
}

/**
 * Shamsi be Miladi
 */
function jalaliToGero($val)
{
	if (!$val || empty($val)) {
		return null;
	}
    $val = explode(' ', $val);
	$separator = preg_match("/\//", $val[0]) ? '/' : '-';

	$val = explode($separator, $val[0]);

	if (count($val) != 3) {
		return null;
	}

	$newDate = implode($separator, jDate::toGregorian($val[0], $val[1], $val[2]));

	return date("Y{$separator}m{$separator}d", strtotime($newDate));
}

/**
 * Miladi Be Shamsi
 */
function geroToJalali($val)
{
	if (!$val || empty($val)) {
		return null;
	}

	return jDate("Y/m/d", strtotime($val));
}

/**
 * Replace it!
 */
function replacePersianDigistWithEnglish($value)
{
	return preg_replace(['/۱/', '/۲/', '/۳/', '/۴/', '/۵/', '/۶/', '/۷/', '/۸/', '/۹/', '/۰/'], [1,2,3,4,5,6,7,8,9,0], $value);
}

function getTimeAgo($carbonObject) {
    return str_ireplace(
        [' seconds', ' second', ' minutes', ' minute', ' hours', ' hour', ' days', ' day', ' weeks', ' week'],
        ['s', 's', 'm', 'm', 'h', 'h', 'd', 'd', 'w', 'w'],
        $carbonObject->diffForHumans()
    );
}
