<div class="card-body">
    <h5 class="card-title">Dashboard</h5>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col">
            <div class="shadow-sm btn-lg">
                <div class="card-body">
                    <h5 class="">Pelayanan Permintaan Hari Ini</h5>
                    <div class="text-white" id="list-dashboard">
                        <div>
                            <span class="btn btn-blue w-70">Permintaan</span>
                            <span class="btn btn-blue w-10 ml-3">25 </span>
                        </div>
                        <div>
                            <span class="btn btn-orange w-70">Proses</span>
                            <span class="btn btn-orange w-10 ml-3">25 </span>
                        </div>
                        <div>
                            <span class="btn btn-pink w-70">Selesai</span>
                            <span class="btn btn-pink w-10 ml-3">25 </span>
                        </div>
                        <div>
                            <span class="btn btn-brown w-70">Pending</span>
                            <span class="btn btn-brown w-10 ml-3">25 </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="shadow-sm btn-lg">
                <div class="card-body">
                    <h5 class="">Lapor Cepat</h5>
                    <div class="text-white " id="list-dashboard">
                        <div class="pt-4">
                            <input class="d-block form-control" value="Ariel_lovely@mail.com"></input>
                        </div>
                        <div class="pt-2">
                            <input class="d-block form-control" value="Ariel_lovely@mail.com"></input>
                        </div>
                        <a href="<?= base_url('Admin_csit') ?>/laporcepat" type="submit" class="btn btn-success btn-lg shadow-sm px-4 mt-3 align-self-end ">TERBITKAN TIKET</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col">
    <div class="shadow-sm btn-lg mx-1 mb-5">
        <div class="card-body">
            <h6 class="">Aktifitas Pelayanan</h6>
            <h6 class="text-right">
                <a href="">Perbaikan</a> | <a href="">Maintenance</a>
            </h6>
            <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th colspan="4">Permintaan</th>
                        <th colspan="2">Aset</th>
                        <th rowspan="2">Status <br /> Pelayanan</th>
                        <th rowspan="2">Status <br /> Tiket</th>
                        <th rowspan="2">Petugas</th>
                        <th rowspan="2">Action</th>
                    </tr>
                    <tr>
                        <th>Jenis</th>
                        <th>Tiket</th>
                        <th>Waktu</th>
                        <th>Ruangan</th>
                        <th>ID Aset</th>
                        <th>Nama Aset</th>
                    </tr>
                </thead>
                <tbody id="tbodyid">

                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    th {
        font-size: 12px !important;
    }
</style>

<script>
    let m_view = 'view';
    // let bash_api = "<?php echo base_url('sapi/cabang/') ?>";
    console.log(bash_api);
    var number, is_update, latlong = '';
    let label = " Cabang ";
    $(document).ready(function() {
        table.ajax.reload();
        number = 0;
        is_update = false;
    })
    var table = $('#table').DataTable({
        "ajax": {
            url: bash_api + 'get_all',
            dataSrc: 'data'
        },
        "columns": [{
                "render": function() {
                    return get_index();
                }
            }, {
                "data": "nama"
            }, {
                "data": "alamat"
            }, {
                "data": "latlong"
            }, {
                "data": "create_at"
            }, {
                "data": "update_at"
            }, {
                "render": function(data, type, JsonResultRow, meta) {
                    return '<button class="btn btn-info edit_jenis"  style="width: 40px; margin-right : 5px;" onclick ="read(' + "'" + JsonResultRow.id + "'" + ')"><i class="fa fa-eye"></i></button>' +
                        '<button class="btn btn-info edit_jenis" style="width: 40px;margin-right : 5px;" onclick ="update(' + "'" + JsonResultRow.id + "'" + ')"><i class="fa fa-pencil-square-o"></i></a>' +
                        '<button class="btn btn-danger delete_jenis" style="width: 40px;" onclick ="del(' + "'" + JsonResultRow.id + "'" + ')"><i class="fa fa-trash-o"></i></a>';
                }
            }

        ]
    });
</script>