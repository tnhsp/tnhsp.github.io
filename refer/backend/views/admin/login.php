<?php
use yii\helpers\Html;
use yii\helpers\Url;

use yii\widgets\ActiveForm;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?= Html::cssFile('@web/css/bootstrap.min.css');?>
    <?= Html::cssFile('@web/css/font-awesome.min.css');?>
    <!--[if IE 7]>
        <?= Html::cssFile('@web/css/font-awesome-ie7.min.css');?>
    <![endif]-->

    <!-- ace styles -->
    <?= Html::cssFile('@web/css/ace.min.css');?>
    <?= Html::cssFile('@web/css/ace-rtl.min.css');?>
    <?= Html::cssFile('@web/css/ace-skins.min.css');?>


    <!--[if lte IE 8]>
        <?= Html::cssFile('@web/css/ace-ie.min.css');?>
    <![endif]-->

    <!--[if lt IE 9]>
        <?= Html::jsFile('@web/js/html5shiv.js');?>
        <?= Html::jsFile('@web/js/respond.min.js');?>
    <![endif]-->

    <?php $this->head() ?>
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1> <i class="icon-leaf green"></i>
                            <span class="red">泰牛程序员</span>
                            <span class="white">报名平台</span>
                        </h1>
                    </div>
                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div class="login-box visible widget-box no-border" id="login-box">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger"> <i class="icon-coffee green"></i>
                                        <?php if (Yii::$app->getSession()->hasFlash('error')) :?>
                                        <?= Yii::$app->getSession()->getFlash('error')?>
                                        <?php else : ?>
                                        请输入您的信息
                                        <?php endIf;?>
                                    </h4>

                                    <div class="space-6"></div>

                                    <?php $form=ActiveForm::begin() ?>
                                        <fieldset>
                                            <?= $form->field($admin, 'admin_name')->textInput(['placeholder'=>'姓名'])->label('') ?>

                                            <?= $form->field($admin, 'admin_password')->passwordInput(['placeholder'=>'密码'])->label('') ?>

                                            <label class="block clearfix"> <strong></strong>
                                            </label>

                                            <div class="clearfix">
                                                <?= Html::checkbox('remember', true, ['label'=>'记住我']) ?>

                                                <button class="width-35 pull-right btn btn-sm btn-primary" type="submit">
                                                    <i class="icon-key"></i>
                                                    登陆
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    <?php ActiveForm::end() ?>
                                </div>
                                <!-- /widget-main --> </div>
                            <!-- /widget-body --> </div>
                        <!-- /login-box --> </div>
                    <!-- /position-relative --> </div>
            </div>
            <!-- /.col --> </div>
        <!-- /.row --> </div>
</div>
<!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
        <?= Html::jsFile('@web/js/jquery-2.0.3.min.js');?>
    <!-- <![endif]-->

    <!--[if IE]>
        <?= Html::jsFile('@web/js/jquery-1.10.2.min.js');?>
    <![endif]-->

    <script type="text/javascript">
        if("ontouchend" in document) document.write("<script src='js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <?= Html::jsFile('@web/js/bootstrap.min.js');?>
    <?= Html::jsFile('@web/js/typeahead-bs2.min.js');?>
    <!-- page specific plugin scripts -->

    <!-- ace scripts -->
    <?= Html::jsFile('@web/js/ace.min.js');?>
    <?= Html::jsFile('@web/js/ace-elements.min.js');?>
    <?= Html::jsFile('@web/js/ace-extra.min.js');?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
