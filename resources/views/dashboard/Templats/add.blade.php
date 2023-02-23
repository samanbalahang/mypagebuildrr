@extends('dashboard.layouts.master')

@section("extracss")
<link href="{{url('/')}}/dashboard/assets/css/summernote.min.css" rel="stylesheet">
<link href="{{url('/')}}/dashboard/assets/css/datatables.min.css" rel="stylesheet">
<link href="{{url('/')}}/dashboard/assets/css/datatable-init.css" rel="stylesheet">
<link href="{{url('/')}}/dashboard/assets/css/tables.css" rel="stylesheet">
<script src="{{url('/')}}/dashboard/assets/js/summernote.min.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatables.min.js"></script>
<style>
    #selectTableFrom{
        height: 300px;
        overflow-y: scroll;
    }
</style>

@endsection

<!--Main Navigation-->

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
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="template-home-tab-pane" role="tabpanel" aria-labelledby="template-home" tabindex="0">
                        <form action="" method="post" id="add-template-first" class="form-control md-form">
                            <div class="md-form mb-5 rtl">
                                <input type="text" id="firstPartTitle" name="firstPartTitle" class="form-control">
                                <label for="firstPartTitle" class="label">عنوان تمپلیت</label>
                            </div>
                            <select name="firstPartCat" id="firstPartCat" class="mb-3 form-control md-form">
                                <option value="" disabled selected>این تمپلیت برای کدام بخش است</option>
                                <option value="header">هدر</option>
                                <option value="footer">فوتر</option>
                                <option value="aside">سایدبار</option>
                            </select>
                            <input type="submit" class="btn btn-primary" value="تایید">

                        </form>
                    </div>
                    <div class="tab-pane fade" id="template-parts-tab-pane" role="tabpanel" aria-labelledby="template-parts" tabindex="0">
                        <form action="" method="post" id="add-template-sec">
                            <input type="hidden" value="0" id="counter">
                            <section class="submit-section" id="forAdding">

                            </section>
                            <div class="firstsection template-creation-parts" id="template-1">
                                <i class="fas fa-plus"></i>
                            </div>

                            <input type="submit" class="btn btn-primary" value="ذخیره">

                        </form>
                        <section id="formbuildhier">
                            <textarea name="templateHtmlOutput" id="templateHtmlOutput" cols="30" rows="10"></textarea>
                            <textarea name="templateCssOutput" id="templateCssOutput" cols="30" rows="10"></textarea>
                        </section>
                    </div>
                </div>
            </section>
        </section>
        @include('dashboard.extras.modalTemplateParts')
        @include('dashboard.Templats.settings.heading')
        @include('dashboard.Templats.settings.ctx')
        @include('dashboard.Templats.settings.container')
        @include('dashboard.Templats.settings.columns')
        @include('dashboard.Templats.settings.table')



    </main>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/form.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/summernote-ext-elfinder.js"></script>
