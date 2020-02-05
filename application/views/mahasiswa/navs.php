<div class="navbar-fixed">
    <nav class="col-purple">
        <div class="container">
            <div class="nav-wrapper">
                <ul class="right hide-on-med-and-down">
                    <li><a href="<?= site_url("loginmhs/logout"); ?>">Logout<i class="material-icons right"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<ul id="slide-out" class="sidenav sidenav-fixed">
    <div class="jarak col-purple" style="height: 64px;"></div>
    <li>
        <div class="user-view">
            <div class="background">
                <img src="<?= base_url("asset/img/bg.png"); ?>">
            </div>
            <a href="#user"><img class="circle" src="<?= base_url("upload/" . $datamhs[0]["image"]); ?>"></a>
            <a href="#name"><span class="white-text name"><?php print_r($datamhs[0]["nama"]); ?></span></a>
            <a href="#email"><span class="white-text email"><?php print_r($datamhs[0]["npm"]); ?></span></a>
        </div>
    </li>
    <li><a href="<?= site_url("mahasiswa"); ?>"><i class="material-icons">dashboard</i>Dashboard</a></li>
    <li><a href="<?= site_url("mahasiswa/absen"); ?>"><i class="material-icons">assignment_turned_in</i>Absen</a></li>
    <li><a href="<?= site_url("mahasiswa/nilai"); ?>"><i class="material-icons">assessment</i>Nilai</a></li>
</ul>
<!-- <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a> -->


