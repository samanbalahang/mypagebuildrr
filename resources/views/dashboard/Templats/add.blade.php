@extends('dashboard.layouts.master')

@section("extracss")

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



    </main>
</div>
@endsection

@section("extrajs")
<script src="{{url('/')}}/dashboard/assets/js/form.js"></script>
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
            $("#templateFather #row").addClass("disabled");
            $("#templateFather #headings").addClass("disabled");
            $("#templateFather #pragraph").addClass("disabled");
            $("#templateFather #lists").addClass("disabled");
            $("#templateFather #image").addClass("disabled");
            $("#templateFather #seprator").addClass("disabled");
            $("#templateFather #slider").addClass("disabled");
            $("#templateFather #tables").addClass("disabled");
            $("#templateFather #textTemplates").addClass("disabled");
            $("#templateFather #nav").addClass("disabled");
            $("#templateFather #forms").addClass("disabled");
            $("#templateFather #reviews").addClass("disabled");
            $("#templateFather #column").addClass("disabled");
        } else if ($("#templateFather").attr("fatherType") == "container") {
            $("#templateFather #container").addClass("disabled");
            $("#templateFather #fluid").addClass("disabled");
        } else if ($("#templateFather").attr("fatherType") == "fluid") {
            $("#templateFather #container").addClass("disabled");
            $("#templateFather #fluid").addClass("disabled");
        } else if ($("#templateFather").attr("fatherType") == "column") {
            $("#templateFather #container").addClass("disabled");
            $("#templateFather #fluid").addClass("disabled");
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
        if (child == "headings") {
            headingsClicked(fatherId);
        }
        if (child == "pragraph") {
            pragraphClicked(fatherId);
        }
        if (child == "lists") {
            listsClicked(fatherId);
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
            removeEleman(fatherId, randumID, e);
        });
        $("#" + randumID + " .opensetings").on("click", function(e) {
            // مودال تنظیمات را بازمیکند
            openSettingsModal(e, randumID, "Container");
        });


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


    // روی ستون کلیک شده است
    function columnClicked(fatherId) {
        alert("columnClicked");
        /* 
        در فایل 
        modalTemplateParts.blade.
        که مودال تمپلیت ها میباشد ما یک 
        fatherId = forAdding
        داریم که اگر روی بچه ایی غیر از
        بچه اولیه کلیک شود این مقدار با
        ID
        بچه جایگزین میشود. 
        در پایین ما شرط گذاشته اییم که والد 
        ستون ما اولین والد موجود باشد.
        در این حالت وظیفه ایجاد 
        Row
         با کد است.
        */
       
        if(fatherId = "forAdding" ){
            /*تابع 
            needparent
            پدر های مورد نیاز برای ایجاد ستون را میسازد
            */
            fatherId =  needparent(fatherId);
         
            // rowClicked(fatherId);
        }
        // صرفا جهت ایجاد یک خلاء زمانی شرط بعدی را درج کرده ام ممکن است بعدا لازم به حذف یا تغییر باشد.
        if(fatherId != "forAdding" ){
          // سه عدد دویژن به پدر اضافه میکنیم
          let columnElemant = document.createElement("div");
          let parent = document.getElementById(fatherId);
          $(parent).empty();
          $(columnElemant).addClass("col-12 col-md-4 column-elemant");
          $(columnElemant).attr("columnCount","1");
          $(columnElemant).append($(".fa-plus").first().clone());
          let randumID = randumId();
          columnElemant.id = randumID;
          $(parent).append(columnElemant);
          // درج html
          insertinHtml("column",randumID,fatherId);
          let columnElemant2 = document.createElement("div");
          $(columnElemant2).addClass("col-12 col-md-4 column-elemant");
          $(columnElemant2).attr("columnCount","1");
          $(columnElemant2).append($(".fa-plus").first().clone());
          let randumID2 = randumId();
          columnElemant2.id = randumID2;
          $(parent).append(columnElemant2);
          // درج html
          insertinHtml("column",randumID2,fatherId);
          let columnElemant3 = document.createElement("div");
          $(columnElemant3).addClass("col-12 col-md-4 column-elemant");
          $(columnElemant3).attr("columnCount","1");
          $(columnElemant3).append($(".fa-plus").first().clone());
          let randumID3 = randumId();
          columnElemant3.id = randumID3;
          $(parent).append(columnElemant3);
          // درج html
          insertinHtml("column",randumID3,fatherId);

        //   درج منوی راست کلیک
          $(columnElemant).append($(".close-ctx").clone());
          $(columnElemant).append($(".ctxMenu").clone());
          $("#" + randumID + " .close-ctx").on("click", function(e) {
              // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
            closectxMenu(e);          
          });
          $("#" + randumID2 + " .close-ctx").on("click", function(e) {
              // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
            closectxMenu(e);          
          });
          $("#" + randumID3 + " .close-ctx").on("click", function(e) {
              // با کلیک خارج از منوی راست کلیک منوی راست کلیک را میبندد
            closectxMenu(e);          
          });
            //    اگر راست کلیک درست کار نکرد سه خط زیر را از حالت کامنت خارج کنید.
        //   let containerId =String($("#"+fatherId).parent(".container").attr("id"));
        //   let container = document.getElementById(containerId);
        //   console.log($(container).attr("class"));
        // //   container.removeEventListener("contextmenu", activeContext,false);
         
        //  منوی راست کلیک را میسازیم
        columnElemant.addEventListener("contextmenu", function(e) {
            alert("S");
             $("#" + randumID + " .ctxMenu").addClass("active");
             $("#" + randumID + " .close-ctx").addClass("active");
             $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
             e.stopPropagation();
             e.preventDefault();
            },false);  
        
        columnElemant2.addEventListener("contextmenu", function(e) {
            alert("S");
             $("#" + randumID + " .ctxMenu").addClass("active");
             $("#" + randumID + " .close-ctx").addClass("active");
             $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
             e.stopPropagation();
             e.preventDefault();
            },false);  

        columnElemant3.addEventListener("contextmenu", function(e) {
            alert("S");
             $("#" + randumID + " .ctxMenu").addClass("active");
             $("#" + randumID + " .close-ctx").addClass("active");
             $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
             e.stopPropagation();
             e.preventDefault();
            },false);  


        // روی حذف المان در منوی راست کلیک کلیک شده است
        $("#" + randumID + " .removeThisSection").on("click", function(e) {
            /*
                فانکشن 
                removeEleman
                عملیات حذف را انجام میدهد و المان فعلی را حذف و به المان پدر
                امکان داشتن علامت بعلاوه را میدهد.
            */
            removeEleman(fatherId, randumID, e);
        });
        $("#" + randumID + " .opensetings").on("click", function(e) {
            // مودال تنظیمات را بازمیکند
            openSettingsModal(e, randumID, "Columns");
        });

        
        }
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


    function removeEleman(fatherId, randumID, e) {
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        $("#" + fatherId).append($(".fa-plus").first().clone());
        $("#" + randumID).remove();
        templateFatherClasses();
        e.preventDefault();
        e.stopPropagation();
    }

    function closectxMenu(e) {
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        e.stopPropagation();
    }

    function openSettingsModal(e, id, theName) {
        $(".ctxMenu").removeClass("active");
        $(".close-ctx").removeClass("active");
        $("#settings" + theName).addClass("show active");
        $("#settingsContainer").attr("fatherId", id);
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

    // create html
    function insertinHtml(ElemantName,randumID,fatherId){
        let htmlContex = $("#templateHtmlOutput").text();
        let elamentText= "";
        if (ElemantName == "row" || ElemantName == "container" || ElemantName == "container-fluid" ){
            elamentText  = "<div  class='"+ElemantName+"'"+ " id='"+randumID+"'></div>"+"\n";
        }
        if (ElemantName == "column"){
            elamentText  = "<div  class='col-12 col-md-4 "+ElemantName+"'"+ " id='"+randumID+"'></div>";
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
    function insertcss(fatherId,finalCss){
        let cssContext = $("#templateCssOutput").text();
        if(cssContext == ""){
            $("#templateCssOutput").text(finalCss);
        }else{
            $("#templateCssOutput").text(cssContext+"\n"+finalCss);
        }
    }


    function needparent(fatherId){
        // این فانکشن وقتی اجرا میشود که برای اجرای 
        // فرزند نیاز به پدر داشته باشیم 
        // مثلا اگر ستون بخواهیم باید قبل آن
        //  سطر داشته باشیم.
        var container =  containerClicked(fatherId);
         $("#templateFather").attr("fatherId", container);
        var row = rowClicked(container);
        return row;
       
    }
    function activeContext(e,randumID){
        e = e || window.event;
        $("#" + randumID + " .ctxMenu").addClass("active");
        $("#" + randumID + " .close-ctx").addClass("active");
        $("#" + randumID + " .ctxMenu").attr("belongto", randumID);
        e.stopPropagation();
        e.preventDefault();
    }

</script>

@endsection