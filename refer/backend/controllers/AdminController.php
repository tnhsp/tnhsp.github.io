<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use backend\models\Admin;

class AdminController extends Controller
{
	public $layout = false;

	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // 'only' => ['login', 'logout'],
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function ($rule, $action) {
			        $this->redirect(['admin/login']);
				    }
            ],
        ];
    }


	public function actionLogin()
	{
		$admin = new Admin;

		if ($admin->load(Yii::$app->request->post()) && $admin->validate()) {

			$identity = Admin::findOne(['admin_name' => $admin->admin_name, 'admin_password'=>md5($admin->admin_password)]);
			if ($identity) {
				Yii::$app->user->login($identity);
				$this->redirect(['student/list']);
			} else {
				Yii::$app->getSession()->setFlash('error', '账号信息错误');
				$this->redirect(['admin/login']);
			}

		} else {
			return $this->render('login', ['admin'=>$admin]);
		}
	}

	public function actionLogout()
	{
		Yii::$app->user->logout();

		$this->redirect(['admin/login']);
	}
}


/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */