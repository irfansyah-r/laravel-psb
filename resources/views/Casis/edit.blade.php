@extends('template')

@section('main')
@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" style="color: black;" id="form1-tab" data-toggle="tab" href="#form1" role="tab"  aria-controls="form1">Data Siswa&nbsp
                        @if($errors->has('nama') || $errors->has('nisn') || $errors->has('jenis_kelamin') || $errors->has('kota_tl') || $errors->has('tanggal_lahir') || $errors->has('no_kk') || $errors->has('alamat_kk') || $errors->has('alamat_dmsl') || $errors->has('status-tl'))
                        <span class="badge badge-danger">!</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;"  id="form2-tab" data-toggle="tab" href="#form2" role="tab" aria-controls="form2">Data Pendidikan Sebelumnya&nbsp
                        @if($errors->has('asal_sekolah') || $errors->has('no_seri_ijazah') || $errors->has('no_seri_skhun'))
                        <span class="badge badge-danger">!</span>
                        @endif
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: black;"  id="form2-tab" data-toggle="tab" href="#form3" role="tab" aria-controls="form3">Data Orang Tua&nbsp
                        @if($errors->has('nama_ayah') || $errors->has('no_telp_ayah') || $errors->has('kota_tl_ayah') || $errors->has('tanggal_lahir_ayah') || $errors->has('pendidikan_ayah') || $errors->has('pekerjaan_ayah') || $errors->has('penghasilan_ayah') || $errors->has('nama_ibu') || $errors->has('no_telp_ibu') || $errors->has('kota_tl_ibu') || $errors->has('tanggal_lahir_ibu') || $errors->has('pendidikan_ibu') || $errors->has('pekerjaan_ibu') || $errors->has('penghasilan_ibu'))
                        <span class="badge badge-danger">!</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
        <?php 
            $attrib = '';
            if($errors->any()){
                $attrib = 'is-valid';
            }
        ?>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="form1" role="tabpanel">
                	{!! Form::model($casis, ['method' => 'PATCH', 'action' => ['CasisController@update', $casis->id]]) !!}
                        @include('Casis/editForm')
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
                <button type="submit" class="btn btn-info" style="width: 100%;">Submit</button>
            {!! Form::close() !!}
        </div>
    </div>
@stop