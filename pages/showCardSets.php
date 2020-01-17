<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Kartenset auswählen</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php
            $cardSets = [];

            try {
                $cardSets = json_decode(file_get_contents('http://localhost:8080/cardSet/category/'. $_GET["cat"]));

                // TODO: da noch kein "Count" von der DB kommt. Hier manuell setzen
                foreach ($cardSets as $set) {
                    $set->count = "?";
                }
            } catch (Exception $e) {
                echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
            }

            foreach ($cardSets as $item){
                echo '
                <div class="col-lg-2">
                    <div class="callout callout-info">
                        <h5><a href="?p=showCards&cardSet='.$item->id.'">'.$item->name.'</a></h5>
                        <p><strong>'.$item->count.' Karten</strong></p>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <a href="?p=createCardSet">
                    <button type="button" class="btn btn-primary">Kartenset erstellen</button>
                </a>
            </div>
        </div>
    </div>
</div>
