<body>

    <?php $this->load->view("admin/navs"); ?>
    
    <div class="row">

        
        <div class="col m3">

        </div>

        <div class="col m8">
            <!-- content -->
            <h3 id="disini">Data Mahasiswa</h3>
            <div class="divider"></div>
            <table class="striped mydatatable">
                <thead>
                    <tr>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Kelas</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    foreach ($datamhs as $tampil) : ?>
                        <tr>
                            <td><?= $tampil->npm; ?></td>
                            <td><?= $tampil->nama; ?></td>
                            <td><?= $tampil->jurusan; ?></td>
                            <td><?= $tampil->kelas; ?></td>
                            <td>
                                <a href="<?= site_url("admin/editdatamhs/" . $tampil->npm); ?>" class="btn-small btn-grey tooltipped" data-position="top" data-tooltip="Sunting data"> Edit</i></a>
                                <a class="btn-small tombol-hapus" data-position="top" data-tooltip="Hapus data" href="<?= site_url("admin/hapus/" . $tampil->npm); ?>"> Hapus</i></a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col m1"></div>

    </div>


    
    


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/und/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap.4.3.1/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.19/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
        $('.mydatatable').DataTable();

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            var instances = M.Tooltip.init(elems);
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems);
        });

        $('.tombol-hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href');

            Swal.fire({
                title: 'Anda yakin?',
                text: "Data mahasiswa akan dihapus. Data yang sudah terhapus tidak dapat kembali",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4CAF50',
                cancelButtonColor: '#4CAF50',
                confirmButtonText: 'Hapus data'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Terhapus',
                        'Data Berhasil dihapus!',
                        'success'
                    ).then((result) => {
                        document.location.href = href;
                    })

                }
            })
        });
    </script>
</body>