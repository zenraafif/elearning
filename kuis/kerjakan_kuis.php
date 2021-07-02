<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SIP Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="../assets/imges/favicon.ico"/>
    <!-- CSS halaman kuis -->
    <link href="../css/kuis_style.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7f68d15522.js" crossorigin="anonymous"></script>

    <?php require "../koneksi.php"?>

    <?php
        session_start();

        if(isset($_GET["id"])){
            $id = $_GET["id"];
          }else{
            echo "<h3 class='m-3'>Data tidak ditemukan</h3>";
            exit;
          }
          
        $sql_quiz = "SELECT * FROM kuis WHERE id_kuis = $id";
        $kuis = $conn->query($sql_quiz);

        $sql_pertanyaan = "SELECT * FROM kuis_pertanyaan WHERE id_kuis='$id'";
        $pertanyaan = $conn->query($sql_pertanyaan);

        $detail_kuis = $kuis->fetch_assoc();
    ?>
  </head>
  <body>

<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<section class="pricing py-5 bg-light" style="min-height:100vh;">
  <div class="container">
    <div class="row">
        <div class="col-lg-3">
            <a href="index.php" class="btn btn-block btn-primary text-uppercase"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
    </div>
    <div>
        <h2 class="text-center h1">Daftar Kuis</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">


                    <form action="" method="post" id="kuis_form">
                    <?php foreach($pertanyaan as $key=>$prt): ?>
                        
                            <h5 class="judul_kuis mb-2"><?php echo $key+1?>. <?php echo $prt['pertanyaan']?></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $prt['id_pertanyaan']?>" id="<?= $prt['id_pertanyaan']?>pilihan_a" value="a">
                                <label class="form-check-label" for="<?= $prt['id_pertanyaan']?>pilihan_a" >
                                    <?php echo $prt['pilihan_a']?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $prt['id_pertanyaan']?>" id="<?= $prt['id_pertanyaan']?>pilihan_b" value="b">
                                <label class="form-check-label" for="<?= $prt['id_pertanyaan']?>pilihan_b">
                                    <?php echo $prt['pilihan_b']?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $prt['id_pertanyaan']?>" id="<?= $prt['id_pertanyaan']?>pilihan_c" value="c">
                                <label class="form-check-label" for="<?= $prt['id_pertanyaan']?>pilihan_c">
                                    <?php echo $prt['pilihan_c']?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="<?= $prt['id_pertanyaan']?>" id="<?= $prt['id_pertanyaan']?>pilihan_d" value="d">
                                <label class="form-check-label" for="<?= $prt['id_pertanyaan']?>pilihan_d">
                                    <?php echo $prt['pilihan_d']?>
                                </label>
                            </div>
                            <hr>
                    <?php endforeach; ?>
                            <button class="btn btn-block btn-primary text-uppercase mt-3">SUBMIT</button>
                    </form>                    
                </div>
            </div>
        </div>            
    </div>
  </div>
</section>

<section>
    <div class="btn btn-secondary btn-md rounded-0 fixed-top col-2"><span id="time"></span></div>
</section>

<script>
   function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * <?php echo $detail_kuis['waktu']?>,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);

    var id = '<?php echo $detail_kuis['id_kuis']?>';
    var time = '<?php echo date('Y-m-d H:i:s', time()); ?>';
    $('#kuis_form').attr('action', 'kerjakan_kuis_proses.php?id=' + id + '&waktu_mulai=' +time);
    
};

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>