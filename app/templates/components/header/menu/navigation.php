<!-- .aside -->
<aside class="bg-black aside-md hidden-print" id="nav">          
    <section class="vbox">
    <section class="w-f scrollable">
        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
        <div class="clearfix wrapper dk nav-user hidden-xs">
            <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb avatar pull-left m-r">                        
                <img src="/images/a0.png" class="dker" alt="...">
                <i class="on md b-black"></i>
                </span>
                <span class="hidden-nav-xs clear">
                <span class="block m-t-xs">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                </span>
                <span class="text-muted text-xs block">Art Director</span>
                </span>
            </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">                      
                <li>
                <span class="arrow top hidden-nav-xs"></span>
                <a href="#"><?= $text_account_settings ?></a>
                </li>
                <li>
                <a href="profile.html"><?= $text_profile ?></a>
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
                <a href="#" data-toggle="ajaxModal" ><?= $text_log_out ?></a>
                </li>
            </ul>
            </div>
        </div>                


        <!-- nav -->                 
        <nav class="nav-primary hidden-xs">
            
            <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm"><?= $text_titre_app ?></div>
            <ul class="nav nav-main" data-ride="collapse">
         
            <li  class="li_menu <?= ($this->matchUrl('/') === true) ? 'active' : '' ?>"><a href="/" class="auto"><i class="fa fa-dashboard icon" aria-hidden="true"></i><span class="font-bold"><?= $text_dashboard; ?></span></a></li>

            <li class="li_menu <?= ($this->matchUrl('/purchases') === true || $this->matchUrl('/sales') === true) ? 'active' : '' ?>">
                <a href="javascript:;" class="auto">
                <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                </span>
                <i class="fa fa-credit-card icon"></i><span class="font-bold"><?= $text_transactions ?></span>
                </a>
                <ul class="nav dk">
                    <li class="<?= ($this->matchUrl('/purchases') === true) ? 'active' : '' ?>"><a href="/purchases" class="auto"><i class="fa fa-gift"></i><span><?= $text_transactions_purchases ?></span></a></li>
                    <li class="<?= ($this->matchUrl('/sales') === true) ? 'active' : '' ?>"><a href="/sales" class="auto"><i class="fa fa-shopping-bag"></i><span><?= $text_transactions_sales ?></a></span></a></li>
                </ul>
            </li>

            <li class="li_menu <?= ($this->matchUrl('/expensescategories') === true || $this->matchUrl('/dailyexpenses') === true) ? 'active' : '' ?>">
                <a href="javascript:;" class="auto">
                <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                </span>
                <i class="fa fa-credit-card icon"></i><span class="font-bold"><?= $text_expenses ?></span>
                </a>
                <ul class="nav dk">
                    <li class="<?= ($this->matchUrl('/expensescategories') === true) ? 'active' : '' ?>"><a href="/expensescategories" class="auto"><i class="fa fa-list-ul"></i><span><?= $text_expenses_categories ?></span></a></li>
                    <li class="<?= ($this->matchUrl('/dailyexpenses') === true) ? 'active' : '' ?>"><a href="/dailyexpenses" class="auto"><i class="fa fa-dollar"></i><span><?= $text_expenses_daily_expenses ?></a></span></a></li>
                </ul>
            </li>

            <li class="li_menu <?= ($this->matchUrl('/productcategories') === true || $this->matchUrl('/productlist') === true) ? 'active' : '' ?>">
                <a href="javascript:;" class="auto">
                <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                </span>
                <i class="fa fa-shopping-bag icon"></i><span class="font-bold"><?= $text_store ?></span>
                </a>
                <ul class="nav dk">
                    <li class="<?= ($this->matchUrl('/productcategories') === true) ? 'active' : '' ?>"><a href="/productcategories" class="auto"><i class="fa fa-archive"></i><span><?= $text_store_categories ?></span></a></li>
                    <li class="<?= ($this->matchUrl('/productlist') === true) ? 'active' : '' ?>"><a href="/productlist" class="auto"><i class="fa fa-tag"></i><span><?= $text_store_products ?></a></span></a></li>
                </ul>
            </li>

            <li class="li_menu <?= ($this->matchUrl('/clients') === true) ? 'active' : '' ?>"><a href="/clients" class="auto"><i class="i i-users3 icon"></i><span class="font-bold"><?= $text_clients; ?></span></a></li>
            <li class="li_menu <?= ($this->matchUrl('/suppliers') === true) ? 'active' : '' ?>"><a href="/suppliers" class="auto"><i class="fa fa-users icon"></i><span class="font-bold"><?= $text_suppliers; ?></span></a></li>

            <li class="li_menu <?= ($this->matchUrl('/users') === true || $this->matchUrl('/usersgroups') === true || $this->matchUrl('/privileges') === true) ? 'active' : '' ?>">
                <a href="javascript:;" class="auto">
                <span class="pull-right text-muted">
                    <i class="i i-circle-sm-o text"></i>
                    <i class="i i-circle-sm text-active"></i>
                </span>
                <i class="i i-users2 icon"></i><span class="font-bold"><?= $text_users ?></span>
                </a>
                <ul class="nav dk">
                    <li class="<?= ($this->matchUrl('/users') === true) ? 'active' : '' ?>"><a href="/users" class="auto"><i class="fa fa-archive"></i><span><?= $text_users_list ?></span></a></li>
                    <li class="<?= ($this->matchUrl('/usersgroups') === true) ? 'active' : '' ?>"><a href="/usersgroups" class="auto"><i class="fa fa-group"></i><span><?= $text_users_groups ?></a></span></a></li>
                    <li class="<?= ($this->matchUrl('/privileges') === true) ? 'active' : '' ?>"><a href="/privileges" class="auto"><i class="fa fa-key"></i><span><?= $text_users_privileges ?></a></span></a></li>
                </ul>
            </li>

            <li class="li_menu <?= ($this->matchUrl('/reports') === true) ? 'active' : '' ?>"><a href="/reports" class="auto"><i class="fa fa-bar-chart icon"></i><span class="font-bold"><?= $text_reports; ?></span></a></li>
            <li class="li_menu <?= ($this->matchUrl('/notifications') === true) ? 'active' : '' ?>"><a href="/notifications" class="auto"><i class="fa fa-bell icon"></i><span class="font-bold"><?= $text_notifications; ?></span></a></li>
            <li class="li_menu"><a href="/auth/logout" class="auto"><i class="fa fa-sign-out icon"></i><span class="font-bold"><?= $text_log_out; ?></span></a></li>
           
            </ul>

            <div class="line dk hidden-nav-xs"></div>

        </nav>
        <!-- / nav -->
        </div>
    </section>
    
    <footer class="footer hidden-xs no-padder text-center-nav-xs nav-control-menu">
        <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
        <i class="i i-logout"></i>
        </a>
        <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
        <i class="i i-circleleft text"></i>
        <i class="i i-circleright text-active"></i>
        </a>
    </footer>
    </section>
</aside>
<!-- /.aside -->

<!-- action_view -->
<section id="content" class="action_view">

<div class="content-header">
   <ol class="breadcrumb">
      <li>
         <a href="/"><?= $title_breadcrumb_home ?></a>
      </li>
      <li>
         <a href="/users"><?= $title_breadcrumb_users ?></a>
      </li>
   </ol>
</div>

<?php

$messages = $this->messenger->getMessages(); 

if(!empty($messages)): 
    foreach ($messages as $message): 
?>

    <div class="alert alert-<?= $message[2] ?> alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4><i class="fa fa-bell-alt"></i><?= $message[1] ?></h4>
        <p><?= $message[0] ?></p>
    </div>

<?php 
    endforeach;
endif; 
?>