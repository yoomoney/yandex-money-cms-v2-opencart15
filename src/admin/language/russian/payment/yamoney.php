<?php
// Heading
$_['heading_title'] = 'Яндекс.Деньги 2.0';

// Text
$_['text_yamoney'] = '<a onclick="window.open(\'https://money.yandex.ru\');"><img src="view/image/payment/yamoney.png" alt="Яндекс.Деньги" title="Яндекс.Деньги" /></a>';

$_['text_success'] = 'Настройки модуля обновлены!';
$_['kassa_all_zones'] = 'Все зоны';
$_['text_need_update'] = "У вас неактуальная версия модуля. Вы можете <a target='_blank' href='https://github.com/yandex-money/yandex-money-cms-opencart/releases'>загрузить и установить</a> новую (%s)";

$_['yandexmoney_license'] = '<p>Любое использование Вами программы означает полное и безоговорочное принятие Вами условий лицензионного договора, размещенного по адресу <a href="https://money.yandex.ru/doc.xml?id=527132"> https://money.yandex.ru/doc.xml?id=527132 </a>(далее – «Лицензионный договор»). Если Вы не принимаете условия Лицензионного договора в полном объёме, Вы не имеете права использовать программу в каких-либо целях.</p>';

$_['error_permission'] = 'У Вас нет прав для управления этим модулем!';
$_['error_empty_payment'] = 'Нужно выбрать хотя бы один метод оплаты!';
$_['error_ya_kassa_shop_id'] = 'Укажите идентификатор магазина (shopId)';
$_['error_ya_kassa_password'] = 'Укажите секретный ключ (shopPassword)';
$_['error_invalid_shop_password'] = 'Секретный ключ указан в не верном формате';
$_['error_invalid_shop_id_or_password'] = 'Проверьте shopId и Секретный ключ — где-то есть ошибка. А лучше скопируйте их прямо из <a href="https://kassa.yandex.ru/my" target="blank">личного кабинета Яндекс.Кассы</a>';
//
$_['module_settings_header'] = "Настройки";
$_['module_license'] = "Работая с модулем, вы автоматически соглашаетесь с <a href='https://money.yandex.ru/doc.xml?id=527132' target='_blank'>условиями его использования</a>.";
$_['module_version'] = "Версия модуля ";
$_['kassa_tab_label'] = "Яндекс.Касса";
$_['kassa_header_description'] = "Для работы с модулем нужно подключить магазин к <a target=\"_blank\" href=\"https://kassa.yandex.ru/\">Яндекс.Кассе</a>.";
$_['kassa_test_mode_info'] = 'Вы включили тестовый режим приема платежей. Проверьте, как проходит оплата. <a href="https://yandex.ru/support/checkout/payments/api.html#api__04" target="_blank">Подробнее</a>';
$_['kassa_enable'] = "Включить приём платежей через Яндекс.Кассу";
$_['check_url_help'] = "Скопируйте эту ссылку в поля Check URL и Aviso URL в настройках личного кабинета Яндекс.Кассы";
$_['kassa_account_header'] = "Параметры из личного кабинета Яндекс.Кассы";
$_['kassa_shop_id_label'] = 'shopId';
$_['kassa_shop_id_help'] = 'Скопируйте shopId из личного кабинета Яндекс.Кассы';
$_['kassa_password_label'] = 'Секретный ключ';
$_['kassa_password_help'] = 'Выпустите и активируйте секретный ключ в <a href="https://kassa.yandex.ru/my" target="_blank">личном кабинете Яндекс.Кассы</a>. Потом скопируйте его сюда.';
$_['kassa_account_help'] = "Shop ID, scid, ShopPassword можно посмотреть в <a href='https://money.yandex.ru/my' target='_blank'>личном кабинете</a> после подключения Яндекс.Кассы.";
$_['kassa_payment_config_header'] = 'Настройка сценария оплаты';
$_['kassa_payment_mode_label'] = 'Выбор способа оплаты';
$_['kassa_payment_mode_smart_pay'] = 'На стороне Кассы';
$_['kassa_payment_mode_shop_pay'] = 'На стороне магазина';
$_['kassa_force_button_name'] = 'Назвать кнопку оплаты «Заплатить через Яндекс»';
$_['kassa_payment_mode_help'] = "<a href='https://tech.yandex.ru/money/doc/payment-solution/payment-form/payment-form-docpage/' target='_blank'>Подробнее о сценариях оплаты</a>";
$_['kassa_payment_method_label'] = "Отметьте способы оплаты, которые указаны в вашем договоре с Яндекс.Деньгами";
$_['forwork_money'] = "";
$_['enable_money'] = "Включить прием платежей в кошелек на Яндексе";
$_['redirectUrl_help'] = "Скопируйте эту ссылку в поле Redirect URL на <a href='https://money.yandex.ru/myservices/online.xml' target='_blank'>странице настройки уведомлений</a>.";
$_['account_head'] = "Настройки приема платежей";
$_['wallet'] = "Номер кошелька";
$_['password'] = "Секретное слово";
$_['account_help'] = "Cекретное слово нужно скопировать со <a href='https://money.yandex.ru/myservices/online.xml' target='_blank'>странице настройки уведомлений</a> на сайте Яндекс.Денег";
$_['option_wallet'] = "Способы оплаты";
$_['kassa_payment_method_default'] = "Способ оплаты по умолчанию";
$_['kassa_success_page_label'] = "Страница успеха платежа";
$_['kassa_page_default'] = "Стандартная---";
$_['kassa_success_page_description'] = "Эту страницу увидит покупатель, когда оплатит заказ";
$_['kassa_failure_page_label'] = "Страница отказа";
$_['page_standart'] = "Стандартная---";
$_['kassa_failure_page_description'] = "Эту страницу увидит покупатель, если что-то пойдет не так: например, если ему не хватит денег на карте";
$_['successMP_label'] = "Страница успеха для способа «Оплата картой при доставке»";
$_['successMP_help'] = "Это страница с информацией о доставке. Укажите на ней, когда привезут товар и как его можно будет оплатить";
$_['kassa_page_title_label'] = "Название платежного сервиса";
$_['kassa_page_title_help'] = "Это название увидит пользователь";
$_['kassa_send_receipt_label'] = 'Отправлять в Яндекс.Кассу данные для чеков (54-ФЗ)';
$_['kassa_all_tax_rate_label'] = 'НДС';
$_['kassa_tax_rate_table_label'] = '';
$_['kassa_default_tax_rate_label'] = 'Ставка по умолчанию';
$_['kassa_default_tax_rate_description'] = 'Ставка по умолчанию будет в чеке, если в карточке товара не указана другая ставка.';
$_['kassa_tax_rate_label'] = 'Ставка в вашем магазине';
$_['kassa_tax_rate_description'] = 'Сопоставьте ставки';
$_['kassa_tax_rate_site_header'] = 'Ставка в вашем магазине';
$_['kassa_tax_rate_kassa_header'] = 'Ставка для чека в налоговую';
$_['kassa_feature_header'] = "Дополнительные настройки для администратора";
$_['kassa_debug_label'] = "Запись отладочной информации";
$_['kassa_view_logs'] = 'Просмотр имеющихся логов';
$_['disable'] = "Отключена";
$_['enable'] = "Включена";
$_['kassa_debug_description'] = "Настройку нужно будет поменять, только если попросят специалисты Яндекс.Денег";
$_['kassa_before_redirect_label'] = 'Когда пользователь переходит к оплате';
$_['kassa_create_order_label'] = 'Создать неоплаченный заказ в панели управления';
$_['kassa_clear_cart_label'] = 'Удалить товары из корзины';
$_['kassa_order_status_label'] = "Статус заказа после оплаты";
$_['kassa_ordering_label'] = "Порядок сортировки";
$_['kassa_geo_zone_label'] = "Регион отображения";
$_['kassa_notification_url_label'] = 'Адрес для уведомлений';
$_['kassa_notification_url_description'] = 'Этот адрес понадобится, только если его попросят специалисты Яндекс.Кассы';
$_['kassa_page_title_default'] = 'Яндекс.Касса (банковские карты, электронные деньги и другое)';

