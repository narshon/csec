<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\utilities\DataHelper;
use yii\helpers\Url;
use kartik\export\ExportMenu;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BeneficiarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Beneficiaries';
$this->params['breadcrumbs'][] = $this->title;
$ben_url= yii\helpers\Url::to(['site/beneficiary' ],true);
$baf_url= yii\helpers\Url::to(['child/index' ],true);
?>
<div class="panel panel-info chain-users-index">
      <div class="panel-heading"><h3><?= Html::encode($this->title) ?></h3></div>
      <div class="panel-body row">
      <div class="row">
      <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">CSEC BAF</h3>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.
                </p><a href ="<?= $baf_url ?>" class="btn btn-primary">Go To Database</a>
                
            </div>
        </div>      
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
            <h3 class="card-title">CSEC Beneficiary</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="<?= $ben_url ?>" class="btn btn-primary">Go To Database</a>
            
            </div>
        </div>
      </div>
      </div>
    

    </div>
</div>
