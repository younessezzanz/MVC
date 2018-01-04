<style>
#content {
    background-color: #222733;
    color: #7a87a7
}
#content .content {
    position: relative;
    top: 20%;
}
</style>

<section class="content">
    <div class="row m-n">
      <div class="col-sm-4 col-sm-offset-4">
        <div class="text-center m-b-lg">
          <h1 class="h text-white animated fadeInDownBig"><?= $text_404; ?></h1>
        </div>
        <div class="list-group bg-info auto m-b-sm m-b-lg">
          <a href="/" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-home icon-muted"></i> <?= $text_gohome_404; ?>
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <i class="fa fa-fw fa-question icon-muted"></i> <?= $text_send_404; ?>
          </a>
          <a href="#" class="list-group-item">
            <i class="fa fa-chevron-right icon-muted"></i>
            <span class="badge bg-info lt">021-215-584</span>
            <i class="fa fa-fw fa-phone icon-muted"></i> <?= $text_callus_404; ?>
          </a>
        </div>
      </div>
    </div>
 
  
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder clearfix">
      <p>
        <small><?= $text_copyright_404; ?></small>
      </p>
    </div>
  </footer>
  <!-- / footer -->

  </section>