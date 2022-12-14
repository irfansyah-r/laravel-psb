@extends('template')

@section('main')
    <div class="card">
        <div class="card-header">
            <h5>
                <a class="card-link" href="#" style="color: black;">Tambah User</a>
            </h5>
        </div>
        <?php 
            $attrib = '';
            if($errors->any()){
                $attrib = 'is-valid';
            }
        ?>
        <div class="card-body">
        	<form method="POST" action="{{ url('user') }}">
                @csrf
                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : $attrib }}" type="text" name="name" id="name" placeholder="Masukkan Nama User" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Alamat E-mail</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : $attrib }}" type="email" name="email" id="email" placeholder="Masukkan Alamt E-mail" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Role User</label>
                    <select class="form-control {{ $errors->has('role') ? 'is-invalid' : $attrib }}" id="role" name="role">
                        <option value="operator" {{ old('role') == 'operator' ? 'selected' : '' }}>Operator</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    </select>
                    @if ($errors->has('role'))
                        <div class="invalid-feedback">{{ $errors->first('role') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control {{ $errors->has('password') ? 'is-invalid' : $attrib }}" type="password" name="password" id="password" placeholder="Masukkan Password">
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Konfirmasi Password</label>
                    <input class="form-control {{ $errors->has('konfirmasi_password') ? 'is-invalid' : $attrib }}" type="password" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Password">
                    @if ($errors->has('konfirmasi_password'))
                        <div class="invalid-feedback">{{ $errors->first('konfirmasi_password') }}</div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@stop