$_['wallet_tab_label'] = 'Яндекс.Деньги';
$_['wallet_header_description'] = '';
$_['wallet_enable'] = 'Включить прием платежей в кошелек на Яндексе';
$_['wallet_redirect_url_description'] = "Скопируйте эту ссылку в поле Redirect URL на <a href='https://money.yandex.ru/myservices/online.xml' target='_blank'>странице настройки уведомлений</a>.";
$_['wallet_account_head'] = 'Настройки приема платежей';
$_['wallet_number_label'] = 'Номер кошелька';
$_['wallet_password_label'] = 'Секретное слово';
$_['wallet_account_description'] = "Cекретное слово нужно скопировать со <a href='https://money.yandex.ru/myservices/online.xml' target='_blank'>странице настройки уведомлений</a> на сайте Яндекс.Денег";
$_['wallet_option_label'] = 'Способы оплаты';
$_['wallet_feature_header'] = 'Дополнительные настройки для администратора';
$_['wallet_debug_label'] = 'Запись отладочной информации';
$_['wallet_debug_description'] = "Настройку нужно будет поменять, только если попросят специалисты Яндекс.Денег";
$_['wallet_before_redirect_label'] = 'Когда пользователь переходит к оплате';
$_['wallet_create_order_label'] = 'Создать неоплаченный заказ в панели управления';
$_['wallet_clear_cart_label'] = 'Удалить товары из корзины';
$_['wallet_order_status_label'] = "Статус заказа после оплаты";
$_['wallet_ordering_label'] = "Порядок сортировки";
$_['wallet_geo_zone_label'] = "Регион отображения";
$_['wallet_all_zones'] = 'Все зоны';

