<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"])  or empty($_POST["gender"]) or empty($_POST["dob"]) )  
      {  
           
      }
      else  
      {  
           if(file_exists('Users.json'))  
           {  
                $current_data = file_get_contents('Users.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'gender'          =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"], 
                     'email'     =>     $_POST["mail"],  
                     'phone'     =>     $_POST["phone"],  
                     'bio'     =>     $_POST["bio"],
                     'password'     =>     $_POST["password"],
                     'following'     =>     0,
                     'followers'     =>    0


                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('Users.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Account Created Successfully</p>";  
                     header('Location: login.html');
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Append Data to JSON File using PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>
$font-family:   "Roboto";
$font-size:     14px;
$color-primary: #ABA194;
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100vh
}



.form {
    margin-top: 40px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.form__input {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    border: 0;
    outline: 0;
    transition: 0.3s;
    
    &:focus {
        background: darken(#fff, 3%);
    }
}

.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: $color-primary;
    transition: 0.3s;
    
    &:hover {
        background: darken($color-primary, 5%);
    }
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
                </style>
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h1 align="center">REGISTER</h1><br />                 
                <form method="post" name="myForm">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" ng-model="name" class="form-control" required/>
                     <br />  
                     <label>Gender</label>  
                     <input type="text" name="gender" class="form-control" required/>
                    
                    <br />  
                     <label>DOB</label>  
                     <input type="text" name="dob" class="form-control" required/><br />  
                     <label>Email</label>  
                     <input type="mail" name="mail" class="form-control" required/><br />  
                     <label>Phone Number</label>  
                     <input type="text" name="phone" class="form-control" required /><br />  
                     <label>Bio</label>  
                     <input type="text" name="bio" class="form-control"  required/>  
                    <br />
                     <label>Password</label>  
                     <input type="password" name="password" ng-model="password" class="form-control" required />
                     <br />  
                     <input type="submit" name="submit" value="REGISTER" class="btn btn-info" /><br />                      
                     <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?> 
                </form> 

           </div>  
           <br />  
      </body>  
 </html>  