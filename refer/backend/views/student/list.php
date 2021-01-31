<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\Url;

$this->title = '学生管理';
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
				学生列表
			</small>
		</h1>
	</div>
	<!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
		<?= Html::beginForm(Url::toRoute(['student/list', 'type'=>Yii::$app->request->get('type')]), 'get', ['class'=>'form-inline']) ?>
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<div class="input-group">
							<?= Html::textInput('keyword', $keyword, ['placeholder'=>'姓名 电话 QQ Email']) ?>
							<?= Html::dropDownList('education', $education, $education_list_map_search) ?>
							<?= Html::dropDownList('progress', $progress, $progress_list_map_search) ?>
							<button class="btn btn-purple btn-sm" type="submit">
								搜索 <i class="icon-search icon-on-right bigger-110"></i>
							</button>
						</div>
					</div>
				</div>
			<?= Html::endForm();?>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->

			<div class="row">
				<div class="col-xs-12">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover" id="sample-table-1">
							<thead>
								<tr>
									<th class="center">
										<label>
											<input type="checkbox" class="ace">
											<span class="lbl"></span>
										</label>
									</th>
									<th>学生</th>
									<th>学科</th>
									<th>电话</th>
									<th>QQ</th>
									<th>E-mail</th>
									<th>学历</th>
									<th>进度</th>
									<th>注册时间</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
								<?php foreach($student_list as $student):?>
								<tr>
									<td class="center">
										<label>
											<input type="checkbox" class="ace">
											<span class="lbl"></span>
										</label>
									</td>

									<td>
										<?= Html::encode($student->student_name)?>
									</td>

									<td>
										<?= Html::encode($student->course->course_title)?>
									</td>

									<td>
										<?= Html::encode($student->phone_number)?>
									</td>
									<td>
						<!-- 				<?= Html::encode($student->qq)?>
										<a href="http://wpa.qq.com/msgrd?v=3&uin=<?= $student->qq?>&site=qq&menu=yes">
											<i class="icon-comment"></i>
										</a> -->
										<a href="tencent://message/?uin=<?= Html::encode($student->qq)?>&Site=itbull.cn&Menu=yes">
										<?= Html::encode($student->qq)?>
										<i class="icon-comment"></i>
										</a>
									</td>
									<td>
										<?= Html::encode($student->email)?>
										<a href="mailto://<?= $student->email?>">
											<i class="icon-envelope-alt"></i>
										</a>
									</td>
									<td>
										<?= Html::encode($student->education->education_title)?></td>
									<td>
										<?= Html::dropDownList('progress', $student->
										progress_id, $progress_list_map, ['id'=>'progress-'.$student->student_id, 'data-id'=>$student->student_id, 'data-url'=>Url::toRoute('student/progress'), 'data-url-history'=>Url::toRoute('student/history')]) ?>
									</td>
									<td>
										<?= \date('Y-m-d H:i:s', $student->add_time)?></td>

									<td>
										<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
											<?php if (Yii::$app->request->get('type', 'normal') == 'normal') :?>
											<a class="btn btn-xs btn-info" href="<?= Url::toRoute(['student/edit', 'id'=>
												$student->student_id]) ?>">
												<i class="icon-edit bigger-120"></i>
											</a>

											<a class="btn btn-xs btn-danger" href="<?= Url::toRoute(['student/trash', 'id'=>
												$student->student_id]) ?>">
												<i class="icon-trash bigger-120"></i>
											</a>
											<?php elseif (Yii::$app->request->get('type', 'normal') == 'recycle') :?>
											<a class="btn btn-xs btn-success" href="<?= Url::toRoute(['student/undo', 'id'=>
												$student->student_id]) ?>" title="还原">
												<i class="icon-undo bigger-120"></i>
											</a>

											<a class="btn btn-xs btn-danger" href="<?= Url::toRoute(['student/delete', 'id'=>
												$student->student_id]) ?>" title="永久删除">
												<i class="icon-remove bigger-120"></i>
											</a>
											<?php endIf;?>
										</div>
									</td>
								</tr>
								<?php endForeach;?></tbody>
						</table>

						<div class="row">
							<?= LinkPager::widget(['pagination' =>$pagination]) ?></div>
					</div>
					<!-- /.table-responsive -->
				</div>
				<!-- /span -->
			</div>
			<!-- /row -->

			<div class="hr hr-18 dotted hr-double"></div>

			<!-- PAGE CONTENT ENDS -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</div>

<?php $this->
registerJsFile('@web/js/student_list.js');?>