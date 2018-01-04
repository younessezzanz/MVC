<section class="vbox">
  <section class="scrollable padder">

    <div class="m-t-md">

        <?php

        use PHPMVC\LIB\Template;

        if( isset($_SESSION['message']) ) {
        ?>
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="fa fa-ok-sign"></i><?php echo $_SESSION['message']; ?>
          </div>
        <?php
            session_unset($_SESSION['message']);
        }
        ?>

    </div>

    <div class="m-b-md">
      <h3 class="m-b-none"><?= $text_title_page_header ?></h3>
    </div>
    <section class="panel panel-default">
      <header class="panel-heading">Lists of Employees
        <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
      </header>
      <div class="table-responsive">
        <table id="data" class="table table-striped m-b-none">
          <thead>
            <tr>
              <th width="10%">Number</th>
              <th width="10%">Last Name</th>
              <th width="10%">First Name</th>
              <th width="10%">Extension</th>
              <th width="10%">Email</th>
              <th width="10%">Office Code</th>
              <th width="10%">Reports To</th>
              <th width="10%">Job Title</th>
              <th width="10%">Update</th>
              <th width="10%">Delete</th>

            </tr>
          </thead>
          
          <tbody>

          <?php 
                if($employees !== false){
                    foreach($employees as $employee){
            ?>
            <tr class="odd">

                <td class="sorting_1"><?= $employee->employeeNumber; ?></td>
                <td class=""><?= $employee->lastName; ?></td>
                <td class=""><?= $employee->firstName; ?></td>
                <td class=""><?= $employee->extension; ?></td>
                <td class=""><?= $employee->email; ?></td>
                <td class=""><?= $employee->officeCode; ?></td>
                <td class=""><?= $employee->reportsTo; ?></td>
                <td class=""><?= $employee->jobTitle; ?></td>

                <td>
                    <a href="/employee/edit/<?= $employee->employeeNumber; ?>">Edit</a>
                </td>   

                <td>
                <a href="/employee/delete/<?= $employee->employeeNumber; ?>" onClick="if(!confirm('Are you sure your want to delete this employee?')) return false;">Delete</a>
                </td> 

            </tr>

            <?php  
                    }
                }
            ?>
           
            </tbody>

        </table>
      </div>
    </section>
  </section>
</section>

<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>