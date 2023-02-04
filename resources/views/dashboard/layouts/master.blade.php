@include('dashboard.layouts.header')

<div class="container-fluid">
    <div class="row">
        @include('dashboard.layouts.aside') 
        @yield("main")
    </div>
</div>
    

@include('dashboard.layouts.footer')    