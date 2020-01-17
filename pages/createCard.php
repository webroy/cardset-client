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
                        // for a new card ..
                        $card = [
                            "id" => 0,
                            "img" => "",
                            "question" => "",
                            "originalSrc" => "",
                            "answer" => []
                        ];

                        try {
                            // edit card?
                            if (isset($_GET['card'])){
                                $card = json_decode(file_get_contents('http://localhost:8080/card/'. $_GET["card"]));
                                unset($card->cardSet); // remove this array
                            }
                        } catch (Exception $e) {
                            echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
                        }
                    ?>

                    <form method="post" action="#" role="form" name="createCard">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <img src="<?php echo $card->img; ?>">
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
                                        for($i = 0; $i < 4; $i++){
                                            echo '
                                            <tr>
                                                <td>
                                                    <div class="icheck-success d-inline">
                                                        <input type="checkbox" id="checkboxSuccess1" '.(isset($card->answer[$i]) && $card->answer[$i]->isCorrect ? "checked" : "").'>
                                                        <label for="checkboxSuccess1"></label>
                                                    </div>
                                                </td>
                                                <td width="100%" style="padding: 6px 0">
                                                    <input type="text" class="form-control" value="'.(isset($card->answer[$i]) ? $card->answer[$i]->answer : "").'">
                                                </td>
                                            </tr>';
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Speichern</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->