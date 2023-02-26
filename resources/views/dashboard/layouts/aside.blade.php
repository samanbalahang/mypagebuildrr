@section("sidebar")
<aside class="col-12 col-md-2 p-0 bg-black">
    <nav class="" id="sidebarMenu">
        <div class="pt-6">
            <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active"
                       id="home-tab0"  type="button" href="#">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>پیشخوان</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">بروز رسانی</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab0" type="button" href="#">
                        <i class="fas fa-pen-nib fa-fw me-3"></i><span>بنر </span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">همه بنرها</a></li>
                        <li><a href="#">افزودن بنر</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="media-tab0" role="tab" type="button" href="#">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>مدیا</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">کتابخانه</a></li>
                        <li><a href="#">افزودن</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="profile-tab0" type="button" href="#">
                        <i class="fas fa-pen-nib fa-fw me-3"></i><span>نوشته </span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="{{route('posts.index')}}">همه نوشته ها</a></li>
                        <li><a href="{{route('posts.create')}}">افزودن نوشته</a></li>
                        <li><a href="{{route('cats.index')}}">دسته ها</a></li>
                        <li><a href="{{route('tags.index')}}">برچسب ها</a></li>
                    </ul>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="page-tab0" role="tab" type="button" href="#">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>برگه ها </span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="{{route('pages.index')}}">همه برگه ها</a></li>
                        <li><a href="{{route('pages.create')}}">افزودن جدید</a></li>
                        <li><a href="#">صفحه اصلی</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="comment-tab0" role="tab" type="button" href="">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>تبلیغات</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="{{route('advs.index')}}">همه تبلیغ ها</a></li>
                        <li><a href="{{route('advs.create')}}">افزودن جدید</a></li>
                        <li><a href="#">دسته بندی تبلیغات</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="comment-tab0" role="tab" type="button" href="{{route('comments.index')}}">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>دیدگاه ها </span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="form-tab0" role="tab" type="button" href="#">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>فرم ساز</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">مشاهده همه</a></li>
                        <li><a href="#">افزودن جدید</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="shopManager" aria-selected="false" class="nav-link"
                       data-mdb-target="#shopManager0"
                       data-mdb-toggle="tab"
                       id="shopManager-tab0" role="tab" type="button">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>مدیریت فروشگاه</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">سفارشات</a></li>
                        <li><a href="#">مشتریان</a></li>
                        <li><a href="#">کوپن ها</a></li>
                        <li><a href="#">گزارشات</a></li>
                        <li><a href="#">پیکربندی</a></li>
                        <li><a href="#">وضعیت</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="product" aria-selected="false" class="nav-link" data-mdb-target="#product0"
                       data-mdb-toggle="tab"
                       id="product-tab0" role="tab" type="button">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>محصولات</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">افزودن جدید</a></li>
                        <li><a href="#">دسته بندی ها</a></li>
                        <li><a href="#">برچسب ها</a></li>
                        <li><a href="#">ویژگی ها</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="shopStats" aria-selected="false" class="nav-link" data-mdb-target="#shopStats0"
                       data-mdb-toggle="tab"
                       id="shopStats-tab0" role="tab" type="button">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>آمار فروشگاه</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">بررسی اجمالی</a></li>
                        <li><a href="#">محصولات</a></li>
                        <li><a href="#">درآمد</a></li>
                        <li><a href="#">سفارش ها</a></li>
                        <li><a href="#">متغییرها</a></li>
                        <li><a href="#">دسته ها</a></li>
                        <li><a href="#">کوپن ها</a></li>
                        <li><a href="#">مالیات</a></li>
                        <li><a href="#">دانلود ها</a></li>
                        <li><a href="#">انبار</a></li>
                        <li><a href="#">پیکربندی</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="marketing" aria-selected="false" class="nav-link" data-mdb-target="#marketing0"
                       data-mdb-toggle="tab"
                       id="marketing-tab0" role="tab" type="button">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>بازاریابی</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">مشاهده بازاریابها</a></li>
                        <li><a href="#">افزودن بازاریاب</a></li>
                        <li><a href="#">کپن ها</a></li>
                        <li><a href="#">افزودن کپن</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="show" aria-selected="false" class="nav-link" data-mdb-target="#marketing0"
                       data-mdb-toggle="tab"
                       id="show-tab0" role="tab" type="button">
                        <i class="fas fa-file-alt fa-fw me-3"></i><span>نمایش</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">پوست ها</a></li>
                        <li><a href="#">سفارشی سازی</a></li>
                        <li><a href="#">ابزارک ها</a></li>
                        <li><a href="#">فهرست ها</a></li>
                        <li><a href="#">سربرگ ها</a></li>
                        <li><a href="#">پس زمینه</a></li>
                        <li><a href="#">ویرایشگر</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="users" aria-selected="false" class="nav-link" data-mdb-target="#users0"
                       data-mdb-toggle="tab"
                       id="users-tab0" role="tab" type="button">
                        <i class="fas fa-user-alt fa-fw me-3"></i><span>کاربران</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">همه کاربران</a></li>
                        <li><a href="#">افزودن</a></li>
                        <li><a href="#">ابزارک ها</a></li>
                        <li><a href="#">شناسنامه</a></li>
                        <li><a href="#">سربرگ ها</a></li>
                        <li><a href="#">پس زمینه</a></li>
                        <li><a href="#">ویرایشگر</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="tools" aria-selected="false" class="nav-link" data-mdb-target="#tools0"
                       data-mdb-toggle="tab"
                       id="tools-tab0" role="tab" type="button">
                        <i class="fas fa-user-alt fa-fw me-3"></i><span>ابزارها</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">ابزارهای دسترسی</a></li>
                        <li><a href="#">درون ریزی</a></li>
                        <li><a href="#">برون ریزی</a></li>
                        <li><a href="#">سلامت سایت</a></li>
                        <li><a href="#">برون ریزی داده های شخصی</a></li>
                        <li><a href="#">پاکسازی اطلاعات شخصی</a></li>
                        <li><a href="#">عملیات های برنامه ریزی شده</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="setting" aria-selected="false" class="nav-link" data-mdb-target="#setting0"
                       data-mdb-toggle="tab"
                       id="setting-tab0" role="tab" type="button">
                        <i class="fas fa-cog fa-fw me-3"></i><span>تنظیمات</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">عمومی</a></li>
                        <li><a href="#">نوشتن</a></li>
                        <li><a href="#">خواندن</a></li>
                        <li><a href="#">گفتگو</a></li>
                        <li><a href="#">رسانه</a></li>
                        <li><a href="#">پیوندهای یکتا</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="acf" aria-selected="false" class="nav-link" data-mdb-target="#acf0"
                       data-mdb-toggle="tab"
                       id="acf-tab0" role="tab" type="button">
                        <i class="fas fa-cog fa-fw me-3"></i><span>زمینه های سفارشی</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="#">گروه های زمینه</a></li>
                        <li><a href="#">افزودن</a></li>
                        <li><a href="#">ابزارها</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="acf" aria-selected="false" class="nav-link" data-mdb-target="#acf0"
                       data-mdb-toggle="tab"
                       id="acf-tab0" role="tab" type="button">
                        <i class="fas fa-cog fa-fw me-3"></i><span>قالب ها</span>
                    </a>
                    <ul class="absolute-menu submenu">
                        <li><a href="{{route('tremplates.index')}}">لیست قالب ها</a></li>
                        <li><a href="{{route('tremplates.create')}}">افزودن</a></li>
                    </ul>
                </li>
                <li class="nav-item" role="presentation">
                    <a aria-controls="minimized" aria-selected="false" class="nav-link" data-mdb-target="#minimized0"
                       data-mdb-toggle="tab"
                       id="minimized-tab0" role="tab" type="button">
                        <i class="fas fa-cog fa-fw me-3"></i><span>جمع کردن فهرست</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

</aside>
@show