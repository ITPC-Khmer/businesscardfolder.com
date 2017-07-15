<?php
function getImageUrl($img)
{
    return \App\Helpers\GH::getImage($img);
}

function create_code_number($n) {
    $numbers_only = preg_replace("/[^\d]/", "", $n);
    $number = str_pad($numbers_only,12,'0',STR_PAD_LEFT).'';
//  return preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $numbers_only);
    return "$number[0]$number[1]$number[2]-$number[3]$number[4]$number[5]-$number[6]$number[7]$number[8]-$number[9]$number[10]$number[11]";
}

function code_number_to_id($code)
{
    $numbers_only = preg_replace("/[^\d]/", "", $code);
    return $numbers_only-0;
}

function getRoleArray()
{
    return \App\Helpers\GH::getRoleArray();
}

function _t($txt)
{
    return \App\Helpers\GH::translate($txt);
}

function getArrLanguage()
{
   return [
       'en' => 'English',
       'km' => 'ខ្មែរ'
   ];

}

function getStatusOption($select)
{
    $op = '';
    foreach (\App\Helpers\GH::status() as $k=>$v)
    {
        $selected = $select == $k?'  selected="selected" ':'';
        $op .= '<option '.$selected.' value="'.$k.'">'.$v.'</option>';
    }
    return $op;
}

function getStatusTitle($status)
{
    return $status>0?\App\Helpers\GH::status()[$status]:'';
}


function getMemberID()
{
    return \App\Helpers\GH::getMemberID();
}

function getAdminMemberID()
{
    return \App\Helpers\GH::getAdminMemberID();
}

function getMember2ID()
{
    if(getMemberID()>0) return getMemberID();

    if(getAdminMemberID() >0) return getAdminMemberID();

    return 0;
}

function getMemberInfo()
{
    return \App\Helpers\GH::getMemberInfo();
}

function getUserID()
{
    return \App\Helpers\GH::getUserID();
}

function getUserInfo()
{
    return \App\Helpers\GH::getUserInfo();
}

function arrUserLevel()
{
    return \App\Helpers\GH::arrUserLevel();
}

function getUserLevel()
{
    return \App\Helpers\GH::getUserLevel();
}


function arrMemberLevel()
{
    return \App\Helpers\GH::arrMemberLevel();
}

function getMemberLevel()
{
    return \App\Helpers\GH::getMemberLevel();
}

