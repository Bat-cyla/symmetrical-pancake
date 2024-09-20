<?php
/*******************************************************************************************
*   ___  _          ______                     _ _                _                        *
*  / _ \| |         | ___ \                   | (_)              | |              © 2023   *
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

use Tygh\BlockManager\Block;
use Tygh\BlockManager\RenderManager;
use Tygh\Tygh;
defined('BOOTSTRAP') or die('Access denied');
if ($mode === 'render') {
if (empty($_REQUEST['object_key'])) {
exit;
}
Tygh::$app['view']->assign('redirect_url', '/');
if(!empty($_REQUEST['abt__ut2_initial_request'])){
$init_request = json_decode(fn_abt__ut2_fix_json(fn_decrypt_text($_REQUEST['abt__ut2_initial_request'])), true);
$_REQUEST = array_merge($init_request, $_REQUEST);
}
if(!empty($_REQUEST['abt__ut2_assign_data'])){
$assign = json_decode(fn_abt__ut2_fix_json(fn_decrypt_text($_REQUEST['abt__ut2_assign_data'])), true);
Tygh::$app['view']->assign($assign);
}
$_object_key = $_REQUEST['object_key'];
$object_key = fn_decrypt_text($_object_key);
@list($block_id, $snapping_id, $object_id, $object_type) = explode(':', $object_key);
if(!isset($object_id,$object_type)){
return;
}
$block_id = (int) $block_id;
$snapping_id = (int) $snapping_id;
$object_id = (int) $object_id;
$object_type = rtrim($object_type);
$block = Block::instance()->getById($block_id, $snapping_id, ['object_type' => $object_type, 'object_id' => $object_id]);
if ($block) {
$block = array_merge([
'grid_id' => 0,
'order' => 0,
], $block);

$ajax = Tygh::$app['ajax'];
$ajax->assign('block_content', RenderManager::renderBlock($block));
}
exit;
}
