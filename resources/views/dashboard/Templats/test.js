// بر روی تایید اولین بخش که نام و محل است کلیک شده است.
$("#add-template-first").on("submit",function(e){
    if(($("#firstPartTitle").val() =="")||($("#firstPartCat").val() =="")|| ($("#firstPartCat").val() ==null)){
        Swal.fire({
            icon: 'error',
            title: 'خطا...',
            text: 'لطفا ورودی ها را کامل کنید'
        });
        e.preventDefault();
    }else{
        // همه گزینه ها پر شده و به صفحه بعد میرویم
        let catTitle = $("#firstPartCat").val();
        let catInput = document.createElement("input");
        $(catInput).attr("type","hidden");
        $(catInput).attr("value",catTitle);
        $("#add-template-sec").prepend($("#firstPartTitle").clone().attr("type","hidden"));
        $("#add-template-sec").prepend(catInput);
        $("#template-home-tab-pane").removeClass("show active");
        $("#template-parts-tab-pane").addClass("show active");
        e.preventDefault();
    }
});

// در همین صفحه روی یکی از بخش های تمپلیت کلیک شده است.
$(".template-creation-parts").on("click",function(e){
    // templateFatherClasses
    // وظیفه چک کردن عناصر فعال در مودال نمایش تمپلیت ها برای افزودن به این صفحه را دارد.
    templateFatherClasses();
    // مودال تمپلیت ها را نمایش میدهد.
    $("#templateFather").addClass("active show");
});

// template parts
// در مودال تنها عناصری که فعالند کلیک میشوند.
$(".section-part:not(.disabled)").on("click",function(){
    templatePartsClicked(this);
});
// در مودال وقتی روی یک عنصر کلیک شد فعال میشود.
function templatePartsClicked(e){
    $(e).parents("#templateFather").removeClass("active show");
    // out side of parts define new part as parent
    if($("#templateFather").attr("class") == "modal-father"){
        let kind = whichPartClick($(e));
        getPartclicked(kind,"parent");
    }else{
        // روی یک المان داخلی کلیک شده است.
        // indideWichElemant = روی کدام المان کلیک شده است.
        let indideWichElemant = indideWich();
        // alert(indideWichElemant);
        // kind = از روی اسامی بخش ها نوع بخش را برمیگرداند مثلا ROW
        let kind = whichPartClick($(e));
        // getPartclicked =  کایند و ایندید ویچ را گرفته و ویچ را ایدی فرض میکند و سپس المان را میسازد. 
        getPartclicked(kind,indideWichElemant);
    }
}

function indideWich(){
    return $("#templateFather").attr("fatherId");
}

function templateFatherClasses(){
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
    $("#templateFather #culomn").removeClass("disabled");

    if($("#templateFather").hasClass("row-elemant")){
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
        $("#templateFather #culomn").addClass("disabled");
    }else if($("#templateFather").hasClass("container-elemant-clicked")){
        $("#templateFather #container").addClass("disabled");
        $("#templateFather #fluid").addClass("disabled");
    }
}
function whichPartClick(e){
    let kind = e.children("p").text();
    kind = kind.trim();
    return kind;
}
function getPartclicked(kind,parent){
    alert("kind: "+kind);
    alert("parent: "+parent);

    if(parent == "parent"){
        alert("parent == parent");
       let parentId =  parentClicked();
       sectionPartClicked(parentId,kind);
     }else{
        alert("parent != parent");
        let childId = childClicked(parent);
        sectionPartClicked(childId,kind);
    }    
}
function insideElemanAddChild(indideWichElemant,kind){
    let theElemant =  document.getElementById(indideWichElemant);
    // alert(theElemant);
}

function parentClicked(){
    let counter = $("#counter").val();
        let createSection = document.createElement("section");
        let childElemant = document.createElement("div");
        let theid = parseInt(parseInt(counter) + 1);
        $("#counter").val(theid);
        theid = numberTotext(theid);
        // alert(theid);
        createSection.id = theid;
        $(createSection).addClass("submit-section");
        createSection.append(childElemant);
        $("#add-template-sec").prepend(createSection);
        return theid;
}

function childClicked(parent){
    return parent;
}

