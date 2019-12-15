<div class="card-body">
    <h5 class="card-title">TIKET PERMINTAAN</h5>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm btn-lg">
                <div class="row">
                    <div class="col-4">
                        <div class="pt-4">
                            <h6>ID TIket</h6>
                            <h5 class="txt-purple">TLP XXXXX</h5>
                        </div>
                        <div class="pt-4">
                            <h6>Waktu</h6>
                            <h5 class="txt-purple">12:00 </h5>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pt-4">
                            <h6>Pelapor</h6>
                            <h5 class="txt-purple">TLP XXXXX</h5>
                        </div>
                        <div class="pt-4">
                            <h6>Pilih Ruangan</h6>
                            <h5 class="txt-purple">12:00 </h5>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pt-4">
                            <h6>Tanggal</h6>
                            <h5 class="txt-purple">TLP XXXXX</h5>
                        </div>
                        <div class="pt-4">
                            <h6>Pilih Ruangan</h6>
                            <div class="text-white row justify-content-between">
                                <div class="col-8">
                                    <select class="btn btn-light w-100 mx-3">
                                        <!-- <option selected>Pilih Unit</option> -->
                                        <option value="1">Ruangan Tulip</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <span class="btn btn-danger ml-3 w-100">Lock</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-4">
            <div class="shadow-sm btn-lg">
                <div class="row p-4">
                    <div class="col-6">
                        <select class="btn btn-light w-100 mr-3">
                            <!-- <option selected>Pilih Unit</option> -->
                            <option value="1">Ruangan Tulip</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="btn btn-light w-100 mr-3">
                            <!-- <option selected>Pilih Unit</option> -->
                            <option value="1">Ruangan Tulip</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-12 pt-4 mr">
                        <input type="text" class="form-control" id="aset" name="aset" placeholder="Aset">
                    </div>
                    <div class="col-10 pt-4 mr">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="border-radius: 10px !important;"></textarea>
                    </div>
                    <div class="col-2 d-flex align-items-center">
                        <button type="submit" class="btn btn-success btn-lg shadow-sm px-4 mt-3">TAMBAH</button>
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