$_['tab_billing'] = 'Яндекс.Платежка';
$_['billing_header'] = '';
$_['billing_enable'] = 'Включить прием платежей через Платежку';
$_['billing_form_id'] = 'ID формы';
$_['billing_purpose'] = 'Назначение платежа';
$_['billing_purpose_desc'] = 'Назначение будет в платежном поручении: напишите в нем всё, что поможет отличить заказ, который оплатили через Платежку';
$_['billing_purpose_default'] = 'Номер заказа %order_id% Оплата через Яндекс.Платежку';
$_['billing_status'] = 'Статус заказа';
$_['billing_status_desc'] = 'Статус должен показать, что результат платежа неизвестен: заплатил клиент или нет, вы можете узнать только из уведомления на электронной почте или в своем банке';
$_['billing_feature_header'] = 'Дополнительные настройки для администратора';
$_['billing_debug_label'] = 'Запись отладочной информации';
$_['billing_debug_description'] = "Настройку нужно будет поменять, только если попросят специалисты Яндекс.Денег";
$_['billing_order_status_label'] = "Статус заказа после оплаты";
$_['billing_ordering_label'] = "Порядок сортировки";
$_['billing_geo_zone_label'] = "Регион отображения";
$_['billing_all_zones'] = 'Все зоны';
$_['error_ya_billing_id'] = 'Не был указан идентификатор Платёжки';
$_['error_ya_billing_purpose'] = 'Не было указано назначение платежа';
$_['error_ya_billing_status'] = 'Не был указан статус заказа';

$_['tab_updater'] = 'Обновления';
$_['updater_header'] = 'Обновление модуля';
$_['updater_enable'] = 'Включить возможность обновления модуля';
