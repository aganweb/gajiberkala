<?php

namespace backend\controllers;

use Yii;
use common\models\Akun3;
use backend\models\Akun3Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Akun3Controller implements the CRUD actions for Akun3 model.
 */
class Akun3Controller extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Akun3 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Akun3Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akun3 model.
     * @param string $kd_akun1
     * @param string $kd_akun2
     * @param string $kd_akun3
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kd_akun1, $kd_akun2, $kd_akun3)
    {
        return $this->render('view', [
            'model' => $this->findModel($kd_akun1, $kd_akun2, $kd_akun3),
        ]);
    }

    /**
     * Creates a new Akun3 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Akun3();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1, 'kd_akun2' => $model->kd_akun2, 'kd_akun3' => $model->kd_akun3]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Akun3 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $kd_akun1
     * @param string $kd_akun2
     * @param string $kd_akun3
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kd_akun1, $kd_akun2, $kd_akun3)
    {
        $model = $this->findModel($kd_akun1, $kd_akun2, $kd_akun3);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kd_akun1' => $model->kd_akun1, 'kd_akun2' => $model->kd_akun2, 'kd_akun3' => $model->kd_akun3]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Akun3 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $kd_akun1
     * @param string $kd_akun2
     * @param string $kd_akun3
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kd_akun1, $kd_akun2, $kd_akun3)
    {
        $this->findModel($kd_akun1, $kd_akun2, $kd_akun3)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Akun3 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $kd_akun1
     * @param string $kd_akun2
     * @param string $kd_akun3
     * @return Akun3 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kd_akun1, $kd_akun2, $kd_akun3)
    {
        if (($model = Akun3::findOne(['kd_akun1' => $kd_akun1, 'kd_akun2' => $kd_akun2, 'kd_akun3' => $kd_akun3])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
