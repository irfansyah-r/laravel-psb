@extends('template')

@section('main')
    <div class="card">

        <div class="card-header">

            <h5>
                <a class="card-link" href="#" style="color: black;">Daftar User</a>
            </h5>

        </div>

        <div class="card-body">

            <table id="table" class="table table-sm table-hover table-striped table-bordered" cellspacing="0">

                <thead>

                    <tr>    

                        <th>#</th>

                        <th>Nama</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>    

                        <th>#</th>

                        <th>Nama</th>

                        <th>Email</th>

                        <th>Role</th>

                        <th>Aksi</th>

                    </tr>

                </tfoot>

                <tbody>

                    @foreach($result as $r)

                        <tr>

                            <td> {{ $r->id }} </td>

                            <td> {{ $r->name }} </td>

                            <td> {{ $r->email }} </td>

                            <td> {{ $r->role }} </td>

                            <td> 
                                <a href="{{ url('user/' . $r->id . '/edit') }}">Edit</a> | <a href="javascript:$('#myForm').submit();">Hapus</a>
                                {!! Form::open(['id' => 'myForm', 'name' => 'myForm', 'method' => 'DELETE', 'action' => ['UserController@destroy', $r->id]]) !!}
                                @csrf
                                {!! method_field('delete') !!}
                                {!! Form::close() !!}
                            </td>

                        </tr>               

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
    <script type="text/javascript">
        function submitform() {   document.myForm.submit(); }
    </script>
@stop