<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

use yii\widgets\ActiveForm;

$this->title = '添加学生';
?>
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
    </script>

    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">学生</a>
        </li>
    </ul><!-- .breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1>
			学生
			<small> <i class="icon-double-angle-right"></i>
				添加学生
			</small>
		</h1>
	</div>
	<!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<?php $form=ActiveForm::begin([
				'options' => ['class'=>'form-horizontal'],
				'fieldConfig' => [
				 	'template' => "{label}<div class=\"col-sm-9\">{input}{error}</div>",
				 	]
			])?>

				<?= Html::activeHiddenInput($student, 'student_id')?>

				<?= $form->field($student, 'student_name')->label('学生姓名', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"用户姓名", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'phone_number')->label('电话号码', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"电话号码", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'qq')->label('QQ', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"QQ", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'email')->label('email', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"email", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'gender_id')->label('性别', ['class'=>'col-sm-3 control-label no-padding-right'])->radioList($gender_list, ['separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;'])?>

				<?= $form->field($student, 'course_id')->label('意向课程', ['class'=>'col-sm-3 control-label no-padding-right'])->radioList($course_list, ['separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;'])?>

				<?= $form->field($student, 'education_id')->label('学历', ['class'=>'col-sm-3 control-label no-padding-right'])->radioList($education_list, ['separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;'])?>

				<?= $form->field($student, 'status_id')->label('当前状态', ['class'=>'col-sm-3 control-label no-padding-right'])->radioList($status_list, ['separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;'])?>

				<?= $form->field($student, 'referer_id')->label('信息来源', ['class'=>'col-sm-3 control-label no-padding-right'])->radioList($referer_list, ['separator'=>'&nbsp;&nbsp;&nbsp;&nbsp;'])?>

				<?= $form->field($student, 'school')->label('学校', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"学校", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'subject')->label('所学专业', ['class'=>'col-sm-3 control-label no-padding-right'])->textInput(['placeholder'=>"所学专业", 'class'=>'col-xs-10 col-sm-5'])?>

				<?= $form->field($student, 'introduction')->label('自我介绍', ['class'=>'col-sm-3 control-label no-padding-right'])->textarea(['placeholder'=>"自我介绍", 'class'=>'col-xs-10 col-sm-5', 'rows'=>4])?>

				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9">
						<?= Html::submitButton('<i class="icon-ok bigger-110"></i>添加', ['class' => 'btn btn-primary', 'name' => 'submit']) ?>
						&nbsp; &nbsp; &nbsp;
						<?= Html::submitButton('<i class="icon-undo bigger-110"></i>重置', ['class' => 'btn']) ?>
					</div>
				</div>

			<?php ActiveForm::end();?>

			<!-- PAGE CONTENT ENDS -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>

<?php $this->registerJsFile('@web/js/student_list.js');?>