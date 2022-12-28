<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-blue navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link " data-toggle="dropdown" href="#">
                <i class="fas fa-user font-navbar " ></i> SESSION_NOM_LOGIN
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="p-4 box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="../imagens/default-user-image.png"
                            alt="User profile picture">
                    </div>
                    <div class="profile-username text-center">
                        SESSION_NOM_SERVIDOR
                    </div>
                    <div class="text-muted text-center pb-2">
                        <small>SESSION_DSC_PERFIL</small>
                    </div>
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Acessos</b> <a class="float-right">QTD_ACESSOS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link text-white-chassi" data-toggle="dropdown" href="#" aria-expanded="true">
                <i class="far fa-question-circle"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right " style='font-size:85%'>
                <span class="dropdown-item dropdown-header"><b>PESWEB</b></span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <b>PESWEB</b> - Sistema de Pessoal
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <b>Responsáveis: Ramal 1000 ou 2000</b>
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt font-navbar"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large font-navbar"></i>
            </a>
        </li>
        <li class="nav-item">
            <div class="nav-link ">
                <a href="../login.php" class="text-white"><i class="fa fa-sign-out"></i> Sair</a>
            </div>
        </li>
    </ul>
</nav> <!-- /.navbar -->
