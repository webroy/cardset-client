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
            $cardSets = [
                ["name" => "Elektronik", "count" => 64],
                ["name" => "Java", "count" => 20],
                ["name" => "PHP", "count" => 25],
                ["name" => "C#", "count" => 36],
                ["name" => "Elektronik", "count" => 21],
                ["name" => "Autos", "count" => 64]
            ];
            foreach ($cardSets as $item){
                echo '
                <div class="col-lg-2">
                    <div class="callout callout-info">
                        <h5>'.$item["name"].'</h5>
                        <p><strong>'.$item["count"].' Karten</strong></p>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    Neue Rubrik erstellen
                </button>
                <a href="?p=createCardSet">
                    <button type="button" class="btn btn-primary">Neues Set erstellen</button>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Rubrik erstellen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="#" role="form" name="createRubrik">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="setRubrik">Name</label>
                            <input type="text" class="form-control" id="setRubrik">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary">Speichern</button>
            </div>
        </div>
    </div>
</div>