<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0 text-dark">Karten pro Set Ansehen</h1>
            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid card-list-page">
        <?php
        $categories = getCategories();
        foreach ($categories as $category) {

            $cardSets = getCardSetsFromCategory($category->id);
            foreach ($cardSets as $set) { ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-solid">
                            <div class="card-header d-print-none">
                                <h3 class="card-title p-1" style="margin-top: 4px;">Kartenset - <?php echo $category->name . ", " . $set->name; ?></h3>
                                <ul class="nav float-sm-right">
                                    <li class="nav-item"><a href="?p=createCard&cardSet=<?php echo $set->id; ?>"><button class="btn btn-primary">Karte erstellen</button></a></li>
                                </ul>
                            </div>

                            <?php
                            echo getHTMLCardsFromCardSet($set->id);
                            ?>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<!-- /.content -->