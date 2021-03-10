<?php
date_default_timezone_set('Asia/Bangkok');
/**
 * function date_laos()
 */

const date_laos_MONTHS = array('', 'ມັງກອນ', 'ກຸມພາ', 'ມີນາ', 'ເມສາ', 'ພຶດສະພາ', 'ມິຖຸນາ', 'ກໍລະກົດ', 'ສິງຫາ', 'ກັນຍາ', 'ຕຸລາ', 'ພະຈິກ', 'ທັນວາ');
const date_laos_DAYS = array('ອາທິດ', 'ຈັນ', 'ອັງຄານ', 'ພຸດ', 'ພະຫັດ', 'ສຸກ', 'ເສົາ');
const date_laos_SEARCH_KEYWORDS = array('$ວທວທ', '$ວທ', '$ວວ', '$ດດ',  '$ປປປປ');

/**
 * date_laos() ຟັງຊັ່ນສຳລັບການແປງວັນ ແລະເດືອຮເປັນພາສາລາວຕາມແບບທີ່ກຳນົດ
 * @param string $format
 * @param bool|int $timestamp
 * @return false|string
 */
function date_laos($format, $timestamp = false)
{
    if($timestamp === false)
    {
        $timestamp = time();
    }

    $replace = array(
        'd',
        'j',
        date_laos_DAYS[date('w', $timestamp)],
        date_laos_MONTHS[date('n', $timestamp)],
        date('Y', $timestamp),
        substr(date('Y', $timestamp), strlen(date('Y', $timestamp) ))
    );

    $format = str_replace(date_laos_SEARCH_KEYWORDS, $replace, $format);

    return date($format, $timestamp);
}



$timestamp = 1520211268;
echo date_laos('ວັນ$ວວ ທີ $ວທ $ດດ ປີ $ປປປປ', $timestamp);


?>