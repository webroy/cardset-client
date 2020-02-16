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
            $cardSets = getCardSetsFromCategory($_GET["cat"]);

            foreach ($cardSets as $item){
                echo '
                <div class="col-lg-2">
                    <div class="callout callout-info">
                        <h5><a href="?p=showCards&cardSet='.$item->id.'">'.$item->name.'</a></h5>
                    </div>
                </div>';
            }
            ?>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <a href="?p=createCardSet&cat=<?php echo $_GET["cat"];?>">
                    <button type="button" class="btn btn-primary">Kartenset erstellen</button>
                </a>
            </div>
        </div>
    </div>
</div>
