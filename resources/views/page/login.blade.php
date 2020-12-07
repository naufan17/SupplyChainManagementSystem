<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Signin Template · Bootstrap</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="assets/css/signin.css">
    </head>
    <body class="text-center">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-12 px-md-4">
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <form class="form-signin">
                    <h1 class="h4 mb-3 font-weight-normal">Masuk</h1>
                    <label for="inputEmail" class="sr-only">
                        Alamat Email
                    </label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Alamat Email" required autofocus>
                    <label for="inputPassword" class="sr-only">
                        Kata Sandi
                    </label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Kata Sandi" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Ingat Saya
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
        </main>
    </body>
</html>
