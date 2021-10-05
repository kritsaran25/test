<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style_login.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  </style>
</head>

<body>
  <form name="login" method="post" action="php_action/check_login.php">
    <div class="form">
      <div class="title">PSU PASSPORT</div>
      <div class="subtitle">Login form</div>
      <div class="input-container ic2">
        <input name="u_username" class="input" type="text" placeholder=" " />
        <div class="cut"></div>
        <label for="username" class="placeholder">USERNAME</label>
      </div>
      <div class="input-container ic2">
        <input name="u_password" class="input" type="password" placeholder=" " />
        <div class="cut"></div>
        <label for="password" class="placeholder">PASSWORD</label>
      </div>
      <input type="submit" value="login" class="login value=" Login" "></input>>
  </div>
</form>
</body>
</html>