<div class="card-body">
    <h5 class="card-title">Profil Admin</h5>
    <div class="dropdown-divider"></div>
    <form action="">
        <div class="row">
            <div class="col-lg-4 p-2">
                <div class="border rounded d-lg-flex shadow-sm  bgprofil h-100">
                    <img class="justify-content-center m-auto pp  img-cover" src="<?= base_url() ?>assets/img/aaa.jpg">
                </div>
            </div>
            <div class="col p-2">
                <div class="border rounded  shadow-sm p-4">
                    <div class="row higlight">
                        <div class="col-lg-12 py-4">
                            <div class="input-group custom-file mr-4">
                            <label class="custom-file-label rounded-pill" for="inputGroupFile04">Pilih file foto
                                anda</label>
                                <input type="file" class="custom-file-input control" />
                                <!-- <button class="btn btn-success px-4" type="button">Upload</button> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div>

            <div class="pt-4">
                <label class="d-block">Username</label>
                <input class="d-block form-control" value="Ariel_lovely"></input>
            </div>
            <div class="pt-4">
                <label class="d-block">Password</label>
                <input class="d-block form-control" value="NTAP"></input></div>
            <div class="pt-4">
                <label class="d-block">Email</label>
                <input class="d-block form-control" value="Ariel_lovely@mail.com"></input>
            </div>
            <div class="pt-4">
                <label class="d-block">Nomor Telepon</label>
                <input class="d-block form-control" value="0857-9899-8888"></input>
            </div>
    </form>

</div>

</div>

<style>
    .rounded {
        border-radius: 12px !important;
    }

    .pp {
        border-radius: 100px;
    }

    .higlight strong {
        color: #DD5251;
    }

    .bgprofil {
        background: rgb(255, 255, 255);
        background: linear-gradient(0deg, rgba(255, 255, 255, 1) 50%, rgba(79, 144, 2, 1) 50%);
    }
</style>