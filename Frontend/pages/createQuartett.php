<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Quartett erstellen/bearbeiten</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-solid">
                    <div class="card-header">
                        <h3 class="card-title">Quartett zusammenstellen (max. 4 Karten)</h3>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="text-muted text-sm" style="margin-bottom: 0">
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    At vero eos et accusam et justo duo dolores ..
                                                </p>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="https://via.placeholder.com/300/000000?text=IMG" width="125px" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-danger">
                                                <i class="fas fa-trash"></i> Entfernen
                                            </a>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i> Ansehen/Bearbeiten
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <p class="text-muted text-sm" style="margin-bottom: 0">
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                    At vero eos et accusam et justo duo dolores ..
                                                </p>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="https://via.placeholder.com/300/000000?text=IMG" width="125px" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-danger">
                                                <i class="fas fa-trash"></i> Entfernen
                                            </a>
                                            <a href="#" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i> Ansehen/Bearbeiten
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-solid">
                    <div class="card-header">
                        <h3 class="card-title">Mögliche Karten</h3>
                    </div>

                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            <?php
                            for ($i = 0; $i < 10; $i++){ ?>
                                <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-7">
                                                    <p class="text-muted text-sm" style="margin-bottom: 0">
                                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                                                        At vero eos et accusam et justo duo dolores ..
                                                    </p>
                                                </div>
                                                <div class="col-5 text-center">
                                                    <img src="https://via.placeholder.com/300/000000?text=IMG" width="125px" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="text-right">
                                                <a href="#" class="btn btn-sm bg-success">
                                                    <i class="fas fa-plus"></i> Hinzufügen
                                                </a>
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