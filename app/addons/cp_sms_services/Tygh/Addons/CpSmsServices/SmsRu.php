<?php
/*****************************************************************************
*                                                        © 2013 Cart-Power   *
*           __   ______           __        ____                             *
*          / /  / ____/___ ______/ /_      / __ \____ _      _____  _____    *
*      __ / /  / /   / __ `/ ___/ __/_____/ /_/ / __ \ | /| / / _ \/ ___/    *
*     / // /  / /___/ /_/ / /  / /_/_____/ ____/ /_/ / |/ |/ /  __/ /        *
*    /_//_/   \____/\__,_/_/   \__/     /_/    \____/|__/|__/\___/_/         *
*                                                                            *
*                                                                            *
* -------------------------------------------------------------------------- *
* This is commercial software, only users who have purchased a valid license *
* and  accept to the terms of the License Agreement can install and use this *
* program.                                                                   *
* -------------------------------------------------------------------------- *
* website: https://store.cart-power.com                                      *
* email:   sales@cart-power.com                                              *
******************************************************************************/

namespace Tygh\Addons\CpSmsServices;

use Tygh\Registry;

class SmsRu extends ASmsService
{
    private $api_url = 'https://sms.ru/sms/send';
    private $api_url_call_password = 'https://sms.ru/code/call';
    private $api_key = '';

    public function __construct($params = array())
    {
        $this->api_key = Registry::get('addons.cp_sms_services.service_sms_ru_api_key');
    }

    public function send($phones, $message) 
    {
        if (empty($this->api_key)) {
            return;
        }
        $request = array(
            'api_id' => $this->api_key,
            'to' => $phones,
            'msg' => $message,
            'json' => 1
        );
        $response = fn_cp_sms_curl_request($this->api_url, 'GET', $request);
        
        $response = !empty($response) ? json_decode($response, true) : array();
        if (!empty($response['status']) && $response['status'] == 'OK') {
            return true;
        }
        
        return false;
    }

    public function callPassword($phone) 
    {
        $code = '';

        if (empty($this->api_key)) {
            return;
        }

        $request = array(
            'api_id' => $this->api_key,
            'phone' => $phone,
            'ip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '',
            'json' => 1
        );

        $response = fn_cp_sms_curl_request($this->api_url_call_password, 'GET', $request);
        $response = !empty($response) ? json_decode($response, true) : array();
  
        if (
            !empty($response['status'])
            && $response['status'] == 'OK'
            && !empty($response['code'])
        ) {
            $code = $response['code'];
        }
        
        return $code;
    }
}