<?php

use app\models\Bobot;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\BobotSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tabel Kriteria';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bobot-index">




    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><?= Html::encode($this->title) ?></h1>
        </div>
        <p>
            
        </p>

        <!--//col-auto-->
    </div>
    <!--//row-->


    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Kebersihan</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Fasilitas</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Kenyamanan</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Suasana</a>
    </nav>


    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell">Jenis Kriteria</th>
                                    <th class="cell">Nilai</th>
                                    <th class="cell">Keterangan</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tabel_harga = Bobot::find()->where([
                                    'jenis_bobot' => 'kebersihan',
                                ])->orderBy(['bobot' => SORT_ASC])->all();
                                $i = 1;
                                if ($tabel_harga == null) :
                                ?>
                                    <tr>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                    </tr>
                                <?php
                                endif;
                                foreach ($tabel_harga as $key) :
                                ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td class="text-left"><?= $key->jenis_bobot ?></td>
                                        <td><?= $key->bobot ?></td>
                                        <td class="text-left"><?= $key->keterangan_bobot ?></td>
                                        <td class="text-left"><a href="update?id=<?=$key->id?>"><i class="fas fa-wrench"></i></a></td>
                                    </tr>

                                <?php
                                    $i++;
                                endforeach; ?>


                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
            <nav class="app-pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <!--//app-pagination-->

        </div>
        <!--//tab-pane-->

        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">

                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell">Jenis Kriteria</th>
                                    <th class="cell">Nilai</th>
                                    <th class="cell">Keterangan</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tabel_harga = Bobot::find()->where([
                                    'jenis_bobot' => 'fasilitas',
                                ])->orderBy(['bobot' => SORT_ASC])->all();
                                $i = 1;
                                if ($tabel_harga == null) :
                                ?>
                                    <tr>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                    </tr>
                                <?php
                                endif;
                                foreach ($tabel_harga as $key) :
                                ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td class="text-left"><?= $key->jenis_bobot ?></td>
                                        <td><?= $key->bobot ?></td>
                                        <td class="text-left"><?= $key->keterangan_bobot ?></td>
                                        <td class="text-left"><a href="update?id=<?=$key->id?>"><i class="fas fa-wrench"></i></a></td>
                                    </tr>

                                <?php
                                    $i++;
                                endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//tab-pane-->

        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell">Jenis Kriteria</th>
                                    <th class="cell">Nilai</th>
                                    <th class="cell">Keterangan</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tabel_harga = Bobot::find()->where([
                                    'jenis_bobot' => 'kenyamanan',
                                ])->orderBy(['bobot' => SORT_ASC])->all();
                                $i = 1;
                                if ($tabel_harga == null) :
                                ?>
                                    <tr>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                    </tr>
                                <?php
                                endif;
                                foreach ($tabel_harga as $key) :
                                ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td class="text-left"><?= $key->jenis_bobot ?></td>
                                        <td><?= $key->bobot ?></td>
                                        <td class="text-left"><?= $key->keterangan_bobot ?></td>
                                        <td class="text-left"><a href="update?id=<?=$key->id?>"><i class="fas fa-wrench"></i></a></td>
                                    </tr>

                                <?php
                                    $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//tab-pane-->
        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
            <div class="app-card app-card-orders-table mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">No</th>
                                    <th class="cell">Jenis Kriteria</th>
                                    <th class="cell">Nilai</th>
                                    <th class="cell">Keterangan</th>
                                    <th class="cell">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $tabel_harga = Bobot::find()->where([
                                    'jenis_bobot' => 'suasana',
                                ])->orderBy(['bobot' => SORT_ASC])->all();
                                $i = 1;
                                if ($tabel_harga == null) :
                                ?>
                                    <tr>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                        <td class="text-left">-</td>
                                        <td>-</td>
                                    </tr>
                                <?php
                                endif;
                                foreach ($tabel_harga as $key) :
                                ?>

                                    <tr>
                                        <td><?= $i ?></td>
                                        <td class="text-left"><?= $key->jenis_bobot ?></td>
                                        <td><?= $key->bobot ?></td>
                                        <td class="text-left"><?= $key->keterangan_bobot ?></td>
                                        <td class="text-left"><a href="update?id=<?=$key->id?>"><i class="fas fa-wrench"></i></a></td>
                                    </tr>

                                <?php
                                    $i++;
                                endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->
                </div>
                <!--//app-card-body-->
            </div>
            <!--//app-card-->
        </div>
        <!--//tab-pane-->
    </div>
    <!--//tab-content-->


</div>