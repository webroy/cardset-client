<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Quartett Ansehen</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <?php
        for ($row = 0; $row < 4; $row++) { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-solid">
                        <div class="card-header">
                            <h3 class="card-title p-1" style="margin-top: 4px;">Quartett #<?php echo $row + 1; ?></h3>
                            <ul class="nav float-sm-right">
                                <li class="nav-item"><button class="btn btn-outline-primary">Bearbeiten</button></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <div class="row d-flex align-items-stretch">
                                <?php
                                for ($i = 0; $i < 4; $i++) { ?>
                                    <div class="col-12 col-sm-6 col-md-3 d-flex align-items-stretch">
                                        <div class="card bg-light">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p class="text-muted text-sm" style="margin-bottom: 0">
                                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua.
                                                            At vero eos et accusam et justo duo dolores ..
                                                        </p>
                                                    </div>
                                                    <div class="col-5 text-center">
                                                        <img src="https://via.placeholder.com/300/000000?text=IMG"
                                                             width="125px" alt="" class="img-fluid">
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
        <?php
        }
        ?>
    </div>
</div>
<!-- /.content -->