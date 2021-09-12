<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>help desk</title>
</head>
<body>

<style type="text/css">
   

.container{
    width: 100vw;
    height: 100vh;
    justify-content: center;
    align-items: center;
    display: flex;
    flex-direction: row;
}

.form-signin{
    width: 300px;
    height: 300px;
}

.form-control{
    margin-top: 1em;
    margin-bottom: 1em;
}

</style>

<div class="container">
        <div class="card card-container">
          

            <form class="form-signin" action="admin.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="email" id="inputEmail" class="form-control" name="email"placeholder="Seu email" required autofocus>

                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required>
                
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>

            </form>
</body>
</html>