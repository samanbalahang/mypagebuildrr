@extends('dashboard.layouts.master')

@section("extracss")
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatables.min.css">
<link rel="stylesheet" href="{{url('/')}}/dashboard/assets/css/datatable-init.css">

@endsection

<!--Main Navigation-->

@section("main")
<div class="col-12 col-md-10">
    <main>
        @include('dashboard.extras.pageSettings')
        <section id="mainForm">
            <section class="formTitle">
                <h1>
                    مدیاها
                </h1>
            </section>
            <section class="addbtn my-3">
                
            </section>
            <section id="tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            هدر
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            فوتر
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                            ساید بار
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        @include("dashboard.Templats.parts.header")
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        @include("dashboard.Templats.parts.footer")
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        @include("dashboard.Templats.parts.aside")
                    </div>
                </div>
            </section>
            <table id="showMenu" class="display datatable w-100">
                <thead>
                    <tr>
                        <th class="nosearch">id</th>
                        <th>مدیا:</th>
                        <th class="nosearch">مدیریت</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>
                            "test"
                        </td>
                        <td>
                            <div class="d-flex justify-content-center w-100">
                                <a href="edit-adminPanel.html" class="btn btn-warning p-2">ویرایش</a>
                                <form action="" methode="POST">
                                    <input type="submit" value="حذف" class="btn btn-danger p-2">
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>مدیا:</th>
                        <th>مدیریت</th>
                    </tr>
                </tfoot>
            </table>
        </section>
    </main>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/datatables.min.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatabledet.js"></script>
@endsection