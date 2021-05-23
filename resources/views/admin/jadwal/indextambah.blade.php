@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
{{-- @include('flash-message') --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary">Data Jadwal</h5>
        </div>
        <div class="card-body">
    {{-- <div class="d-inline-block form-inline mb-3 float-right">
        <form action="{{ route('soal.cari') }}" method="get">
        <input type="text" name="cari" class="form-control pull-right" placeholder="Search">
        <button type="submit" class="btn btn-primary"><i class="fas fa-search fa-sm"></i></button>
        </form>
    </div> --}}
    <form action="{{ route('jadwal.tambah') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id_jadwal" class="form-control" value="{{ count($data_jadwal)+1 }}"required>
        </div>
        <div class="form-group">
            <label>Nama Tes</label>
            <select class="form-control" name="id_tes">
                <option>Pilihan Daftar Tes</option>
                <?php foreach ($data_tes as $t) : ?>
                    <option value="{{$t->id_tes}}" required><?php echo $t->nama_tes ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label style="color: black">Tanggal Tes</label>
            <input type="date" name="tanggal_tes" class="form-control" required>
        </div>
        <div class="form-group">
            <label style="color: black">Waktu</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>              
        <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color: black">
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th></th>
    </tr>                                    
    
    @foreach ($data_peserta as $p)
    <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->nama_peserta }}</td>
        <td>
            <input type="checkbox" class="mt-2" name="jadwal[]" value="{{ $p->id}}">
        </td>
    </tr>
    @endforeach            
</table>

<button class="btn btn-primary float-right" type="submit"><i class="far fa-save"></i></button>
</div>
</div>
</form>
</div>
@endsection