<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <style> 
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.login-container {
    width: 90%;
    max-width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.login-container h2, h1 {
    text-align: center;
    margin-bottom: 20px;
}
.login-container input[type="text"],
.login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}
.login-container button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: #0DCAF0;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}
@media (max-width: 600px) {
    .login-container {
        width: 100%;
        padding: 15px;
    }
}
</style>

    <title>Iniciar sesión</title>
</head>
<div class="login-container">
    <body>   
<h1>PerfectRoom</h1>

        <form method="POST">
        <input type="hidden" name="action" value="login">
            <input type="text" name="username" id= "username" placeholder="Usuario" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <button type="submit" class="btn btn-info" role="button">Iniciar sesión</button>

        </form>
    </div>
    <div>
    <?php if(isset($error)): ?>
        <div class="alert alert-danger h-100 mt-3">
            <p><?php echo e($error); ?></p>
            <p><?php echo e($mensaje); ?></p>
        </div>
    <?php endif; ?>
    </div>

</body>

</html>