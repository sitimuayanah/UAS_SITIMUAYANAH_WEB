<body id="bgadmin">
    <div class="section"></div>
    <main>
        <center>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #FFF; width: 50%;">

                    <form class="col m12" method="post" action="<?= site_url("loginadm/login"); ?>">
                         <h5 class="black-text">Login Admin</h5>
                        <?php echo $this->session->flashdata('pesan_salah'); ?>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <input class='validate' type='text' name='username' id='username' />
                                <label for='username'>Username</label>
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
                                <button type='submit' name='btn_login' class='col s12 btn btn-grey'>Sign In</button>
                            </div>
                            <div class="row">
                                <a href="<?= site_url("dashboard"); ?>" class="col s12 btn btn-white waves-effect indigo lighten-5 indigo-text">Cancel</a>
                            </div>
                        
                        <a href="<?= site_url("loginmhs"); ?>" class="blue-text">Login sebagai <span>mahasiswa</span></a>
        </center>
                    </form>
                </div>
            </div>
            <a href="<?= site_url("loginmhs"); ?>" class="white-text">Login sebagai <span>mahasiswa</span></a>
        </center>

        <div class="section"></div>
        <div class="section"></div>
    </main>
</body>