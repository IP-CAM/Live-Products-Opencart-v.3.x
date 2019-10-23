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
$_['error_permission'] = 'Внимание: Недостаточно прав для управления модулем!';
$_['error_fill'] = 'Пустые поля заполнены автоматически, пожалуйста, проверьте и сохраните снова!';

// Live Products entry text
$_['entry_tab_gen'] = 'Основные Параметры';
$_['entry_tab_opr'] = 'Операционные Параметры';
$_['entry_tab_lng'] = 'Языковые Настройки';
$_['entry_tab_css'] = 'Cтили CSS';
$_['entry_tab_spt'] = 'Поддержка';
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
$_['entry_product_total'] = 'Общая цена товара';
$_['entry_option_total'] = 'Общая цена опций';
$_['entry_weight_total'] = 'Общий вес';
$_['entry_option_old'] = 'Предыдущая цена';
$_['entry_hide_prefix'] = 'Скрыть префиксы опций';
$_['entry_option_points'] = 'Баллы опций';
$_['entry_option_weight'] = 'Вес опций';
$_['entry_option_quantity'] = 'Кол-во опций на складе';
$_['entry_option_tooltip'] = 'Всплывающие подсказки';
$_['entry_delimiter'] = 'Разделитель';
$_['entry_text_free'] = 'Бесплатно';
$_['entry_text_old'] = 'Старая цена';
$_['entry_fade'] = 'Скорость анимации, мс';
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
$_['entry_option_old_class'] = 'Старые цены опций';
$_['entry_option_new_class'] = 'Новые цены опций';

// Live Products help text
$_['help_ос_cache'] = 'Кеширование запросов на сервере';
$_['help_js_cache'] = 'Кеширование запросов в браузере';
$_['help_cache_timeout'] = 'Время хранения запросов и ответов в секундах';
$_['help_price_ratio'] = 'Пересчитывать цены товарных опций пропорционально скидкам на основную цену товара';
$_['help_points_ratio'] = 'Пересчитывать цену в бонусах у товарных опций пропорционально скидкам на основную цену товара';
$_['help_reward_ratio'] = 'Пересчитывать бонусы пропорционально скидкам на основную цену товара';
$_['help_equal_sign'] = 'Использовать знак равенства в качестве префикса товарных опций';
$_['help_log'] = 'Журнал в консоли браузера';
//
$_['help_product_total'] = 'Показывать цену, вес и бонусы товаров с учётом указанного количества';
$_['help_option_total'] = 'Показывать цену, вес и бонусы товарных опций с учётом указанного количества';
$_['help_weight_total'] = 'Показывать общий вес товара включая вес выбранных опций';
$_['help_option_old'] = 'При использовании дисконтов или акций показывать предыдущие цены товарных опций рядом с действительными';
$_['help_hide_prefix'] = 'Убрать префиксы товарных опций и показывать их полную цену, вес и бонусы (кроме checkbox)';
$_['help_option_points'] = 'Показывать стоимость товарных опций в бонусных баллах';
$_['help_option_weight'] = 'Показывать вес товарных опций';
$_['help_option_quantity'] = 'Показывать доступное количество товарных опций';
$_['help_option_tooltip'] = 'Использовать всплывающие посказки для отображения веса, количества и баллов опций';
$_['help_delimiter'] = 'Разделитель параметров опций: &#x007C;, &bull;, &middot; и тд';
$_['help_text_free'] = 'Текст для опций с нулевой стоимостью. Если не нужно - оставить поле пустым';
$_['help_text_old'] = 'Текст для предыдущих цен товарных опций при применении к ним скидое (только для select)';
$_['help_fade'] = 'Скорость анимации при изменении параметров товара';
//
$_['help_content_id'] = '#id основного контейнера, который содержит карточку товара';
$_['help_insufficient_id'] = '#id контейнер с сообщением о нехватке/отсутствии на складе необходимого количества товарных опций';
$_['help_option_id'] = '#id-маска контейнеров с опциями';
$_['help_option_new_class'] = 'сlass контейнеров с новыми ценами опций';
$_['help_option_old_class'] = 'сlass контейнеров со старыми ценами опций';
$_['help_points_id'] = '#id контейнера с ценой товара в бонусных баллах';
$_['help_price_id'] = '#id контейнера с основной ценой';
$_['help_reward_id'] = '#id контейнера с бонусами';
$_['help_special_id'] = '#id контейнера со специальной/дисконтной ценой';
$_['help_tax_id'] = '#id контейнера с ценой товара до учета налогов';
$_['help_weight_id'] = '#id контейнера с общим весом товара';

// Live Products main text
$_['text_extension'] = 'Расширения';
$_['text_success'] = 'Настройки Live Products успешно сохранены!';
$_['text_edit'] = 'Редактирование Live Products';
