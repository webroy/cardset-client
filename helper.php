<?php

/*
 * Global Helper Functions
 */

function getCardSetsFromCategory($categoryId){
    $cardSets = [];
    try {
        $cardSets = json_decode(file_get_contents('http://localhost:8080/cardSet/category/'. $categoryId));
    } catch (Exception $e) {
        echo '<h5 class="communication-error"><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $cardSets;
}

function getCategories() {
    $categories = [];

    try {
        $categories = json_decode(file_get_contents('http://localhost:8080/category'));
    } catch (Exception $e) {
        echo '<h5 class="communication-error"><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $categories;
}

function getCardTypes() {
    $cardTypes = [];

    try {
        $cardTypes = json_decode(file_get_contents('http://localhost:8080/cardType'));
    } catch (Exception $e) {
        echo '<h5 class="communication-error"><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return $cardTypes;
}

function getCardsFromCardSet($cardSet) {
    $cards = [];

    try {
        $cards = json_decode(file_get_contents('http://localhost:8080/card/category/'. $cardSet));
    } catch (Exception $e) {
        echo '<h5 class="communication-error"><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
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
        echo '<h5 class="communication-error"><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
    }
    return null;
}

function getHTMLCardsFromCardSet($cardSet) {
    $cards = getCardsFromCardSet($cardSet);

    $html = '<div class="card-body pb-0">
        <div class="row d-flex align-items-stretch">';
            foreach($cards as $card){
                $html .= '
                <div class="col-12 col-sm-6 col-md-3 align-items-stretch">
                    <div class="card bg-light" style="width: 280px">
                        <div class="card-header print-border" style="padding: 4px 15px;">
                            <h3 class="card-title p-1" style="margin: 4px 0;">'.$card->cardSet->category->name.'</h3>
                        </div>
                        <div class="card-body print-border" style="min-height: 370px">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="'.getImage($card->img).'" width="100%" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center full-width">
                                '.$card->cardSet->name.'
                                </div>
                            </div>
                            <div class="row" style="margin-top: 25px; margin-bottom: 10px">
                                <div class="col-12">
                                    <p class="text-muted text-sm" style="margin-bottom: 0">
                                        '.$card->question.'
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <ul class="text-muted text-sm" style="margin-bottom: 0;">';
                                        foreach($card->answer as $answer){
                                            $html .= '<li>'.$answer->answer.'</li>';
                                        }
                                        $html .= '
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer print-border" style="padding: 4px 5px;">
                            <div class="row">
                                <div class="col-2 d-print-none">
                                    <a href="?p=createCard&card='.$card->id.'&cardSet='.$cardSet.'" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> 
                                    </a>
                                </div>
                                <div class="col-10">
                                    <div class="text-right">
                                        <span>'.$card->originalSrc.'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
            $html .= '
        </div>
    </div>';

    return $html;
}

function getImage($img = "") {
    if ($img == "")
        return "https://via.placeholder.com/300/000000?text=IMG-In-Progress";

    return 'dist/card_pictures/'.$img;
}

?>