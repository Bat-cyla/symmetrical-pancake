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

class OursmsCom extends ASmsService
{
    private $api_url = 'https://api.oursms.com/api-a/msgs';
    private $api_token = '';
    private $username = '';
    private $from = '';

    public function __construct($params = array())
    {
        $this->username = Registry::get('addons.cp_sms_services.service_oursms_com_username');
        $this->api_token = Registry::get('addons.cp_sms_services.service_oursms_com_api_token');   
        $this->from = Registry::get('addons.cp_sms_services.service_oursms_com_from');
    }

    public function send($phones, $message) 
    {
        if (empty($this->username) || empty($this->api_token)) {
            return;
        }

        $extra['headers'] = [
            'content-type' => 'application/x-www-form-urlencoded'
        ];

        $request = array(
            'username' => $this->username,
            'token' => $this->api_token,
            'src' => $this->from,
            'dests' => $phones,
            'body' => $message,
            'priority' => 0,
            'delay' => 0,
            'validity' => 0,
            'maxParts' => 0,
            'dlr' => 0,
            'prevDups' => 0
        );

        $response = fn_cp_sms_curl_request($this->api_url, 'POST', $request, $extra);
        $response = !empty($response) ? json_decode($response, true) : [];

        if (!empty($response['accepted'])) {
            return true;
        }
        return false;
    }
}