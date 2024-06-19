@extends('admin.layouts.app')
@section('contents')
    <div class="">
        @if (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="{{ route('tao_lenh_rut_tien') }}" method="POST">
            @csrf
            <label for="" class="form-label">Tiền rút:</label>
            <input type="text" name="tienrut" class="form-control">
            <button type="submit">Xác nhận</button>
        </form>
    </div>
@endsection