function sectionPartClicked(parentId,kind){
    if(kind == "row"){
        rowClicked(parentId);
    }
    if(kind == "container"){
        containerClicked(parentId);
    }
    if(kind == "container-fluid"){
        containerfluidClicked(parentId);
    }
    if(kind == "headings"){
        headingsClicked(parentId);
    }
    if(kind == "pragraph"){
        pragraphClicked(parentId);
    }
    if(kind == "lists"){
        listsClicked(parentId);
    }
    if(kind == "image"){
        imageClicked(parentId);
    }
    if(kind == "seprator"){
        sepratorClicked(parentId);
    }
    if(kind == "slider"){
        sliderClicked(parentId);
    }
    if(kind == "tables"){
        tablesClicked(parentId);
    }
    if(kind == "text-templates"){
        textTemplatesClicked(parentId);
    }
    if(kind == "nav"){
        navClicked(parentId);
    }
    if(kind == "forms"){
        formsClicked(parentId);
    }
    if(kind == "reviews"){
        reviewsClicked(parentId);
    }
    if(kind == "culomn"){
        culomnClicked(parentId);
    }
}

function rowClicked(parentId){
    alert("rowClicked(parentId)");
    alert(parentId);
    let rowElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(rowElemant).addClass("row row-elemant");
    $(rowElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    rowElemant.id = randumID;
    $(parent).append(rowElemant);
    parent.addEventListener("click",function(e){
        alert("rowClicked(parentId) =>  parent.addEventListener");
        $("#templateFather").attr("fatherId",randumID);
        $("#templateFather").addClass("active show row-elemant");
        templateFatherClasses();
    });
}

function containerClicked(parentId){
    alert("containerClicked");
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    $(containerElemant).append($("#close-ctx"));
    $(containerElemant).append($("#ctxMenu"));
    parent.addEventListener("click",function(e){    
        if($("#"+randumID).length > 0){
            alert("containerClicked => parent.addEventListener ");
            $("#templateFather").removeClass("row-elemant");
            $("#templateFather").addClass("active show container-elemant-clicked");
            $("#templateFather").attr("fatherId",randumID);
            e.stopPropagation();
            templateFatherClasses();
        }else{
            alert(parentId);
            templatePartsClicked($("#"+parentId));
            alert("getPartclicked");
        }
    });
    parent.addEventListener("contextmenu",function(e){ 
        $("#ctxMenu").addClass("active");
        $("#close-ctx").addClass("active");
        $("#ctxMenu").attr("belongto",randumID);
        e.preventDefault();
    });

}

function containerfluidClicked(parentId){
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container-fluid container-fluid-elemant");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-fluid-elemant-clicked");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function headingsClicked(parentId){
    let containerElemant = document.createElement("h2");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    // $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $("#settingsHeading").attr("fatherId",randumID);
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        headingSettings();
        templateFatherClasses();
    });
}
function pragraphClicked(parentId){
    let containerElemant = document.createElement("p");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function listsClicked(parentId){
    let containerElemant = document.createElement("ul");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function imageClicked(parentId){
    let containerElemant = document.createElement("img");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function sepratorClicked(parentId){
    let containerElemant = document.createElement("hr");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function sliderClicked(parentId){
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("container container-elemant");
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function tablesClicked(parentId){
    let containerElemant = document.createElement("table");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("tbl");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show tbl");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function textTemplatesClicked(parentId){
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("text-template");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show text-template-cliked");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function navClicked(parentId){
    let containerElemant = document.createElement("nav");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("nav");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show nav");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function formsClicked(parentId){
    let containerElemant = document.createElement("form");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show form-clicked");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function reviewsClicked(parentId){
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("reviews");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show reviews");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}
function culomnClicked(parentId){
    let containerElemant = document.createElement("div");
    let parent = document.getElementById(parentId);
    $(parent).empty();
    $(containerElemant).addClass("col");
    $(containerElemant).append($(".fa-plus").first().clone());
    let randumID =  randumId();
    containerElemant.id = randumID;
    $(parent).append(containerElemant);
    parent.addEventListener("click",function(e){    
        $("#templateFather").removeClass("row-elemant");
        $("#templateFather").addClass("active show container-elemant-clicked");
        $("#templateFather").attr("fatherId",randumID);
        e.stopPropagation();
        templateFatherClasses();
    });
}

function randumId(length = 5){
    var Alfabet = "A";
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    result = Alfabet + result;
    return result;
}

function numberTotext(number){
    var number = parseInt(number);
    if(number == 0){
        return "ziro";
    }
    if(number == 1){
        return "one";
    }
    if(number == 2){
        return "two";
    }
    if(number == 3){
        return "Three";
    }
    if(number == 4){
        return "four";
    }
    if(number == 5){
        return "five";
    }
    if(number == 6){
        return "six";
    }
    if(number == 7){
        return "seven";
    }
    if(number == 8){
        return "eight";
    }
    if(number == 9){
        return "nine";
    }
    if(number == 10){
        return "ten";
    }
    if(number == 11){
        return "eleven";
    }
    if(number == 12){
        return "twelve";
    }
    if(number == 13){
        return "Threeteen";
    }
    if(number == 14){
        return "fourteen";
    }
    if(number == 15){
        return "fiveteen";
    }
    if(number == 16){
        return "sixteen";
    }
    if(number == 17){
        return "seventeen";
    }
    if(number == 18){
        return "eighteen";
    }
    if(number == 19){
        return "nineteen";
    }
    if(number == 20){
        return "twenty";
    }
}

function textToNumber(number){
    if(number == "ziro"){
        return parseInt(0);
    }
    if(number == "one"){
        return parseInt(1);
    }
    if(number == "two"){
        return parseInt(2);
    }
    if(number == "Three"){
        return parseInt(3);
    }
    if(number == "four"){
        return  parseInt(4);
    }
    if(number == "five"){
        return parseInt(5);
    }
    if(number == "six"){
        return parseInt(6);
    }
    if(number == "seven"){
        return  parseInt(7);
    }
    if(number == "eight"){
        return parseInt(8);
    }
    if(number == "nine"){
        return parseInt(9);
    }
    if(number == "ten"){
        return parseInt(10);
    }
    if(number == "eleven"){
        return parseInt(11);
    }
    if(number == "twelve"){
        return  parseInt(12);
    }
    if(number == "Threeteen"){
        return parseInt(13);
    }
    if(number == "fourteen"){
        return parseInt(14);
    }
    if(number == "fiveteen"){
        return parseInt(15);
    }
    if(number == "sixteen"){
        return  parseInt(16);
    }
    if(number == "seventeen"){
        return parseInt(17);
    }
    if(number == "eighteen"){
        return  parseInt(18);
    }
    if(number == "nineteen"){
        return parseInt(19);
    }
    if(number == "twenty"){
        return parseInt(20);
    }
}

function headingSettings(){
    $("#settingsHeading").addClass("show active");    
}

// apply setting in setting modal

$("#context-tab-pane-apply").on("click",function(e){
    let elemantId = $("#settingsHeading").attr("fatherId");
    let context = $("#contextName").val();
    let url = $("#contextUrl").val();
    let nodeName = $("#contextHeading").val();
    let textAlign = $("#alignment").val();
    e.preventDefault();
});

$("#alignments i").on("click",function(e){
    if($(this).hasClass("fa-align-justify")){
        $("#alignment").val("justify");
    }
    if($(this).hasClass("fa-align-right")){
        $("#alignment").val("right");
    }
    if($(this).hasClass("fa-align-center")){
        $("#alignment").val("center");
    }
    if($(this).hasClass("fa-align-left")){
        $("#alignment").val("left");
    }
});

// custom ctx
$("#close-ctx").on("click",function(e){
    $("#ctxMenu").removeClass("active");
    $("#close-ctx").removeClass("active");
    e.stopPropagation();
});

// روی حذف المان در منوی راست کلیک کلیک شده است
$("#removeThisSection").on("click",function(e){
    e.stopPropagation();
    alert("removeThisSection");
    let howisGetRightClicked = $("#ctxMenu").attr("belongto");
    let previousClicked= $("#"+howisGetRightClicked).parent().attr("id");
    $("#"+howisGetRightClicked).remove();
    $("#"+previousClicked).append($(".fa-plus").first().clone());
    $("#templateFather").removeClass("container-elemant-clicked");
    templateFatherClasses();
    e.stopPropagation();
    e.preventDefault();
});
