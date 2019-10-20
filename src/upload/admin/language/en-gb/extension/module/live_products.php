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
$_['entry_ssc'] = 'Backend cache';
$_['entry_csc'] = 'Frontend cache';
$_['entry_cct'] = 'Cache lifetime';
$_['entry_prc_rat'] = 'Special option price';
$_['entry_pts_rat'] = 'Special option points';
$_['entry_rew_rat'] = 'Special reward points';
$_['entry_eql_sig'] = 'Use equal sign';
$_['entry_log'] = 'Log';

$_['entry_tot_prc'] = 'Calc total price by qty';
$_['entry_tot_opt'] = 'Calc option price by qty';
$_['entry_tot_wgt'] = 'Show total weight';
$_['entry_opt_old'] = 'Show old prices';
$_['entry_hid_pfx'] = 'Hide prefixes';
$_['entry_opt_qty'] = 'Show in-stock option quantity';
$_['entry_opt_wgt'] = 'Show option weight';
$_['entry_opt_pts'] = 'Show option points';
$_['entry_opt_tip'] = 'Show as tooltips';
$_['entry_delimiter'] = 'Delimiter';
$_['entry_text_free'] = 'Free';
$_['entry_text_prev'] = 'Previous prices';
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
$_['entry_opt_old_class'] = 'Option old prices';
$_['entry_opt_new_class'] = 'Option new prices';

// Live Products help text
$_['help_ssc'] = 'Use Server-side caching';
$_['help_csc'] = 'Use Client-side caching';
$_['help_cct'] = 'Client-side cache lifetime in seconds';
$_['help_prc_rat'] = 'Allow to apply discount(specials) percentage rate to product option prices';
$_['help_pts_rat'] = 'Allow to apply discount(specials) percentage rate to product option points';
$_['help_rew_rat'] = 'Allow to apply discount(specials) percentage rate to product reward points';
$_['help_eql_sig'] = 'Allow to use the equal sign for product options';
$_['help_log'] = 'Log some info to console';

$_['help_tot_prc'] = 'Show product totals in accordance with the specified quantity';
$_['help_tot_opt'] = 'Show product option totals in accordance with the specified quantity';
$_['help_tot_wgt'] = 'Show product weight including weight of specified options';
$_['help_opt_old'] = 'Show previous prices of product options before discount and specials';
$_['help_hid_pfx'] = 'Hide product option prefixes and show their full prices, weight and points (excl. checkboxes)';
$_['help_opt_pts'] = 'Show option points';
$_['help_opt_wgt'] = 'Show option weight';
$_['help_opt_qty'] = 'Show the number of available option';
$_['help_opt_tip'] = 'Display option weight, quantity and points inside popup tooltip';
$_['help_delimiter'] = 'Custom delimiter for option properties: &#x007C;, &bull;, &middot; etc';
$_['help_text_free'] = 'Custom text for free of charge options';
$_['help_text_prev'] = 'Custom text for previous option prices in select list';
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
$_['help_opt_old_class'] = 'Old option price container class';
$_['help_opt_new_class'] = 'New option price container class';

// Live Products main text
$_['text_extension'] = 'Extensions';
$_['text_success'] = 'Success: Live Products configured!';
$_['text_edit'] = 'Edit Live Products';
