@extends('admin.layouts.app')
@section('contents')
    <div class="">
        <div class="">
            <div class="d-flex mb-4 justify-content-between">
                <div class="">
                    <form action="" method="POST">
                        @csrf
                        <div class="d-flex align-items-center position-relative my-1">
                            <input type="text" id="search" name="search" class="me-2" placeholder="Nhập thông tin" />
                            <button type="submit" class="p-1 btn-blue border-0"> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
                <div class="">
                    <a href="/admin/donhangmau/add" class="btn-blue p-2">
                        Thêm đơn hàng mẫu
                    </a>
                </div>
            </div>
            <div class="pt-0">

                <div id="kt_ecommerce_products_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="bg-white p-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th>
                                        Đơn hàng</th>
                                    <th>
                                        Mã
                                    </th>
                                    <th>
                                        Tên sản phẩm
                                    </th>
                                    <th>
                                        Giá
                                    </th>
                                    <th>
                                        Thao tác
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($items as $product)
                                    <tr class="odd">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a href="#" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url({{ $product->hinh_san_pham }});"></span>
                                                </a>
                                            </div>
                                        </td>
                                        <td class=" pe-0">
                                            <span class="fw-bold">{{ $product->id }}</span>
                                        </td>
                                        <td class=" pe-0" data-order="34">
                                            <span class="fw-bold ms-3">{{ $product->ten_san_pham }}</span>
                                        </td>
                                        <td class=" pe-0">{{ number_format($product->tong_gia) }}</td>
                                        <td class="">
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <a href="{{ route('donhangmau.edit', $product->id) }}"
                                                        class="btn-blue p-2">
                                                        Edit
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <form action="{{ route('donhangmau.delete', $product->id) }}"
                                                        method="POST" type="button"
                                                        onsubmit="return confirm('Bạn chắc chắn muốn xóa ?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn-red border-0">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="">
                        {{ $items->links() }}
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end:: body-->
        </div>
        <!--end::Products-->
    </div>
@endsection
