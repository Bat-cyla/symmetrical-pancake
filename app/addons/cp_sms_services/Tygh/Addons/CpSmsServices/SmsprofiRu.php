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

class SmsprofiRu extends ASmsService
{
    private $api_url_call_password = 'https://lcab.smsprofi.ru/json/v1.0/callpassword/send';
    private $api_url = 'https://lcab.smsprofi.ru/json/v1.0/sms/send/text';
    private $token = '';
    private $sender = '';

    public function __construct($params = array())
    {
        $this->token = Registry::get('addons.cp_sms_services.service_smsprofi_ru_token');
        $this->sender = Registry::get('addons.cp_sms_services.service_smsprofi_ru_from');
    }

    public function send($phones, $message) 
    {
        if (empty($this->api_url) || empty($this->token) || empty($this->sender)) {
            return;
        }

        $extra = [
            'headers' => [
                'X-Token: ' . $this->token,
                'Content-Type: application/json'
            ]
        ];

        $request = [
            'messages' => []
        ];

        $phones = explode(',', $phones);

        foreach ($phones as $phone) {
            $phone_request = [
                'recipient' => $phone,
                'text' => $message,
                'source' => $this->sender
            ];

            $request['messages'][] = $phone_request;
        }

        $response = fn_cp_sms_curl_request($this->api_url, 'POST', json_encode($request), $extra);
        $response = !empty($response) ? json_decode($response, true) : [];
        
        if (!empty($response['success']) && $response['success'] == true) {
            return true;
        }
        
        return false;
    }

    public function callPassword($phone) 
    {
        if (empty($this->api_url_call_password) || empty($this->token) || empty($this->sender)) {
            return;
        }

        $code = '';

        $extra = [
            'headers' => [
                'X-Token: ' . $this->token,
                'Content-Type: application/json'
            ]
        ];

        $request = [
            'recipient' => $phone
        ];

        $response = fn_cp_sms_curl_request($this->api_url_call_password, 'POST', json_encode($request), $extra);
        
        $response = !empty($response) ? json_decode($response, true) : [];

        if (
            !empty($response['success'])
            && $response['success'] == true
            && !empty($response['result']['code'])
        ) {
            $code = $response['result']['code'];
        }
        
        return $code;
    }
}