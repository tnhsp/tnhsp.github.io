<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Student;
use frontend\models\StudentProgress;
use frontend\models\Course;

class ReferController extends Controller
{

	public $layout = false;

	public function actionRegister()
	{
		$arm_student = new Student;
		if ($arm_student->load(Yii::$app->request->post()) && $arm_student->insert()) {
			// 记录日志
			$student_progress = new StudentProgress;
			$student_progress->student_id = $arm_student->student_id;
			$student_progress->progress_id = 1;
			$student_progress->do_time = time();
			$student_progress->save();

			Yii::$app->getSession()->setFlash('success', '保存成功');
			$this->redirect('../../../index.html');

		} else {

			Yii::$app->getSession()->setFlash('error', '报名失败');
			$this->redirect('../../../register.html');
		}
	}
}

/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */