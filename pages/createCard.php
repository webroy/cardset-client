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
                    if (isset($_GET['card'])){
                        $card = getCard($_GET['card']);
                    } else {
                        // for a new card ..
                        $card = (object)[
                            "id" => 0,
                            "img" => "https://via.placeholder.com/300/000000?text=IMG",
                            "question" => "",
                            "originalSrc" => "",
                            "answer" => []
                        ];
                    }
                    ?>

                    <!--<form method="post" action="#" role="form" name="createCard">-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <img src="<?php echo $card->img; ?>" height="200px" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="question">Frage</label>
                                        <textarea type="text" class="form-control" id="question" rows="6"><?php echo $card->question; ?></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <label for="question">Antworten</label>
                                    </div>

                                    <table>
                                        <?php
                                        for($i = 0; $i < (count($card->answer) <= 4 ? 4 : count($card->answer)); $i++){
                                            echo '
                                            <tr>
                                                <td>
                                                    <div class="icheck-success d-inline">
                                                        <input type="checkbox" id="checkbox_'.$i.'" '.(isset($card->answer[$i]) && $card->answer[$i]->isCorrect ? "checked" : "").'>
                                                        <label for="checkbox_'.$i.'"></label>
                                                    </div>
                                                </td>
                                                <td width="100%" style="padding: 6px 0">
                                                    <input type="text" class="form-control" id="answer_'.$i.'" value="'.(isset($card->answer[$i]) ? $card->answer[$i]->answer : "").'">
                                                </td>
                                            </tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-primary" onClick="createCard()">Speichern</button>
                            </div>
                        </div>
                    <!--</form>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->


<script>
    function createCard() {
        var question = $("#question").val();
        if (question == "") return;

        // TODO save answer also ...
        
        $.ajax({
            type: "POST", // TODO PUT with id!
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/card",
            data: JSON.stringify({
                "img": "images/foto.jpg", // TODO
                "originalSrc": "copy by ..", // TODO
                "question": question,
                "cardSet": $_GET['cardSet']
            })
        }).done(function(response) {
            /*var setId = response.id;
            window.location.href = '?p=createCard&cardSet=' + setId;*/
        });
    }
</script>