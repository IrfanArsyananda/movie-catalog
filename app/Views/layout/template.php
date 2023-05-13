<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="<?= base_url('/bootstrap-5.0.2-dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- !My CSS -->
    <link rel="stylesheet" href="<?= base_url('/css/style.css'); ?>">

    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?= base_url('/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        function setPreviewCov() {

            const fileCover = document.querySelector('#coverMov');
            const labelCover = document.querySelector('#coverMov');
            const coverPreview = document.querySelector('.cov-add-preview');

            labelCover.textContent = fileCover.files[0].name;

            const getFileCover = new FileReader();
            getFileCover.readAsDataURL(fileCover.files[0]);

            getFileCover.onload = function(e) {
                coverPreview.src = e.target.result;
            }
        }
    </script>
</body>
<footer>
    <div class="container bg-warning p-2 my-3">
        <div class="copyrights">
            <center>
                <b>IRFAN ARSYANANDA | &copy; <?= date('Y') ?> </b>
            </center>
        </div>
    </div>
</footer>

</html>