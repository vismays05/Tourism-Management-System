<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["email"];
     $sql = "INSERT INTO `tbl_subscribe` ( `emailid`) VALUES ('$email')";   
          $result = mysqli_query($conn, $sql);
          if ($result){
              $showAlert = true;
              echo "<script>alert('You have successfully subscribed.');
                    window.history.back(1);
                    </script>";
          }
      }
      
?>