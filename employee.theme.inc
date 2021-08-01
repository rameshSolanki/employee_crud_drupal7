<?php

/*
* hook_menu to load tpl files from theme folder
 * i.e sites/all/themes/custom/{current_theme_name}/templates/books
 * current_theme_name = bartik
 */
function employee_theme() {

  return array(
		'employee_list' => array(
		  'template' => 'employee-list',
		  'path' => drupal_get_path('module', 'employee') . '/theme'
		),
	  );

}
