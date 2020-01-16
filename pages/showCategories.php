<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Kategorie auswählen</h1>
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
                $cardSets = json_decode(file_get_contents('http://localhost:8080/category'));

                // TODO: da noch kein "Count" von der DB kommt. Hier manuell setzen
                foreach ($cardSets as $set) {
                    $set->count = "?";
                }
            } catch (Exception $e) {
                echo '<h5><i class="fas fa-exclamation-triangle text-warning"></i> Verbindung zum Service nicht möglich!</h5>';
            }

            foreach ($cardSets as $item) {
                echo '
                <div class="col-lg-2">
                    <div class="callout callout-info">
                        <h5><a href="?p=showCardSets&cat='.$item->id.'">' . $item->name . '</a></h5>
                        <p><strong>' . $item->count . ' Kartensets</strong></p>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    Kategorie erstellen
                </button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Kategorie erstellen</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="#" role="form" name="createRubrik">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="categoryName">Name</label>
                            <input type="text" class="form-control" id="categoryName">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary" onClick="createCategory()">Speichern</button>
            </div>
        </div>
    </div>
</div>

<script>
    function createCategory() {
        var category = $("#categoryName").val();
        if (category == "") return;

        $.ajax({
            type: "POST",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/category",
            data: JSON.stringify({
                "name": category
            })
        }).done(function(response) {
            window.location.reload();
        });
    }
</script>