<?php
/**
 * Template for the Pet Four Food Calculator UI.
 */
?>

<div class="pet-form">
    <h2 class="pet-title">Calculadora de Ração Pet Four</h2>
    <div class="pet-animals">
        <button type="button" class="pet-button pet-dog" data-pet="dog">Cachorro</button>
        <button type="button" class="pet-button pet-cat" data-pet="cat">Gato</button>
    </div>
    <div class="pet-weight">
        <label for="pet-weight-input" class="pet-label">Peso (kg)</label>
        <input type="number" id="pet-weight-input" class="pet-input" min="0" step="0.1">
    </div>
    <button type="button" class="pet-button pet-calc">Calcular</button>
    <div class="pet-result"></div>
</div>
