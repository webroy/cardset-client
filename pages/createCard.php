<br>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Karte erstellen</h3>
                    </div>

                    <?php
                    // edit card?
                    if (isset($_GET['card'])) {
                        $card = getCard($_GET['card']);
                    } else {
                        // for a new card ..
                        $card = (object) [
                            "id" => 0,
                            "img" => getImage(""),
                            "question" => "",
                            "originalSrc" => "",
                            "answer" => []
                        ];
                    }

                    if (isset($card)){ ?>
                        <form action="#" role="form" name="createCard" onsubmit="return false;">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-body">
                                        <img src="<?php echo getImage($card->img); ?>" style="max-width:600px; max-height:inherit !important" alt="" id="activeImg">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" style="margin-top: 15px">
                                        <label>Bild auswählen</label>
                                        <select class="form-control select2" style="width: 100%;" id="picture" onChange="pictureChange()">
                                            <option selected="selected">-</option>
                                            <?php
                                            $images = getCardImages();
                                            foreach($images as $img){
                                                $isSelected = $img == $card->img ? 'selected="selected"' : "";
                                                echo "<option value='".$img."' ".$isSelected.">".$img."</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="question">Frage</label>
                                            <textarea type="text" class="form-control" id="question" rows="4"><?php echo $card->question; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="question">Urheber</label>
                                            <input type="text" class="form-control" id="originalSrc" value="<?php echo $card->originalSrc; ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card-body">
                                        <div class="form-group" style="margin-bottom: 0">
                                            <label for="question">Antworten</label>
                                        </div>
                                        <?php
                                            if (isset($card->id) && $card->id > 0){
                                                echo "<table>";
                                                    for ($i = 0; $i < (count($card->answer) <= 4 ? 4 : count($card->answer)); $i++) {
                                                        $cardId = isset($card->answer[$i]) ? $card->answer[$i]->id : 0;
                                                        echo '
                                                        <tr>
                                                            <td>
                                                                <div class="icheck-success d-inline">
                                                                    <input type="checkbox" id="checkbox_' . $i . '" data-id="' . $cardId . '" name="checkbox[]" ' . (isset($card->answer[$i]) && $card->answer[$i]->isCorrect ? "checked" : "") . '>
                                                                    <label for="checkbox_' . $i . '"></label>
                                                                </div>
                                                            </td>
                                                            <td width="100%" style="padding: 6px 0">
                                                                <input type="text" class="form-control" data-id="' . $cardId . '" name="answer[]" value="' . (isset($card->answer[$i]) ? $card->answer[$i]->answer : "") . '">
                                                            </td>
                                                        </tr>';
                                                    }
                                                echo "</table>";
                                            } else {
                                                echo "<strong>Karte muss zuerst gespeichert werden!</strong>";
                                            }
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <?php
                                if (isset($_GET['card'])) {
                                    echo '<button class="btn btn-primary" onClick="saveCard()">Speichern</button>';
                                    echo '<button class="btn btn-danger float-sm-right" onClick="deleteCard()">Karte löschen</button>';
                                    echo '<button class="btn btn-default float-sm-right" onClick="copyCard()" style="margin-right: 15px">Karte kopieren</button>';
                                } else {
                                    echo '<button class="btn btn-primary" onClick="createNewCard()">Karte erfassen</button>';
                                }
                                ?>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /.content -->


<script>
    function pictureChange() {
        var img = $("#picture").val();
        $("#activeImg").attr("src", "dist/card_pictures/" + img); // change picture
    }

    function createNewCard() {
        var question = $("#question").val();
        var originalSrc = $("#originalSrc").val();
        var img = $("#picture").val();
        if (question == "") return;

        $.ajax({
            type: "POST",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/card",
            data: JSON.stringify({
                "img": img,
                "originalSrc": originalSrc,
                "question": question,
                "cardSetId": <?php echo $_GET['cardSet']; ?>,
                "answer": []
            })
        }).done(function(response) {
            var cardId = response.id;
            var setId = response.cardSet.id;
            window.location.href = '?p=createCard&cardSet=' + setId + '&card=' + cardId;
        });
    }

    function saveCard() {
        var question = $("#question").val();
        var originalSrc = $("#originalSrc").val();
        var img = $("#picture").val();
        if (question == "") return;

        $.ajax({
            type: "PUT",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/card",
            data: JSON.stringify({
                "id": <?php echo isset($_GET['card']) ? $_GET['card'] : 0; ?>,
                "img": img,
                "originalSrc": originalSrc,
                "question": question,
                "answer": getAnswerData()
            })
        }).done(function(response) {
            window.location.reload();
        });
    }

    function getAnswerData() {
        var answerList = []; // {"id": 1, "answer": "Antwort A", "isCorrect": false}

        var itemIndex = 0;
        $(":input[name^='answer']").each(function() {
            var id = $(this).data("id");
            answerList.push({
                "id": id,
                "answer": $(this).val(),
                "isCorrect": $("#checkbox_" + itemIndex++).prop("checked")
            });
        });

        return answerList;
    }

    function copyCard() {
        $.ajax({
            type: "POST",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/card/" + <?php echo isset($_GET['card']) ? $_GET['card'] : 0; ?> + "/copy",
            data: ""
        }).done(function(response) {
            var newCardId = response.id;
            var cardSetId = response.cardSet.id;
            window.location.href = '?p=createCard&card=' + newCardId + "&cardSet=" + cardSetId;
        });
    }

    function deleteCard() {
        $.ajax({
            type: "DELETE",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/card/" + <?php echo isset($_GET['card']) ? $_GET['card'] : 0; ?>,
            data: ""
        }).done(function(response) {
            window.location.href = '?p=showCards&cardSet=' + <?php echo isset($_GET['cardSet']) ? $_GET['cardSet'] : 0; ?>;
        });
    }
</script>