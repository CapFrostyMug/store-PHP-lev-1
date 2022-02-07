<div class="album py-5 bg-light main-background">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php

        $images = scandir("../img");
        $imagesCount = count($images);

        for ($i = 2; $i < $imagesCount; $i++): ?>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="item-img">
                        <img src="../img/<?= $images[$i] ?>" alt="" width="50%" height="50%">
                    </div>
                    <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="Pages/fullimage.php?img-name=<?= $images[$i] ?>">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                </a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endfor;
        ?>

    </div>
</div>
