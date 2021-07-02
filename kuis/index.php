<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7f68d15522.js" crossorigin="anonymous"></script>
    <title>SIP Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/imges/favicon.ico"/>
    <!-- CSS halaman kuis -->
    <link href="../css/kuis_style.css" rel="stylesheet">

    <?php require "../koneksi.php"?>

    <?php
        session_start();
        $sql = "SELECT * FROM kuis";
        $result = $conn->query($sql);
    ?>
  </head>
  <body>
    <style>
      .pricing .judul_kuis {
        font-size: 3rem;
        margin: 0;
      }
      /* Hover Effects on Card */
      @media (min-width: 992px) {
        .pricing .card:hover {
          margin-top: -.25rem;
          margin-bottom: .25rem;
          box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
        }
      }
    </style>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="pricing py-5 bg-light" style="min-height:100vh;">
  <div class="container">
    <div class="row">
        <div class="col-lg-3">
            <a href="../" class="btn btn-block btn-primary text-uppercase"><i class="fa fa-home"></i> Kembali ke Home</a>
        </div>
    </div>
    <div>
        <h2 class="text-center h1">Daftar Kuis</h2>
    </div>
    <div class="row">
        <?php foreach($result as $key=>$value): ?>
        <?php
            $tanggal_sekarang = date('Y-m-d');
            $tanggal_sekarang= date('Y-m-d', strtotime($tanggal_sekarang));

            $tanggal_mulai = date('Y-m-d', strtotime($value['tanggal_mulai']));
            $tanggal_selesai = date('Y-m-d', strtotime($value['tanggal_selesai']));

                
            if (($tanggal_sekarang >= $tanggal_mulai) && ($tanggal_sekarang <= $tanggal_selesai)){
                $ada_kuis = TRUE;
                echo '
                    <div class="col-lg-4 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="judul_kuis text-center">'.$value['judul_kuis'].'</h6>
                                <hr>
                                <ul class="fa-ul">
                                    <p class="h5">Mulai : '.date('j F, Y   ',strtotime($value['tanggal_mulai'])).'</p>
                                    <p class="h5">Selesai : '.date('j F, Y   ',strtotime($value['tanggal_selesai'])).'</p>
                                    <p class="h5">Waktu : '.$value['waktu'].'menit</p>
                                </ul>
                                <a href="kerjakan_kuis.php?id='.$value['id_kuis'].'" class="btn btn-block btn-success text-uppercase">Kerjakan</a>
                            </div>
                        </div>
                    </div>
                ';
            }else{
            }
        ?>
        
      
      <?php endforeach; ?>
      <?php
        if(!isset($ada_kuis)){
          echo '
              <div class="col-lg-12 mt-5">
                  <div class="card">
                      <div class="card-body">
                          <h5 class=" text-center">- Tidak Ada Kuis Hari Ini -</h5>
                      </div>
                  </div>
              </div>
          ';
        }
      ?>
    </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>