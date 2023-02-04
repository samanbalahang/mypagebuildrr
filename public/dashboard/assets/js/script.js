$(window).on("load",function () {
    // حذف لودر سایت
    $("#loader").remove();
    // پیشفرض انتخاب های فرم
    $(".select-2").select2({
        placeholder: "تایپ کنید",
        tags: true,
        width: '100%',
        tokenSeparators: [',', ' '],
       
    });
    // ایجاد کلپس براساس بوت استرپ 5
    $("[data-bs-toggle = collapse").on("click",function(e){
        if(theId = $(this).attr("aria-controls")){
            if(theId =  $("#"+theId+"").attr("id")){
                $("#"+theId+"").toggleClass("show");
            }
        }
        e.preventDefault();
    });
    // ایجاد تب لیست بوت استرپ 5
    const triggerTabList = document.querySelectorAll('[role=tablist] button')
    triggerTabList.forEach(triggerEl => {
    // const tabTrigger = new bootstrap.Tab(triggerEl)
    // alert(triggerEl.getAttribute("aria-controls")); 
    triggerEl.addEventListener('click', event => {
        let clickedTablist = triggerEl.parentNode.parentNode;
        let clickedTablistID = clickedTablist.getAttribute("id");
        // alert(clickedTablistID);
        if(!triggerEl.classList.contains("active")){
            let buttons = document.querySelectorAll("#"+clickedTablistID+" li button");
            buttons.forEach(tbutton=>{
                tbutton.classList.remove("active");
            });
            let tablistDiv = document.querySelectorAll("#"+clickedTablistID+"Content div");
            tablistDiv.forEach(div=>{
                // alert(div);
                div.classList.remove("show");
                div.classList.remove("active");
            });

            triggerEl.classList.add("active");
            let ariaControls = triggerEl.getAttribute("aria-controls");          
            let divActiveArea = document.getElementById(ariaControls);
            divActiveArea.classList.add("show");
            divActiveArea.classList.add("active");
            // alert(triggerEl.getAttribute("aria-controls"));          
        }       
        // tabTrigger.show()
        // event.preventDefault()        
    });
    });

    // aria-label
    $('[aria-label="Close"]').on("click",function(e){
        $(this).parents(".modal-father").removeClass("active show");
        //  e.stopPropagation();
    });

 

    


});
