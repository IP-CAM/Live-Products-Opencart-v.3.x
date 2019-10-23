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
$_['error_permission'] = 'Warning: You do not have permission to modify Live Products!';
$_['error_fill'] = 'Empty fields was auto-filled, please check and save again!';

// Live Products entry text
$_['entry_tab_gen'] = 'General Settings';
$_['entry_tab_opr'] = 'Operation Settings';
$_['entry_tab_lng'] = 'Language Settings';
$_['entry_tab_css'] = 'CSS styles';
$_['entry_tab_spt'] = 'Support';
//
$_['entry_status'] = 'Status';
$_['entry_oc_cache'] = 'Backend cache';
$_['entry_js_cache'] = 'Frontend cache';
$_['entry_cache_timeout'] = 'Cache lifetime';
$_['entry_price_ratio'] = 'Special option price';
$_['entry_points_ratio'] = 'Special option points';
$_['entry_reward_ratio'] = 'Special reward points';
$_['entry_equal_sign'] = 'Use equal sign';
$_['entry_log'] = 'Log';

$_['entry_product_total'] = 'Calc total price by qty';
$_['entry_option_total'] = 'Calc option price by qty';
$_['entry_weight_total'] = 'Show total weight';
$_['entry_option_old'] = 'Show old prices';
$_['entry_hide_prefix'] = 'Hide prefixes';
$_['entry_option_quantity'] = 'Show in-stock option quantity';
$_['entry_option_weight'] = 'Show option weight';
$_['entry_option_points'] = 'Show option points';
$_['entry_option_tooltip'] = 'Show as tooltips';
$_['entry_delimiter'] = 'Delimiter';
$_['entry_text_free'] = 'Free';
$_['entry_text_old'] = 'Previous prices';
$_['entry_fade'] = 'Fade duration, ms';

$_['entry_content_id'] = 'Content';
$_['entry_price_id'] = 'Price';
$_['entry_special_id'] = 'Special price';
$_['entry_tax_id'] = 'Tax';
$_['entry_points_id'] = 'Points';
$_['entry_reward_id'] = 'Reward points';
$_['entry_weight_id'] = 'Weight';
$_['entry_option_id'] = 'Option';
$_['entry_insufficient_id'] = 'Insufficient message';
$_['entry_option_old_class'] = 'Option old prices';
$_['entry_option_new_class'] = 'Option new prices';

// Live Products help text
$_['help_oc_cache'] = 'Use Server-side caching';
$_['help_js_cache'] = 'Use Client-side caching';
$_['help_cache_timeout'] = 'Client-side cache lifetime in seconds';
$_['help_price_ratio'] = 'Allow to apply discount(specials) percentage rate to product option prices';
$_['help_points_ratio'] = 'Allow to apply discount(specials) percentage rate to product option points';
$_['help_reward_ratio'] = 'Allow to apply discount(specials) percentage rate to product reward points';
$_['help_equal_sign'] = 'Allow to use the equal sign for product options';
$_['help_log'] = 'Log some info to console';

$_['help_product_total'] = 'Show product totals in accordance with the specified quantity';
$_['help_option_total'] = 'Show product option totals in accordance with the specified quantity';
$_['help_weight_total'] = 'Show product weight including weight of specified options';
$_['help_option_old'] = 'Show previous prices of product options before discount and specials';
$_['help_hide_prefix'] = 'Hide product option prefixes and show their full prices, weight and points (excl. checkboxes)';
$_['help_option_points'] = 'Show option points';
$_['help_option_weight'] = 'Show option weight';
$_['help_option_quantity'] = 'Show the number of available option';
$_['help_option_tooltip'] = 'Display option weight, quantity and points inside popup tooltip';
$_['help_delimiter'] = 'Custom delimiter for option properties: &#x007C;, &bull;, &middot; etc';
$_['help_text_free'] = 'Custom text for free of charge options';
$_['help_text_old'] = 'Custom text for previous option prices in select list';
$_['help_fade'] = 'Animation effect duration time';

$_['help_content_id'] = 'Main content container id';
$_['help_price_id'] = 'Product price container id';
$_['help_special_id'] = 'Product special/discount price container id';
$_['help_tax_id'] = 'Tax container id';
$_['help_points_id'] = 'Points container id';
$_['help_reward_id'] = 'Reward points container id';
$_['help_weight_id'] = 'Product total weight container id';
$_['help_option_id'] = 'Placeholder for each product option containers';
$_['help_insufficient_id'] = 'Insufficient message container id';
$_['help_option_old_class'] = 'Old option price container class';
$_['help_option_new_class'] = 'New option price container class';

// Live Products main text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: Live Products configured!';
$_['text_edit'] = 'Edit Live Products';
