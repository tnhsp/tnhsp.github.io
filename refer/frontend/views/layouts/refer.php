<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage();?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>

	<title><?= Html::encode($this->title) ?> - 泰牛程序员</title>

	<?php $this->head();?>

	<!--[if lt IE 9]>
	<script src="static/js/html5shiv.min.js"></script>
	<script src="static/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="header" class="navbar navbar-defalut navbar-fixed-top header">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-menu" aria-expanded="false">
					<span class="sr-only">折叠导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand brand-logo" href="http://www.itbull.cn/">泰牛程序员</a>
			</div>

			<p class="navbar-text subtitle">报名系统</p>

			<div class="collapse navbar-collapse" id="navbar-collapse-menu">
				<ul class="nav navbar-nav navbar-right">
					<li class="active">
						<a href="#">我要报名</a>
					</li>
					<li>
						<a href="http://www.itbull.cn/">PHP移动互联网</a>
					</li>
					<li>
						<a href="http://www.itbull.cn/h5/index.html">Web前端与移动互联网</a>
					</li>
					<li>
						<a href="http://www.imeixue.cn/">每学网</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?= $content ?>

<div class="container-fluid footer">
	<div class="center-block container">
		泰牛程序员PHP学院-培养中国抢手的PHP程序员<br>
		版权所有：&#12288;2016北京每学教育科技有限公司<br>
		座&#12288;&#12288;机：&#12288;010-57180327<br>
		电&#12288;&#12288;话：&#12288;186-1034-4780<br>
		邮&#12288;&#12288;箱：&#12288;3274261751@qq.com<br>
		地&#12288;&#12288;址：&#12288;北京市海淀区信息路甲28号C座（二层）02B室<br>
		ICP 备案：&#12288;京ICP备15048336号<br>
	</div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>