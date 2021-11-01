<?php
include 'header.php';
include 'actions/conexion.php';
$sql = "SELECT * FROM ahorro";
$query = $connect->query($sql);
if (!$query->num_rows > 0) {
    echo 'Error al consultar datos';
}
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

                            <?php
                            $sqlSum = "SELECT SUM(cantidad) FROM ahorro";
                            $querySum = $connect->query($sqlSum);
                            if ($querySum->num_rows  > 0) {
                                $rowSum = $querySum->fetch_assoc();
                            }
                            ?>
                            <P>
                            <h4 id="result">Total de ahorro $<?php echo $rowSum['SUM(cantidad)'] ?></h4>
                            </P>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Total de ahorros</li>
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

                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0" id="data">
                                                    <thead>
                                                        <tr>
                                                            <th>Numero</th>
                                                            <th>Cantidad</th>
                                                            <th>Fecha</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        while ($rows = mysqli_fetch_array($query)) { ?>
                                                            <tr>
                                                                <td><?php echo $rows['numero']; ?></td>
                                                                <td>$ <?php echo $rows['cantidad']; ?></td>
                                                                <td><?php echo $rows['fecha']; ?></td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
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
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable({
                responsive: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json'
                }
            });
        });
    </script>
    <!-- Fin scripts -->
</body>