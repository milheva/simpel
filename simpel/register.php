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
    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="shadow-lg my-5">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4">Registrasi Akun</h1><h2>Aplikasi Pengaduan Masyarakat</h2><br>
                  </div>

                  <form method="post" action="simpan_register.php">

                    <div>
                      <input type="text" name="nik" class="form-control" placeholder="masukkan NIK" required>
                    </div>

                    <div>
                      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                    </div>

                     <div>
                      <input type="text" name="username" class="form-control" placeholder="masukkan username" required>
                    </div>

                     <div>
                      <input type="password" name="password" class="form-control" placeholder="masukkan password" required>
                    </div>

                     <div>
                      <input type="text" name="telp" class="form-control" placeholder="Masukan No Telepon" required>
                    </div><br>

                     
                   <div>
                   <input type="submit" class="btn btn-primary" value="Daftar">
                    </div>
                    <hr>
                   
                  </form>

                  <div class="text-center">
                  Sudah Punya Akun?<br>
                  <a class="small" href="index.php">Silahkan Login!</a>
                  </div>
                
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
