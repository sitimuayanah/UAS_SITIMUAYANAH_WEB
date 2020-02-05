<body id="bgmhs">
    <div class="section"></div>
    <main>
        <center>

            <div class="section"></div>

            <h5 class="white-text">Login Mahasiswa</h5>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #FFF; width: 50%;">

                    <form class="col m12" method="post" action="<?= site_url("loginmhs/login"); ?>">
                        <h5 class="black-text">Login Mahasiswa</h5>
                        <?php echo $this->session->flashdata('pesan_salahmhs'); ?>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='number' name='npm' id='npm' />
                                <label for='npm'>Username</label>
                            </div>
                        </div>

                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='password' name='password' id='password' />
                                <label for='password'>Password</label>
                            </div>
                        </div>

                        <br />
                        <center>
                            <div class='row'>
                                <button type='submit' name='btn_login' class='col s12 btn btn-grey'>Sign in</button>
                            </div>
                            <div class="row">
                                <a href="<?= site_url(); ?>" class="col s12 btn btn-white waves-effect indigo lighten-5 indigo-text">Cancel</a>
                            </div>
                            <div class="row">
                                <a href="<?= site_url("loginmhs/daftar"); ?>" class="">Belum memiliki akun? silahkan daftar</a>
                            </div>
                         <a href="<?= site_url("loginadm"); ?>" class="blue-text">Login sebagai <span>admin</span></a>
        </center>
                    </form>
                </div>
            </div>
            

        <div class="section"></div>
        <div class="section"></div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>