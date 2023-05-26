<?php 
    session_start();
    include_once "db.php";
    $AVID2 = mysqli_real_escape_string($conn, $_POST['AVID2']);
    $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
    
    $sql = mysqli_query($conn, "SELECT * FROM register WHERE AVID = '{$AVID2}'");
    $sql2 = mysqli_query($conn, "SELECT * FROM register WHERE password = '{$password2}'");
    if(mysqli_num_rows($sql) > 0){
        if(mysqli_num_rows($sql2) > 0){
            echo "<script> alert('You have logged in to your account')
            </script>";
            $sql3 = "SELECT `name` FROM register WHERE AVID = '{$AVID2}'";
            $result = mysqli_query($conn, $sql3 );
            
            $num = mysqli_num_rows($result);
            if($num>0){
                while($row = mysqli_fetch_assoc($result)){
                    $full_name = $row;
                }
            }
            $_SESSION['AVID'] = $AVID2;
            $_SESSION['AVPass'] = $password2;
            $_SESSION['name'] = $full_name;
            header("refresh:1;url= index.php");
        }
        else{
            echo "<script> alert('Wrong Password')
            </script>";
            header("refresh:1;url= index.php");
        }
    }else{
        echo "<script> alert('Wrong AVID and password')
        </script>";
        header("refresh:1;url= index.php");
    }
    
?>