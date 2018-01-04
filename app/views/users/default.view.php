<section class="vbox">
   <section class="scrollable padder">
      <section class="panel panel-default section_content">
         <div class="m-b-md title_header">
            <h3 class="m-b-none"><?= $title_header ?></h3>
         </div>
         <header class="panel-heading header_title"><?= $title_header_table ?>
            <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
            <a href="/users/create" class="btn btn-sm btn-primary">
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
                     <th width="10%"><?= $title_user_id ?></th>
                     <th width="10%"><?= $title_user_username ?></th>
                     <th width="20%"><?= $title_user_email ?></th>
                     <th width="10%"><?= $title_user_PhoneNumber ?></th>
                     <th width="10%"><?= $title_user_SubscriptionDate ?></th>
                     <th width="10%"><?= $title_user_LastLogin ?></th>
                     <th width="10%"><?= $title_user_GroupId ?></th>
                     <th width="10%"><?= $title_user_Status ?></th>
                  </tr>
               </thead>
               <tbody>
                <?php 
                if($users !== false):
                  foreach($users as $user):
                ?>
                  <tr class="odd">
                     <td class="sorting_1"><?= $user->UserId; ?></td>
                     <td class=""><?= $user->Username; ?></td>
                     <td class=""><?= $user->Email; ?></td>
                     <td class=""><?= $user->PhoneNumber; ?></td>
                     <td class=""><?= $user->SubscriptionDate; ?></td>
                     <td class=""><?= $user->LastLogin; ?></td>
                     <td class=""><?= $user->GroupId; ?></td>
                     <td class=""><?= $user->Status; ?></td>
                     <td>
                        <a href="/users/edit/<?= $user->UserId; ?>"><?= $title_table_action_edit ?></a>
                     </td>
                     <td>
                        <a href="/users/delete/<?= $user->UserId; ?>" onClick="if(!confirm('Are you sure your want to delete this user?')) return false;"><?= $title_table_action_delete ?></a>
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