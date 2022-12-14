@extends('template')

@section('main')
    <div class="card">

        <div class="card-header">

            <h5>
                <a class="card-link" href="#" style="color: black;">Daftar Casis</a>
            </h5>

        </div>

        <div class="card-body">

            <table id="table" class="table table-sm table-hover table-striped table-bordered" cellspacing="0">

                <thead>

                    <tr>    

                        <th>#</th>

                        <th>NISN</th>

                        <th>Nama</th>

                        <th>Alamat</th>

                        <th>TTL</th>

                        <th>Jenis Kelamin</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>    

                        <th>#</th>

                        <th>NISN</th>

                        <th>Nama</th>

                        <th>Alamat</th>

                        <th>TTL</th>

                        <th>Jenis Kelamin</th>

                        <th>Aksi</th>

                    </tr>

                </tfoot>

                <tbody>

                    @foreach($result as $r)

                        <tr>

                            <td> {{ $r->id }} </td>

                            <td> {{ $r->nisn }} </td>

                            <td> {{ $r->nama }} </td>

                            <td> {{ $r->alamat_kk }} </td>

                            <td> {{ $r->kota_tl }}, {{ $r->tanggal_lahir }} </td>

                            <td> {{ $r->jenis_kelamin }} </td>

                            <td> 
                                <a href="{{ url('casis/' . $r->id . '/edit') }}">Edit</a> |  <a href="javascript:$('#myForm').submit();">Hapus</a>
                                {!! Form::open(['id' => 'myForm', 'name' => 'myForm', 'method' => 'DELETE', 'action' => ['CasisController@destroy', $r->id]]) !!}
                                @csrf
                                {!! method_field('delete') !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>               

                    @endforeach

                </tbody>

            </table>

            &nbsp&nbsp&nbsp<a href="{{ url('export') }}" class="btn btn-light" style="background-color: #a1e0ab; margin-top: 10px;">Export data ke Excel</a>

        </div>

    </div>
@stop