
@extends('admin.menu.adminMenu')

@section('section')
<form action="{{ route('admin.sejarah.edit.proses') }}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">Form Edit Sejarah</div>
        <div class="card-body">
            <textarea class="form-control" name="sejarah" rows="10" placeholder="Masukkan sejarah di sini...">{!! $data->sejarah !!}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
    
@endsection
