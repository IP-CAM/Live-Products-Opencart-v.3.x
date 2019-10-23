<?php
/**
 * Live Products
 *
 * The Live Products extension is for CMS Opencart 3.x.
 * It allows to display live total price, weight and reward points of product and its options, in accordance with the
 * specified options and quantity. Also the extension adds a lot of additional convenient features.
 *
 * @author      Andrii Burkatskyi aka underr underr.ua@gmail.com
 * @copyright   Copyright (c) 2019 Andrii Burkatskyi
 * @license     https://raw.githubusercontent.com/underr-ua/ocmod3-live-products/master/EULA.txt End-User License Agreement
 *
 * @version     1.7
 *
 * @see         https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460
 * @see         https://underr.space/en/notes/projects/project-013.html
 * @see         https://github.com/underr-ua/ocmod3-live-products
 */

// Live Products heading
$_['heading_title'] = '[underr] Live Products';

// Live Products error text
$_['error_permission'] = 'Увага: Недостатньо прав для керування модулем!';
$_['error_fill'] = 'Пусті поля заповнені автоматично, будь ласка, перевірьте й збережіть параметри знову!';

// Live Products entry text
$_['entry_tab_gen'] = 'Загальні Параметри';
$_['entry_tab_opr'] = 'Операційні Параметри';
$_['entry_tab_lng'] = 'Мовні Параметри';
$_['entry_tab_css'] = 'Cтилі CSS';
$_['entry_tab_spt'] = 'Підтримка';
//
$_['entry_status'] = 'Статус';
$_['entry_oc_cache'] = 'Серверне кешування';
$_['entry_js_cache'] = 'Клієнтське кешування';
$_['entry_cache_timeout'] = 'Таймаут кешу';
$_['entry_price_ratio'] = 'Знижка на ціну опцій';
$_['entry_points_ratio'] = 'Знижка на бали опцій';
$_['entry_reward_ratio'] = 'Знижка на бонусні бали';
$_['entry_equal_sign'] = 'Знак рівності';
$_['entry_log'] = 'Журнал';
//
$_['entry_product_total'] = 'Загальна ціна товару';
$_['entry_option_total'] = 'Загальна ціна опцій';
$_['entry_weight_total'] = 'Загальна вага';
$_['entry_option_old'] = 'Попередні ціни';
$_['entry_hide_prefix'] = 'Приховати префікси опцій';
$_['entry_option_points'] = 'Ціна опцій в бонусах';
$_['entry_option_weight'] = 'Вага опцій';
$_['entry_option_quantity'] = 'Кіл-ть опцій в наявності';
$_['entry_option_tooltip'] = 'Використовувати tooltips';
$_['entry_delimiter'] = 'Роздільник';
$_['entry_text_free'] = 'Безкоштовно';
$_['entry_text_old'] = 'Попередня ціна';
$_['entry_fade'] = 'Анімація, мс';
//
$_['entry_content_id'] = 'Контент';
$_['entry_insufficient_id'] = 'Повідомлення про нестачу';
$_['entry_option_id'] = 'Опції';
$_['entry_option_old_class'] = 'Попередні ціни опцій';
$_['entry_option_new_class'] = 'Нові ціни опцій';
$_['entry_points_id'] = 'Ціна в балах';
$_['entry_price_id'] = 'Ціна';
$_['entry_reward_id'] = 'Бонусні бали';
$_['entry_special_id'] = 'Ціна за знижкою/акція';
$_['entry_tax_id'] = 'Податок';
$_['entry_weight_id'] = 'Вага';

// Live Products help text
$_['help_oc_cache'] = 'Кешування запитів на сервері';
$_['help_js_cache'] = 'Кешування запитів клієнтскими браузерами';
$_['help_cache_timeout'] = 'Час зберігання кешованих запитів в секундах';
$_['help_price_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій';
$_['help_points_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій в бонусних балах';
$_['help_reward_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати кількість бонусних балів';
$_['help_equal_sign'] = 'Використовувати знак рівності в опціях';
$_['help_log'] = 'Вивод даних у консоль браузера';
//
$_['help_product_total'] = 'Відображати параметри товару (ціни, вага, бали) в перерахунку на зазначену кількість';
$_['help_option_total'] = 'Відображати параметри опцій товару (ціни, вага, бали) в перерахунку на зазначену кількість';
$_['help_weight_total'] = 'Відображати загальну вагу товару та вказаних опцій';
$_['help_option_old'] = 'При використанні дисконтних або акційних цін показувати старі ціни поряд з актуальними';
$_['help_hide_prefix'] = 'Показувати загальну вартість/бали/вагу опцій та приховати префікси';
$_['help_option_points'] = 'Відображати додаткові бали для опцій товару';
$_['help_option_weight'] = 'Відображати вагу опцій товару';
$_['help_option_quantity'] = 'Відображати доступну кількість для опцій товару';
$_['help_option_tooltip'] = 'Використовувати спливаючі підказки для відображення ваги, кількості, та балів опцій товару';
$_['help_delimiter'] = 'Роздільник параметрів опцій товару: &#x007C;, &bull;, &middot; тощо';
$_['help_text_free'] = 'Текст для опцій з нульовою вартістю. Можно залишити порожнім';
$_['help_text_old'] = 'Текст для попередніх(старих) цін опцій (тільки для випадаючого списку)';
$_['help_fade'] = 'Тривалість анімації відображення при зміні параметрів товара';
//
$_['help_content_id'] = '#id основного контейнера який містить картку товару';
$_['help_insufficient_id'] = '#id контейнер з повідомленням про нестачу/відсутність необхідної кількості товару';
$_['help_option_id'] = '#id-маска контейнерів з опціями';
$_['help_option_new_class'] = 'class контейнів із новими цінами опцій';
$_['help_option_old_class'] = 'class контейнів із старими цінами опцій';
$_['help_points_id'] = '#id контейнера з ціною у бонусних балах';
$_['help_price_id'] = '#id контейнера з ціною';
$_['help_reward_id'] = '#id контейнера з бонусними балами';
$_['help_special_id'] = '#id контейнера з дисконтною/акційною ціною';
$_['help_tax_id'] = '#id контейнера з сумою податка';
$_['help_weight_id'] = '#id контейнера із загальною вагою';

// Live Products main text
$_['text_extension'] = 'Розширення';
$_['text_success'] = 'Настройки Live Products збережено!';
$_['text_edit'] = 'Редагування Live Products';
