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
                ["name" => "Java", "count" => 20],
                ["name" => "PHP", "count" => 25],
                ["name" => "C#", "count" => 36],
                ["name" => "HTML/CSS", "count" => 20],
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
    </div>
</div>
