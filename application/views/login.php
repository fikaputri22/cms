<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (untuk ikon) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-container {
            background-color: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h3 {
            font-weight: bold;
            color: #007bff;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 0.9rem;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5">
            <div class="login-container">
                <form action="<?= base_url('auth/login')?>" method="post">
                    <div class="text-center mb-4">
                        <h3><i class="fa fa-user-edit me-2"></i> Login</h3>
                    </div>
                    <!-- Username -->
                    <div class="form-floating mb-3">
                        <label for="floatingInput">Username</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
                    </div>
                    <!-- Password -->
                    <div class="form-floating mb-4">
                        <label for="floatingPassword">Password</label>
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    </div>
                    <!-- Error Message -->
                    <?php if ($this->session->flashdata('alert')): ?>
                        <div class="alert alert-danger">
                            <?= $this->session->flashdata('alert'); ?>
                        </div>
                    <?php endif; ?>
                    <!-- Sign In Button -->
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    <div class="text-center mt-3">
                            <p>Tidak punya akun? <a href="<?= base_url('auth/view_register') ?>" class="text-primary">Ayo buat!</a></p>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery (for responsiveness) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
