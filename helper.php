<?php

/*
 * Global Helper Functions
 */

function getCardSetsFromCategory($categoryId){
    $cardSets = [];
    try {
        $cardSets = json_decode(file_get_contents('http://localhost:8080/cardSet/category/'. $categoryId));

        // TODO: da noch kein "Count" von der DB kommt. Hier manuell setzen
        foreach ($cardSets as $set) {
            $set->count = "?";
        }
    } catch (Exception $e) {
        echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $cardSets;
}

function getCategories() {
    $categories = [];

    try {
        $categories = json_decode(file_get_contents('http://localhost:8080/category'));

        // TODO: da noch kein "Count" von der DB kommt. Hier manuell setzen
        foreach ($categories as $set) {
            $set->count = "?";
        }
    } catch (Exception $e) {
        echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $categories;
}

function getCardTypes() {
    $cardTypes = [];

    try {
        $cardTypes = json_decode(file_get_contents('http://localhost:8080/cardType'));
    } catch (Exception $e) {
        echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $cardTypes;
}

function getCardsFromCardSet($cardSet) {
    $cards = [];

    try {
        $cards = json_decode(file_get_contents('http://localhost:8080/card/category/'. $cardSet));
    } catch (Exception $e) {
        echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $cards;
}

function getCard($cardId = null){
    try {
        // edit card?
        if (isset($cardId)){
            $card = json_decode(file_get_contents('http://localhost:8080/card/'. $cardId));
            unset($card->cardSet); // remove this array
            return $card;
        }
    } catch (Exception $e) {
        echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return null;
}

?>