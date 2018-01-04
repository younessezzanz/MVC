
<!-- header Topbar -->
<header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
    <div class="navbar-header aside-md dk">
    <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
        <i class="fa fa-bars"></i>
    </a>
    <a href="/" class="navbar-brand">
        <img src="/images/logo.png" class="m-r-sm" alt="scale">
        <span class="hidden-nav-xs"><?= $text_info_scale; ?></span>
    </a>
    <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
        <i class="fa fa-cog"></i>
    </a>
    </div>
    <ul class="nav navbar-nav hidden-xs">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="i i-grid"></i>
        </a>
        <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
        <div class="row m-l-none m-r-none m-t m-b text-center">
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-mail i-2x text-primary-lt"></i>
                </span>
                <small class="text-muted"><?= $text_info_mailbox; ?></small>
                </a>
            </div>
            </div>
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-calendar i-2x text-danger-lt"></i>
                </span>
                <small class="text-muted"><?= $text_info_calendar; ?></small>
                </a>
            </div>
            </div>
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-map i-2x text-success-lt"></i>
                </span>
                <small class="text-muted"><?= $text_info_map; ?></small>
                </a>
            </div>
            </div>
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-paperplane i-2x text-info-lt"></i>
                </span>
                <small class="text-muted"><?= $text_info_trainning; ?></small>
                </a>
            </div>
            </div>
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-images i-2x text-muted"></i>
                </span>
                <small class="text-muted"><?= $text_info_photos; ?></small>
                </a>
            </div>
            </div>
            <div class="col-xs-4">
            <div class="padder-v">
                <a href="#">
                <span class="m-b-xs block">
                    <i class="i i-clock i-2x text-warning-lter"></i>
                </span>
                <small class="text-muted"><?= $text_info_timeline; ?></small>
                </a>
            </div>
            </div>
        </div>
        </section>
    </li>
    </ul>
    <form class="navbar-form navbar-left input-s-lg input-s-lg-form m-t m-l-n-xs hidden-xs" role="search">
    <div class="form-group width-100-a">
        <div class="input-group">
        <span class="input-group-btn">
            <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button>
        </span>
        <input type="text" class="form-control input-sm no-border" placeholder="<?= $text_search_topbar; ?>">            
        </div>
    </div>
    </form>
               
    <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

        <i class="fa fa-language" aria-hidden="true"></i> <?= $text_Langues ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight">            
        <li>
            <span class="arrow top"></span>
            <a href="/language"><?= $text_Langues_en ?></a>
        </li>
        <li>
            <a href="/language"><?= $text_Langues_fr ?></a>
        </li>
        
        <li class="divider"></li>
        <li>
            <a href="/language" data-toggle="ajaxModal" ><?= $text_Langues_en ?></a>
        </li>
        </ul>
    </li>

    <li class="hidden-xs">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="i i-chat3"></i>
        <span class="badge badge-sm up bg-danger count">2</span>
        </a>
        <section class="dropdown-menu aside-xl animated flipInY">
        <section class="panel bg-white">
            <div class="panel-heading b-light bg-light">
            <strong><?= $text_all_notifications ?> <span class="count">2</span> <?= $text_notification ?></strong>
            </div>
            <div class="list-group list-group-alt">
            <a href="#" class="media list-group-item">
                <span class="pull-left thumb-sm">
                <img src="/images/a0.png" alt="..." class="img-circle">
                </span>
                <span class="media-body block m-b-none">
                Use awesome animate.css<br>
                <small class="text-muted">10 minutes ago</small>
                </span>
            </a>
            <a href="#" class="media list-group-item">
                <span class="media-body block m-b-none">
                1.0 initial released<br>
                <small class="text-muted">1 hour ago</small>
                </span>
            </a>
            </div>
            <div class="panel-footer text-sm">
            <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
            <a href="#notes" data-toggle="class:show animated fadeInRight"><?= $text_all_notifications ?></a>
            </div>
        </section>
        </section>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="thumb-sm avatar pull-left">
            <img src="/images/a0.png" alt="...">
        </span>
        John.Smith <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight">            
        <li>
            <span class="arrow top"></span>
            <a href="#"><?= $text_account_settings ?></a>
        </li>
        <li>
            <a href="#"><?= $text_profile ?></a>
        </li>
        <li>
            <a href="#">
            <span class="badge bg-danger pull-right">3</span>
            <?= $text_notifications ?>
            </a>
        </li>
        <li>
            <a href="#"><?= $text_account_help ?></a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#" data-toggle="ajaxModal"><?= $text_log_out ?></a>
        </li>
        </ul>
    </li>
    </ul>      
</header>
<!-- /header Topbar -->

<!-- section -->
<section>
    <!-- .stretch -->
    <section class="hbox stretch">