<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=site_url()?>">Nocnode - Admin</a>
    </div>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->userdata('usr_nombre')?> <?=$this->session->userdata('usr_apellido')?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?=site_url()?>usuarios/index/edit/<?=$this->session->userdata('usr_id')?>"><i class="fa fa-fw fa-user"></i> Perfil</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?=site_url()?>login/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    
    <?php
    $this->load->view('templates/menu');
    ?>

</nav>