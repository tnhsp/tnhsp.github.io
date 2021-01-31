<?php
namespace backend\controllers;

use Yii;

use yii\web\Controller;
use yii\data\Pagination;

use backend\models\Student;
use backend\models\Progress;
use backend\models\StudentProgress;
use backend\models\Education;
use backend\models\Gender;
use backend\models\Course;
use backend\models\Status;
use backend\models\Referer;

use \yii\helpers\ArrayHelper;

use yii\filters\AccessControl;

class StudentController extends Controller
{

	public $layout = 'backend';

	public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                // 'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['list', 'progress', 'history', 'trash', 'edit', 'add', 'recycle', 'delete', 'undo'],
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

	public function actionList()
	{

		// 获取全部学生数据
		$query = Student::find();

		// 翻页
		$pagination = new Pagination([
			'defaultPageSize' => 10,
			'totalCount' => $query->count(),
			]);

		// 搜索条件
		if (Yii::$app->request->get('type', 'normal') == 'normal') {
			$query->andWhere(['is_delete'=>0]);
		} elseif (Yii::$app->request->get('type', 'normal') == 'recycle') {
			$query->andWhere(['is_delete'=>1]);
		}

		$keyword = Yii::$app->request->get('keyword', '');
		$education = Yii::$app->request->get('education', '0');
		$progress = Yii::$app->request->get('progress', '0');

		if ('0' !== $education) {
			$query->andWhere(['education_id'=>$education]);
		}

		if ('0' !== $progress) {
			$query->andWhere(['progress_id'=>$progress]);
		}

		if ('' !== $keyword) {
			$query->andWhere(['OR', ['like', 'student_name', $keyword.'%', false], ['like', 'phone_number', $keyword.'%', false], ['like', 'qq', $keyword.'%', false], ['like', 'email', $keyword.'%', false]]);
		}


		// 学生列表数据
		$student_list = $query
						->orderBy('add_time desc')
						->offset($pagination->offset)
						->limit($pagination->limit)
						// ->createCommand()
						// ->getRawSql();
						->all();
		// echo $student_list;die;

		// 进度列表
		$progress_list = Progress::find()->all();
		$progress_list_map = ArrayHelper::map($progress_list, 'progress_id', 'progress_title');
		$progress_list_map_search = array_merge([0=>'不限进度'], $progress_list_map);

		// 学历列表
		$education_list = Education::find()->all();
		$education_list_map = ArrayHelper::map($education_list, 'education_id', 'education_title');
		$education_list_map_search = array_merge([0=>'不限学历'], $education_list_map);

		// 展示列表
		return $this->render('list', [
			'student_list' => $student_list,
			'pagination' => $pagination,
			'progress_list_map'	=> $progress_list_map,
			'progress_list_map_search'	=> $progress_list_map_search,
			'education_list_map_search'	=> $education_list_map_search,
			'keyword' => $keyword,
			'education' => $education,
			'progress' => $progress,
			]);
	}


	public function actionProgress($student_id, $progress_id)
	{
		// 更新数据
		$student = Student::findOne($student_id);
		$student->progress_id = $progress_id;
		$student->save();

		// 记录日志
		$student_progress = new StudentProgress;
		$student_progress->student_id = $student_id;
		$student_progress->progress_id = $progress_id;
		$student_progress->do_time = time();
		$student_progress->do_admin_id = Yii::$app->user->id;
		$student_progress->save();

		\Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

		return [
			'error_info' => '',
			'error_code'	=> 0,
			'student' => [
				'student_id' => $student_id
			]
		];
	}

	public function actionHistory($student_id)
	{

		$this->layout = false;

		$progress_list = StudentProgress::find()
							->where(['student_id'=>$student_id])
							->orderBy('do_time desc')
							// ->asArray()
							->all();
		// var_dump($progress_list);
		return $this->render('history', ['progress_list'=>$progress_list]);
	}

