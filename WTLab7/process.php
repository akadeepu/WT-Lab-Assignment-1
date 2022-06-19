<?php

    $con = mysqli_connect('localhost','root','','lab7th');

?>


<?php

if (isset($_POST['submit'])) {
    
    $name = $_POST['username'];
    $fullname = trim($name);
    $mail = $_POST['email'];
    $email = trim($mail);
    $pass = $_POST['password'];
    $password = trim($pass);
    $cpass = $_POST['conpassword'];
    $confirmpassword = trim($cpass);
    
    

    if ($fullname == " " || $email==" " || $password==" " || $confirmpassword==" ") {
        echo " <script>alert('All fields are required');</script>";
    }

    else{
        if (preg_match("/^[a-zA-Z]+ [a-zA-Z]+$/",$fullname) && filter_var($email,FILTER_VALIDATE_EMAIL) && $password==$confirmpassword) {

            

                $query ="INSERT INTO `signup`(`fullname`, `email`, `password`) VALUES ('$fullname','$email','$password')";

                $run = mysqli_query($con,$query);

                if ($run) {
                    echo "<script>
                    alert('Admin added');window.location.href='index.php';
                    </script>";
                }
                else{
                    echo "<script>
                    alert('somthing went wrong');window.location.href='index.php';
                    </script>";
                }
        }
            
              
        
        else{
            echo "<script>
                alert('Please Enter Valid Information');window.location.href='index.php';
                </script>";
        }
    }


    
}

?>