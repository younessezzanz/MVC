<section class="vbox">

   <section class="scrollable padder">
      <section class="panel panel-default section_content">
         <div class="m-b-md title_header">
            <h3 class="m-b-none"><?= $title_header ?></h3>
         </div>
         <header class="panel-heading header_title"><?= $title_header_table ?>
            <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
            <a href="/privileges/create" class="btn btn-sm btn-primary">
            <i class="fa fa-plus text"></i>
            <span class="text"><?= $title_new_item ?></span>
            </a>
         </header>

         <div class="table-responsive box-body">
            <div class="dt-buttons btn-group">
               <a class="btn btn-default buttons-copy buttons-html5 btn-sm" tabindex="0" aria-controls="datatable"><span><?= $title_table_copy ?></span></a>
               <a class="btn btn-default buttons-csv buttons-html5 btn-sm" tabindex="0" aria-controls="datatable"><span><?= $title_table_csv ?></span></a>
               <a class="btn btn-default buttons-excel buttons-html5 btn-sm" tabindex="0" aria-controls="datatable"><span><?= $title_table_excel ?></span></a>
               <a class="btn btn-default buttons-pdf buttons-html5 btn-sm" tabindex="0" aria-controls="datatable"><span><?= $title_table_pdf ?></span></a>
               <a class="btn btn-default buttons-print btn-sm" tabindex="0" aria-controls="datatable"><span><?= $title_table_print ?></span></a>
            </div>
            <table id="data" class="table table-striped m-b-none">
               <thead>
                  <tr>
                     <th width="40%"><?= $title_user_title ?></th>
                     <th width="40%"><?= $title_user_username ?></th>
                     <th width="20%"><?= $title_table_action ?></th>
                  </tr>
               </thead>
               <tbody>
                <?php 
                if($privileges !== false):
                  foreach($privileges as $privilege):
                    
                ?>
                  <tr class="odd">

                     <td class=""><?= $privilege->Privilege; ?></td>
                     <td class=""><?= $privilege->PrivilegeTitle; ?></td>

                     <td>

                      <div class="btn-group">
                          <a href="/privileges/edit/<?= $privilege->PrivilegeId; ?>" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                          <a href="/privileges/delete/<?= $privilege->PrivilegeId; ?>" class="btn btn-xs btn-danger" onClick="if(!confirm('<?= $text_table_control_delete_confirm ?>')) return false;"><i class="fa fa-trash"></i></a>
                      </div>

                     </td>

                  </tr>
                <?php  
                  endforeach;
                endif;
                ?>
               </tbody>
            </table>
         </div>
      </section>
   </section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>