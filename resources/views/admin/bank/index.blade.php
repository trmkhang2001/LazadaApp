@extends('admin.layouts.app')
@section('contents')
    <div class="">
        <div class="mb-5 mb-xl-8">
            <div class="mb-3">
                <h3 class="align-items-start flex-column">
                    <span class="fw-bold fs-3 mb-1">Tài khoản nhận tiền</span>
                </h3>
            </div>
            <div class="bg-white p-4">
                <form action="{{ route('banking.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngân hàng</label>
                        <input type="text" class="form-control" name="ngan_hang" aria-describedby="emailHelp"
                            value="{{ $item->ngan_hang }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" name="tai_khoan" value="{{ $item->tai_khoan }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chủ tài khoản</label>
                        <input type="text" class="form-control" name="ho_ten" value="{{ $item->ho_ten }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection
