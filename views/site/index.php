<?php

/** @var yii\web\View $this */
/** @var \yii\data\DataProviderInterface $dataProvider */
$this->title = 'Library';

?>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <?php foreach ($dataProvider->getModels() as $model) {
        echo $this->render('_book', ['model' => $model]);
    } ?>
</div>
<?php
$this->registerJs(<<<JS
$('.subscribe').on('click', function() {
            var buttonId = $(this).data('id');
        $.ajax({
                url: '/site/subscribe',
                type: 'POST',
                data: {id: buttonId},
                success: function(data) {
                    console.log(data);
                },
                error: function(xhr, status, error) {
                    console.log('Ошибка: ' + error);
                }
            });
        });
JS, \yii\web\View::POS_END);
