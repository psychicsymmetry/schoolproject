<html>
    <head>
    </head>
    <body>
        <?php
            if(isset($_POST['unameAuth']) && isset($_POST['pass'])){
                $un = $_POST['unameAuth'];
                $pa = $_POST['passAuth'];
                $db = new PDO('sqlite:users.db');
                $results = $db->query('SELECT * FROM users WHERE Username = '."'".$un."'");
                foreach($results as $row){
                    if($row['Password'] == $pa){
                        echo 'Logged in';
                    }
                    else{
                        echo "Incorrect input. Cranial bombs activated. Goodbye freak prepare for eradication";
                    }
                }
            }
            else{
                echo 'Please sign in.';
            }
        ?>
    </body>
</html>