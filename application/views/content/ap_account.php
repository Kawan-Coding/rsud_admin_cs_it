<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="card-body" id="data_account">
    <h5 class="card-title">TAMBAH PENGGUNA</h5>
    <div class="dropdown-divider"></div>
    <div class="shadow-sm btn-lg" id="choose_unit">
        <div class="card-body">
            <h6 class="">Pilih Unit</h6>
            <div class="text-white row justify-content-between">
                <div class="col-9">
                    <select class="btn btn-light w-100 mx-3">
                        <!-- <option selected>Pilih Unit</option> -->
                        <option value="1">Admin Unit IT</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-3">
                    <span class="btn btn-danger ml-3 w-100">Lock</span>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow-sm btn-lg mt-3" id="add">
        <div class="card-body">
            <h6>Data Pengguna Admin Unit IT</h6>
            <table id="data_table">
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="card-body" id="detail_account" style="display:none">
    <div class="justify-content-between align-items-center d-flex">
        <h5 class="card-title d-inline">DETAIL DATA PENGGUNA</h5>
        <button class="btn-danger btn rounded-circle click"> X </button>
    </div>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-4">
            <div class="shadow-sm bgprofil h-100 d-flex align-items-center justify-content-center btn-lg">
                <img class="rounded-circle img-cover" src="<?= base_url() ?>assets/img/aaa.jpg">
            </div>
        </div>
        <div class="col-8">
            <div class="card-body shadow-sm btn-lg">
                <p class="h6">Nama</p>
                <p class="text-danger mt-n1 mb-3 h5">Ariel Tatum</p>
                <p class="h6">Posisi</p>
                <p class="text-danger mt-n1 mb-3 h5">Admin Pusat IT</p>
                <p class="h6">Status</p>
                <p class="text-danger mt-n1 mb-3 h5">Aktif</p>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="h6">Username</p>
        <p id="username" class="mt-n1 mb-3 h5">Ariel_tatum</p>
        <p class="h6">Password</p>
        <p id="password" class="mt-n1 mb-3 h5">Admin Pusat IT</p>
        <p class="h6">Email</p>
        <p id="email" class="mt-n1 mb-3 h5">arieltatum@gmail.com</p>
        <p class="h6">No. Telepon</p>
        <p id="telepon" class="mt-n1 mb-3 h5">082164028264</p>
    </div>
</div>

<div class="card-body" id="edit_account" style="display:none">
    <div class="justify-content-between align-items-center d-flex">
        <h5 class="card-title d-inline">EDIT DATA PENGGUNA</h5>
        <button class="btn-danger btn rounded-circle click"> X </button>
    </div>
    <div class="dropdown-divider"></div>
    <div class="row">
        <div class="col-4">
            <div class="shadow-sm bgprofil h-100 d-flex align-items-center justify-content-center btn-lg">
                <img class="rounded-circle img-cover" src="<?= base_url() ?>assets/img/aaa.jpg">
            </div>
        </div>
        <div class="col-8">
            <div class="card-body shadow-sm btn-lg">
                <div class="card-body row justify-content-between">
                    <p class="h5">Silahkan upload foto</p>
                    <div class="input-group">
                        <div class="custom-file mr-4">
                            <input type="file" class="custom-file-input control" id="inputGroupFile04">
                            <label class="custom-file-label rounded-pill" for="inputGroupFile04">Pilih file foto
                                anda</label>
                        </div>
                        <div class="">
                            <button class="btn btn-success px-4" type="button">Upload</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <p class="h6">Nama</p>
        <p class="mt-n1 mb-3 h5">Ariel Tatum</p>
        <p class="h6">Posisi</p>
        <p class="mt-n1 mb-3 h5">Admin Pusat IT</p>
        <p class="h6">Status</p>
        <p class="mt-n1 mb-3 h5">Aktif</p>
        <p class="h6">Username</p>
        <p id="username" class="mt-n1 mb-3 h5">Ariel_tatum</p>
        <p class="h6">Password</p>
        <p id="password" class="mt-n1 mb-3 h5">Admin Pusat IT</p>
        <p class="h6">Email</p>
        <p id="email" class="mt-n1 mb-3 h5">arieltatum@gmail.com</p>
        <p class="h6">No. Telepon</p>
        <p id="telepon" class="mt-n1 mb-3 h5">082164028264</p>
    </div>
</div>

<script>
var data = [
    [
        "Tiger Nixon",
        "<span class='btn btn-success' onclick='view()'>Detail</span> <span class='btn btn-orange' onclick='edit()'>Edit</span> <span class='btn btn-danger' onclick='del()'>Delete</span>",
    ]
];
$(document).ready(function() {
    $('#data_table').DataTable({
        "autoWidth": false,
        "ordering": false,
        "columnDefs": [{
                "width": "70vw",
                "targets": 0
            },
            {
                "width": "30vw",
                "targets": 1,
                "className": "dt-center"
            }
        ],
        "paging": false,
        data: data
    });
});

function view() {
    $("#data_account").hide("slow");
    $("#detail_account").show("slow");
}

function edit() {
    $("#data_account").hide("slow");
    $("#edit_account").show("slow");
}

function del() {
    confirm.fire({
        title: 'Apakah kamu yakin ?',
        text: 'Anda akan menghapus data pengguna',
        icon: 'warning',
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((confirmation) => {
        if (confirmation.value) {
            sa_notif('warning', "lalala yeyeye");
        }
    })

}

$(".click").click(function() {
    $(this).parent().parent().hide("slow");
    $("#data_account").show("slow");
});
</script>