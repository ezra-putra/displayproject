<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login - Display Information</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="container py-1 h-100 vh-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center mt-3">
                                <img src="https://gms.church/images/gms/short-black.svg" alt="Logo" class="img-fluid" width="100" height="70">
                            </div>
                            <p class="text-center mt-3 mb-2" style="font-size: 20px">Welcome Home!</p>
                            <form action="#" class="mt-2" method="POST">
                                @csrf
                                <div class="mb-1">
                                    <label for="mail" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email"
                                        placeholder="john@example.com" aria-describedby="email" tabindex="1"
                                        autofocus />
                                </div>

                                <div class="mb-1">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password">Password</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge"
                                            id="password" name="password" tabindex="2"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                    </div>
                                </div>
                                <button class="btn btn-dark w-100 mb-1 mt-4" tabindex="4">SIGN IN</button>
                            </form>
                            <p class="text-center mt-2">
                                <a href="#">
                                    <span>Create an account</span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
