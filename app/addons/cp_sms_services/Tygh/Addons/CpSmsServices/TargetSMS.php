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

use Tygh\Http;
use Tygh\Enum\NotificationSeverity;
use Tygh\Registry;

class TargetSMS extends ASmsService
{
    private $api_url = 'https://sms.targetsms.ru/sendsms.php';
    private $login = '';
    private $psw = '';
    private $sender = '';

    public function __construct($params = [])
    {
        $this->login = Registry::get('addons.cp_sms_services.service_target_sms_login');
        $this->psw = Registry::get('addons.cp_sms_services.service_target_sms_psw');
        $this->sender = Registry::get('addons.cp_sms_services.service_target_sms_from');
    }

    public function send($phones, $message)
    {
        if (empty($this->login) || empty($this->psw)) {
            return;
        }

        $fail_responces = [
            'У нас закончились SMS. Для разрешения проблемы свяжитесь с менеджером.',
            'Закончились SMS.',
            'Аккаунт заблокирован.',
            'Укажите номер телефона.',
            'Номер телефона присутствует в стоп-листе.',
            'Данное направление закрыто для вас.',
            'Данное направление закрыто.',
            'Недостаточно средств для отправки SMS. SMS будет отправлена как только вы пополните счет по данному направлению.',
            'Текст SMS отклонен модератором.',
            'Нет отправителя.',
            'Отправитель не должен превышать 15 символов для цифровых номеров и 11 символов для буквенно-числовых.',
            'Номер телефона должен быть меньше 15 символов.',
            'Нет текста сообщения.',
            'Нет ссылки.',
            'Такого отправителя нет.',
            'Отправитель не прошел модерацию.',
            'error: Попытка отправки более одного одинакового запроса в течение минуты'
        ];

        $request = [
            'user' => $this->login,
            'pwd' => $this->psw,
            'sadr' => $this->sender,
            'dadr' => $phones,
            'text' => $message,
            'name_delivery' => 'avtorizatsiya'
        ];

        $targetsms_host = "sms.targetsms.ru";
        $result = Http::get('https://' . $targetsms_host . '/sendsms.php', $request);

        if (AREA == 'A' && in_array($result, $fail_responces)) {
            fn_set_notification(NotificationSeverity::WARNING, __('warning'), $result);
        }

        if (in_array($result, $fail_responces)){
            return false;
        }else{
            return true;
        }

        return false;
    }
}