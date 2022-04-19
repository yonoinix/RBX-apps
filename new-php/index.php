<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image" content="assets/img/Openshift.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="shortcut icon" type="image/png" href="assets/img/Openshift.png" />

    <style>
        .badge {
            margin-left: 3px;
        }

        #pic {
            transition: 1s;
        }

        #pic:hover {
            width: 60px;
            height: 60px;
            transform: rotate(360deg);
        }

        .fd {
            opacity: 0;
            transition: 1.5s;
            margin-left: 20px;
            margin-right: 20px;
        }

        .fd.muncul {
            opacity: 1;
            transform: translate(0, 0);
        }
    </style>
    <title>Implementasi Aplikasi Container dengan Openshift</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #102c4a;">
        <a class="navbar-brand" href="">
            <img id="pic" src="assets/img/Openshift.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Implementasi Aplikasi Container dengan Openshift
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            </ul>
        </div>
    </nav>

    </br>
    <hr>
    <div class="fd">
        <center>
            <h1>Selamat datang di Implementasi Aplikasi dengan Container di Openshift</h1>
            <hr>
            <img class="img-fluid" src="assets/img/kubernetes2.png" alt="Responsive image">
        </center>
    </div>
    <div class="fd">
        <center>
            <h5><?php
                $host_name = $_ENV['HOSTNAME'];
                echo $host_name;
                ?></h5>
            <h5>Aplikasi Versi: v2</h5>
        </center>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="assets/js/sweetalert2.all.min.js"></script>
    <script>
        const flashData = $('.flash-data').data('flashdata');

        $(window).on('load', function() {
            $('.fd').addClass('muncul');
        });

        if (flashData) {
            Swal({
                title: 'Data Pasien',
                text: 'Berhasil ' + flashData,
                type: 'success'
            });
        }

        // tombol-hapus
        $('.tombol-hapus').on('click', function(e) {

            e.preventDefault();
            const href = $(this).attr('href');

            Swal({
                title: 'Apakah anda yakin',
                text: "data pasien akan dihapus",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            })
        });
    </script>
</body>

</html>
