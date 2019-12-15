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

                    <form method="post" action="?p=createCard&setId=1" role="form" name="createCardSet">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="setName">Name</label>
                                <input type="text" class="form-control" id="setName">
                            </div>
                            <div class="form-group">
                                <label>Kategorie</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Elektronik</option>
                                    <option>Programmierung</option>
                                    <option>Diverses</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Karten Typ</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Frage & Antworten</option>
                                    <option>Frage & Auswahlmöglichkeiten</option>
                                    <option disabled="disabled">Fixe Werte</option>
                                </select>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Erfassen</button>
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