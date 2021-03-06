<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\EmailTemplates */

$this->title = $model->template_name;
$this->params['breadcrumbs'][] = ['label' => 'Email Templates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="email-templates-view">

    <h3><?= Html::encode($this->title) ?></h3>

    <p>
        <?= Html::a('Saved as a backup', ['updatebackup', 'id' => $model->template_id], ['class' => 'btn btn-primary']) ?>
      
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'template_id',
            'template_name',
            'template_body:html',
            'template_description:html',
        ],
    ]) ?>

</div>
