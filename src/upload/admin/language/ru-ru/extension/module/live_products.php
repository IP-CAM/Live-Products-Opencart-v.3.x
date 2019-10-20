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
$_['entry_ssc'] = 'Серверное кеширование';
$_['entry_csc'] = 'Клиентское кеширование';
$_['entry_cct'] = 'Таймаут кеша';
$_['entry_prc_rat'] = 'Изменять цену опций';
$_['entry_pts_rat'] = 'Изменять баллы опций';
$_['entry_rew_rat'] = 'Изменять бонусы вознаграждения';
$_['entry_eql_sig'] = 'Использовать знак равенства';
$_['entry_log'] = 'Журнал';
//
$_['entry_tot_prc'] = 'Общая цена товара';
$_['entry_tot_opt'] = 'Общая цена опций';
$_['entry_tot_wgt'] = 'Общий вес';
$_['entry_opt_old'] = 'Предыдущая цена';
$_['entry_hid_pfx'] = 'Скрыть префиксы опций';
$_['entry_opt_pts'] = 'Баллы опций';
$_['entry_opt_wgt'] = 'Вес опций';
$_['entry_opt_qty'] = 'Кол-во опций на складе';
$_['entry_opt_tip'] = 'Всплывающие подсказки';
$_['entry_delimiter'] = 'Разделитель';
$_['entry_text_free'] = 'Бесплатно';
$_['entry_text_prev'] = 'Старая цена';
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
$_['entry_opt_old_class'] = 'Старые цены опций';
$_['entry_opt_new_class'] = 'Новые цены опций';

// Live Products help text
$_['help_ос_cache'] = 'Кеширование запросов на сервере';
$_['help_csc'] = 'Кеширование запросов в браузере';
$_['help_cct'] = 'Время хранения запросов и ответов в секундах';
$_['help_prc_rat'] = 'Пересчитывать цены товарных опций пропорционально скидкам на основную цену товара';
$_['help_pts_rat'] = 'Пересчитывать цену в бонусах у товарных опций пропорционально скидкам на основную цену товара';
$_['help_rew_rat'] = 'Пересчитывать бонусы пропорционально скидкам на основную цену товара';
$_['help_eql_sig'] = 'Использовать знак равенства в качестве префикса товарных опций';
$_['help_log'] = 'Журнал в консоли браузера';
//
$_['help_tot_prc'] = 'Показывать цену, вес и бонусы товаров с учётом указанного количества';
$_['help_tot_opt'] = 'Показывать цену, вес и бонусы товарных опций с учётом указанного количества';
$_['help_tot_wgt'] = 'Показывать общий вес товара включая вес выбранных опций';
$_['help_opt_old'] = 'При использовании дисконтов или акций показывать предыдущие цены товарных опций рядом с действительными';
$_['help_hid_pfx'] = 'Убрать префиксы товарных опций и показывать их полную цену, вес и бонусы (кроме checkbox)';
$_['help_opt_pts'] = 'Показывать стоимость товарных опций в бонусных баллах';
$_['help_opt_wgt'] = 'Показывать вес товарных опций';
$_['help_opt_qty'] = 'Показывать доступное количество товарных опций';
$_['help_opt_tip'] = 'Использовать всплывающие посказки для отображения веса, количества и баллов опций';
$_['help_delimiter'] = 'Разделитель параметров опций: &#x007C;, &bull;, &middot; и тд';
$_['help_text_free'] = 'Текст для опций с нулевой стоимостью. Если не нужно - оставить поле пустым';
$_['help_text_prev'] = 'Текст для предыдущих цен товарных опций при применении к ним скидое (только для select)';
$_['help_fade'] = 'Скорость анимации при изменении параметров товара';
//
$_['help_content_id'] = '#id основного контейнера, который содержит карточку товара';
$_['help_insufficient_id'] = '#id контейнер с сообщением о нехватке/отсутствии на складе необходимого количества товарных опций';
$_['help_option_id'] = '#id-маска контейнеров с опциями';
$_['help_opt_new_class'] = 'сlass контейнеров с новыми ценами опций';
$_['help_opt_old_class'] = 'сlass контейнеров со старыми ценами опций';
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
