<p>
    <input type="button" id="loadFileXml" value="بارگذاری عکس"
        onclick="document.getElementById('fileupload').click();" class="btn btn-warning" />
    <input type="file" style="display:none;" name="indeximg"  value="افزودن عکس شاخص"
        accept="image/*" id="fileupload"/>
    <!-- <input type="file" name="indeximg" value="افزودن عکس شاخص"
        accept="image/*" id="fileupload"/> -->
</p>
<div id="preview" class="my-3">
    <!-- <img id="blah" src="#" alt="your image" /> -->
</div>
<script>
var  fileupload = document.getElementById("fileupload");
// var blah =  document.getElementById("blah");
fileupload.onchange = evt => {
    var theimg = document.createElement("img");
    theimg.setAttribute('id', 'blah');
    theimg.setAttribute('alt', 'your image');
    theimg.setAttribute('class', 'max-w-100');

    const [file] = fileupload.files
    if (file) {
        theimg.setAttribute('src', URL.createObjectURL(file));
        // blah.src = URL.createObjectURL(file)
        $("#preview").append(theimg);
    }
}
</script>