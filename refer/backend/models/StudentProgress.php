<?php
namespace backend\models;

use yii\db\ActiveRecord;

class StudentProgress extends ActiveRecord
{

	public function getProgress()
	{
		return $this->hasOne(Progress::className(), ['progress_id'=>'progress_id']);
	}
}


/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */