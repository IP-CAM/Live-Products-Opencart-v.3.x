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
$_['entry_ssc'] = 'Серверне кешування';
$_['entry_csc'] = 'Клієнтське кешування';
$_['entry_cct'] = 'Таймаут кешу';
$_['entry_prc_rat'] = 'Знижка на ціну опцій';
$_['entry_pts_rat'] = 'Знижка на бали опцій';
$_['entry_rew_rat'] = 'Знижка на бонусні бали';
$_['entry_eql_sig'] = 'Знак рівності';
$_['entry_log'] = 'Журнал';
//
$_['entry_tot_prc'] = 'Загальна ціна товару';
$_['entry_tot_opt'] = 'Загальна ціна опцій';
$_['entry_tot_wgt'] = 'Загальна вага';
$_['entry_opt_old'] = 'Попередні ціни';
$_['entry_hid_pfx'] = 'Приховати префікси опцій';
$_['entry_opt_pts'] = 'Ціна опцій в бонусах';
$_['entry_opt_wgt'] = 'Вага опцій';
$_['entry_opt_qty'] = 'Кіл-ть опцій в наявності';
$_['entry_opt_tip'] = 'Використовувати tooltips';
$_['entry_delimiter'] = 'Роздільник';
$_['entry_text_free'] = 'Безкоштовно';
$_['entry_text_prev'] = 'Попередня ціна';
$_['entry_fade'] = 'Анімація, мс';
//
$_['entry_content_id'] = 'Контент';
$_['entry_insufficient_id'] = 'Повідомлення про нестачу';
$_['entry_option_id'] = 'Опції';
$_['entry_opt_old_class'] = 'Попередні ціни опцій';
$_['entry_opt_new_class'] = 'Нові ціни опцій';
$_['entry_points_id'] = 'Ціна в балах';
$_['entry_price_id'] = 'Ціна';
$_['entry_reward_id'] = 'Бонусні бали';
$_['entry_special_id'] = 'Ціна за знижкою/акція';
$_['entry_tax_id'] = 'Податок';
$_['entry_weight_id'] = 'Вага';

// Live Products help text
$_['help_ssc'] = 'Кешування запитів на сервері';
$_['help_csc'] = 'Кешування запитів клієнтскими браузерами';
$_['help_cct'] = 'Час зберігання кешованих запитів в секундах';
$_['help_prc_rat'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій';
$_['help_pts_rat'] = 'При використанні дисконтних або акційних цін пропорційно змінювати ціну опцій в бонусних балах';
$_['help_rew_rat'] = 'При використанні дисконтних або акційних цін пропорційно змінювати кількість бонусних балів';
$_['help_eql_sig'] = 'Використовувати знак рівності в опціях';
$_['help_log'] = 'Вивод даних у консоль браузера';
//
$_['help_tot_prc'] = 'Відображати параметри товару (ціни, вага, бали) в перерахунку на зазначену кількість';
$_['help_tot_opt'] = 'Відображати параметри опцій товару (ціни, вага, бали) в перерахунку на зазначену кількість';
$_['help_tot_wgt'] = 'Відображати загальну вагу товару та вказаних опцій';
$_['help_opt_old'] = 'При використанні дисконтних або акційних цін показувати старі ціни поряд з актуальними';
$_['help_hid_pfx'] = 'Показувати загальну вартість/бали/вагу опцій та приховати префікси';
$_['help_opt_pts'] = 'Відображати додаткові бали для опцій товару';
$_['help_opt_wgt'] = 'Відображати вагу опцій товару';
$_['help_opt_qty'] = 'Відображати доступну кількість для опцій товару';
$_['help_opt_tip'] = 'Використовувати спливаючі підказки для відображення ваги, кількості, та балів опцій товару';
$_['help_delimiter'] = 'Роздільник параметрів опцій товару: &#x007C;, &bull;, &middot; тощо';
$_['help_text_free'] = 'Текст для опцій з нульовою вартістю. Можно залишити порожнім';
$_['help_text_prev'] = 'Текст для попередніх(старих) цін опцій (тільки для випадаючого списку)';
$_['help_fade'] = 'Тривалість анімації відображення при зміні параметрів товара';
//
$_['help_content_id'] = '#id основного контейнера який містить картку товару';
$_['help_insufficient_id'] = '#id контейнер з повідомленням про нестачу/відсутність необхідної кількості товару';
$_['help_option_id'] = '#id-маска контейнерів з опціями';
$_['help_opt_new_class'] = 'class контейнів із новими цінами опцій';
$_['help_opt_old_class'] = 'class контейнів із старими цінами опцій';
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
