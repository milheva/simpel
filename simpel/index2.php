<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>
  <!-- Custom styles for this template-->
  <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 ">

        <div class="shadow-lg my-5">
            <!-- Nested Row within Card Body -->         
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4">WELCOME Admin/Petugas</h1><h2>Aplikasi Pengaduan Masyarakat</h2>
                  </div><br>  
                    
                  <form method="post" action="cek_login2.php">
                    <div>
                      <input type="text" name="username" class="form-control" placeholder="masukkan username" required>
                    </div><br>

                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div><br>

                   <input type="submit" class="btn btn-primary" value="Login!">
                   <hr>
                   
                  </form>
                  
                  <div class="text-center">
                  <a class="small" href="index.php">Kembali Ke Beranda</a>
                  </div>

                              
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>



</body>

</html>
