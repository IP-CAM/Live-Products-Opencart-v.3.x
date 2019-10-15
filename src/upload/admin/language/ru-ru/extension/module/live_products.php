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
$_['error_permission'] = 'Внимание: Недостаточно прав для управления модулем!';
$_['error_fill'] = 'Пустые поля заполнены автоматически, пожалуйста, проверьте и сохраните снова!';

// Live Products entry text
$_['entry_tab_general'] = 'Основные Параметры';
$_['entry_tab_view'] = 'Вид и Поведение';
$_['entry_tab_lang'] = 'Языковые Настройки';
$_['entry_tab_css'] = 'Cтили CSS';
$_['entry_tab_support'] = 'Поддержка';
//
$_['entry_status'] = 'Статус';
$_['entry_oc_cache'] = 'Серверное кеширование';
$_['entry_js_cache'] = 'Клиентское кеширование';
$_['entry_cache_timeout'] = 'Таймаут кеша';
$_['entry_price_ratio'] = 'Изменять цену опций';
$_['entry_points_ratio'] = 'Изменять баллы опций';
$_['entry_reward_ratio'] = 'Изменять бонусы вознаграждения';
$_['entry_equal_sign'] = 'Использовать знак равенства';
$_['entry_log'] = 'Журнал';
//
$_['entry_calc_sum_qty'] = 'Пересчитывать по кол-ву (итого)';
$_['entry_calc_option_qty'] = 'Пересчитывать по кол-ву (опции)';
$_['entry_total_wgt'] = 'Показывать общий вес';
$_['entry_old_prc'] = 'Показывать старые цены';
$_['entry_hide_pfx'] = 'Скрывать префиксы';
$_['entry_option_pts'] = 'Показывать баллы опций';
$_['entry_option_wgt'] = 'Показывать вес опций';
$_['entry_option_qty'] = 'Показывать кол-во опций на складе';
$_['entry_option_tip'] = 'Всплывающие подсказки';
$_['entry_delimiter'] = 'Разделитель';
$_['entry_text_free'] = 'Бесплатно';
$_['entry_text_old_prc'] = 'Старая цена';
$_['entry_fade_duration'] = 'Анимация';
//
$_['entry_content_id'] = 'Содержимое';
$_['entry_price_id'] = 'Цена';
$_['entry_special_id'] = 'Цена по скидке/акция';
$_['entry_tax_id'] = 'Налог';
$_['entry_points_id'] = 'Цена в баллах';
$_['entry_reward_id'] = 'Бонусные баллы';
$_['entry_weight_id'] = 'Вес';
$_['entry_option_id'] = 'Опции';
$_['entry_insufficient_id'] = 'Сообщение о нехватке';
$_['entry_option_old_class'] = 'Старая цена';

// Live Products help text
$_['help_ос_cache'] = 'Кеширование запросов на сервере.';
$_['help_js_cache'] = 'Кеширование запросов в браузере.';
$_['help_cache_timeout'] = 'Время хранения запросов и ответов в секундах.';
$_['help_price_ratio'] = 'При использовании дисконтов или акций пропорционально изменять цены опций.';
$_['help_points_ratio'] = 'При использовании дисконтов или акций пропорционально изменять цену опций в бонусных баллах.';
$_['help_reward_ratio'] = 'При использовании дисконтов или акций пропорционально изменять количество бонусных баллов.';
$_['help_equal_sign'] = 'Использовать знак равенства в опциях товара.';
$_['help_log'] = 'Вывод в консоль браузера.';
//
$_['help_calc_sum_qty'] = 'Отображать параметры товара (цены, вес, баллы) в пересчете на указанное количество.';
$_['help_calc_option_qty'] = 'Отображать параметры опций товара (цены, вес, баллы) в пересчете на указанное количество.';
$_['help_total_wgt'] = 'Отображать общий вес товара включая указанные опции.';
$_['help_old_prc'] = 'При использовании дисконтов или акций отображать старые цены рядом с актуальными.';
$_['help_hide_pfx'] = 'Показывать общую стоимость/баллы/вес опций и скрыть префиксы.';
$_['help_option_pts'] = 'Отображать дополнительную стоимость опций в бонусных баллах.';
$_['help_option_wgt'] = 'Отображать вес опций товара.';
$_['help_option_qty'] = 'Отображать доступное количество опций товара.';
$_['help_option_tip'] = 'Использовать всплывающие посказки для отображения веса, количества и баллов опций.';
$_['help_delimiter'] = 'Разделитель параметров опций: запятая, скобки, &bull;, &middot; и тд.';
$_['help_text_free'] = 'Текст для опций с нулевой стоимостью. Если не нужно - оставить поле пустым.';
$_['help_text_old_prc'] = 'Текст для предыдущих(старых) цен опций (только для выпадающего списка).';
$_['help_fade_duration'] = 'Длительность анимации при изменения параметров товара.';
//
$_['help_content_id'] = 'Id основного контейнера, который содержит карточку товара.';
$_['help_price_id'] = 'Id контейнера с основной ценой.';
$_['help_special_id'] = 'Id контейнера со специальной/акционной ценой.';
$_['help_tax_id'] = 'Id контейнера с суммой налога.';
$_['help_points_id'] = 'Id контейнера с ценой в баллах.';
$_['help_reward_id'] = 'Id контейнера с бонусными баллами.';
$_['help_weight_id'] = 'Id контейнера с общим весом.';
$_['help_option_id'] = 'Id-маска контейнеров с опциями.';
$_['help_insufficient_id'] = 'Id контейнер с сообщением о нехватке/отсутсвии необходимого количества опций.';
$_['help_option_old_class'] = 'Class контейнеров со старыми ценами опций.';

// Live Products main text
$_['text_extension'] = 'Расширения';
$_['text_success'] = 'Настройки Live Products успешно сохранены!';
$_['text_edit'] = 'Редактирование Live Products';
