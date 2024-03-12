<?php
include('dbcon.php');
?>
<?php
      //login
if(isset($_POST['login'])){
    $userEmail=$_POST['uEmail'];
    $userPassword=$_POST['uPassword'];
    $query=$pdo->prepare("select * from users where email= :userEmail AND password= :userPassword");
    $query->bindParam('userEmail',$userEmail);
    $query->bindParam('userPassword',$userPassword);
    $query->execute();
    $user=$query->fetch(PDO::FETCH_ASSOC);
   // print_r($user);
    if($user['role_id'] == 1){
        $_SESSION['adminName']=$user['name'];
        $_SESSION['adminEmail']=$user['email'];
        echo "<script>alert('login successfully')
        location.assign('index.php')
        </script>";
    }
    elseif ($user['role_id'] == 2) {
        $_SESSION['lawId']=$user['id'];
        $_SESSION['lawName']=$user['name'];
        $_SESSION['lawEmail']=$user['email'];
        echo "<script>alert('login successfully')
        location.assign('rough.php')
        </script>";
    }
elseif ($user['role_id'] == 3) {
    $_SESSION['userId']=$user['id'];
    $_SESSION['userName']=$user['name'];
    $_SESSION['userEmail']=$user['email'];
    echo "<script>alert('login successfully')
    location.assign('rough.php')
    </script>";
}
}

//signup
if(isset($_POST['signUp'])){
    $name=$_POST['uName'];
    $email=$_POST['uEmail'];
    $pass=$_POST['uPassword'];
    $query=$pdo->prepare("insert into users(name,email,password)values(:sName,:sEmail,:sPassword)");
            $query->bindParam('sName',$name);
            $query->bindParam('sEmail',$email);
            $query->bindParam('sPassword',$pass);
            $query->execute();
            $user=$query->fetch(PDO::FETCH_ASSOC);
           // print_r($user);
            echo "<script>alert('register added successfully')
        location.assign('auth-login-basic.php');
        </script>";
        }
?>