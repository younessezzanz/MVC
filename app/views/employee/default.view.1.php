<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PDO</title>

        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 50px;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){background-color: #f2f2f2}
        </style>

    </head>
    <body>
        
        <div>

            <?php

use PHPMVC\LIB\Template;
                
                if( isset($_SESSION['message']) ) {
                    echo $_SESSION['message']; 
                    session_unset($_SESSION['message']);
                }
            ?>

        </div>

        <div style="overflow-x:auto;margin-top: 100px;">
        
            <a href="/employee/add">Add New Employee</a>

            <h1>Lists of Employees</h1>
            <table>
                <tr>
                    <th>Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Extension</th>
                    <th>Email</th>
                    <th>Office Code</th>
                    <th>Reports To</th>
                    <th>Job Title</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>

                <?php 
                    if($employees !== false){
                        foreach($employees as $employee){
                ?>
                <tr>

                    <td><?= $employee->employeeNumber; ?></td>
                    <td><?= $employee->lastName; ?></td>
                    <td><?= $employee->firstName; ?></td>
                    <td><?= $employee->extension; ?></td>
                    <td><?= $employee->email; ?></td>
                    <td><?= $employee->officeCode; ?></td>
                    <td><?= $employee->reportsTo; ?></td>
                    <td><?= $employee->jobTitle; ?></td>

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
            
            </table>
        </div>


    </body>
</html>