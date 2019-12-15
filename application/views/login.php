<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body style="height: 100%;background-color: #353430;background-image: url(&quot;<?= base_url() ?>assets/img/login/edited%20bg%20login.png&quot;);background-size: cover;">
    <div class="row">
        <div class="col col-lg-3"></div>
        <div class="col col-lg-6">
            <div class="card border rounded shadow-sm" style="width: 80%;height: 604px;margin-top: 10%;margin-right: 7%;margin-left: 10%;opacity: 1;background-color: rgba(86,86,84,0.62);color: #212529;">
                <div class="card-body" style="padding: 67px;opacity: 1;"><img class="" style="width: auto;min-height: auto;height: 7em;" src="<?= base_url() ?>assets/img/login/logo_RSUD_Login.png">
                    <div class="row rounded" style="background-color: #ffffff;margin-right: 0px;margin-left: 0px;height: 62px;margin-top: 16px;">
                        <div class="col-xl-1" style="padding-right: 0px;padding-left: 7px;"><img class="float-left d-xl-flex" src="<?= base_url() ?>assets/img/login/login.png" style="width: 51px;padding-top: 4px;padding-right: -2px;margin: 0px;margin-right: 0px;margin-top: 2px;"></div>
                        <div class="col-xl-10" style="padding-left: 30px;"><input type="text" class="inputrounded" style="width: 100%;height: 43px;margin-top: 8px;" placeholder="USERNAME"></div>
                    </div>
                    <div class="row rounded" style="background-color: #ffffff;margin-right: 0px;margin-left: 0px;height: 62px;margin-top: 16px;">
                        <div class="col-xl-1" style="padding-right: 0px;padding-left: 7px;"><img class="float-left d-xl-flex" src="<?= base_url() ?>assets/img/login/password.png" style="width: 51px;padding-top: 4px;padding-right: -2px;margin: 0px;margin-right: 0px;margin-top: 2px;"></div>
                        <div class="col-xl-10" style="padding-left: 30px;"><input type="text" class="inputrounded" style="width: 100%;height: 43px;margin-top: 8px;" placeholder="USERNAME"></div>
                    </div><label style="margin-top: 16px;color: rgb(255,255,255);">Forget Password</label>
                    <div class="row" style="height: 32px;">
                        <div class="col col-lg-5" style="padding-right: -11px;">
                            <hr>
                        </div>
                        <div class="col col-lg-2"><label class="col-form-label d-xl-flex justify-content-xl-center" style="color: rgb(255,255,255);">ADMIN</label></div>
                        <div class="col col-lg-5">
                            <hr>
                        </div>
                    </div><button class="btn btn-primary border rounded" type="button" style="width: 100%;margin-top: 8px;height: 62px;background-color: rgb(79,144,2);">Login</button></div>
            </div>
        </div>
        <div class="col col-lg-3"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<style>
.rounded {
  border-radius: 65px!important;
}

.btn.btn-primary.border.rounded {
}

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid #FDFBFC;
}

.card-body {
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem;
}

.card.border {
  border: 0px solid #dee2e6!important;
}

.btn.border {
  border: 0px solid #dee2e6!important;
}

.inputrounded {
  border: 0px;
}

</style>