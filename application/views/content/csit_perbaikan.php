<div class="card-body">
    <h5 class="card-title">TIKET PERMINTAAN</h5>
    <div class="dropdown-divider"></div>
    <div class="row">

        <div class="col-4">
            <select class="btn btn-light w-100 mr-3">
                <!-- <option selected>Pilih Unit</option> -->
                <option value="1">Pilih Tahun</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-4">
            <select class="btn btn-light w-100 mr-3">
                <!-- <option selected>Pilih Unit</option> -->
                <option value="1">Pilih Bulan</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-4">
            <select class="btn btn-light w-100 mr-3">
                <option value="1">Pilih Status</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-10 mt-4">
            <select class="btn btn-light w-100 mr-3">
                <option value="1">Pilih Status</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="col-2 mt-4">
            <button type="submit" class="btn btn-warning btn-lg shadow-sm px-4 ">LOCK</button>
        </div>
    </div>
</div>
<div class="col">
    <div class="shadow-sm btn-lg mx-1 mb-5">
        <div class="card-body">
            <h6 class="">Aktifitas Pelayanan</h6>
            <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th colspan="5">Permintaan</th>
                        <th colspan="2">Aset</th>
                        <th rowspan="2">Status <br /> Tiket</th>
                        <th rowspan="2">Status <br /> Pelayanan</th>
                    </tr>
                    <tr>
                        <th>Tiket</th>
                        <th>Waktu</th>
                        <th>Nama Pelapor</th>
                        <th>Ruangan</th>
                        <th>Nama Aset</th>
                        <th>Area Ruangan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody id="tbodyid">

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-12  align-self-end">
    <button type="submit" class="btn btn-success btn-lg shadow-sm px-4 mt-3">TERBITKAN</button>
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