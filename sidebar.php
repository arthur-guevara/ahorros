<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="" alt="Logo" srcset="">
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item" id="opc-generar">
                    <a href="index.php" class='sidebar-link'>
                        <i class="bi bi-calendar-date-fill"></i>
                        <span>Ahorro del dia</span>
                    </a>
                </li>

                <li class="sidebar-item" id="opc-total">
                    <a href="total-ahorros.php" class='sidebar-link'>
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>Total de ahorros</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<script>
    var URLactual = window.location.toString();
    urlSplit = URLactual.split('/');
    switch (urlSplit[4]) {
        case 'total-ahorros.php':
            $('#opc-total').addClass('active');
            break;
        case 'index.php':
            $('#opc-generar').addClass('active');
            break;
    }
</script>