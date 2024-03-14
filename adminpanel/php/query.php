<?php
include('dbcon.php');
session_start();

//login
if(isset($_POST['login'])){
    $userEmail=$_POST['uEmail'];
    $userPassword=$_POST['uPassword'];
    $query=$pdo->prepare("select * from users where email= :userEmail AND password= :userPassword");
    $query->bindParam('userEmail',$userEmail);
    $query->bindParam('userPassword',$userPassword);
    $query->execute();
    $user=$query->fetch(PDO::FETCH_ASSOC);
   //print_r($user);
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

        //add Lawyers
if(isset($_POST['addLawyers'])){
    $lName=$_POST['lName'];
    $lEmail=$_POST['lEmail'];
    $lcontact=$_POST['lCon'];
    $lSpec=$_POST['lSpeci'];
    $lCity=$_POST['lCity'];
    $lEduc=$_POST['lEdu'];
    $lExp=$_POST['lexp'];
    $lDes=$_POST['lDes'];
    $lImageName=$_FILES['lImage']['name'];
    $lImageTmpName=$_FILES['lImage']['tmp_name'];
    $extension=pathinfo($lImageName,PATHINFO_EXTENSION);
    $destination="../assets/img/".$lImageName;
    if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg"|| $extension == "webp"){
        if(move_uploaded_file($lImageTmpName,$destination)){
            $query=$pdo->prepare("insert into lawyers(name,email,contact,specialization,city,Education,experience,des,image)
            values(:lName,:lEmail,:lCon,:lSpeci,:lCity,:lEdu,:lexp, :lDes, :lImage)");
            $query->bindParam('lName',$lName);
            $query->bindParam('lEmail',$lEmail);
            $query->bindParam('lCon',$lcontact);
            $query->bindParam('lSpeci',$lSpec);
            $query->bindParam('lCity',$lCity);
            $query->bindParam('lEdu',$lEduc);
            $query->bindParam('lexp',$lExp);
            $query->bindParam('lDes',$lDes);
            $query->bindParam('lImage',$lImageName);
            $query->execute();
            echo "<script>alert('Category added successfully');
        location.assign('index.php');
        </script>";
        }
    }

}
//update lawyers
if(isset($_POST['updateLawyers'])){
    $id=$_GET['lid'];
    $lName=$_POST['lName'];
    $lEmail=$_POST['lEmail'];
    $lcontact=$_POST['lCon'];
    $lSpec=$_POST['lSpeci'];
    $lCity=$_POST['lCity'];
    $lEduc=$_POST['lEdu'];
    $lExp=$_POST['lexp'];
    $lDes=$_POST['lDes'];
    $query=$pdo->prepare("update lawyers set name=:uName,email=:uEmail,contact=:uCon,specialization=:uSpeci,city=:uCity,Education=:uEdu,experience=:uexp,des=:uDes where id=:lid");
    if(isset($_FILES['lImage'])){
        $lImageName=$_FILES['lImage']['name'];
        $lImageTmpName=$_FILES['lImage']['tmp_name'];
        $extension=pathinfo($lImageName,PATHINFO_EXTENSION);
        $destination="../assets/img/".$lImageName;
        if($extension == "jpg"|| $extension == "png"|| $extension == "jpeg"|| $extension == "webp"){
            if(move_uploaded_file($lImageTmpName,$destination)){
                $query=$pdo->prepare("update lawyers set name=:uName,email=:uEmail,contact=:uCon,specialization=:uSpeci,city=:uCity,Education=:uEdu,experience=:uexp,des=:uDes,image=:uImage where id=:lid");
                $query->bindParam('uImage',$lImageName);  
    
}
}
            $query->bindParam('lid',$id);
            $query->bindParam('uName',$lName);
            $query->bindParam('uEmail',$lEmail);
            $query->bindParam('uCon',$lcontact);
            $query->bindParam('uSpeci',$lSpec);
            $query->bindParam('uCity',$lCity);
            $query->bindParam('uEdu',$lEduc);
            $query->bindParam('uexp',$lExp);
            $query->bindParam('uDes',$lDes);
            $query->execute();
            echo "<script>alert('lawwyers update successfully');
        location.assign('viewLawyers.php');
        </script>";
        }
    }

?>