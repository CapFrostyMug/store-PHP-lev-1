<?php
include_once "../engine/queries/getImages.php";
$imagesArr = getImagesData();
?>

<div class="album py-5 bg-light main-background">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        foreach ($imagesArr as $item): ?>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="item-img">
                        <img src="<?=
                        $item['relative_path'] .
                        $item['name'] .
                        $item['extension']
                        ?>" alt="" width="50%" height="50%">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi
                            dignissimos excepturi explicabo harum optio quibusdam repellendus.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="Pages/FullimagePage/index.php?name=<?= $item['name'] . $item['extension'] ?>&id=<?= $item['id'] ?>">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
