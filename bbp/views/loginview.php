

<?php 
  if(isset($_POST['submit']))
  {
    $loginuser = new LoginController();
    $loginuser->auth();

  }
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="stylee.css" />
    <title>Sign In Form</title>


	</head>
<body>

   

    <div class="container">
      <div class="forms-container">
        <div class="signin">
          <form class="sign-in-form" method="post" action="">
            <h2 class="title"><b>Sign in</b></h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <button class="btn solid" name="submit">Login</button>
            
            </div>




          </form>

        </div>

      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1><b>BLOOD BANK MANAGEMENT SYSTEM</b></h1>


          </div>
          <img src="./views/includes/assets/log.svg" class="image"  />
        </div>
        </div>
      </div>
    </div>

  </body>
</html>
