<section id="content" class="m-t-lg wrapper-md animated fadeInUp action_view">
    <div class="container aside-xl">
    <a class="navbar-brand block" href="/"><?= $title ?></a>
    <section class="m-b-lg">
    <header class="wrapper text-center">
        <strong><?= $login_header ?></strong>
    </header>
    <form autocomplete="off" method="post" enctype="application/x-www-form-urlencoded">
        <div class="list-group">
        <div class="list-group-item">
            <input type="text" name="ucname" placeholder="<?= $login_ucname ?>" class="form-control no-border">
        </div>
        <div class="list-group-item">
            <input type="password" name="ucpwd" placeholder="<?= $login_ucpwd ?>" class="form-control no-border">
        </div>
        </div>
        
        <button type="submit" name="login" class="btn btn-lg btn-primary btn-block"><?= $login_sign_in ?></button>

        <div class="text-center m-t m-b"><a href="#"><small><?= $login_forgot_pass ?></small></a></div>
        <div class="line line-dashed"></div>
        <p class="text-muted text-center"><small><?= $login_not_account ?></small></p>
        <a href="signup.html" class="btn btn-lg btn-default btn-block"><?= $login_create_account ?></a>
    </form>
    </section>
</div>
</section>