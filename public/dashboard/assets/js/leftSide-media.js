$(function(){
    $(".accordion-button").on("click",function(e){
       let colID = $(this).attr("aria-controls");
       $("#"+colID).toggleClass("show");
    });
    $("#tagApprove").on("click",function(e){
        $("#tagList").empty();
        let tagstext = $("#tag_name").val();
        $("#tags").val(tagstext);
        let thetext;
        tagstext.forEach(element => {
            thetext = document.createElement("p");
            textnod = document.createTextNode(element)
            thetext.append(textnod)
            $("#tagList").append(thetext);
            $("#tagList").append("<br>");
        });
        e.preventDefault();
    });
    $("#catApprove").on("click",function(e){
        $("#catList").empty();
        let catstext = $("#cat_name").val();
        $("#cats").val(catstext);
        let thetext;
        catstext.forEach(element => {
            thetext = document.createElement("p");
            textnod = document.createTextNode(element)
            thetext.append(textnod)
            $("#catList").append(thetext);
            $("#catList").append("<br>");
        });
        e.preventDefault();
    });
});