	public function actionTrash($id)
	{
		$student = Student::findOne($id);
		$student->is_delete = 1;

		$student->save();

		$this->redirect(['student/list']);
	}

	public function actionEdit()
	{
		if (Yii::$app->request->isPost) {
			$data = Yii::$app->request->post();
			$student = Student::findOne($data['Student']['student_id']);
			if ($student->load($data) && $student->save()) {
				$this->redirect(['student/list']);
			} else {
				var_dump($student->errors);
			}
		} else {
			$student = Student::findOne(Yii::$app->request->get('id'));

			// 性别列表
			$gender_list = Gender::find()->all();
			$gender_list_map = ArrayHelper::map($gender_list, 'gender_id', 'gender_title');

			// 进度列表
			$progress_list = Progress::find()->all();
			$progress_list_map = ArrayHelper::map($progress_list, 'progress_id', 'progress_title');

			// 学历列表
			$education_list = Education::find()->all();
			$education_list_map = ArrayHelper::map($education_list, 'education_id', 'education_title');

			// 课程列表
			$course_list = Course::find()->all();
			$course_list_map = ArrayHelper::map($course_list, 'course_id', 'course_title');

			// 状态列表
			$status_list = Status::find()->all();
			$status_list_map = ArrayHelper::map($status_list, 'status_id', 'status_title');

			// 来源列表
			$referer_list = Referer::find()->all();
			$referer_list_map = ArrayHelper::map($referer_list, 'referer_id', 'referer_title');

			return $this->render('edit', [
				'student'=>$student,
				'gender_list' => $gender_list_map,
				'progress_list' => $progress_list_map,
				'education_list' => $education_list_map,
				'course_list' => $course_list_map,
				'status_list' => $status_list_map,
				'referer_list' => $referer_list_map,

				]);
		}

	}


	public function actionAdd()
	{
		$student = new Student;

		if (Yii::$app->request->isPost) {
			if ($student->load(Yii::$app->request->post()) && $student->save()) {
				$this->redirect(['student/list']);
			} else {
				var_dump($student->errors);
			}
		} else {

			// 设置默认值
			$student->gender_id = 1;
			$student->course_id = 1;
			$student->education_id = 1;
			$student->status_id = 1;
			$student->referer_id = 1;

			// 性别列表
			$gender_list = Gender::find()->all();
			$gender_list_map = ArrayHelper::map($gender_list, 'gender_id', 'gender_title');

			// 进度列表
			$progress_list = Progress::find()->all();
			$progress_list_map = ArrayHelper::map($progress_list, 'progress_id', 'progress_title');

			// 学历列表
			$education_list = Education::find()->all();
			$education_list_map = ArrayHelper::map($education_list, 'education_id', 'education_title');

			// 课程列表
			$course_list = Course::find()->all();
			$course_list_map = ArrayHelper::map($course_list, 'course_id', 'course_title');

			// 状态列表
			$status_list = Status::find()->all();
			$status_list_map = ArrayHelper::map($status_list, 'status_id', 'status_title');

			// 来源列表
			$referer_list = Referer::find()->all();
			$referer_list_map = ArrayHelper::map($referer_list, 'referer_id', 'referer_title');

			return $this->render('add', [
				'student'=>$student,
				'gender_list' => $gender_list_map,
				'progress_list' => $progress_list_map,
				'education_list' => $education_list_map,
				'course_list' => $course_list_map,
				'status_list' => $status_list_map,
				'referer_list' => $referer_list_map,
				]);
		}

	}

	public function actionDelete($id)
	{
		// 删除学生
		$student = Student::findOne($id);
		$student->delete();

		// 删除相关进度
		StudentProgress::deleteAll(['student_id'=>$id]);

		$this->redirect(['student/recycle']);


	}
	public function actionUndo($id)
	{
		$student = Student::findOne($id);
		$student->is_delete = 0;
		$student->save();

		$this->redirect(['student/list']);
	}

}


/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */