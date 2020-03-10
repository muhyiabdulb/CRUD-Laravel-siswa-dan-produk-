@extends('products.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Laravel 5.8 CRUD</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('siswas.create') }}"> Create New Siswa</a>

            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>
            <th>NO</th>

            <th>NISN</th>

            <th>Nama depan</th>

            <th>Nama belakang</th>

            <th>Jenis kelamin</th>

            <th>Alamat</th>

            <th>Provinsi</th>

            <th>Kabupaten</th>

            <th>Asal sekolah</th>

            <th>Nilai rata2 UN</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($siswas as $siswa)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $siswa->nisn }}</td>

            <td>{{ $siswa->nama_depan }}</td>

            <td>{{ $siswa->nama_belakang}}</td>

            <td>{{ $siswa->jk}}</td>

            <td>{{ $siswa->alamat }}</td>

            <td>{{ $siswa->provinsi }}</td>

            <td>{{ $siswa->kabupaten }}</td>

            <td>{{ $siswa->asal_sekolah }}</td>

            <td>{{ $siswa->nilai_rata2_un }}</td>

            <td>

                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('siswas.show',$siswa->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $siswas->links() !!}

@endsection