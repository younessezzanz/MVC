<!doctype html>
<html class="no-js" lang="">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Add New Employee</title>

        <style>
            input[type=text], select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            div.form_css {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
                width: 750px;
                margin: 0 auto;
                margin-top: 80px;
            }

            div.form_css fieldset {
                border: 1px solid #c5c2c2;
            }

            div.form_css fieldset legend{
                background: #1b1919;
                padding: 0 20px;
                color: #fff;
            }

            div.form_css fieldset legend h3 {
                font-size: 12px;
                text-transform: uppercase;
            }
            div.form_css fieldset .forms {
                padding: 30px;
            }

        </style>

    </head>
    <body>


        <div class="form_css">

            <form method="post" enctype="application/x-www-form-urlencoded">
                
                <fieldset>
                    <legend><h3>Add New Employee</h3></legend>

                    <div class="forms">
                        Last name:<br>
                        <input type="text" name="lastName" value="<?= isset($employee) ? $employee->lastName : ''; ?>" required>
                        <br>
                        
                        First name:<br>
                        <input type="text" name="firstName" value="<?= isset($employee) ? $employee->firstName : ''; ?>" required>
                        <br>
                
                        Extension:<br>
                        <input type="text" name="extension" value="<?= isset($employee) ? $employee->extension : ''; ?>" required>
                        <br>
                
                        Email:<br>
                        <input type="text" name="email" value="<?= isset($employee) ? $employee->email : ''; ?>" required>
                        <br>
                
                        Office Code:<br>
                        <select name="officeCode" required>
                            <option value="Null">&nbsp;</option>
                            <option value="1" <?= (isset($employee) && $employee->officeCode == 1) ? "selected" : ''; ?>>1</option>
                            <option value="2" <?= (isset($employee) && $employee->officeCode == 2) ? "selected" : ''; ?>>2</option>
                            <option value="3" <?= (isset($employee) && $employee->officeCode == 3) ? "selected" : ''; ?>>3</option>
                            <option value="4" <?= (isset($employee) && $employee->officeCode == 4) ? "selected" : ''; ?>>4</option>
                            <option value="5" <?= (isset($employee) && $employee->officeCode == 5) ? "selected" : ''; ?>>5</option>
                            <option value="6" <?= (isset($employee) && $employee->officeCode == 6) ? "selected" : ''; ?>>6</option>
                            <option value="7" <?= (isset($employee) && $employee->officeCode == 7) ? "selected" : ''; ?>>7</option>
                        </select>
                        <br>
                
                        Reports To:<br>
                        <select name="reportsTo" required>
                            <option value="Null">&nbsp;</option>
                            <option value="1002" <?= (isset($employee) && $employee->reportsTo == 1002) ? "selected" : ''; ?>>1002</option>
                            <option value="1056" <?= (isset($employee) && $employee->reportsTo == 1056) ? "selected" : ''; ?>>1056</option>
                            <option value="1076" <?= (isset($employee) && $employee->reportsTo == 1076) ? "selected" : ''; ?>>1076</option>
                            <option value="1088" <?= (isset($employee) && $employee->reportsTo == 1088) ? "selected" : ''; ?>>1088</option>
                            <option value="1102" <?= (isset($employee) && $employee->reportsTo == 1102) ? "selected" : ''; ?>>1102</option>
                            <option value="1143" <?= (isset($employee) && $employee->reportsTo == 1143) ? "selected" : ''; ?>>1143</option>
                            <option value="1165" <?= (isset($employee) && $employee->reportsTo == 1165) ? "selected" : ''; ?>>1165</option>
                            <option value="1166" <?= (isset($employee) && $employee->reportsTo == 1166) ? "selected" : ''; ?>>1166</option>
                            <option value="1188" <?= (isset($employee) && $employee->reportsTo == 1188) ? "selected" : ''; ?>>1188</option>
                            <option value="1216" <?= (isset($employee) && $employee->reportsTo == 1216) ? "selected" : ''; ?>>1216</option>
                            <option value="1286" <?= (isset($employee) && $employee->reportsTo == 1286) ? "selected" : ''; ?>>1286</option>
                            <option value="1323" <?= (isset($employee) && $employee->reportsTo == 1323) ? "selected" : ''; ?>>1323</option>
                            <option value="1337" <?= (isset($employee) && $employee->reportsTo == 1337) ? "selected" : ''; ?>>1337</option>
                            <option value="1370" <?= (isset($employee) && $employee->reportsTo == 1370) ? "selected" : ''; ?>>1370</option>
                            <option value="1401" <?= (isset($employee) && $employee->reportsTo == 1401) ? "selected" : ''; ?>>1401</option>
                            <option value="1501" <?= (isset($employee) && $employee->reportsTo == 1501) ? "selected" : ''; ?>>1501</option>
                            <option value="1504" <?= (isset($employee) && $employee->reportsTo == 1504) ? "selected" : ''; ?>>1504</option>
                            <option value="1611" <?= (isset($employee) && $employee->reportsTo == 1611) ? "selected" : ''; ?>>1611</option>
                            <option value="1612" <?= (isset($employee) && $employee->reportsTo == 1612) ? "selected" : ''; ?>>1612</option>
                            <option value="1619" <?= (isset($employee) && $employee->reportsTo == 1619) ? "selected" : ''; ?>>1619</option>
                            <option value="1621" <?= (isset($employee) && $employee->reportsTo == 1621) ? "selected" : ''; ?>>1621</option>
                            <option value="1625" <?= (isset($employee) && $employee->reportsTo == 1625) ? "selected" : ''; ?>>1625</option>
                            <option value="1702" <?= (isset($employee) && $employee->reportsTo == 1702) ? "selected" : ''; ?>>1702</option>
                        </select>
                        <br>
                
                        Job Title:<br>
                        <input type="text" name="jobTitle" value="<?= isset($employee) ? $employee->jobTitle : ''; ?>" required>
                        <br>
                
                        <br><br>
                        
                        <input type="submit" value="Save" name="submit">
                    </div>
                </form> 
            </fieldset>
        </div>

    </body>
</html>
