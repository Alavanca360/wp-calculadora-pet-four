<?php
/**
 * Calcula a quantidade ideal de alimento para o pet.
 *
 * @param string $animal Tipo do animal ("dog" ou "cat").
 * @param float  $peso   Peso do animal em kg.
 *
 * @return string Quantidade em gramas por dia, formatada com duas casas decimais.
 */
function pet_four_calculate_food( $animal, $peso ) {
    $peso = floatval( $peso );

    if ( $animal === 'dog' ) {
        $resultado = ( 67.86 / 95 ) * $peso;
    } elseif ( $animal === 'cat' ) {
        $resultado = ( 71.43 / 100 ) * $peso;
    } else {
        $resultado = 0;
    }

    return number_format( $resultado, 2, '.', '' );
}
