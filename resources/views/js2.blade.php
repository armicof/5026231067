<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Template1</title>
    <script>
        function formvalidation() {
            var nrp = document.getElementById("nrp").value;
            var nama = document.getElementById("nama").value;
            if (nrp.length == 0) {
                swal.fire({
                    title:"Pesan Kesalahan",
                    text:"NRP harus diisi!",
                    icon:"error",
                });
                document.getElementById("nrp").focus();
                return false;
            }
    
            if (nama.length == 0) {
                swal.fire({
                    title:"Pesan Kesalahan",
                    text:"Nama harus diisi!",
                    icon:"error",
                });
                document.getElementById("nama").focus();
                return false;
            }
            if (nama.length < 1) {
                swal.fire({
                    title:"Pesan Kesalahan",
                    text:"Nama minimal 1 huruf!",
                    icon:"error",
                });
                document.getElementById("nrp").focus();
                return false;
            }
            if (/\d/.test(nama)) {
                swal.fire({
                    title:"Pesan Kesalahan",
                    text:"Nama tidak boleh mengandung angka!",
                    icon:"error",
                });
                document.getElementById("nama").focus();
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h3>Form Pendaftaran ISE</h3>
        <form id="frmpendaftaran" action="https://google.co.id" method="get" onsubmit="return formvalidation();">
            NRP :
            <input type="text" placeholder="Silahkan isi NRP, 10 digit, harus angka, tidak boleh kosong" id="nrp" name="nrp" class="form-control">
            <br>
            Nama :
            <input type="text" placeholder="Silahkan isi nama, tidak boleh kosong" id="nama" name="nama" class="form-control">
            <br>
            <input type="submit" class="btn btn-primary" value="Daftar">
        </form>
    </div>
</body>
</html>