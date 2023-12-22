<?php
$name1=$_POST['name1'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$degree=$_POST['degree'];
$dept=$_POST['dept'];
$college=$_POST['college'];
$dist=$_POST['dist'];
$submit=$_POST['submit'];



if(isset($submit)){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="project";

    $conn =new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(!empty($name1)||!empty($email)||!empty($gender)||!empty($phone)||!empty($degree)||!empty($dept)||!empty($college)||!empty($dist)){

        if(!empty($_POST['tc'])){
            $tc=$_POST['tc'];
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                if(mysqli_connect_error()){
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
                else{
                    $SELECT ="SELECT email FROM booking WHERE email=? LIMIT 1";
                    $INSERT="INSERT INTO booking(name1,email,gender,phone,degree,dept,college,dist,tc)values(?,?,?,?,?,?,?,?,?)";
                    $stmt=$conn->prepare($SELECT);
                    $stmt->bind_param("s",$email);
                    $stmt->execute();
                    $stmt->bind_result($email);
                    $stmt->store_result();
                    $rnum=$stmt->num_rows;
                    if($rnum==0){
                        $stmt=$conn->prepare($INSERT);
                        $stmt->bind_param("sssisssss",$name1,$email,$gender,$phone,$degree,$dept,$college,$dist,$tc);
                        $stmt->execute();
                        header('location:thanks.html');
                    }
                    else{
                        echo '<script>alert("Registeration Failed...")</script>';
                    }
                }
            }else{
                echo '<script>alert("Enter a valid email...")</script>';
            }
        }else{
            echo '<script>alert("Please accept our Terms and Conditions...")</script>';
        }
    }else{
        echo '<script>alert("All fields are Required...")</script>';
        
    }
}
?>