@extends('layouts.backend')
@section('title')
SAHABAT PSIKOLOGI
@endsection

@section('content')
<div class="container-fluid"style="width: 50%;">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i>Form Edit Data Jadwal</h5>
        </div>
<div class="container-fluid">
    <form method="post" action="{{ route('jadwal.update', $jadwal->id_jadwal) }}"  enctype="multipart/form-data"style="width: 100%" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <input type="hidden" name="id_jadwal" class="form-control" value="{{ $jadwal->id_jadwal }}" required>
        </div>
        <div class="form-group">
            <label style="color: black;">Nama Tes</label>
            <select class="form-control" name="id_tes">
                <option>Pilihan Daftar Tes</option>
                <?php foreach ($data_tes as $t) : ?>
                    <option value="{{$t->id_tes}}"  required><?php echo $t->nama_tes ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label style="color: black;">Nama Peserta</label>
            <select class="form-control" name="id_peserta">
                <option>Pilihan Daftar Peserta</option>
                <?php foreach ($peserta as $p) : ?>
                    <option value="{{$p->id}}"  required><?php echo $p->nama_peserta ?></option>
                    <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label style="color: black">Tanggal Tes</label>
            <input type="date" name="tanggal_tes" class="form-control" value="{{ $jadwal->tanggal_tes }}"required>
        </div>
        <div class="form-group">
            <label style="color: black">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" value="{{ $jadwal->jam_mulai }}"required>
        </div>
        <div class="form-group">
            <input type="hidden" name="token" class="form-control"value="{{ $jadwal->token }}" required>
        </div>   
        <div class="form-group">
            <input type="hidden" name="status_ujian" class="form-control"value="{{ $jadwal->status_ujian }}" required>
        </div>                 
        <button type="submit" class="btn btn-primary btn-md mt-3 font-weight-bold">Simpan</button>
      
       

    </form>
</div>
@endsection