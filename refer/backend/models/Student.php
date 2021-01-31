<?php
namespace backend\models;

use yii\db\ActiveRecord;

class Student extends ActiveRecord
{

	public function rules()
	{
		return [
			[['student_name', 'phone_number', 'qq', 'email'], 'required',],
			['email', 'email'],
			[['gender_id', 'course_id', 'education_id', 'status_id', 'referer_id'], 'integer'],
			['add_time', 'default', 'value'=>time()],
			['progress_id', 'default', 'value'=>1],
			[['school', 'subject', 'introduction'], 'safe'],
		];
	}

	public function getEducation()
	{
		return $this->hasOne(Education::className(), ['education_id'=>'education_id']);
	}

	public function getProgress()
	{
		return $this->hasOne(Progress::className(), ['progress_id'=>'progress_id']);
	}

	public function getCourse()
	{
		return $this->hasOne(Course::className(), ['course_id'=>'course_id']);
	}
}


/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */