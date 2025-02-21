<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2024   *
* / /_\ | | _____  _| |_/ /_ __ __ _ _ __   __| |_ _ __   __ _   | |_ ___  __ _ _ __ ___   *
* |  _  | |/ _ \ \/ / ___ \ '__/ _` | '_ \ / _` | | '_ \ / _` |  | __/ _ \/ _` | '_ ` _ \  *
* | | | | |  __/>  <| |_/ / | | (_| | | | | (_| | | | | | (_| |  | ||  __/ (_| | | | | | | *
* \_| |_/_|\___/_/\_\____/|_|  \__,_|_| |_|\__,_|_|_| |_|\__, |  \___\___|\__,_|_| |_| |_| *
*                                                         __/ |                            *
*                                                        |___/                             *
* ---------------------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license and accept    *
* to the terms of the License Agreement can install and use this program.                  *
* ---------------------------------------------------------------------------------------- *
* website: https://cs-cart.alexbranding.com                                                *
*   email: info@alexbranding.com                                                           *
*******************************************************************************************/
$schema['ab__stickers'] = [
'modes' => [
'view' => [
'permissions' => 'ab__stickers.data.view',
],
'edit' => [
'permissions' => 'ab__stickers.data.manage',
],
'generate' => [
'permissions' => 'ab__stickers.data.manage',
],
'demodata' => [
'permissions' => 'ab__stickers.data.manage',
],
'help' => [
'permissions' => 'ab__stickers.data.manage',
],
],
'permissions' => [
'GET' => 'ab__stickers.data.view',
'POST' => 'ab__stickers.data.manage',
],
];
$schema['tools']['modes']['update_status']['param_permissions']['table']['ab__stickers_items'] = 'ab__stickers.data.manage';
return $schema;
