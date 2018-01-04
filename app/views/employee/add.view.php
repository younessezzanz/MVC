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
                        <input type="text" name="lastName" value="" required>
                        <br>
                        
                        First name:<br>
                        <input type="text" name="firstName" value="" required>
                        <br>

                        Extension:<br>
                        <input type="text" name="extension" value="" required>
                        <br>

                        Email:<br>
                        <input type="text" name="email" value="" required>
                        <br>

                        Office Code:<br>
                        <select name="officeCode" required>
                            <option value="Null">&nbsp;</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <br>

                        Reports To:<br>
                        <select name="reportsTo" required>
                            <option value="Null">&nbsp;</option>
                            <option value="1002">1002</option>
                            <option value="1056">1056</option>
                            <option value="1076">1076</option>
                            <option value="1088">1088</option>
                            <option value="1102">1102</option>
                            <option value="1143">1143</option>
                            <option value="1165">1165</option>
                            <option value="1166">1166</option>
                            <option value="1188">1188</option>
                            <option value="1216">1216</option>
                            <option value="1286">1286</option>
                            <option value="1323">1323</option>
                            <option value="1337">1337</option>
                            <option value="1370">1370</option>
                            <option value="1401">1401</option>
                            <option value="1501">1501</option>
                            <option value="1504">1504</option>
                            <option value="1611">1611</option>
                            <option value="1612">1612</option>
                            <option value="1619">1619</option>
                            <option value="1621">1621</option>
                            <option value="1625">1625</option>
                            <option value="1702">1702</option>
                        </select>
                        <br>

                        Job Title:<br>
                        <input type="text" name="jobTitle" value="" required>
                        <br>

                        <br><br>
                        <input type="submit" value="Save" name="submit">
                    </div>
                </form> 
            </fieldset>
        </div>

    </body>
</html>
