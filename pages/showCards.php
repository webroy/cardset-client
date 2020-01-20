<br>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">        
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-solid">
                    <div class="card-header">
                        <h3 class="card-title">Alle Karten</h3>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            <?php
                            $cards = [];

                            try {
                                $cards = json_decode(file_get_contents('http://localhost:8080/card/category/'. $_GET["cardSet"]));
                            } catch (Exception $e) {
                                echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
                            }

                            foreach($cards as $card){ ?>
                                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12 text-center">
                                                    <img src="<?php echo $card->img; ?>" width="100%" height="200px" alt="">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 10px; margin-bottom: 10px">
                                                <div class="col-12">
                                                    <p class="text-muted text-sm" style="margin-bottom: 0">
                                                        <?php echo $card->question; ?>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <ul class="text-muted text-sm" style="margin-bottom: 0;">
                                                        <?php 
                                                        foreach($card->answer as $answer){
                                                            echo '<li>'.$answer->answer.'</li>';
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-2">
                                                    <a href="?p=createCard&card=<?php echo $card->id; ?>" class="btn btn-sm btn-primary">
                                                        <i class="fas fa-edit"></i> 
                                                    </a>
                                                </div>
                                                <div class="col-10">
                                                    <div class="text-right">
                                                        <span><?php echo $card->originalSrc; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->