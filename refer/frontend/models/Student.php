<?php
namespace frontend\models;

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

	 /**
     * 根据给到的ID查询身份。
     *
     * @param string|integer $id 被查询的ID
     * @return IdentityInterface|null 通过ID匹配到的身份对象
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * 根据 token 查询身份。
     *
     * @param string $token 被查询的 token
     * @return IdentityInterface|null 通过 token 得到的身份对象
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string 当前用户ID
     */
    public function getId()
    {
        return $this->student_id;
    }

    /**
     * @return string 当前用户的（cookie）认证密钥
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return boolean if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }


}


/**
 * @Kang 540090808(WeChat+QQ), http://hellokang.net/
 */