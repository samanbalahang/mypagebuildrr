@extends('dashboard.layouts.master')
@section("extracss")
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatables.min.css">
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatable-init.css">

@endsection

@section("main")
<div class="col-12 col-md-10">
    <main>
        @include('dashboard.extras.pageSettings')
        <section id="mainForm">
            <section class="formTitle  d-flex justify-content-between">
                <h1>
                    دسته بندی ها
                </h1>
                <a href="{{route('cats.create')}}" class="btn btn-success p-3">ایجاد دسته بندی</a>
            </section>
            <section class="addbtn my-3">
                <table class="datatable tablerout table-light-grid">
                    <thead>
                        <tr>
                            <th class="nosearch">title</th>
                            <th>عنوان مطلب</th>
                            <th>تاریخ</th>
                            <th>نویسنده</th>
                            <th class="nosearch">مدیریت مطالب</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                              <td>
                                <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                        <tr>
                        <td></td>
                            <td>title</td>
                            <td>title</td>
                            <td>title</td>
                            <td>
                            <a href="#" class="btn btn-edit btn-warning" title="ویرایش">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-delete btn-danger" title="حذف">
                                    <i class="fas fa-trash"></i>                          
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </section>
        </section>
    </main>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/datatables.min.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatabledet.js"></script>
@endsection