<?php
/**
* Plugin Name: MasterBip Regiones de Chile
* Plugin URI: https://www.masterbip.cl
* Description: Plugin para agregar REGIONES de CHILE a Woocommerce.
* Version: 1.0

* Author: MasterBip
* Author URI: https://www.masterbip.cl/
* Requires at least: 4.0+
* Tested up to: 5.8
* WC requires at least: 3.0.x
* WC tested up to: 4.0.1
*
* Text Domain: masterbip
*
* License: GPLv3
*
* MasterBip Regiones de Chile free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 3 of the License, or
* any later version.
*
* MasterBip Regiones de Chile is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*/


// Regiones de Chile
function mb_woo_regiones_en_states($states) {
    $states['CL'] = array(
        'Arica y Parinacota' => 'Arica y Parinacota',
        'Tarapacá' => 'Tarapacá',
        'Antofagasta' => 'Antofagasta',
        'Atacama' => 'Atacama',
        'Coquimbo' => 'Coquimbo',
        'Valparaíso' => 'Valparaíso',
        'Metropolitana de Santiago' => 'Metropolitana de Santiago',
        'Libertador General Bernardo O’Higgins' => 'Libertador General Bernardo O’Higgins',
        'Maule' => 'Maule',
        'Ñuble' => 'Ñuble',
        'BíoBío' => 'BíoBío',
        'Araucanía' => 'Araucanía',
        'Los Ríos' => 'Los Ríos',
        'Los Lagos' => 'Los Lagos',
        'Aysén del General Carlos Ibáñez del Campo' => 'Aysén del General Carlos Ibáñez del Campo',
        'Magallanes y Antártica Chilena' => 'Magallanes y Antártica Chilena',
    );
    return $states;
}
add_filter('woocommerce_states', 'mb_woo_regiones_en_states');

// Labels de Regiones
function mb_woo_cambiamos_fields_para_regiones( $fields ) {

	$fields['billing']['billing_state']['placeholder'] = 'Seleccione una Región';
	$fields['billing']['billing_state']['label'] = 'Región';

	$fields['shipping']['shipping_state']['placeholder'] = 'Seleccione una Región';
	$fields['shipping']['shipping_state']['label'] = 'Región';

	return $fields;
}
add_filter('woocommerce_checkout_fields' , 'mb_woo_cambiamos_fields_para_regiones');