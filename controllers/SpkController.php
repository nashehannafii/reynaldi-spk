<?php

namespace app\controllers;

use app\models\Spk;
use app\models\SpkSearch;
use app\models\Weight;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SpkController implements the CRUD actions for Spk model.
 */
class SpkController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Spk models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SpkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionHasil()
    {
        $searchModel = new SpkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('hasil', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Spk model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Spk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Spk();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) ) {
                $is_bobot = Weight::find()->one();

                $W_kebersihan = $is_bobot['kebersihan'];
                $W_fasilitas = $is_bobot['fasilitas'];
                $W_kenyamanan = $is_bobot['kenyamanan'];
                $W_suasana = $is_bobot['suasana'];

                $C_kebersihan = $W_kebersihan * $model->kebersihan;
                $C_fasilitas = $W_fasilitas * $model->fasilitas;
                $C_kenyamanan = $W_kenyamanan * $model->kenyamanan;
                $C_suasana = $W_kenyamanan * $model->suasana;

                $res = $C_kebersihan + $C_fasilitas + $C_kenyamanan + $C_suasana;
                $tot_bobot = $W_kebersihan + $W_fasilitas + $W_kenyamanan + $W_suasana;
                $res = $res / $tot_bobot;

                $model->nilai_hasil = $res;

                $model->save();
                return $this->redirect(['index']);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Spk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Spk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Spk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Spk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Spk::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
