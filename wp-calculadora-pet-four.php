<?php
/*
Plugin Name: Calculadora Pet Four
Description: Calculadora de ração para cães e gatos.
Version: 1.0.0
Author: Alavanca360
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/calculator-logic.php';

function pet_calculator_enqueue_assets() {
    wp_enqueue_style( 'pet-calculator-style', plugin_dir_url( __FILE__ ) . 'assets/style.css', [], '1.0.0' );
    wp_enqueue_script( 'pet-calculator-script', plugin_dir_url( __FILE__ ) . 'assets/script.js', [], '1.0.0', true );
    wp_localize_script( 'pet-calculator-script', 'petCalculator', [
        'ajax_url' => admin_url( 'admin-ajax.php' ),
    ] );
}
add_action( 'wp_enqueue_scripts', 'pet_calculator_enqueue_assets' );

function pet_calculator_shortcode() {
    ob_start();
    include plugin_dir_path( __FILE__ ) . 'templates/form-ui.php';
    return ob_get_clean();
}
add_shortcode( 'pet_food_calculator', 'pet_calculator_shortcode' );

function pet_calculator_handle() {
    $animal = isset( $_POST['animal'] ) ? sanitize_text_field( $_POST['animal'] ) : '';
    $peso   = isset( $_POST['peso'] ) ? floatval( $_POST['peso'] ) : 0;

    if ( ! in_array( $animal, [ 'dog', 'cat' ], true ) || $peso <= 0 ) {
        wp_send_json_error( 'Dados inválidos', 400 );
    }

    $valor = pet_four_calculate_food( $animal, $peso );
    wp_send_json_success( [ 'valor' => $valor ] );
}
add_action( 'wp_ajax_pet_calculator', 'pet_calculator_handle' );
add_action( 'wp_ajax_nopriv_pet_calculator', 'pet_calculator_handle' );
