<?php
   if (isset($_POST['register'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $password = $_POST['password'];

       exit('success');
   }
 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="modal" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registration form</h5>
                </div>
                <div class="modal-body">
                    <input type="text" id="userName" class="form-control" placeholder="Your Name">
                    <input type="email" id="userEmail" class="form-control" placeholder="Your Email">
                    <input type="password" id="userPassword" class="form-control" placeholder="Your Password">
                    
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="registerBtn" >Register</button>
                    <button class="btn-default btn" data-dismiss="modal">close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="logInModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Log In Form</h5>
                </div>
                <div class="modal-body">
                    <input type="email" id="userLEmail" class="form-control" placeholder="Your Email">
                    <input type="password" id="userLPassword" class="form-control" placeholder="Password">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="loginBtn">Log In</button>
                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
   <div class="container">
       <div class= "row">
           <div class="col-md-12 button" align="right" >
              <button class="btn btn-primary" data-toggle="modal" data-target="#registerModal">REGISTER</button>
              <button class="btn btn-success" data-toggle="modal" data-target="#logInModal">LOGIN</button>

           </div>
       </div>
              <div class= "row" style="margin-top: 20px;margin-bottom: 20px;">
           <div class="col-md-12" align="center">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/eD02QLsTUnY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           </div>
       </div>
       <div class= "row">
           <div class="col-md-12" >
             <textarea placeholder="Add Public comment" id="" cols="90" rows="2" class="form_control"></textarea>
             <button style ="float:right" class="btn btn-primary">Add comment</button> 
           </div>
       </div>

       <div class= "row">
           <div class="col-md-12">
               <h2><b>335 comments</b></h2>
             <div class="userComments">
                 <div class="comments">
                     <div class="user"> Ayush das <span class="time">2020-03-15</span></div>
                     <div class="userComment">hey, how are you?</div>
                     <div class="replies">
                        <div class="comment">
                        <div class="user"> Ayush das <span class="time">2020-03-15</span></div>
                        <div class="userComment">hey, how are you?</div>
                        </div>
                        <div class="comment">
                        <div class="user"> Ayush das <span class="time">2020-03-15</span></div>
                        <div class="userComment">hey, how are you?</div>
                        </div>
                        <div class="comment">
                        <div class="user"> Ayush das <span class="time">2020-03-15</span></div>
                        <div class="userComment">hey, how are you?</div>
                        </div>
                        <div class="comment">
                        <div class="user"> Ayush das <span class="time">2020-03-15</span></div>
                        <div class="userComment">hey, how are you?</div>
                        </div>
                        
               
             </div>  
           </div>
       </div>

       <div class= "row">
           <div class="col-md-12">
               
           </div>
       </div>



   </div>
   <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript">
         $("#registerBtn").on('click', function () {
               var name = $("#userName").val();
               var email = $("#userEmail").val();
               var password = $("#userPassword").val();

               if (name != "" && email != "" && password != "") {
                    $.ajax({
                        url: 'index.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            register: 1,
                            name: name,
                            email: email,
                            password: password
                        }, success: function (response) {
                            console.log(response);
                        }
                    });
               } else
                   alert('Please Check Your Inputs');
           });

    
</script>

</body>
    
</html>