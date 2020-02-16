<br>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <?php
                        if (isset($_GET['cardSet'])) {
                            echo '<h3 class="card-title">Kartenset bearbeiten</h3>';
                        } else {
                            echo '<h3 class="card-title">Kartenset erstellen</h3>';
                        }
                        ?>
                    </div>

                    <?php
                    // edit card set?
                    if (isset($_GET['cardSet'])) {
                        $cardSet = getCardSet($_GET['cardSet']);
                    } else {
                        // for a new card set ..
                        $cardSet = (object) [
                            "id" => 0,
                            "name" => "",
                            "category" =>  isset($_GET['cat']) ? getCategory($_GET['cat']) : "",
                            "cardType" => ""
                        ];
                    }
                    ?>

                    <!--<form method="post" action="#" role="form" name="createCardSet">-->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="cardName">Name</label>
                            <input type="text" class="form-control" id="cardName" value="<?php echo $cardSet->name; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kategorie</label>
                            <select class="form-control select2" style="width: 100%;" id="category">
                                <option selected="selected">-</option>
                                <?php
                                $categories = getCategories();
                                foreach($categories as $cat){
                                    $isSelected = $cat == $cardSet->category ? 'selected="selected"' : "";
                                    echo "<option value='".$cat->id."' ".$isSelected.">".$cat->name."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Karten Typ</label>
                            <select class="form-control select2" style="width: 100%;" id="cardType">
                            <option selected="selected">-</option>
                                <?php
                                $cardType = getCardTypes();
                                foreach($cardType as $type){
                                    $isSelected = $type == $cardSet->cardType ? 'selected="selected"' : "";
                                    echo "<option value='".$type->id."' ".$isSelected.">".$type->type."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <?php
                        if (isset($_GET['cardSet'])) {
                            echo '<button class="btn btn-primary" onClick="updateCardSet()">Speichern</button>';
                            echo '<button class="btn btn-danger float-sm-right" onClick="deleteCardSet()">Löschen</button>';
                        } else {
                            echo '<button class="btn btn-primary" onClick="createCardSet()">Erfassen</button>';
                        }
                        ?>
                    </div>
                    <!--</form>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->


<script>
    function createCardSet() {
        var cardName = $("#cardName").val();
        var category = $("#category").val();
        var cardType = $("#cardType").val();
        if (cardName == "" || isNaN(parseInt(category)) || isNaN(parseInt(cardType))){
            showInfoMsg("Eingaben unfollständig!");
            return;
        }

        $.ajax({
            type: "POST",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/cardSet",
            data: JSON.stringify({
                "name": cardName,
                "category": parseInt(category),
                "cardType": parseInt(cardType)
            })
        }).done(function(response) {
            showSuccessMsg("Kartenset erfolgreich erstellt!");
            var setId = response.id;
            window.location.href = '?p=createCard&cardSet=' + setId;
        }).catch(function(err){
            showErrorMsg("Es ist ein Fehler aufgetreten!");
        });
    }
    
    function updateCardSet() {
        var cardName = $("#cardName").val();
        var category = $("#category").val();
        var cardType = $("#cardType").val();
        if (cardName == "" || isNaN(parseInt(category)) || isNaN(parseInt(cardType))){
            showInfoMsg("Eingaben unfollständig!");
            return;
        }

        $.ajax({
            type: "PUT",
            datatype: "json",
            contentType: "application/json; charset=utf-8",
            url: "http://localhost:8080/cardSet",
            data: JSON.stringify({
                "id": <?php echo isset($_GET['cardSet']) ? $_GET['cardSet'] : 0; ?>,
                "name": cardName,
                "category": parseInt(category),
                "cardType": parseInt(cardType)
            })
        }).done(function(response) {
            showSuccessMsg("Kartenset erfolgreich gespeichert!");
            var setId = response.id;
            window.location.href = '?p=createCardSet&cardSet=' + setId;
        }).catch(function(err){
            showErrorMsg("Es ist ein Fehler aufgetreten!");
        });
    }

    function deleteCardSet() {
        var confirmed = confirm("Möchten Sie das Kartenset mit allen dazugehörigen Karten löschen?");
        if (confirmed == true) {
            $.ajax({
                type: "DELETE",
                datatype: "json",
                contentType: "application/json; charset=utf-8",
                url: "http://localhost:8080/cardSet/" + <?php echo isset($_GET['cardSet']) ? $_GET['cardSet'] : 0; ?>,
                data: ""
            }).done(function(response) {
                showSuccessMsg("Kartenset erfolgreich gelöscht!");
                window.location.href = '?p=createCardSet';
            }).catch(function(err){
                showErrorMsg("Es ist ein Fehler aufgetreten!");
            });
        }
    }
</script>