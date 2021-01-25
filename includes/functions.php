<?php
function get_image($name)
{
    return 'https://static.sayes.ru/images/kids/' . $name;
}
function get_youtube_image($id)
{
    return 'https://i3.ytimg.com/vi/'.$id.'/maxresdefault.jpg';
}
function role_image()
{
    return 'aria-hidden="true" aria-role="presentation" draggable="false"';
}
function get_tel_for_href($tel)
{
    return 'tel:' . preg_replace("/[^+0-9]/", '', $tel);
}
function get_email_for_href($email)
{
    return 'mailto:' . $email;
}
?>