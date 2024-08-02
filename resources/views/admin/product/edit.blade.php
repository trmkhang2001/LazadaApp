@extends('admin.layouts.app')
@section('contents')

    <div class="">
        <div class="">
            <div class="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <div class="">
            <form action="{{ route('donhangmau.editpost', $item->id) }}" class="" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="bg-white p-4">
                    <div class="">
                        <div class="tab-pane fade show active"role="tab-panel">
                            <div class="">
                                <div class="">
                                    <div class="">
                                        <div class="">
                                            <h2>Thông tin</h2>
                                        </div>
                                    </div>
                                    <div class=" pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Tên sản phẩm mẫu: </label>
                                            <input type="text" name="ten_san_pham" class="form-control mb-2"
                                                placeholder="Tên sản phẩm mẫu"
                                                value = "@if (isset($item)) {{ $item->ten_san_pham }} @endif {{ old('ten_san_pham') }}" />
                                            <div class="text-muted fs-7">Tên sản phẩm hiển thị .</div>
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="form-label">Link hỉnh sản phẩm mẫu</label>
                                            <input type="text" name="hinh_san_pham" class="form-control mb-2"
                                                placeholder="Link hình sản phẩm mẫu"
                                                value = "@if (isset($item)) {{ $item->hinh_san_pham }} @endif {{ old('hinh_san_pham') }}" />
                                            <div class="text-muted fs-7">Linh hình ảnh của sản phẩm.</div>
                                        </div>
                                        <div>
                                            <label class="form-label">Tổng giá đơn hàng:</label>
                                            <input type="text" name="tong_gia" class="form-control mb-2"
                                                placeholder="Tổng giá đơn hàng"
                                                value = "@if (isset($item)) {{ $item->tong_gia }} @endif {{ old('tong_gia') }}" />
                                            <div class="text-muted fs-7">Linh hình ảnh của sản phẩm.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a href="/admin/donhangmau" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Huỷ</a>
                        <button type="submit" class="btn btn-primary">
                            <span class="label">Lưu</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
