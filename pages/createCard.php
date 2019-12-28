<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Karte erstellen</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Karte erstellen</h3>
                    </div>

                    <form method="post" action="#" role="form" name="createCard">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <img src="https://via.placeholder.com/300/000000?text=TODO">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="question">Frage</label>
                                        <textarea type="text" class="form-control" id="question" rows="6"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="card-body">
                                    <div class="form-group" style="margin-bottom: 0">
                                        <label for="question">Antworten</label>
                                    </div>

                                    <table>
                                        <tr>
                                            <td>
                                                <div class="icheck-success d-inline">
                                                    <input type="checkbox" id="checkboxSuccess1">
                                                    <label for="checkboxSuccess1"></label>
                                                </div>
                                            </td>
                                            <td width="100%" style="padding: 6px 0">
                                                <input type="text" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-success d-inline">
                                                    <input type="checkbox" id="checkboxSuccess2">
                                                    <label for="checkboxSuccess2"></label>
                                                </div>
                                            </td>
                                            <td width="100%" style="padding: 6px 0">
                                                <input type="text" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-success d-inline">
                                                    <input type="checkbox" id="checkboxSuccess3">
                                                    <label for="checkboxSuccess3"></label>
                                                </div>
                                            </td>
                                            <td width="100%" style="padding: 6px 0">
                                                <input type="text" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="icheck-success d-inline">
                                                    <input type="checkbox" id="checkboxSuccess4">
                                                    <label for="checkboxSuccess4"></label>
                                                </div>
                                            </td>
                                            <td width="100%" style="padding: 6px 0">
                                                <input type="text" class="form-control">
                                            </td>
                                        </tr>
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