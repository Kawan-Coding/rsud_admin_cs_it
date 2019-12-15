<div class="card-body">
    <h5 class="card-title">MAIN TENANCE</h5>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-12">
            <div class="shadow-sm btn-lg">
                <div class="row">
                    <div class="col-3">
                        <div class="pt-4">
                            <h6>ID Tiket</h6>
                            <h5 class="txt-purple">TLP XXXXX</h5>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="pt-4">
                            <h6>Tanggal</h6>
                            <input class="d-block form-control" type="date">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="pt-4">
                            <h6>Ruangan</h6>
                            <select class="btn btn-light w-100 mr-3">
                                <!-- <option selected>Pilih Unit</option> -->
                                <option value="1">pilih</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="pt-4">
                            <h6>Aset</h6>
                            <select class="btn btn-light w-100 mr-3">
                                <!-- <option selected>Pilih Unit</option> -->
                                <option value="1">Pilih ASet</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col pt-4">
            <div class="shadow-sm btn-lg">
                <div class="row p-4">
                    <div class="col-12">
                        <h5>Permintaan Maintenance</h5>
                    </div>

                    <table id="table" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Tiket</th>
                                <th>Alat</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody id="tbodyid">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
</div>
<div class="col">
    <div class="shadow-sm btn-lg mx-1 mb-5">
        <div class="card-body">
            <h6 class="">Aktifitas Pelayanan</h6>
            <div class="card">
                <div class="row card-body">
                    <div class="col-3">
                        <img class="img-thumbnail " src="https://cdn1-production-images-kly.akamaized.net/SsbPRwmKv2f0DBTYS_9Mxf5q5xM=/410x0:1526x1116/640x640/filters:quality(75):strip_icc():format(jpeg):watermark(kly-media-production/assets/images/watermarks/liputan6/watermark-color-square-new.png,540,20,0)/kly-media-production/medias/2347678/original/025595500_1535787118-Luna_Maya__20_.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row pt-4">
                            <div class="col pt-4">
                                <h6>Nama Petugas</h6>
                                <h5 class="txt-purple">TLP XXXXX</h5>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <h6>Total Tugas</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col">
                                <h6>Selesai</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col">
                                <h6>Belum Selesai</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success btn-lg shadow-sm px-4 ">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row card-body">
                    <div class="col-3">
                        <img class="img-thumbnail " src="https://cdn1-production-images-kly.akamaized.net/SsbPRwmKv2f0DBTYS_9Mxf5q5xM=/410x0:1526x1116/640x640/filters:quality(75):strip_icc():format(jpeg):watermark(kly-media-production/assets/images/watermarks/liputan6/watermark-color-square-new.png,540,20,0)/kly-media-production/medias/2347678/original/025595500_1535787118-Luna_Maya__20_.jpg" alt="">
                    </div>
                    <div class="col-9">
                        <div class="row pt-4">
                            <div class="col pt-4">
                                <h6>Nama Petugas</h6>
                                <h5 class="txt-purple">TLP XXXXX</h5>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="col">
                                <h6>Total Tugas</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col">
                                <h6>Selesai</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col">
                                <h6>Belum Selesai</h6>
                                <h5 class="txt-purple">XX</h5>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                <button type="submit" class="btn btn-success btn-lg shadow-sm px-4 ">Pilih</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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