<?php
/**
 * @var \app\models\Book $model
 */
?>
<div class="col">
    <div class="card" style="width: 18rem;">
<!--        <img src="--><?//= $model->main_photo ?><!--" class="card-img-top" alt="...">-->
        <div class="card-body">
            <h5 class="card-title"><?= $model->title ?></h5>
            <p class="card-text"><?= $model->description ?></p>
            <button data-id="<?= $model->id?>" class="btn btn-primary subscribe">Subscribe</button>
        </div>
    </div>
</div>