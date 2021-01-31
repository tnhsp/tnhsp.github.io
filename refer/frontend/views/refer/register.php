<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = '报名系统';
?>
<div class="container">
	<div class="row">

		<div class="col-md-8 main">
			<?php $refer_form = ActiveForm::begin();?>
				<div class="form-group">
					<?= $refer_form->field($arm_student, 'student_name')->label('姓名') ?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'phone_number')->label('电话号码') ?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'qq')->label('QQ') ?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'email')->label('电子邮箱') ?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'course_id')->dropDownlist(['1'=>'PHP', '2'=>'前端'])->label('意向课程')?>
				</div>



				<div class="form-group">
					<?= $refer_form->field($arm_student, 'education_id')->dropDownlist(['1'=>'初中及以下', '2'=>'本科', '3'=>'高中/中专'])->label('学历')?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'school')->label('毕业学校')?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'subject')->label('专业')?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'status_id')->dropDownlist(['1'=>'在职', '2'=>'大三', '3'=>'大四'])->label('状况')?>
				</div>


				<div class="form-group">
					<?= $refer_form->field($arm_student, 'gender_id')->radioList(['1'=>'男', '2'=>'女'])->label('性别')?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'referer_id')->radioList(['1'=>'朋友推荐', '2'=>'网络搜索'])->label('了解渠道')?>
				</div>

				<div class="form-group">
					<?= $refer_form->field($arm_student, 'introduction')->textarea(['rows'=>'4'])->label('自我介绍'); ?>
				</div>

				<div class="form-group">
			        <?= Html::submitButton('报名', ['class' => 'btn btn-primary']) ?>
			    </div>

			<?php ActiveForm::end();?>
		</div>
		<!-- end of main -->

		<!-- <div class="col-md-1"></div> -->

		<div class="col-md-4 procession">
			<div class="row">
				<div class="col-sm-12 pro-title">在线报名流程</div>
			</div>
			<div class="row level-1">

				<div class="col-sm-7 level-2">
					<ul>
						<li class="bg-primary">提交报名信息</li>
						<li class="bg-info">等待咨询联系</li>
					</ul>
				</div>
				<div class="col-sm-5 pro-subtitle bg-success"><span class="step">1</span> 在线报名</div>
			</div>
			<div class="row level-1">
				<div class="col-sm-7 level-2">
					<ul>
						<li class="bg-info" class="">获取测试题</li>
						<li class="bg-info">完成测试题</li>
						<li class="bg-info">测试题评分</li>
						<li class="bg-info">反馈成绩</li>
					</ul>
				</div>
				<div class="col-sm-5 pro-subtitle bg-success"><span class="step">2</span> 基础测试</div>
			</div>
			<div class="row level-1">
				<div class="col-sm-7 level-2">
					<ul>
						<li class="bg-info">预约面试形式</li>
						<li class="bg-info">面试</li>
					</ul>
				</div>
				<div class="col-sm-5 pro-subtitle bg-success"><span class="step">3</span> 面试</div>
			</div>
			<div class="row level-1">
				<div class="col-sm-7 level-2">
					<ul>
						<li class="bg-info">获得预习资料</li>
						<li class="bg-info">准备入学</li>
					</ul>
				</div>
				<div class="col-sm-5 pro-subtitle bg-success"><span class="step">4</span> 完成入学</div>
			</div>
		</div>
		<!-- end of procession -->
	</div>
</div>