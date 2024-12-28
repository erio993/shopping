<?php
@include 'confi-n.php';

if(isset($_POST['signup'])){
    $name=mysqli_real_escape_string($conn,$_POST['user']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $pass=md5($_POST['pass']);

    $select=" SELECT * FROM sign_up WHERE email='$email' && password='$pass' ";

    $result = mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        $error[] ='user already exist!';
    }else{
        $insert="INSERT INTO sign_up(user , email, password) VALUE('$name', '$email','$pass')"   ;
        mysqli_query($conn,$insert);
        header('location:login_form.php');
    }
  
   

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="new project 3.css" >
    <link rel="styesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="header">

        <div class="navigation">
            <div class="logo">
                <h4>SHOPPING </h4>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="new project.html" >HOME</a></li>
                    <li><a href="new project 2.html" >SHOP</a></li>
                    <li><a href="#" >SERVICES</a></li>
                    <li><a href="#" >BLOG</a></li>
                    <li><a href="contact.html" >CONTACT</a></li>
                    <li> <a href="newprojec 3.php" >SIGN UP</a></li>
                    <li> <a href="login page.php" >LOG IN</a></li>
                </ul>
                <div class="numero">
                    <i class="fa-regular fa-address-card"></i> <p>212+772258233</p>
            </div>
            </div>
        </div>
    </header>

     <section class="Registre">
      <form action="" method="post">
      <?php
if(isset($error)){
    foreach($error as $error){
        echo'<span class="error-msg>'.$error.'</span>';
    }
}


?>  
        <div class="reg">
        <div class="container">
            <div class="logoo">
                <h4>Sing up</h4>
            </div>

            <div class="button">
            <button class="btn btn-dark" style="width: 110px;  "id="apple-btn" ><img src="https://logodownload.org/wp-content/uploads/2013/12/apple-logo-1-2.png" class="image1"> Apple</button>         
            <button class="btn btn-dark"style="width: 120px;"id="google-btn" > <img src="https://cdn4.iconfinder.com/data/icons/logos-brands-7/512/google_logo-google_icongoogle-512.png" class="image2" alt="">Google</button>


        </div>
       <hr>
       
            <div class="input-box">
                <input type="text" name="user" class="inpute" placeholder="Last Name"><i class="fa-solid fa-user"></i><br><br>
            </div>
            <div class="input-box">
                <input type="email"  name="email" class="inpute" placeholder="email@gmail.com"><i class="fa-solid fa-envelope"></i><br><br>
            </div>
            <div class="input-box">
                <input type="password"  name="pass" class="inpute" placeholder="Password"><i class="fa-solid fa-lock"></i></i><br><br>
            </div>
           
                
          <div class="sign-up">
            <button class="btn btn-success" id="signup-btn" name="signup" >Sign up</button>
        </div>
            </div>
        </div>
    </div>
     </section>
     
    </form>

    
</body>
</html>