<script src="{{url('/')}}/dashboard/assets/js/datatabledet.js"></script>
<script>
    // نکته در بوت استرپ ما یک کانتینر داخل آن یک سطر داریم و در سطر ستون ها را مشخص میکنیم
    // فرم اول سابمیت شده است
    $("#add-template-first").on("submit", function(e) {
        // اگر همه گزینه ها پر نشده بود
        if (($("#firstPartTitle").val() == "") || ($("#firstPartCat").val() == "") || ($("#firstPartCat").val() == null)) {
            Swal.fire({
                icon: 'error',
                title: 'خطا...',
                text: 'لطفا ورودی ها را کامل کنید'
            });
            e.preventDefault();
        } else {
            // همه گزینه ها پر شده و به صفحه بعد میرویم
            let catTitle = $("#firstPartCat").val();
            let catInput = document.createElement("input");
            $(catInput).attr("type", "hidden");
            $(catInput).attr("value", catTitle);
            $("#add-template-sec").prepend($("#firstPartTitle").clone().attr("type", "hidden"));
            $("#add-template-sec").prepend(catInput);
            $("#template-home-tab-pane").removeClass("show active");
            $("#template-parts-tab-pane").addClass("show active");
            e.preventDefault();
        }
    });

    // در همین صفحه روی یکی از بخش های تمپلیت کلیک شده است.
    $(".template-creation-parts").on("click", function(e) {
        // templateFatherClasses
        // وظیفه چک کردن عناصر فعال در مودال نمایش تمپلیت ها برای افزودن به این صفحه را دارد.
        templateFatherClasses();
        // مودال تمپلیت ها را نمایش میدهد.
        $("#templateFather").addClass("active show");
    });

    // چک کردن عناصر موال تمپلیت ها
    function templateFatherClasses() {
        // عناصر مودال تمپلیت ها بصورت پیشفرض همگی فعال هستند
        $("#templateFather #row").removeClass("disabled");
        $("#templateFather #container").removeClass("disabled");
        $("#templateFather #fluid").removeClass("disabled");
        $("#templateFather #headings").removeClass("disabled");
        $("#templateFather #pragraph").removeClass("disabled");
        $("#templateFather #lists").removeClass("disabled");
        $("#templateFather #image").removeClass("disabled");
        $("#templateFather #seprator").removeClass("disabled");
        $("#templateFather #slider").removeClass("disabled");
        $("#templateFather #tables").removeClass("disabled");
        $("#templateFather #textTemplates").removeClass("disabled");
        $("#templateFather #nav").removeClass("disabled");
        $("#templateFather #forms").removeClass("disabled");
        $("#templateFather #reviews").removeClass("disabled");
        $("#templateFather #column").removeClass("disabled");
        /*
        مودال templateFather 
        دارای صفت
        fatherType
        است این صفت یا خالی است و یا برابر با یکی از مقادیر 
        row
        container
        fluid
        column
        است که براساس هر کدام مشخص میشود روی کدام عنصر کلیک شده است.
        */
        if ($("#templateFather").attr("fatherType") == "row") {
        //     $("#templateFather #row").addClass("disabled");
        //     $("#templateFather #headings").addClass("disabled");
        //     $("#templateFather #pragraph").addClass("disabled");
        //     $("#templateFather #lists").addClass("disabled");
        //     $("#templateFather #image").addClass("disabled");
        //     $("#templateFather #seprator").addClass("disabled");
        //     $("#templateFather #slider").addClass("disabled");
        //     $("#templateFather #tables").addClass("disabled");
        //     $("#templateFather #textTemplates").addClass("disabled");
        //     $("#templateFather #nav").addClass("disabled");
        //     $("#templateFather #forms").addClass("disabled");
        //     $("#templateFather #reviews").addClass("disabled");
        //     $("#templateFather #column").addClass("disabled");
        // } else if ($("#templateFather").attr("fatherType") == "container") {
        //     $("#templateFather #container").addClass("disabled");
        //     $("#templateFather #fluid").addClass("disabled");
        // } else if ($("#templateFather").attr("fatherType") == "fluid") {
        //     $("#templateFather #container").addClass("disabled");
        //     $("#templateFather #fluid").addClass("disabled");
        // } else if ($("#templateFather").attr("fatherType") == "column") {
        //     $("#templateFather #container").addClass("disabled");
        //     $("#templateFather #fluid").addClass("disabled");
        }
    }

    // template parts
    // در مودال تنها عناصری که فعالند کلیک میشوند.
    $(".section-part:not(.disabled)").on("click", function() {
        templatePartsClicked(this);
    });

    // در مودال وقتی روی یک عنصر کلیک شد فعال میشود.
    function templatePartsClicked(e) {
        $(e).parents("#templateFather").removeClass("active show");
        // out side of parts define new part as parent
        // متغییر پدر عنصری است که در صفحه جاری روی آن کلیک شده
        //  و کلیک آن منجر به باز شدن مدال شده است.
        // ما id
        // این عنصر را میخواهیم.
        let fatherId = $("#templateFather").attr("fatherId");
        // فرزند عنصری است که در مودال روی آن کلیک شده است 
        // این عنصر را براساس نام آن در پنجره مودال بدست میآوریم
        // خود عنصر را به فانکشن پاس میدهیم
        let child = whichPartClick($(e));
        /*
        فانکشن 
        sectionPartClicked
        با توجه به عنصری که روی آن در مدال کلیک شده است 
        یک سری فانکشن را ایجاد میکند.
        این فانکشن ها عنصرکلیک شده را به پدری که 
        درخواست افزودن بچه داشته اضافه میشوند.
        */
        sectionPartClicked(fatherId, child)
    }

    // تعیین میکند که در مودال روی کدام عنصر کلیک شده است
    function whichPartClick(e) {
        let child = e.children("p").text();
        child = child.trim();
        return child;
    }

    /*
    فانکشن 
    sectionPartClicked
    با توجه به عنصری که روی آن در مدال کلیک شده است 
    یک سری فانکشن را ایجاد میکند.
    این فانکشن ها عنصرکلیک شده را به پدری که 
    درخواست افزودن بچه داشته اضافه میشوند.
    */
    function sectionPartClicked(fatherId, child) {
        alert(child);
        // اسم عناصر همان اسمی است که در مودال بکار رفته است.
        if (child == "row") {
            rowClicked(fatherId);
        }
        if (child == "container") {
            containerClicked(fatherId);
        }
        if (child == "container-fluid") {
            containerfluidClicked(fatherId);
        }
        if (child == "textEditor") {
            textEditorClicked(fatherId);
        }
        if (child == "image") {
            imageClicked(fatherId);
        }
        if (child == "seprator") {
            sepratorClicked(fatherId);
        }
        if (child == "slider") {
            sliderClicked(fatherId);
        }
        if (child == "tables") {
            tablesClicked(fatherId);
        }
        if (child == "text-templates") {
            textTemplatesClicked(fatherId);
        }
        if (child == "nav") {
            navClicked(fatherId);
        }
        if (child == "forms") {
            formsClicked(fatherId);
        }
        if (child == "reviews") {
            reviewsClicked(fatherId);
        }
        if (child == "column") {
            columnClicked(fatherId);
        }
        if (child == "icon") {
            iconClicked(fatherId);
        }
        if (child == "tabs") {
            tabsClicked(fatherId);
        }
        if (child == "accordion") {
            accordionClicked(fatherId);
        }
        if (child == "gallery") {
            galleryClicked(fatherId);
        }
    }

    // اگر در مودال روی ایجاد سطر کلیک شد.
    function rowClicked(fatherId) {
        let rowElemant = document.createElement("div");
        let father = document.getElementById(fatherId);
        $(father).empty();
        $(rowElemant).addClass("row row-elemant");
        $(rowElemant).append($(".fa-plus").first().clone());
        // ایجاد یک نام رندوم
        let randumID = randumId();
        rowElemant.id = randumID;
        $(father).append(rowElemant);
        // درج این داده در سکشن فرم بیلدر هیر برای ذخیره سازی نهایی
        insertinHtml("row",randumID,fatherId);
        

        // کلیک روی سطر ایجاد شده منجر به افزودن اطلاعات سطر به المان 
        // templateFather
        // میشود.
        rowElemant.addEventListener("click", function(e) {
            $("#templateFather").attr("fatherId", randumID);
            $("#templateFather").attr("fatherType", "row");
            $("#templateFather").addClass("active show");
            e.stopPropagation();
            e.preventDefault();
            templateFatherClasses();
        });
        return randumID;
    }

    // اگر در مودال روی کانتینر کلیک شد
    function containerClicked(fatherId) {
        let containerElemant = document.createElement("div");
        let parent = document.getElementById(fatherId);
        $(parent).empty();
        $(containerElemant).addClass("container container-elemant");
        $(containerElemant).append($(".fa-plus").first().clone());
        let randumID = randumId();
        containerElemant.id = randumID;
        $(parent).append(containerElemant);
        // درج html
        insertinHtml("container",randumID,fatherId);
        // $("#html").val("<row>");
        $(containerElemant).append($(".close-ctx").clone());
        $(containerElemant).append($(".ctxMenu").clone());
        $("#" + randumID + " .close-ctx").on("click", function(e) {
            // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
            closectxMenu(e);
        });

        // روی حذف المان در منوی راست کلیک کلیک شده است
        $("#" + randumID + " .removeThisSection").on("click", function(e) {
            /*
                فانکشن 
                removeEleman
                عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
                امکان داشتن علامت بعلاوه را میدهد.
            */
            removeEleman(fatherId, randumID, e,"container");
        });
        $("#" + randumID + " .opensetings").on("click", function(e) {
            // مودال تنظیمات را بازمیکند
            openSettingsModal(e, randumID, "Container");
        });

        // روی کانتینر کلیک شود
        containerElemant.addEventListener("click", function(e) {
            alert("containerElemant.addEventListener");
            if ($("#" + randumID).length > 0) {
                $("#templateFather").removeClass("row-elemant");
                $("#templateFather").addClass("active show");
                $("#templateFather").attr("fatherId", randumID);
                $("#templateFather").attr("fatherType", "container");
                e.stopPropagation();
                templateFatherClasses();
            } else {
                templatePartsClicked($("#" + fatherId));
            }
            e.stopPropagation();
            e.preventDefault();
        });

        // منوی راست کلیک را میسازیم
        containerElemant.addEventListener("contextmenu", function(e){
            $("#" + randumID + " .ctxMenu").addClass("active");
            $("#" + randumID + " .close-ctx").addClass("active");
            $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
            e.stopPropagation();
            e.preventDefault();
        });

        // کلیک روی صفحه منوی راست کلیک را ببندد
        return randumID;

    }

    // اگر در مودال روی کانتینر فلوید کلیک شد
    function containerfluidClicked(fatherId) {
       let containerElemant = document.createElement("div");
       let parent = document.getElementById(fatherId);
       $(parent).empty();
       $(containerElemant).addClass("container-fluid container-elemant");
       $(containerElemant).append($(".fa-plus").first().clone());
       let randumID = randumId();
       containerElemant.id = randumID;
       $(parent).append(containerElemant);
       // درج html
       insertinHtml("container-fluid",randumID,fatherId);
       // $("#html").val("<row>");
       $(containerElemant).append($(".close-ctx").clone());
       $(containerElemant).append($(".ctxMenu").clone());
       $("#" + randumID + " .close-ctx").on("click", function(e) {
           // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
           closectxMenu(e);
       });
      // روی حذف المان در منوی راست کلیک کلیک شده است
       $("#" + randumID + " .removeThisSection").on("click", function(e) {
           /*
               فانکشن 
               removeEleman
               عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
               امکان داشتن علامت بعلاوه را میدهد.
           */
           removeEleman(fatherId, randumID, e,"container");
       });
       $("#" + randumID + " .opensetings").on("click", function(e) {
           // مودال تنظیمات را بازمیکند
           openSettingsModal(e, randumID, "Container");
        });
        // روی کانتینر کلیک شود
        containerElemant.addEventListener("click", function(e) {
        alert("containerElemant.addEventListener");
        if ($("#" + randumID).length > 0) {
            $("#templateFather").removeClass("row-elemant");
            $("#templateFather").addClass("active show");
            $("#templateFather").attr("fatherId", randumID);
            $("#templateFather").attr("fatherType", "container");
            e.stopPropagation();
            templateFatherClasses();
        } else {
            templatePartsClicked($("#" + fatherId));
        }
        e.stopPropagation();
        e.preventDefault();
        });
         // کلیک روی صفحه منوی راست کلیک را ببندد
         return randumID;

    }

     // اگر در مودال روی هدینگ کلیک شد
    function textEditorClicked(fatherId) {
       let containerElemant = document.createElement("div");
       let parent = document.getElementById(fatherId);
       $(parent).empty();
       let classes = "summernote summernote-elemant";
       $(containerElemant).addClass(classes);
       let randumID = randumId();
       containerElemant.id = randumID;
       $(parent).append(containerElemant);
       createSummernote(randumID);
       // درج html
       insertinHtml("div",randumID,fatherId,classes);
       // $("#html").val("<row>");
       $(containerElemant).append($(".close-ctx").clone());
       $(containerElemant).append($(".ctxMenu").clone());
       $("#" + randumID + " .close-ctx").on("click", function(e) {
           // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
           closectxMenu(e);
       });
      // روی حذف المان در منوی راست کلیک کلیک شده است
       $("#" + randumID + " .removeThisSection").on("click", function(e) {
           /*
               فانکشن 
               removeEleman
               عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
               امکان داشتن علامت بعلاوه را میدهد.
           */
           removeEleman(fatherId, randumID, e,"container");
       });

       $("#" + randumID + " .opensetings").on("click", function(e) {
           // مودال تنظیمات را بازمیکند
           openSettingsModal(e, randumID, "Container");

        });  
        // منوی راست کلیک را میسازیم
        containerElemant.addEventListener("contextmenu", function(e){
            $("#" + randumID + " .ctxMenu").addClass("active");
            $("#" + randumID + " .close-ctx").addClass("active");
            $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
            e.stopPropagation();
            e.preventDefault();
        });

        // کلیک روی صفحه منوی راست کلیک را ببندد
        return randumID;

    }

    // اگر در مودال روی جدول کلیک شد
    function tablesClicked(fatherId) {
       $("#settingsTable").attr("fatherId",fatherId);
       $("#settingsTable").show();
    }


    // اگر روی ایکون کلیک شد.
    function iconClicked(fatherId){
        let containerElemant = document.createElement("div");
        let parent = document.getElementById(fatherId);
        $(parent).empty();
        $(containerElemant).addClass("icon icon-elemant");
        $(containerElemant).append($(".fa-plus").first().clone());
        let randumID = randumId();
        containerElemant.id = randumID;
        $(parent).append(containerElemant);
        // درج html
        insertinHtml("container",randumID,fatherId,);
        // $("#html").val("<row>");
        $(containerElemant).append($(".close-ctx").clone());
        $(containerElemant).append($(".ctxMenu").clone());
        $("#" + randumID + " .close-ctx").on("click", function(e) {
            // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
            closectxMenu(e);
        });

        // روی حذف المان در منوی راست کلیک کلیک شده است
        $("#" + randumID + " .removeThisSection").on("click", function(e) {
            /*
                فانکشن 
                removeEleman
                عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
                امکان داشتن علامت بعلاوه را میدهد.
            */
            removeEleman(fatherId, randumID, e,"container");
        });
        $("#" + randumID + " .opensetings").on("click", function(e) {
            // مودال تنظیمات را بازمیکند
            openSettingsModal(e, randumID, "Container");
        });

        // روی کانتینر کلیک شود
        containerElemant.addEventListener("click", function(e) {
            alert("containerElemant.addEventListener");
            if ($("#" + randumID).length > 0) {
                $("#templateFather").removeClass("row-elemant");
                $("#templateFather").addClass("active show");
                $("#templateFather").attr("fatherId", randumID);
                $("#templateFather").attr("fatherType", "container");
                e.stopPropagation();
                templateFatherClasses();
            } else {
                templatePartsClicked($("#" + fatherId));
            }
            e.stopPropagation();
            e.preventDefault();
        });
        // منوی راست کلیک را میسازیم
        containerElemant.addEventListener("contextmenu", function(e){
            $("#" + randumID + " .ctxMenu").addClass("active");
            $("#" + randumID + " .close-ctx").addClass("active");
            $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
            e.stopPropagation();
            e.preventDefault();
        });

        // کلیک روی صفحه منوی راست کلیک را ببندد
        return randumID;
    }



    // ایجاد یک عبارت تصادفی با پیشفرض 5 عددی
    function randumId(length = 5) {
        var Alfabet = "A";
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        result = Alfabet + result;
        return result;
    }

    // در منوی راست کلیک روی حذف المان کلیک شده است
    function removeEleman(fatherId, randumID, e,nodeName) {
        console.log(randumID);
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        // حذف المان
        fatherId =   removeElemanSubmit(nodeName,randumID);
        // $("#" + fatherId).empty();
        $("#" + fatherId).append($(".fa-plus").first().clone());
        // fatherId =   removeElemanSubmit(nodeName,fatherId);
        // $("#" + randumID).remove();
        templateFatherClasses();
        e.preventDefault();
        e.stopPropagation();
    }

    // بستن راست کلیک
    function closectxMenu(e) {
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        e.stopPropagation();
    }

    // بازکردن مودال تنظیمات
    function openSettingsModal(e, id, theName) {
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        $("#settings" + theName).addClass("show active");
        $("#settings"+ theName).attr("fatherId", id);
        e.stopPropagation();
    }
  
    // backgroundSettings
    $("#opacity").on("change", function(e) {
        var opacity = $("#opacity").val();
        var color = $("#baseColor").val();
        var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) + ',' + parseInt(color.slice(-4, -2), 16) + ',' + parseInt(color.slice(-2), 16) + ',' + opacity + ')';
        $('#showFinalColor').css('background-color', rgbaCol);
        $("#ContainerBgColor").val(rgbaCol);
    });
    // ایجاد رنگ با کمک رنگ اصلی و شفافیت آن
    $("#baseColor").on("change", function(e) {
        var opacity = $("#opacity").val();
        var color = $("#baseColor").val();
        var rgbaCol = 'rgba(' + parseInt(color.slice(-6, -4), 16) + ',' + parseInt(color.slice(-4, -2), 16) + ',' + parseInt(color.slice(-2), 16) + ',' + opacity + ')';
        $('#showFinalColor').css('background-color', rgbaCol);
        $("#ContainerBgColor").val(rgbaCol);
    });

    // تایید استایل های کانتینر در پنجره تنظیمات
    $("#container-style-tab-pane-apply").on("click",function(e){ 
        let fatherId = $("#settingsContainer").attr("fatherId");
        let background = $("#ContainerBgColor").val();
        let font = $("#settingsContainer .font-selector").val();
        let padding="";
        if($("#settingsContainer .padding-top-selector").val() != ""){
            padding =padding + $("#settingsContainer .padding-top-selector").val() +"rem ";
        }
        if($("#settingsContainer .padding-right-selector").val() != ""){
            padding =padding +  $("#settingsContainer .padding-right-selector").val() +"rem ";
        }
        if( $("#settingsContainer .padding-bottom-selector").val() != ""){
            padding =padding +  $("#settingsContainer .padding-bottom-selector").val() +"rem ";
        }
        if($("#settingsContainer .padding-left-selector").val() != ""){
            padding =padding +  $("#settingsContainer .padding-left-selector").val() +"rem ";
        }
        padding = padding.trim();
        let finalCss = "#"+fatherId+"{";
        if(background != ""){
            finalCss = finalCss + "background:"+background+";";
        }
        if(font != null && font != ""){
            finalCss = finalCss + "font-family:"+font+";";
        }
        if(padding != ""){
            finalCss = finalCss + "padding:"+padding+";";
        }
        finalCss = finalCss + "}";
        alert(finalCss);
        if(background != "" || (font != null && font != "") || padding != ""){
            insertcss(fatherId,finalCss);    
        }
      
        $("#settingsContainer").removeClass("show active");   
        e.preventDefault();
    });

    // تایید استایل های ستون در پنجره تنظیمات
    $("#columns-style-tab-pane-apply").on("click",function(e){ 
        let fatherId = $("#settingsColumns").attr("fatherId");
        let ColumnsCount =parseInt($("#culomnnumber").val());
        let background = $("#CulomnsBgColor").val();
        let font = $("#settingsColumns .font-selector").val();
        let padding="";
        if($("#settingsColumns .padding-top-selector").val() != ""){
            padding =padding + $("#settingsColumns .padding-top-selector").val() +"rem ";
        }
        if($("#settingsColumns .padding-right-selector").val() != ""){
            padding =padding +  $("#settingsColumns .padding-right-selector").val() +"rem ";
        }
        if( $("#settingsColumns .padding-bottom-selector").val() != ""){
            padding =padding +  $("#settingsColumns .padding-bottom-selector").val() +"rem ";
        }
        if($("#settingsColumns .padding-left-selector").val() != ""){
            padding =padding +  $("#settingsColumns .padding-left-selector").val() +"rem ";
        }
        padding = padding.trim();
        let finalCss = "#"+fatherId+"{";
        if(background != ""){
            finalCss = finalCss + "background:"+background+";";
        }
        if(font != null && font != ""){
            finalCss = finalCss + "font-family:"+font+";";
        }
        if(padding != ""){
            finalCss = finalCss + "padding:"+padding+";";
        }
        finalCss = finalCss + "}";

        if(background != "" || (font != null && font != "") || padding != ""){
            insertcss(fatherId,finalCss);    
        }
        if (ColumnsCount != 3) {
            // ستون های موجود را حذف  میکنیم.
            fatherId =   removeElemanSubmit("column",fatherId);
            columnClicked(fatherId,ColumnsCount);
        }
        $("#settingsColumns").removeClass("show active");   
        e.preventDefault();
    });

    // تایید استایل های جدول
    $("#Table-Setting-apply").on("click",function(e){
        let fatherId = $("#settingsTable").attr("fatherId");
        console.log(fatherId);
        let column = $("#tableCols").val();
        let row = $("#tableRows").val();
        let tableElemant = document.createElement("table");
        $(tableElemant).addClass("datatable tablerout table-light-shading table table-elemant");
        let randumID = randumId();
        tableElemant.id = randumID;
        createTableColumnRow(tableElemant,column,row);
        $("#"+fatherId).append(tableElemant);
        $("#settingsTable").hide();
        e.preventDefault();
    });

    $("#selectTableFrom table").on("click",function(e){
        $("#selectedTable").empty();
        let tableClasses = $(this).attr("class");
        let tableElemant = document.createElement("table");
        $(tableElemant).addClass(tableClasses);
        createTableColumnRow(tableElemant,4,2);
        $("#selectedTable").append(tableElemant);
        let hr = document.createElement("hr");
        $("#selectedTable").append(hr);
        $("#tableStyle").val(tableClasses);
    });


    function createTableColumnRow(tableElemant,column,row){
        column = parseInt(column);
        row    = parseInt(row);
        let thead = document.createElement("thead");
        let tr = document.createElement("tr");
        let th,td;
        for (let index = 0; index < column; index++) {
            th = document.createElement("th"); 
            $(tr).append(th);    
            $(th).append($(".fa-plus").first().clone());        
        }
        $(thead).append(tr);     
        let tbody = document.createElement("tbody");
        let i=1;
        for (let index = 0; index < row; index++) {
            tr = document.createElement("tr");
            for (let index = 0; index < column; index++) {
                td = document.createElement("td");
                $(tr).append(td);  
                if (i!=1) {
                    $(td).append($(".fa-plus").first().clone()); 
                }                
                i++;         
            }
            $(tbody).append(tr);  
            i=1;     
        }
        let tfoot = document.createElement("tfoot");
        tr = document.createElement("tr");
        for (let index = 0; index < column; index++) {
            th = document.createElement("th"); 
            $(tr).append(th);     
            $(th).append($(".fa-plus").first().clone());           
        }
        $(tfoot).append(tr);     
        $(tableElemant).append(thead);     
        $(tableElemant).append(tbody);     
        $(tableElemant).append(tfoot);     
    }
    // create html
    function insertinHtml(ElemantName,randumID,fatherId,classes=""){
        let htmlContex = $("#templateHtmlOutput").text();
        let elamentText= "";
        if (ElemantName == "row" || ElemantName == "container" || ElemantName == "container-fluid" ){
            elamentText  = "<div  class='"+ElemantName+"'"+ " id='"+randumID+"'>"+"\n"+"</div>"+"\n";
        }else if (ElemantName == "column"){
            elamentText  = "<div  class='"+classes+" "+ElemantName+"'"+" id='"+randumID+"'></div>";
        } else{
            elamentText  = "<"+ElemantName+"  class='"+classes+"'"+" id='"+randumID+"'></"+ElemantName+">";
        }
        if(htmlContex == ""){
            $("#templateHtmlOutput").text(elamentText+"\n");
        }else{
            let pos = htmlContex.indexOf(fatherId);
            let newEleman = "\n"+"   "+elamentText;
            if(pos != -1){
                let needle =  parseInt(pos)+8;
                needle = parseInt(needle);
                let ferstPart =  htmlContex.substring(0,needle);
                let addNewPart = ferstPart+newEleman;
                let finalpart = htmlContex.substring(needle);
                let whole = addNewPart + finalpart;
                $("#templateHtmlOutput").text(whole);
            }
        }
    }

    // ساخت Css
    function insertcss(fatherId,finalCss){
        // در این فانکشن تنطیمات انجام شده را در 
        // Css
        // ذخیره میکنیم.
        let cssContext = $("#templateCssOutput").text();
        if(cssContext == ""){
            $("#templateCssOutput").text(finalCss);
        }else{
            $("#templateCssOutput").text(cssContext+"\n"+finalCss);
        }
    }

