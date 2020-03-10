@extends('siswas.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('siswas.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('siswas.update',$siswa->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>NISN:</strong>
                    <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control" placeholder="NISN">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama depan:</strong>
                    <input class="form-control"  name="nama_depan" value="{{ $siswa->nama_depan }}" placeholder="Nama depan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama belakang:</strong>
                    <input class="form-control" name="nama_belakang" value="{{ $siswa->nama_belakang }}" placeholder="Nama belakang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis kelamin:</strong>
                    <input class="form-control" name="jk" value="{{ $siswa->jk }}"placeholder="Jenis kelamin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" name="alamat" value="{{ $siswa->alamat }}" placeholder="Alamat"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Provinsi</strong>
                    <input class="form-control" name="provinsi" value="{{ $siswa->provinsi }}" placeholder="Provinsi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kabupaten:</strong>
                    <input class="form-control" name="kabupaten" value="{{ $siswa->kabupaten }}" placeholder="Kabupaten">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Asal sekolah:</strong>
                    <input class="form-control" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}"placeholder="Asal sekolah">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nilai rata2 UN:</strong>
                    <input class="form-control"  name="nilai_rata2_un" value="{{ $siswa->nilai_rata2_un }}" placeholder="Nilai rata2 UN">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection