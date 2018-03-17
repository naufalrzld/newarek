<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<!--End of Nav Bawah header-->
<?php $this->load->view('menu/navbar_head');?>
<?php $this->load->view('menu/navbar_second');?>
<div class="container-fluid">
    <div class="row sesi_pos">
        <div class="col-lg-1 sesi">
            <div class="nomor">2</div>
            <div class="judul_sesi">
                Unggah Berkas
            </div>
        </div>
        <div class="col-lg-7 formulir">
            <div class="card ">
                <div class="card-header card_bio_title">
                   unggah berkas persyaratan
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 ketentuan_brks">
                            <?php echo form_open_multipart('Functions/submitBerkas');?>
                            <p>Sebelum menggunggah, Anda harus:</p>
                            <ol>
                                <li>Mengompresi semua berkas ke dalam bentuk <span class="rar">.rar</span></li>
                                <li>
                                    Format Penamaan File rar:
                                    <span class="contoh_format">
                                        [Peminatan_Tahun Angkatan_Nama Lengkap.rar]
                                        Contoh: UIUX_2016_Faishal Rachman.rar
                                    </span>
                                </li>
                            </ol>
                        </div>
                        <div class="col-6">
                            <label class="btn btn-primary btn-block" for="my-file-selector">
                                <input id="my-file-selector" name="userfile" type="file" style="display:none"
                                onchange="$('#upload-file-info').html(this.files[0].name)">
                                Tambahkan Berkas
                            </label>

                            <span class="file_siap" id="upload-file-info"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 formulir">
            <div class="card">
                <div class="card-header card_bio_title">
                    Isi berkas rar
                </div>
                <div class="card-body isi_rar">
                <ol>
                    <li>CV Kreatif <span class="ket_format">dalam format Pdf</span></li>
                    <li>
                        Kartu Hasil Studi
                        <ul>
                            <li>Angkatan 2015: Semester 1 s.d. 5</li>
                            <li>Angkatan 2016: Semester 1 s.d. 3</li>
                            <li>Angkatan 2017: Semester 1</li>
                        </ul>
                     </li>
                     <li>Surat Untuk Motion <span class="ket_format">dalam format Pdf</span></li>
                     <li>Pas Foto <span class="ket_format">4 x 6 berwarna, .jpg</span></li>
                     <li>Sertifikat Kompetisi*<span class="ket_format">dalam format Pdf</span></li>
                     <li>Portofolio* <span class="ket_format">dalam format Pdf</span></li>
                </ol>
                <p class="bintang">*Tidak Wajib</p>
                </div>
            </div>

            <button type="submit" class="btn btn-danger btn-md float-right btn_simpan">Simpan</button>
        </div>
        <?php echo form_close();?>
    </div>
</div>
<?php $this->load->view('menu/footer');?>
    <!-- /.container -->

    

