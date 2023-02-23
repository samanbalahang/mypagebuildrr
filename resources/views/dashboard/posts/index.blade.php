@extends('dashboard.layouts.master')
@section("extracss")

@endsection

@section("main")
<div class="col-12 col-md-10">
    <main>
        @include('dashboard.extras.pageSettings')
        <section id="mainForm">
            <section class="formTitle">
                <h1>
                    تمپلیت
                </h1>
            </section>
            <section class="addbtn my-3">


            </section>
        </section>
    </main>
</div>
@endsection

@section("extrajs")

@endsection