/* عنصر برای ایجاد شدن والد میخواهد این والد بصورت پیشفرض
Container,
Row
هستند
*/
    function needparent(fatherId){
        // این فانکشن وقتی اجرا میشود که برای اجرای 
        // فرزند نیاز به پدر داشته باشیم 
        // مثلا اگر ستون بخواهیم باید قبل آن
        //  سطر داشته باشیم.
        var container =  containerClicked(fatherId);         
        var row = rowClicked(container);
        $("#templateFather").attr("fatherId", row);
        return row;
       
    }

    /* از این فانکشن استفاده نشده است ولی در صورت لزوم میتوان 
    باز شدن منوی راست کلیک را با این فانکشن انجام داد.
    */
    function activeContext(e,randumID){
        /* از این فانکشن استفاده نشده است ولی در صورت لزوم میتوان 
        باز شدن منوی راست کلیک را با این فانکشن انجام داد.
        */
        e = e || window.event;
        $("#" + randumID + " .ctxMenu").addClass("active");
        $("#" + randumID + " .close-ctx").addClass("active");
        $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
        e.stopPropagation();
        e.preventDefault();
    }

    // در ستون ها وقتی تعداد ستون های جدید با ستون های قبل برابر نیست با این فانکشن ستون های قبل را حذف میکنیم.
    function removeElemanSubmit(elemanName,fatherId){
        var grandpa =$("#"+fatherId).parent();
        $(grandpa).empty();
        fatherId = $(grandpa).attr("id");
        let htmlContex =  RemovesFromHtml(elemanName,fatherId);    
        $("#templateHtmlOutput").text(htmlContex);
        return fatherId;
    }
   
    // حذف المان از کدهای تایپ شده
    function RemovesFromHtml(elemanName,fatherId){
        let htmlContex = $("#templateHtmlOutput").text();
        if(htmlContex != ""){
            let pos = htmlContex.indexOf(fatherId);
            let needle =  parseInt(pos)+8;
            needle = parseInt(needle);
            let newhtmlContex =  htmlContex.substring(0,needle);
            console.log(newhtmlContex);
            let divCounter = parseInt(countRepeatedWords(newhtmlContex));
            let CloseTag = ""
            for (let i = 0; i < divCounter; i++) {
                CloseTag = CloseTag + "</div>"+"\n";
            }
            htmlContex = newhtmlContex + CloseTag;
            return(htmlContex);
        }       
    }

    // تعداد یک عنصر در یک متن را میشمارد
    function countRepeatedWords(sentence) {
        let words = sentence.split(" ");
        let number = 0;
        for (let i = 0; i < words.length; i++) {
            if (words[i] == "<div") {
                number++
            }
        }
        return number;
    }

    /*   فانکشنی که با یک حلقه به تعداد 
    columnNember
    برای ما ستون میسازد
    */
    function createCulumnsElemants(columnNember,fatherId,classes,parent,removeFather="0"){
        for (var i = 0; i < columnNember; i++) {  
            // به تعداد خواسته شده دویژن به پدر اضافه میکنیم
            columnElemant = document.createElement("div");
            $(columnElemant).addClass(classes);
            $(columnElemant).attr("columnCount",i);
            $(columnElemant).append($(".fa-plus").first().clone());
            randumID = randumId();
            columnElemant.id = randumID;
            // اگر قبلا سطری درج نشده
            if(removeFather=="0"){
                $(parent).append(columnElemant);
            }else{
                $("#"+removeFather).after(columnElemant);
            }
            // درج html
            insertinHtml("column",randumID,fatherId,classes);          
            //  درج منوی راست کلیک
            $(columnElemant).append($(".close-ctx").clone());
            $(columnElemant).append($(".ctxMenu").clone());
            $("#" + randumID + " .close-ctx").on("click", function(e) {
                // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
                closectxMenu(e);          
            });

            //  منوی راست کلیک را میسازیم
            columnElemant.addEventListener("contextmenu", function(e) {
                $("#" + randumID + " .ctxMenu").addClass("active");
                $("#" + randumID + " .close-ctx").addClass("active");
                $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
                e.stopPropagation();
                e.preventDefault();
            },false);  
         
            //  روی حذف المان در منوی راست کلیک کلیک شده است
            $("#" + randumID + " .removeThisSection").on("click", function(e) {
                /*
                    فانکشن 
                    removeEleman
                    عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
                    امکان داشتن علامت بعلاوه را میدهد.
                */
                removeEleman(fatherId, randumID, e,"column");
            });

            $("#" + randumID + " .opensetings").on("click", function(e) {
                // مودال تنظیمات را بازمیکند
                openSettingsModal(e, randumID, "Columns");
            });
            
            // روی هر ستون کلیک شود
            columnElemant.addEventListener("click", function(e) {
                alert("columnElemant.addEventListener");
                if ($("#" + randumID).length > 0) {
                    $("#templateFather").removeClass("row-elemant");
                    $("#templateFather").addClass("active show");
                    $("#templateFather").attr("fatherId", randumID);
                    $("#templateFather").attr("fatherType", "container");
                    e.stopPropagation();
                    templateFatherClasses();
                } else {
                    templatePartsClicked($("#" + fatherId));
                }
                e.stopPropagation();
                e.preventDefault();
            });

            }
            return columnElemant.id;
    }

    // ساخت امکان افزودن ردیف زیر ردیف موجود.
    function createNewRowUnderThis(columnNember,fatherId,classes,parent,lastColID){
        var addnewrow = createElemant(columnNember,fatherId,classes,parent);
        var columnElemant = addEventListeners(addnewrow,columnNember,fatherId,classes,parent,lastColID);
        console.log(lastColID);
        $("#"+lastColID).after($(columnElemant));
    }

   function createElemant(columnNember,fatherId,classes,parent){
        var addnewrow = document.createElement("div");
        var fullClass = "col-12";
        $(addnewrow).addClass(fullClass);
        $(addnewrow).attr("columnCount","1");
        $(addnewrow).append($(".fa-plus").first().clone());
        $(parent).append(addnewrow);
        return addnewrow
   }

   function addEventListeners(addnewrow,columnNember,fatherId,classes,parent,lastColID){
        addnewrow.addEventListener("click", function(e) {
            var columnElemant =  createCulumnsElemants(columnNember,fatherId,classes,parent,lastColID);
            e.stopPropagation();
            e.preventDefault();
            return columnElemant;
        });
   }

    function createSummernote(randumID){
        var summernote = document.getElementById(randumID);
        $("#"+randumID).summernote({
             height: 800,
             callbacks: {
                 onImageUpload: function(files, editor, welEditable) {
                     sendFile(files[0], editor, welEditable);                 
                }  
             }               
         });
    }

    function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
        data: data,
        type: "POST",
        url: "m.php",
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
            console.log(url);
            var imgNode =document.createElement('img');
            var src= URL.createObjectURL(file);
            console.log(src);
            imgNode.setAttribute("src",src);
            $(summernote).summernote('insertNode', imgNode);
        }
        });
    }


</script>

@endsection