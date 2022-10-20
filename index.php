<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan PHP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Latihan 1 PHP Dasar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container pt-5">
            <div class="card">
                <h5 class="card-header">Latihan 1 PHP Dasar</h5>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-6">
                            <form action="" method="post">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Masukkan String" name="string">
                                    <label for="floatingInput">Masukkan String</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="floatingPassword" placeholder="text"
                                        name="loop">
                                    <label for="floatingPassword">Masukan Pengulangan</label>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-4 mt-4">
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <h4>Hasil Inputan:</h4>
                            <?php
                            if (!empty($_POST['string']) && $_POST['loop']) {
                                $string = $_POST['string'];
                                $loop = $_POST['loop'];

                                for ($x = 0; $x < $loop; $x++) {
                                    echo "$string $loop <br>";
                                }

                                if ($loop % 2 == 0) {
                                    echo "<br>";
                                    echo "$loop Merupakan Bilangan Genap";
                                } else {
                                    echo "$loop Merupakan Bilangan Ganjil";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>