<DOCTYPE>
    <html>
        <body>
            <form action="laprak2.php" method="post">
                Username: <input type="text" name="Username"><br>
                Password: <input type="password" name="Password"><br>
                <input type="submit">
                <?php
                $username = $password ="";
                $valid_username= true;
                $valid_username_msg="";
                $valid_password= true;
                $valid_password_msg="";
                $password_valid=true;
                $password_valid_msg="";
                if(strlen($username)>=7){
                    $valid_username = false;
                    $valid_username_msg = "username tidak lebih 7 karakter";
                }
                if(!preg_match("/^[a-zA-Z]*$/", $password)){
                    $password_valid = false;
                    $password_valid_msg = "password terdiri dari huruf, angka dan karakter khusus";
                }
                if(strlen($password)<=10){
                    $valid_password = false;
                    $valid_password_msg = "password tidak kurang 10 karakter";
                }
                ?>
            </form>  
        </body>
    </html>