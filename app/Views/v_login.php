<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Form Login</h3>
                <hr>
                <form action="<?= base_url('login/proses') ?>" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    
</body>
</html>