<?php
include 'header.php';
?>

<body>
    <div id="app">
        <?php
        include 'sidebar.php';
        ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <!-- INICIO -->
            <div class="page-heading">

                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ahorro del día sin rajarse</h3>
                            <P></P>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ahorro del dia</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Generador de números aleatorio</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                            <h1 id="result" style="text-align: center"></h1>
                                        </div>
                                        <div class="col-4">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <button class="btn btn-outline-primary rounded-pill" onclick="generateNumber();">Generar</button>
                                        </div>
                                        <div class="col-4">
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-outline-success rounded-pill" onclick="saveMoney();" id="btn-save">Guardar!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>

    <!-- Inicio de scripts -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/vendors/jquery/jquery.min.js"></script>
    <script src="assets/js/genera.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/datepicker.min.js"></script>
    <script src="assets/js/datepicker.es-ES.js"></script>

    <script>
        function insertOtherDay() {
            $('#modal-calendar').modal('show');
            $('#date').datepicker({
                language: 'es-ES',
                endDate: '02/11/2021',
                autoHide: true,
            });
            console.log($('#date').datepicker('getDate', true));
            $('#date').datepicker('reset')
        }
    </script>
    <!-- Fin scripts -->
</body>