<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="card-body card">
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
            <h6>Tambah Data Pengguna Admin Unit IT</h6>
            <form action="" id="add_form" class="text-right">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengguna">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="No.Telepon">
                <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Posisi -">
                <input type="text" class="form-control" id="status" name="status" placeholder="Status -">
                <button type="submit" class="btn btn-success btn-lg shadow-sm px-4 mt-3">SIMPAN</button>
            </form>
        </div>
    </div>
</div>