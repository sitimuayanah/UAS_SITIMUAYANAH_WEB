<body>

    <?php
    $this->load->view("admin/navs");

    $username =  $this->session->userdata("nama_adm");
    $nama = $this->db->query("SELECT nama FROM admin WHERE username = '" . $username . "'")->result_array();


    ?>
    <!-- Page Layout here -->
    <div class="row">

        <!-- Grey navigation panel -->
        <div class="col m3">

        </div>

        <div class="col m8">
            <!-- content -->
            <h3>Dashboard Admin</h3>
            <div class="divider"></div>
            <h5>Sunting data Mahasiswa</h5>
            <?php
            if (empty($datamhs)) {
                echo $this->session->flashdata("message_id");
                redirect("admin/datamhs");
            }
            ?>
            <div class="row">
                <div class="col s12">
                    <form action="<?= site_url("admin/updateDatamhs"); ?>" method="post">
                        <div class="row">
                            <div class="input-field col s8">
                                <input placeholder="Andri Ilham" id="nama" type="text" class="validate" name="nama" value="<?= $datamhs["nama"]; ?>">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <input disabled placeholder="17111322" id="npm" type="number" class="validate" name="npm" value="<?= $datamhs["npm"]; ?>">
                                <label for="npm">Nomor Pokok Mahasiswa</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <select name="prodi">
                                    <option value="" disabled selected>Pilih Program Studi</option>
                                    <option value="Teknik Informatika" <?php if ($datamhs["jurusan"] == 'Teknik Informatika') {
                                                                            echo "selected";
                                                                        } ?>>Teknik Informatika</option>
                                    <option value="Teknik Industri" <?php if ($datamhs["jurusan"] == 'Teknik Industri') {
                                                                        echo "selected";
                                                                    } ?>>Teknik Industri</option>
                                    <option value="Desain Komunikasi Visual" <?php if ($datamhs["jurusan"] == 'Desain Komunikasi Visual') {
                                                                                    echo "selected";
                                                                                } ?>>Desain Komunikasi Visual</option>
                                </select>
                                <label>Program Studi</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s8">
                                <select name="kelas">
                                    <option value="" disabled selected>Pilih Kelas yang diikuti</option>
                                    <option value="Reguler Pagi" <?php if ($datamhs["kelas"] == 'Reguler Pagi') {
                                                                        echo "selected";
                                                                    } ?>>Reguler Pagi</option>
                                    <option value="Reguler Malam" <?php if ($datamhs["kelas"] == 'Reguler Malam') {
                                                                        echo "selected";
                                                                    } ?>>Reguler Malam</option>
                                    <option value="Kelas Karyawan" <?php if ($datamhs["kelas"] == 'Kelas Karyawan') {
                                                                        echo "selected";
                                                                    } ?>>Kelas Karyawan</option>
                                </select>
                                <label>Kelas</label>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col s8">
                                <button class="btn waves-effect waves-light btn-large" type="submit" name="action">Simpan
                                    <i class="material-icons right"></i>
                                </button>
                                <a href="<?= site_url("admin/datamhs"); ?>" class="btn waves-effect waves-light btn-large grey">
                                    <i class="material-icons right"></i>Batal
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col s1"></div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap.4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.19/datatables.min.js"></script>

    <script type="text/javascript">
        $('.mydatatable').DataTable();
    </script>
</body>