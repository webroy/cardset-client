<br>

<!-- Main content -->
<div class="content">
    <div class="container-fluid card-list-page">        
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-solid">
                    <div class="card-header">
                        <h3 class="card-title">Alle Karten</h3>
                    </div>

                    <?php echo getHTMLCardsFromCardSet( $_GET["cardSet"]); ?>

                    <div class="card-footer">
                        <a href="?p=createCard&cardSet=<?php echo $_GET["cardSet"]; ?>"><button class="btn btn-primary">Karte erstellen</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->