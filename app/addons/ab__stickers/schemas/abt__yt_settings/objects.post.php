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
use Tygh\Enum\YesNo;
$schema['product_list']['items']['ab__s_pictogram_position'] = [
'type' => 'selectbox',
'class' => 'input-large',
'position' => 200,
'is_addon_dependent' => true,
'variants' => [
YesNo::NO,
'position_1',
],
'disabled' => [
'desktop' => YesNo::NO,
'tablet' => YesNo::YES,
'mobile' => YesNo::YES,
],
'value' => [
'desktop' => 'position_1',
'tablet' => YesNo::NO,
'mobile' => YesNo::NO,
],
'is_for_all_devices' => YesNo::NO,
];
$schema['products']['items']['ab__s_pictogram_position'] = [
'type' => 'selectbox',
'class' => 'input-large',
'position' => 200,
'is_addon_dependent' => true,
'variants' => [
YesNo::NO,
'position_1',
],
'disabled' => [
'desktop' => YesNo::NO,
'tablet' => YesNo::NO,
'mobile' => YesNo::NO,
],
'value' => [
'desktop' => 'position_1',
'tablet' => 'position_1',
'mobile' => 'position_1',
],
'is_for_all_devices' => YesNo::NO,
];
return $schema;
