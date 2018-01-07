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

                    <!--<div class="form-group">
                        <label class="col-sm-3 control-label"><?php //echo $text_label_FirstName ?></label>
                        <div class="col-sm-9">
                            <input type="text" 
                                   data-rangewords="[0,10]" 
                                   class="form-control" 
                                   name="FirstName" 
                                   maxlength="10" 
                                   data-required="true" 
                                   value=""
                                   placeholder="<?php //echo $text_label_FirstName ?>">    
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>

                        <div class="form-group">
                        <label class="col-sm-3 control-label"><?php //echo $text_label_LastName ?></label>
                        <div class="col-sm-9">
                            <input type="text" 
                                   data-rangewords="[0,10]" 
                                   class="form-control" 
                                   name="LastName" 
                                   maxlength="10" 
                                   data-required="true" 
                                   value=""
                                   placeholder="<?php //echo $text_label_LastName ?>">    
                        </div>
                    </div>

                    <div class="line line-dashed b-b line-lg pull-in"></div>-->


                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_PhoneNumber ?></label>
                        <div class="col-sm-9">
                           <input type="text" 
                                  data-rangewords="[0,30]" 
                                  class="form-control" 
                                  name="PhoneNumber" 
                                  maxlength="30" 
                                  data-required="true" 
                                  data-type="phone" 
                                  value="<?= $this->showValue('PhoneNumber', $user) ?>"
                                  placeholder="(XXX) XXXX XXX">    
                        </div>
                     </div>

                     <div class="line line-dashed b-b line-lg pull-in"></div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label"><?= $text_label_GroupId ?></label>
                        <div class="col-sm-9">
                        <select data-required="true" name="GroupId" class="form-control">
                            <option value=""><?= $text_label_user_choose ?></option>
                            <?php 
                                if (false !== $groups): 
                                    foreach ($groups as $group): 
                            ?>
                                <option <?= $this->selectedIf('GroupId', $group->GroupId, $user) ?> value="<?= $group->GroupId ?>"><?= $group->GroupName ?></option>
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