@extends('user.mainapps')
@section('title') pendaftaran @endsection
@section('content')
    <section id="Beranda">
        <div class="container-fluid" id="baground">
            <div class="container text-center" style="margin-top: 70px;" id="pembuka">
                <h1 class="text-warning fw-bold">PENERIMAAN PESERTA DIDIK BARU <br> SMA NEGERI 19 PALEMBANG 2023/2024 <br>
                    Registrasi Online melalui</h1>
                <a href="portal"><button type="button" class="btn btn-secondary m-3">Portal Simbels</button></a>
            </div>
        </div>
    </section>

    <section class="py-2 mt-2" id="pendaftaran">
        <div class="container py-3">
            <div class="row mt-3 mb-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="/saveblog" enctype="multipart/form-data">
                                @csrf
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h2>Data Pribadi</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="namasiswa" class="form-label">Nama Lengkap*</label>
                                                <input type="text" maxlength="50" class="form-control" id="namasiswa" name="namasiswa" placeholder="Nama Siswa">
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="nisn" class="form-label">NISN*</label>
                                                <input type="text" maxlength="10" class="form-control" id="nisn" name="nisn" placeholder="NISN">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="tempatlahir" class="form-label mt-2">Tempat Lahir*</label>
                                                <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir">
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="tanggallahir" class="form-label mt-2">Tanggal Lahir*</label>
                                                <input type="date" class="form-control" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="agama" class="form-label mt-2">Agama*</label>
                                                <select class="form-control" name="agama">
                                                    <option selected>---Pilih Agama---</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="jeniskelamin" class="form-label mt-2">Jenis Kelamin*</label> <br>
                                                <input type="radio" id="Laki-laki" name="gender" value="Laki-laki"><label for="Laki-laki">Laki-laki</label> <br>
                                                <input type="radio" id="Perempuan" name="gender" value="Perempuan"><label for="Perempuan">Perempuan</label>
                                            </div>
                                        </div>  
                                            
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="alamat" class="form-label mt-2">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="kewarganegaraan" class="form-label mt-2">Kewarganegaraan*</label>
                                                <select class="form-control" name="kewarganegaraan">
                                                    <option selected>---Pilih Kewarganegaraan---</option>
                                                    <option value="wni">WNI</option>
                                                    <option value="wna">WNA</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>  
                                </div>  

                                <div class="d-sm-flex justify-content-between align-items-center mt-5">
                                    <h2>Data Orang Tua</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive" style="overflow-x:hidden;">
                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="namaayah" class="form-label">Nama Lengkap Ayah*</label>
                                                <input type="text" maxlength="50" class="form-control" id="namaayah" name="namaayah" placeholder="Nama Lengkap Ayah">
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="nikayah" class="form-label">NIK Ayah*</label>
                                                <input type="text" maxlength="10" class="form-control" id="nikayah" name="nikayah" placeholder="NIK Ayah">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="pendidikanayah" class="form-label mt-2">Pendidikan Ayah*</label>
                                                <select class="form-control" name="pendidikanayah">
                                                    <option selected>---Pilih Pendidikan---</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
                                                    <option value="S1/Sederajat">S1/Sederajat</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="pekerjaanayah" class="form-label mt-2">Pekerjaan Ayah*</label>
                                                <select class="form-control" name="pekerjaanayah">
                                                    <option selected>---Pilih Pekerjaan---</option>
                                                    <option value="Tidak Bekerja">Tidak Bekerja</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="WIRASWATA">WIRASWATA</option>
                                                    <option value="Pekerja Harian Lepas">Pekerja Harian Lepas</option>
                                                    <option value="TNI/POLRI">TNI/POLRI</option>
                                                    <option value="BURUH">BURUH</option>
                                                    <option value="PENSIUN">PENSIUN</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="agamaayah" class="form-label mt-2">Agama*</label>
                                                <select class="form-control" name="agamaayah">
                                                    <option selected>---Pilih Agama---</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamatayah" class="form-label mt-2">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                                            </div>
                                        </div>
                                            <br>
                                            <hr>
                                            
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="namaibu" class="form-label">Nama Lengkap Ibu*</label>
                                                <input type="text" maxlength="50" class="form-control" id="namaibu" name="namaibu" placeholder="Nama Lengkap Ibu">
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="nikibu" class="form-label">NIK Ibu*</label>
                                                <input type="text" maxlength="10" class="form-control" id="nikibu" name="nikibu" placeholder="NIK Ibu">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="pendidikanibu" class="form-label mt-2">Pendidikan Ibu*</label>
                                                <select class="form-control" name="pendidikanibu">
                                                    <option selected>---Pilih Pendidikan---</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA/SMK/Sederajat">SMA/SMK/Sederajat</option>
                                                    <option value="S1/Sederajat">S1/Sederajat</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                            <div class= "col-sm-6">
                                                <label for="pekerjaanibu" class="form-label mt-2">Pekerjaan Ibu*</label>
                                                <select class="form-control" name="pekerjaanibu">
                                                    <option selected>---Pilih Pekerjaan---</option>
                                                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="WIRASWATA">WIRASWATA</option>
                                                    <option value="Pekerja Harian Lepas">Pekerja Harian Lepas</option>
                                                    <option value="TNI/POLRI">TNI/POLRI</option>
                                                    <option value="BURUH">BURUH</option>
                                                    <option value="PENSIUN">PENSIUN</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class= "col-sm-6">
                                                <label for="agamaibu" class="form-label mt-2">Agama*</label>
                                                <select class="form-control" name="agamaibu">
                                                    <option selected>---Pilih Agama---</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="kristen">Kristen</option>
                                                    <option value="katolik">Katolik</option>
                                                    <option value="hindu">Hindu</option>
                                                    <option value="budha">Budha</option>
                                                    <option value="lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="alamatibu" class="form-label mt-2">Alamat</label>
                                                <input type="text" class="form-control" id="alamatibu" name="alamatibu" placeholder="Alamat">
                                            </div>
                                            <div class="text-end mt-3">
                                                <button type="submit" class="btn btn-secondary">Kirim</button>
                                            </div>
                                        </div>
                                    </div>  
                                </div>  
                            </form>
                        </div>                    
                    </div>                           
                </div>
            </div>   
        </div>
    </section>
@endsection