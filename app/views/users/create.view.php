<section class="vbox">
   <section class="scrollable padder">

      <div class="m-b-md">
         <h3 class="m-b-none"><?= $text_legend ?></h3>
      </div>

      <div class="row">
         <div class="col-sm-10">
            <form autocomplete="off" class="form-horizontal appForm clearfix" data-validate="parsley" method="post" enctype="application/x-www-form-urlencoded">
               
                <section class="panel panel-default">

                  <header class="panel-heading">
                     <strong><?= $text_legend ?></strong>
                  </header>

                    <div class="panel-body">

                        <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_firstname ?></label>
                        <div class="col-sm-9">
                            <input type="text" data-rangewords="[0,10]" class="form-control" name="FirstName" maxlength="10" data-required="true" placeholder="<?= $text_label_user_firstname ?>">    
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_lastname ?></label>
                        <div class="col-sm-9">
                            <input type="text" data-rangewords="[0,10]" class="form-control" name="LastName" maxlength="10" data-required="true" placeholder="<?= $text_label_user_lastname ?>">    
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>



                        <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_username ?></label>
                        <div class="col-sm-9">
                            <input type="text" data-rangewords="[0,30]" class="form-control" name="Username" maxlength="30" data-required="true" placeholder="<?= $text_label_user_username ?>">    
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_password ?></label>
                        <div class="col-sm-9">
                           <input type="password" class="form-control" name="Password" data-required="true" id="pwd" placeholder="<?= $text_label_user_password ?>">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_cpassword ?></label>
                        <div class="col-sm-9">
                           <input type="password" class="form-control" name="CPassword" data-equalto="#pwd" data-required="true" placeholder="<?= $text_label_user_cpassword ?>">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>


                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_email ?></label>
                        <div class="col-sm-9">
                           <input type="email" data-rangewords="[0,40]" class="form-control" name="Email" maxlength="40" data-type="email" data-required="true" id="email" placeholder="<?= $text_label_user_email ?>">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_cemail ?></label>
                        <div class="col-sm-9">
                           <input type="email" data-rangewords="[0,40]" class="form-control" name="CEmail" maxlength="40" data-type="email"  data-equalto="#email" data-required="true" placeholder="<?= $text_label_user_cemail ?>">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>


                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_phone ?></label>
                        <div class="col-sm-9">
                           <input type="text" data-rangewords="[0,30]" class="form-control" name="PhoneNumber" maxlength="30" data-required="true" data-type="phone" placeholder="(XXX) XXXX XXX">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_user_groupid ?></label>
                        <div class="col-sm-9">
                        <select data-required="true" name="GroupId" class="form-control m-t">
                            <option value=""><?= $text_label_user_choose ?></option>
                            <?php 
                                if (false !== $groups): 
                                    foreach ($groups as $group): 
                            ?>
                                <option value="<?= $group->GroupId ?>"><?= $group->GroupName ?></option>
                            <?php 
                                    endforeach;
                                endif; 
                            ?>
                        </select>
            
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>

                        


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