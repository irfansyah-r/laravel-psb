	<input type="hidden" id="id_user" name="id_user" value="{{$casis->id_user}}">
    <input type="hidden" id="no_reg" name="no_reg" value="{{ $casis->no_reg }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Nama*</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : $attrib }}" type="text" name="nama" id="nama" placeholder="Masukkan Nama User" value="{{ $errors->any() ? old('nama') : $casis->nama }}">
                @if ($errors->has('nama'))
                <div class="invalid-feedback">{{ $errors->first('nama') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>NISN*</label>
                <input class="form-control {{ $errors->has('nisn') ? 'is-invalid' : $attrib }}" type="text" name="nisn" id="nisn" placeholder="Masukkan NISN" value="{{ $errors->any() ? old('nisn') : $casis->nisn }}">
                @if ($errors->has('nisn'))
                    <div class="invalid-feedback">{{ $errors->first('nisn') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Jenis Kelamin*</label>
                <!-- <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" @if(old('jenis_kelamin')) checked @endif>  Laki-laki</label>&nbsp&nbsp

                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" @if(old('jenis_kelamin')) checked @endif>  Perempuan</label> -->
                <select class="form-control {{ $errors->has('jenis_kelamin') ? 'is-invalid' : $attrib }}" id="jenis_kelamin" name="jenis_kelamin">
                    <?php $jk = $casis->jenis_kelamin; ?>
                    @if($errors->any())
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    @else
                        <option value="L" {{ $jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Kota Tempat Lahir*</label>
                <input class="form-control {{ $errors->has('kota_tl') ? 'is-invalid' : $attrib }}" type="text" name="kota_tl" id="kota_tl" placeholder="Masukkan Tempat Lahir" value="{{ $errors->any() ? old('kota_tl') : $casis->kota_tl }}">
                @if ($errors->has('kota_tl'))
                    <div class="invalid-feedback">{{ $errors->first('kota_tl') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Lahir*</label>
                <input class="form-control {{ $errors->has('tanggal_lahir') ? 'is-invalid' : $attrib }}" type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ $errors->any() ? old('tanggal_lahir') : $casis->tanggal_lahir }}">
                @if ($errors->has('tanggal_lahir'))
                    <div class="invalid-feedback">{{ $errors->first('tanggal_lahir') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Nomor Kartu Keluarga*</label>
                <input class="form-control {{ $errors->has('no_kk') ? 'is-invalid' : $attrib }}" type="text" name="no_kk" id="no_kk" placeholder="Masukkan Nomor KK" value="{{ $errors->any() ? old('no_kk') : $casis->no_kk }}">
                @if ($errors->has('no_kk'))
                    <div class="invalid-feedback">{{ $errors->first('no_kk') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Alamat Sesuai Kartu Keluarga*</label>
                <textarea class="form-control {{ $errors->has('alamat_kk') ? 'is-invalid' : $attrib }}" name="alamat_kk" id="alamat_kk" placeholder="Masukkan Alamat Sesuai KK">{{ $errors->any() ? old('alamat_kk') : $casis->alamat_kk }}</textarea>
                @if ($errors->has('alamat_kk'))
                    <div class="invalid-feedback">{{ $errors->first('alamat_kk') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Alamat Domisili</label>
                <textarea class="form-control {{ $errors->has('alamat_dmsl') ? 'is-invalid' : $attrib }}" name="alamat_dmsl" id="alamat_dmsl" placeholder="Masukkan Alamat Domisili">{{ $errors->any() ? old('alamat_dmsl') : $casis->alamat_dmsl }}</textarea>
                @if ($errors->has('alamat_dmsl'))
                    <div class="invalid-feedback">{{ $errors->first('alamat_dmsl') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Status Tempat Tinggal*</label>
                <input class="form-control {{ $errors->has('status_tl') ? 'is-invalid' : $attrib }}" type="text" name="status_tl" id="status_tl" placeholder="Masukkan Status Tempat Tinggal" value="{{ $errors->any() ? old('status_tl') : $casis->status_tl }}">
                @if ($errors->has('status_tl'))
                    <div class="invalid-feedback">{{ $errors->first('status_tl') }}</div>
                @endif
            </div>
        </div>
</div>
<div class="tab-pane fade" id="form2" role="tabpanel">
        <div class="form-group">
            <label>Asal Sekolah*</label>
            <input class="form-control {{ $errors->has('asal_sekolah') ? 'is-invalid' : $attrib }}" type="text" name="asal_sekolah" id="asal_sekolah" placeholder="Masukkan Asal Sekolah" value="{{ $errors->any() ? old('asal_sekolah') : $casis->asal_sekolah }}">
            @if ($errors->has('asal_sekolah'))
                <div class="invalid-feedback">{{ $errors->first('asal_sekolah') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label>Nomor Seri Ijazah*</label>
            <input class="form-control {{ $errors->has('no_seri_ijazah') ? 'is-invalid' : $attrib }}" type="text" name="no_seri_ijazah" id="no_seri_ijazah" placeholder="Masukkan Nomor Seri Ijazah" value="{{ $errors->any() ? old('no_seri_ijazah') : $casis->no_seri_ijazah }}">
            @if ($errors->has('no_seri_ijazah'))
                <div class="invalid-feedback">{{ $errors->first('no_seri_ijazah') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label>Nomor Seri SKHUN*</label>
            <input class="form-control {{ $errors->has('no_seri_skhun') ? 'is-invalid' : $attrib }}" type="text" name="no_seri_skhun" id="no_seri_skhun" placeholder="Masukkan Nomor Seri SKHUN" value="{{ $errors->any() ? old('no_seri_skhun') : $casis->no_seri_skhun }}">
            @if ($errors->has('no_seri_skhun'))
                <div class="invalid-feedback">{{ $errors->first('no_seri_skhun') }}</div>
            @endif
        </div>
</div>
<div class="tab-pane fade" id="form3" role="tabpanel">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nama Ayah*</label>
                <input class="form-control {{ $errors->has('nama_ayah') ? 'is-invalid' : $attrib }}" type="text" name="nama_ayah" id="nama_ayah" placeholder="Masukkan Nama Ayah" value="{{ $errors->any() ? old('nama_ayah') : $casis->nama_ayah }}">
                @if ($errors->has('nama_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('nama_ayah') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Nomor Telepon Ayah</label>
                <input class="form-control {{ $errors->has('no_telp_ayah') ? 'is-invalid' : $attrib }}" type="text" name="no_telp_ayah" id="no_telp_ayah" placeholder="Masukkan Nomor Telepon Ayah" value="{{ $errors->any() ? old('no_telp_ayah') : $casis->no_telp_ayah }}">
                @if ($errors->has('no_telp_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('no_telp_ayah') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Kota Tempat Lahir Ayah*</label>
                <input class="form-control {{ $errors->has('kota_tl_ayah') ? 'is-invalid' : $attrib }}" type="text" name="kota_tl_ayah" id="kota_tl_ayah" placeholder="Masukkan Tempat Lahir Ayah" value="{{ $errors->any() ? old('kota_tl_ayah') : $casis->kota_tl_ayah }}">
                @if ($errors->has('kota_tl_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('kota_tl_ayah') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Lahir Ayah*</label>
                <input class="form-control {{ $errors->has('tanggal_lahir_ayah') ? 'is-invalid' : $attrib }}" type="date" name="tanggal_lahir_ayah" id="tanggal_lahir_ayah" placeholder="Masukkan Tanggal Lahir Ayah" value="{{ $errors->any() ? old('tanggal_lahir_ayah') : $casis->tanggal_lahir_ayah }}">
                @if ($errors->has('tanggal_lahir_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('tanggal_lahir_ayah') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row pb-2" style="border-bottom: 1px groove grey;">
            <div class="form-group col-md-4">
                <label>Pendidikan Terkahir Ayah*</label>
                <input class="form-control {{ $errors->has('pendidikan_ayah') ? 'is-invalid' : $attrib }}" type="text" name="pendidikan_ayah" id="pendidikan_ayah" placeholder="Masukkan Pendidikan Terkahir Ayah" value="{{ $errors->any() ? old('pendidikan_ayah') : $casis->pendidikan_ayah }}">
                @if ($errors->has('pendidikan_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('pendidikan_ayah') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Pekerjaan Ayah*</label>
                <input class="form-control {{ $errors->has('pekerjaan_ayah') ? 'is-invalid' : $attrib }}" type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" value="{{ $errors->any() ? old('pekerjaan_ayah') : $casis->pekerjaan_ayah }}">
                @if ($errors->has('pekerjaan_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('pekerjaan_ayah') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Penghasilan Ayah</label>
                <input class="form-control {{ $errors->has('penghasilan_ayah') ? 'is-invalid' : $attrib }}" type="text" name="penghasilan_ayah" id="penghasilan_ayah" placeholder="Masukkan Jumlah Penghasilan Ayah" value="{{ $errors->any() ? old('penghasilan_ayah') : $casis->penghasilan_ayah }}">
                @if ($errors->has('penghasilan_ayah'))
                    <div class="invalid-feedback">{{ $errors->first('penghasilan_ayah') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row pt-3">
            <div class="form-group col-md-6">
                <label>Nama Ibu*</label>
                <input class="form-control {{ $errors->has('nama_ibu') ? 'is-invalid' : $attrib }}" type="text" name="nama_ibu" id="nama_ibu" placeholder="Masukkan Nama Ibu" value="{{ $errors->any() ? old('nama_ibu') : $casis->nama_ibu }}">
                @if ($errors->has('nama_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('nama_ibu') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Nomor Telepon Ibu</label>
                <input class="form-control {{ $errors->has('no_telp_ibu') ? 'is-invalid' : $attrib }}" type="text" name="no_telp_ibu" id="no_telp_ibu" placeholder="Masukkan Nomor Telepon Ibu" value="{{ $errors->any() ? old('no_telp_ibu') : $casis->no_telp_ibu }}">
                @if ($errors->has('no_telp_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('no_telp_ibu') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Kota Tempat Lahir Ibu*</label>
                <input class="form-control {{ $errors->has('kota_tl_ibu') ? 'is-invalid' : $attrib }}" type="text" name="kota_tl_ibu" id="kota_tl_ibu" placeholder="Masukkan Tempat Lahir Ibu" value="{{ $errors->any() ? old('kota_tl_ibu') : $casis->kota_tl_ibu }}">
                @if ($errors->has('kota_tl_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('kota_tl_ibu') }}</div>
                @endif
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Lahir Ibu*</label>
                <input class="form-control {{ $errors->has('tanggal_lahir_ibu') ? 'is-invalid' : $attrib }}" type="date" name="tanggal_lahir_ibu" id="tanggal_lahir_ibu" placeholder="Masukkan Tanggal Lahir Ibu" value="{{ $errors->any() ? old('tanggal_lahir_ibu') : $casis->tanggal_lahir_ibu }}">
                @if ($errors->has('tanggal_lahir_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('tanggal_lahir_ibu') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row pb-2" style="border-bottom: 1px groove grey;">
            <div class="form-group col-md-4">
                <label>Pendidikan Terkahir Ibu*</label>
                <input class="form-control {{ $errors->has('pendidikan_ibu') ? 'is-invalid' : $attrib }}" type="text" name="pendidikan_ibu" id="pendidikan_ibu" placeholder="Masukkan Pendidikan Terkahir Ibu" value="{{ $errors->any() ? old('pendidikan_ibu') : $casis->pendidikan_ibu }}">
                @if ($errors->has('pendidikan_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('pendidikan_ibu') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Pekerjaan Ibu*</label>
                <input class="form-control {{ $errors->has('pekerjaan_ibu') ? 'is-invalid' : $attrib }}" type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" value="{{ $errors->any() ? old('pekerjaan_ibu') : $casis->pekerjaan_ibu }}">
                @if ($errors->has('pekerjaan_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('pekerjaan_ibu') }}</div>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label>Penghasilan Ibu</label>
                <input class="form-control {{ $errors->has('penghasilan_ibu') ? 'is-invalid' : $attrib }}" type="text" name="penghasilan_ibu" id="penghasilan_ibu" placeholder="Masukkan Jumlah Penghasilan Ibu" value="{{ $errors->any() ? old('penghasilan_ibu') : $casis->penghasilan_ibu }}">
                @if ($errors->has('penghasilan_ibu'))
                    <div class="invalid-feedback">{{ $errors->first('penghasilan_ibu') }}</div>
                @endif
            </div>
        </div>
        <div class="form-row pt-3">
            <div class="form-group col-md-12">
                <label>Nama Wali</label>
                <input class="form-control" type="text" name="nama_wali" id="nama_wali" placeholder="Masukkan Nama Wali" value="{{ $errors->any() ? old('nama_wali') : $casis->nama_wali}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Kota Tempat Lahir Wali</label>
                <input class="form-control" type="text" name="kota_tl_wali" id="kota_tl_wali" placeholder="Masukkan Tempat Lahir Wali" value="{{ $errors->any() ? old('kota_tl_wali') : $casis->kota_tl_wali}}">
            </div>
            <div class="form-group col-md-6">
                <label>Tanggal Lahir Wali</label>
                <input class="form-control" type="date" name="tanggal_lahir_wali" id="tanggal_lahir_wali" placeholder="Masukkan Tanggal Lahir Wali" value="{{ $errors->any() ? old('tanggal_lahir_wali') : $casis->tanggal_lahir_wali}}">
            </div>
        </div>
        <div class="form-row pb-2">
            <div class="form-group col-md-4">
                <label>Pendidikan Terkahir Wali</label>
                <input class="form-control" type="text" name="pendidikan_wali" id="pendidikan_wali" placeholder="Masukkan Pendidikan Terkahir Wali" value="{{ $errors->any() ? old('pendidikan_wali') : $casis->pendidikan_wali}}">
            </div>
            <div class="form-group col-md-4">
                <label>Pekerjaan Wali</label>
                <input class="form-control" type="text" name="pekerjaan_wali" id="pekerjaan_wali" placeholder="Masukkan Pekerjaan Wali" value="{{ $errors->any() ? old('pekerjaan_wali') : $casis->pekerjaan_wali}}">
            </div>
            <div class="form-group col-md-4">
                <label>Penghasilan Wali</label>
                <input class="form-control" type="text" name="penghasilan_wali" id="penghasilan_wali" placeholder="Masukkan Jumlah Penghasilan Wali" value="{{ $errors->any() ? old('penghasilan_wali') : $casis->penghasilan_wali}}">
            </div>
        </div>
</div>
<div class="tab-pane fade" id="form4" role="tabpanel">
        <div class="form-group">
            <label>Validasi</label>
            <select class="form-control" id="validasi" name="validasi">
                <?php $valid = $casis->validasi; ?>
                @if($errors->any)
                    <option value="N" {{ old('validasi') == 'N' ? 'selected' : '' }}>Tidak Valid</option>
                    <option value="Y" {{ old('validasi') == 'N' ? 'selected' : '' }}>Valid</option>
                @else
                    <option value="N" {{ $valid == 'N' ? 'selected' : '' }}>Tidak Valid</option>
                    <option value="Y" {{ $valid == 'N' ? 'selected' : '' }}>Valid</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" placeholder="Beri keterangan bila ada">{{ $errors->any() ? old('keterangan') : $casis->keterangan }}</textarea>
        </div>
</div>