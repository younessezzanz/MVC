<section class="vbox">
   <section class="scrollable padder">

      <div class="m-b-md">
         <h3 class="m-b-none"><?= $text_legend ?></h3>
      </div>

      <div class="row">
         <div class="col-sm-8">
            <form autocomplete="off" class="form-horizontal appForm clearfix" data-validate="parsley" method="post" enctype="application/x-www-form-urlencoded">
               
                <section class="panel panel-default">

                  <header class="panel-heading">
                     <strong><?= $text_legend ?></strong>
                  </header>

                  <div class="panel-body">
                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_privilege_title ?></label>
                        <div class="col-sm-9">
                           <input type="text" data-rangewords="[0,30]" class="form-control" name="GroupName" maxlength="20" data-required="true" placeholder="<?= $text_label_privilege_title ?>">    
                        </div>
                     </div>
                     <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group labels_groups">
                        <label class="col-sm-3 control-label"><?= $text_label_privilege_url ?></label>
                        <div class="col-sm-9">

                        <?php if ($privileges !== false): foreach ($privileges as $privilege): ?>

                            <label class="checkbox-inline i-checks">
                              <input type="checkbox" name="privileges[]" id="privileges" value="<?= $privilege->PrivilegeId ?>"><i></i> <?= $privilege->Privilege ?>
                            </label>

                        <?php endforeach; endif; ?>

                        </div>
                    </div>


                  <footer class="panel-footer text-right bg-light lter">
                     <button type="submit" name="submit" class="btn btn-success btn-s-xs" value="<?= $text_label_save ?>"><?= $text_label_save ?></button>
                  </footer>

               </section>

            </form>
         </div>
      </div>
   </section>
</section>