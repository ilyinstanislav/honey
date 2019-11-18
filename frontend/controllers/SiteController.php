<?php

namespace frontend\controllers;

use frontend\models\forms\PeopleForm;
use frontend\models\People;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'create', 'validate'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new PeopleForm();
        $peoples = People::getAll();

        return $this->render('index', compact('model', 'peoples'));
    }

    /**
     * Сохранение записи
     * @return array|bool
     */
    public function actionCreate()
    {
        $model = new PeopleForm();

        $model->load(Yii::$app->request->post());

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if (!$model->validate()) {
                return ActiveForm::validate($model);
            }
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Запись успешно добавлена');
                return [];
            }
        }

        return $this->redirect('/');
    }

    /**
     * Валидация формы
     * @return array|bool
     */
    public function actionValidate()
    {
        $model = new PeopleForm();

        $model->load(Yii::$app->request->post());

        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if (!$model->validate()) {
                return ActiveForm::validate($model);
            }
            return true;
        }
        return false;
    }
}
