<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title.' - '.WEB_NAME?></title>
    <?php echo Asset::container('bootstrapper')->styles();?>
    <?php echo Asset::container('bootstrapper')->scripts();?>
    <?php Asset::add('common','css/common.css')?>
    <?php echo Asset::styles(); ?>
    <link id="favicon" href="<?php echo asset('img/favicon.ico')?>" rel="icon" type="image/x-icon" />
</head>
<body>

<div class="navbar" style="padding-bottom: 50px;">
    <div class="navbar-inner navbar-fixed-top">
        <div class="container">

            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <!-- Be sure to leave the brand out there if you want it shown -->
            <a class="brand" href="<?php echo URL::base()?>"><img src="<?php echo asset('img/logo.png')?>" width="18px" height="18px"> <?php echo WEB_NAME?></a>

            <!-- Everything you want hidden at 940px or less, place within here -->
            <div class="nav-collapse">
                <ul class="nav">
                    <li <?php if($title=='首页') echo 'class="active"'?>><a href="<?php echo URL::base()?>">首页</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="nav pull-right">
                    <?php if(!Auth::check()):?>
                    <li <?php if($title=='登陆') echo 'class="active"'?>><a href="<?php echo URL::to('login?url='.URL::current())?>">登陆</a></li>
                    <li <?php if($title=='注册') echo 'class="active"'?>><a target="_blank" href="<?php echo URL::to('register?url='.URL::current())?>">注册</a></li>
                    <?php else:?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">账号<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header"><?php echo Auth::user()->fullname?></li>
                            <li class="divider"></li>
                            <?php if(Auth::user()->admin_auth != null){?>
                            <li><a href="<?php echo URL::to('admin')?>">管理员</a></li>
                            <?php }?>
                            <li><a href="<?php echo URL::to('logout?url='.URL::current())?>">退出登陆</a></li>
                        </ul>
                    </li>
                    <?php endif;?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">风格<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo URL::to('style/default?url='.URL::current())?>">默认</a></li>
                            <li><a href="<?php echo URL::to('style/orange?url='.URL::current())?>">橙色</a></li>
                            <li><a href="<?php echo URL::to('style/blackorange?url='.URL::current())?>">黑橙</a></li>
                            <li><a href="<?php echo URL::to('style/deepblack?url='.URL::current())?>">深黑</a></li>
                            <li><a href="<?php echo URL::to('style/gray?url='.URL::current())?>">灰暗</a></li>
                            <li><a href="<?php echo URL::to('style/lightblue?url='.URL::current())?>">蓝色</a></li>
                            <li><a href="<?php echo URL::to('style/readable?url='.URL::current())?>">清新</a></li>
                            <li><a href="<?php echo URL::to('style/redgray?url='.URL::current())?>">文艺</a></li>
                            <li><a href="<?php echo URL::to('style/sleek?url='.URL::current())?>">银色</a></li>
                            <li><a href="<?php echo URL::to('style/wood?url='.URL::current())?>">墨绿</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>

<div class="span5" style="padding-right: 100px;padding-top: 60px; position: absolute;top: 0;right: 0;z-index: 999;">
    <?php echo Messages::get_html()?>
</div>