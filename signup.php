<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <!-- BOOTSTRAP LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
</head>

<body>

<div class="container mt-5">
    <div class="row bg-danger rounded p-3">
        <div class="col-md-12 fs-2 text-center text-light fw-bolder">
            Signup Here
        </div>
    </div>
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-8 ">
            <!--textboxes-->
            <form action="action.php?action=signup" method="post">
                <p>
                    <!--txtEmail-->
                <div class="form-floating mb-3 border border-danger rounded">
                    <input type="email" class="form-control" name="username" placeholder="Username" required>
                    <label for="floatingInput">Username</label>
                   
                </div>
                <!--txtPwd-->
                <div class="form-floating border border-danger rounded">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    
                </div>
                </p>
                <div class="d-flex justify-content-center mt-5">
                <button type="submit" class="btn btn-outline-danger btn-lg">Signup</button>
            </div>
            </form>
            
        </div>
        
    </div>
    </div>
</body>

</html>