<!DOCTYPE html>
<html>
    <head>
        <title>weFurnish | Signup</title>
        <link rel="stylesheet" type="text/css" href="signup.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>

        <?php
            if(isset($_REQUEST['btnSub'])){
                $xml = new DOMDocument("1.0", "UTF-8");
                $xml->load("data.xml");

                $rootTag = $xml->getElementsByTagName("users")->item(0);

                $nameTag = $xml->createElement("user");

                $usernameTag = $xml->createElement("username", $_REQUEST["username"]);
                $genderTag = $xml->createElement("gender", $_REQUEST["gender"]);
                $emailTag = $xml->createElement("email", $_REQUEST["email"]);
                $mobileTag = $xml->createElement("mobile", $_REQUEST["mobile"]);

                $nameTag->appendChild($usernameTag);
                $nameTag->appendChild($genderTag);
                $nameTag->appendChild($emailTag);
                $nameTag->appendChild($mobileTag);

                $rootTag->appendChild($nameTag);

                $xml->save("data.xml");
            }
        ?>

        <center>
        <div style="margin-top: 10%; margin-bottom: 10%;" id="register">
            <br>
            <h1>REGISTER</h1>
            <br>
            <form action='index.php' method='POST'>
                <table valign="left" border="0" cellspacing="4" cellpadding="4">
                    <tr><td><b>User Name</b></td><td><input type="text" id="username" name="username" ></td></tr>
                    <tr><td><b>Password</b></td><td><input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" ></td></tr>
                    <tr><td><b>Gender</b></td><td><input type="radio" id="gender" name="gender" value="Male" > Male&emsp;<input type="radio" name="gender" value="Female"> Female</td></tr>
                    <tr><td><b>E-mail Id.</b></td><td><input type="email" id="email" name="email" ></tr>
                    <tr><td><b>Mobile No.</b></td><td><input type="tel" id="mobile" name="mobile" ></tr>
                    <tr><td></td><td><input type="submit" id="btnSub" name="btnSub" value="Submit" class="btn btn-dark">&nbsp;&nbsp;&nbsp;<a href="login" class="btn btn-dark">Signin</a></td></tr>
                </table>
            </form>
            </div>
            </div>
        </center>
    </body>
</html>