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
 * @version     1.5
 *
 * @see         https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=35460
 * @see         https://underr.space/notes/projects/project-013.html
 * @see         https://github.com/underr-ua/ocmod3-live-products
 */
// Live Products heading
$_['heading_title'] = '[underr] Live Products';

// Live Products error text
$_['error_permission'] = 'Warning: You do not have permission to modify Live Products!';

// Live Products entry text
$_['entry_tab_general'] = 'General Settings';
$_['entry_tab_view'] = 'View';
$_['entry_tab_style'] = 'Styles';
$_['entry_tab_support'] = 'Support';

$_['entry_status'] = 'Status';
$_['entry_oc_cache'] = 'Server-side cache';
$_['entry_js_cache'] = 'Client-side cache';
$_['entry_cache_timeout'] = 'Cache lifetime';
$_['entry_price_ratio'] = 'Special option price';
$_['entry_points_ratio'] = 'Special option points';
$_['entry_reward_ratio'] = 'Special reward points';
$_['entry_equal_sign'] = 'Use equal sign';
$_['entry_log'] = 'Log';

$_['entry_calc_sum_qty'] = 'Re-calculate by quantity (total)';
$_['entry_calc_opt_qty'] = 'Re-calculate by quantity (option)';
$_['entry_show_sum_wgt'] = 'Show total weight';
$_['entry_show_old_prc'] = 'Show old prices';
$_['entry_show_opt_ful'] = 'Hide prefixes';
$_['entry_show_opt_qty'] = 'Show in-stock option quantity';
$_['entry_show_opt_wgt'] = 'Show option weight';
$_['entry_show_opt_pts'] = 'Show option points';
$_['entry_show_opt_tip'] = 'Show as tooltips';
$_['entry_text_delimiter'] = 'Separator';
$_['entry_text_free'] = 'Free';
$_['entry_text_old'] = 'Old price';
$_['entry_fade_duration'] = 'Fade duration';

$_['entry_content_id'] = 'Content';
$_['entry_price_id'] = 'Price';
$_['entry_special_id'] = 'Special price';
$_['entry_tax_id'] = 'Tax';
$_['entry_points_id'] = 'Points';
$_['entry_reward_id'] = 'Reward points';
$_['entry_weight_id'] = 'Weight';
$_['entry_option_id'] = 'Option';
$_['entry_insufficient_id'] = 'Insufficient message';
$_['entry_option_old_class'] = 'Option old price';

// Live Products help text
$_['help_oc_cache'] = 'Use Server-side caching.';
$_['help_js_cache'] = 'Use Client-side caching.';
$_['help_cache_timeout'] = 'Client-side cache lifetime in seconds.';
$_['help_price_ratio'] = 'Use the ratio of special (or discount) price to basic price to change the price of product options.';
$_['help_points_ratio'] = 'Use the ratio of special (or discount) price to basic price to change the price of product options in reward points.';
$_['help_reward_ratio'] = 'Use the ratio of special (or discount) price to basic price to change reward points.';
$_['help_equal_sign'] = 'Use the equal sign for the product options.';
$_['help_log'] = 'Log some info to console.';

$_['help_calc_sum_qty'] = 'Show the cost and and other properties of the product based on the specified quantity.';
$_['help_calc_opt_qty'] = 'Show option price and weight based on the specified product quantity.';
$_['help_show_sum_wgt'] = 'Show total product weight including specified options.';
$_['help_show_old_prc'] = 'Show old option prices if special price or discount used.';
$_['help_show_opt_ful'] = 'Show full option prices/points/weight without prefixes.';
$_['help_show_opt_pts'] = 'Show product option price in points.';
$_['help_show_opt_wgt'] = 'Show product option weight.';
$_['help_show_opt_qty'] = 'Show available number of product options.';
$_['help_show_opt_tip'] = 'Use tooltips to display option  weight, quantity and points.';
$_['help_text_delimiter'] = 'Custom symbol(s) to separate option properties (price, weight etc.): ) (, &bull;, &middot; etc.';
$_['help_text_free'] = 'Placehoder text for free price option. If do not want to use - leave empty';
$_['help_text_old'] = 'Text for old product options prices (only for select list)';
$_['help_fade_duration'] = 'Animation effect duration time.';

$_['help_content_id'] = 'Main content container id.';
$_['help_price_id'] = 'Product price container id.';
$_['help_special_id'] = 'Product special/discount price container id.';
$_['help_tax_id'] = 'Tax container id.';
$_['help_points_id'] = 'Points container id.';
$_['help_reward_id'] = 'Reward points container id.';
$_['help_weight_id'] = 'Product total weight container id.';
$_['help_option_id'] = 'Placeholder for each product option containers.';
$_['help_insufficient_id'] = 'Insufficient message container id.';
$_['help_option_old_class'] = 'Old option price container class.';

// Error text
$_['error_style'] = 'Please input correct style name!';

// Live Products main text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: Live Products configured!';
$_['text_edit'] = 'Edit Live Products';
