<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap style -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">

    <!-- bootstrap js -->
    <link rel="stylesheet" href="<?php echo base_url('js/bootstrap.bundle.min.js') ?>">


    <title>RumahWeb</title>
</head>
<body>

    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                    <form>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3cg">Email</label>
                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cdg">Birtday</label>
                        <input type="date" id="form3Example4cdg" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cdg">Password</label>
                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                        </div>

                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                        </div>

                        <div class="d-flex justify-content-center">
                        <button type="button"
                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                            class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>
</html>