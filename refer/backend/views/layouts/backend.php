<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> - 报名平台 - 泰牛程序员</title>

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
    <body>
    <?php $this->beginBody() ?>

        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                        <small>
                            <i class="icon-leaf"></i>
                            泰牛程序员 <small>报名管理</small>
                        </small>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="light-blue">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="avatars/avatar.png" alt="Jason's Photo" />
                                <span class="user-info">
                                    <small>欢迎</small>
                                    <?= Yii::$app->user->identity->admin_name;?>
                                </span>

                                <i class="icon-caret-down"></i>
                            </a>

                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="icon-cog"></i>
                                        设置
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="<?= Url::toRoute(['admin/logout'])?>">
                                        <i class="icon-off"></i>
                                        退出
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- /.ace-nav -->
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div class="main-container-inner">
                <a class="menu-toggler" id="menu-toggler" href="#">
                    <span class="menu-text"></span>
                </a>

                <div class="sidebar" id="sidebar">
                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                    </script>

                    <ul class="nav nav-list">
                        <li>
                            <a href="index.html">
                                <i class="icon-dashboard"></i>
                                <span class="menu-text"> 摘要信息 </span>
                            </a>
                        </li>

                        <li class="<?php if (Yii::$app->controller->id=='student') echo 'active open';?>">
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text"> 学生 </span>

                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li class="<?php if (Yii::$app->controller->id=='student' &&Yii::$app->request->get('type')=='normal') echo 'active';?>">
                                    <a href="<?= Url::toRoute(['student/list','type'=>'normal']) ?>">
                                        <i class="icon-double-angle-right"></i>
                                        学生列表
                                    </a>
                                </li>

                                <li class="<?php if (Yii::$app->controller->id=='student' && Yii::$app->controller->action->id=='add') echo 'active';?>">
                                    <a href="<?= Url::toRoute(['student/add']) ?>">
                                        <i class="icon-double-angle-right"></i>
                                        添加学生
                                    </a>
                                </li>

                                <li class="<?php if (Yii::$app->controller->id=='student' && Yii::$app->request->get('type')=='recycle') echo 'active';?>">
                                    <a href="<?= Url::toRoute(['student/list', 'type'=>'recycle'])?>">
                                        <i class="icon-double-angle-right"></i>
                                        回收站
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul><!-- /.nav-list -->

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                    </script>
                </div>

                <div class="main-content">
                    <?= $content ?>
                </div>

            </div><!-- /.main-container-inner -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

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
