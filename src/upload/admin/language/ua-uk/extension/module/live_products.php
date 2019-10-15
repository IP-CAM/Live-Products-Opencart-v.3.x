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
 * @version     1.6
 *
 * @see         https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460
 * @see         https://underr.space/notes/projects/project-013.html
 * @see         https://github.com/underr-ua/ocmod3-live-products
 */

// Live Products heading
$_['heading_title'] = '[underr] Live Products';

// Live Products error text
$_['error_permission'] = 'Увага: Недостатньо прав для керування модулем!';
$_['error_fill'] = 'Пусті поля заповнені автоматично, будь ласка, перевірьте и збережіть знову!';

// Live Products entry text
$_['entry_tab_general'] = 'Основні Параметри';
$_['entry_tab_view'] = 'Вигляд та Поведінка';
$_['entry_tab_lang'] = 'Мовні Параметри';
$_['entry_tab_css'] = 'Cтилі CSS';
$_['entry_tab_support'] = 'Підтримка';
//
$_['entry_status'] = 'Статус';
$_['entry_oc_cache'] = 'Серверне кешування';
$_['entry_js_cache'] = 'Клієнтське кешування';
$_['entry_cache_timeout'] = 'Таймаут кешу';
$_['entry_price_ratio'] = 'Знижка на ціну опцій';
$_['entry_points_ratio'] = 'Знижка на бали опцій';
$_['entry_reward_ratio'] = 'Знижка на бонусні бали';
$_['entry_equal_sign'] = 'Використовувати знак рівності';
$_['entry_log'] = 'Журнал';
//
$_['entry_calc_sum_qty'] = 'Перераховувати за кількістю (разом)';
$_['entry_calc_option_qty'] = 'Перераховувати за кількість (опції)';
$_['entry_total_wgt'] = 'Показувати загальну вагу';
$_['entry_old_prc'] = 'Показувати старі ціни';
$_['entry_hide_pfx'] = 'Приховувати префікси';
$_['entry_option_pts'] = 'Показувати бали опцій';
$_['entry_option_wgt'] = 'Показувати вагу опцій';
$_['entry_option_qty'] = 'Показувати кіл-ть опцій в наявності';
$_['entry_option_tip'] = 'Спливаючі підказки';
$_['entry_delimiter'] = 'Роздільник';
$_['entry_text_free'] = 'Безкоштовно';
$_['entry_text_old_prc'] = 'Стара ціна';
$_['entry_fade_duration'] = 'Анімація';
//
$_['entry_content_id'] = 'Контент';
$_['entry_price_id'] = 'Ціна';
$_['entry_special_id'] = 'Ціна за знижкою/акція';
$_['entry_tax_id'] = 'Податок';
$_['entry_points_id'] = 'Ціна в балах';
$_['entry_reward_id'] = 'Бонусні бали';
$_['entry_weight_id'] = 'Вага';
$_['entry_option_id'] = 'Опції';
$_['entry_insufficient_id'] = 'Повідомлення про нестачу';
$_['entry_option_old_class'] = 'Стара ціна';

// Live Products help text
$_['help_oc_cache'] = 'Кешування запитів на сервері.';
$_['help_js_cache'] = 'Кешування запитів клієнтскими браузерами.';
$_['help_cache_timeout'] = 'Час зберігання кешованих запитів в секундах.';
$_['help_price_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій.';
$_['help_points_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій в бонусних балах.';
$_['help_reward_ratio'] = 'При використанні дисконтних або акційних цін пропорційно змінювати кількість бонусних балів.';
$_['help_equal_sign'] = 'Використовувати знак рівності в опціях.';
$_['help_log'] = 'Вивод даних у консоль браузера.';
//
$_['help_calc_sum_qty'] = 'Відображати параметри товару (ціни, вага, бали) в перерахунку на зазначену кількість.';
$_['help_calc_option_qty'] = 'Відображати параметри опцій товару (ціни, вага, бали) в перерахунку на зазначену кількість.';
$_['help_total_wgt'] = 'Відображати загальну вагу товару та вказаних опцій.';
$_['help_old_prc'] = 'При використанні дисконтних або акційних цін показувати старі ціни поряд з актуальними.';
$_['help_hide_pfx'] = 'Показувати загальну вартість/бали/вагу опцій та приховати префікси.';
$_['help_option_pts'] = 'Відображати додаткові бали для опцій товару.';
$_['help_option_wgt'] = 'Відображати вагу опцій товару.';
$_['help_option_qty'] = 'Відображати доступну кількість для опцій товару.';
$_['help_option_tip'] = 'Використовувати спливаючі підказки для відображення ваги, кількості, та балів опцій товару.';
$_['help_delimiter'] = 'Роздільник параметрів опцій товару: запята, скобки, &bull; тощо.';
$_['help_text_free'] = 'Текст для опцій з нульовою вартістю. Можно залишити порожнім.';
$_['help_text_old_prc'] = 'Текст для попередніх(старих) цін опцій (тільки для випадаючого списку).';
$_['help_fade_duration'] = 'Тривалість анімації відображення при зміні параметрів товара.';
//
$_['help_content_id'] = 'Id основного контейнера який містить картку товару.';
$_['help_price_id'] = 'Id контейнера з ціною.';
$_['help_special_id'] = 'Id контейнера з дисконтною/акционною ціною.';
$_['help_tax_id'] = 'Id контейнера з сумою податка.';
$_['help_points_id'] = 'Id контейнера з ціною у бонусних балах.';
$_['help_reward_id'] = 'Id контейнера з бонусними балами.';
$_['help_weight_id'] = 'Id контейнера із загальною ваглю.';
$_['help_option_id'] = 'Id-маска контейнерів з опціями.';
$_['help_insufficient_id'] = 'Id контейнер з повідомленням про нестачу/відсутність необхідної кількості товару.';
$_['help_option_old_class'] = 'Class контейнів із старими цінами опцій.';

// Live Products main text
$_['text_extension'] = 'Розширення';
$_['text_success'] = 'Настройки Live Products збережено!';
$_['text_edit'] = 'Редагування Live Products';
