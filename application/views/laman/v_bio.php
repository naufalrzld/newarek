<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--End of Nav Bawah header-->
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>
<div class="container-fluid">
    <div class="row sesi_pos">
        <div class="col-lg-1 sesi">
            <div class="nomor">1</div>
            <div class="judul_sesi">
                Biodata Diri
            </div>
        </div>
        <div class="col-lg-6 formulir">
            <div class="card ">
                <div class="card-header">
                    Biodata Diri Detail
                </div>
                <div class="card-body">
                    <?php echo form_open("Home/test");?>
                    <div class="form-row">
                        <div class="col-8">
                            <label> Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm" value="<?php echo $nama_user; ?>" readonly>
                        </div>
                        <div class="col-4">
                            <label> NIM</label>
                            <input type="text" class="form-control form-control-sm" name="nim" placeholder="e.g 13131313">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Fakultas</label>
                            <select name="fakultas" onchange="loadProdi(this.value);" class="custom-select form-control-sm">
                                <option value="">Pilih Fakultas</option>
                                <?php
                                foreach($fakultas as $mosen){
                                   ?>
                                    <option value="<?php echo $mosen['id_fakultas'];?>"><?php echo $mosen['nama_fakultas'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <label>Program Studi</label>
                            <select id="prodi" name="prodi" class="custom-select form-control-sm">
                                <option value="">Pilih Program Studi</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-6">
                            <label>Angkatan</label>
                            <select name="angkatan" class="custom-select form-control-sm">
                                <option value="">Pilih Angkatan</option>
                                <?php
                                for ($i=1;$i<=7;$i++)
                                    echo "<option value=\"201$i\">201$i</option>";
                                ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <label>ID Line</label>
                            <input type="text" class="form-control form-control-sm" placeholder="e.g puspita">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 formulir">
            <div class="card">
                <div class="card-header">
                    Peminatan
                </div>
                <div class="card-body">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="peminatan" class="custom-control-input" value="MP" checked>
                        <label class="custom-control-label" for="customRadio1">Mobile Programming</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="peminatan" class="custom-control-input" value="UI" >
                        <label class="custom-control-label" for="customRadio2">UI / UX Designer</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="peminatan" class="custom-control-input" value="BA" >
                        <label class="custom-control-label" for="customRadio3">Business Analyst</label>
                    </div>
                    <p>*Pilih berdasarkan keinginan mu</p>
                </div>
            </div>
            <button type="submit">Aprifak</button>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<div class="fixed-bottom foot">
    <div class="row mt-logo">
        <div class="col-1 logo_foot">
            <!-- <div class="logo_foot"></div> -->
        </div>
        <div class="col-3">
            <p class="copyright">Copyright &copy; <?php echo date("Y");?> &bull; All right Reserved. Aplikasi Rekrutmen Mobile Innovation Laboratory</p>
        </div>
    </div>
</div>
<script>
function loadProdi(str){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var json = JSON.parse(this.responseText);
            var output = '<option value="">Pilih Program Studi</option>';
            json.forEach(function(element) {
                output += '<option value="'+element["id_prodi"]+'">'+element["nama_prodi"]+'</option>';
            });
            document.getElementById("prodi").innerHTML = output;
        }
    };
    xhttp.open("GET", "<?php echo base_url() . 'Ajax/prodi?id='?>"+str, true);
    xhttp.send();
}
</script>
    <!-- /.container -->

    

