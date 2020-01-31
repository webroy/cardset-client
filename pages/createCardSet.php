<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Kartenset erstellen</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kartenset erstellen</h3>
                    </div>

                    <!--<form method="post" action="#" role="form" name="createCardSet">-->
                        <div class="card-body">
                            <div class="form-group">
                                <label for="cardName">Name</label>
                                <input type="text" class="form-control" id="cardName">
                            </div>
                            <div class="form-group">
                                <label>Kategorie</label>
                                <select class="form-control select2" style="width: 100%;" id="category">
                                    <option selected="selected">-</option>
                                    <?php
                                    $categories = getCategories();
                                    foreach($categories as $cat){
                                        echo "<option value='".$cat->id."'>".$cat->name."</option>";
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
                                        echo "<option value='".$type->id."'>".$type->type."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-primary" onClick="createCardSet()">Erfassen</button>
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
        if (cardName == "" || category == "" || cardType == "") return;

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
            var setId = response.id;
            window.location.href = '?p=createCard&cardSet=' + setId;
        });
    }
</script>