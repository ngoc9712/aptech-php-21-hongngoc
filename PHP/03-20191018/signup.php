<?php
   include('connect.php');
   if(isset($_POST['submit2'])){
          $email = $_POST['email'];
           $password = $_POST['password'];
        if(empty($email) || empty($password)){
          echo'ban chua nhap du thong tin';
        }else
            {
              $sql = "INSERT INTO ap_21_4.users (email,pass_word
              ) VALUES  ('$email',' $password')";
              $result=mysqli_query($conn, $sql);
              if(!$result){
                echo"insert is failed";
              }
            }
        }
    if(isset($_POST['submit']))
    {
            $email = $_POST['email'];
            $password = $_POST['password'];
              if(empty($email) || empty($password))
                  {
                       echo'ban chua nhap du thong tin';
                   }
    
            else
                 {
                         $sql ="SELECT * FROM users WHERE email='$email'AND pass_word ='$password'";
                        $result = mysqli_query($conn, $sql);
                        $dem = mysqli_num_rows($result);
                        if ($dem != 0)
                   {
                          $row = mysqli_fetch_assoc($result);
                         echo "email :".$row["email"]."<br>" . "- password :" . 
                         $row["pass_word"]."<br>";
                          echo"dang nhap thanh cong";
                    }   
                             else
                    {
                           echo"failed";
                    }
       }
    }
    mysqli_close($conn);
?>