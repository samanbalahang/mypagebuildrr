<section id="leftside" class="col-12 col-md-3 mt-2 pt-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    وضعیت و مشاهده پذیری
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-mdb-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p> قابل مشاهده بودن
                        <select name="visibility">
                            <option value="1">عمومی</option>
                            <option value="۲">خصوصی</option>
                            <option value="3">رمزدار</option>
                        </select>
                    </p>
                    <p>
                        انتشار
                        <a href="" id="show-calender">بی درنگ</a>
                    </p>
                    <p>
                        <input type="checkbox" name="ontopofblog">
                        چسباندن به بالای بلاگ
                    </p>
                    <p>
                        <input type="checkbox" name="watingforapproval">
                        در انتظار بررسی
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    دسته ها
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-mdb-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div id="list-of-cats">
                    <div class="d-flex my-3">
                        <label for="generalCat" class="label max-w-50" > دسته بندی عمومی</label>
                        <input type="checkbox" id="generalCat" name="generalCat" class="max-w-50" checked disabled>
                    </div>
                     <a id="addNewCat">افزودن دسته بندی تازه</a>
                    <select name="cat_name" id="cat_name" multiple="multiple" class="w-100 select-2" style="direction: rtl!important;">
                      
                    </select>
                    <div id="catList"></div>
                    <a href="#" id="catApprove" class="btn btn-warning my-2">
                        تایید دسته بندیها
                    </a>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    برچسب ها
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-mdb-parent="#accordionFlushExample">
                <div class="accordion-body">
                 <div class="md-form mb-5 ">
                    <p>
                        افزودن برچسب
                    </p>
                    <select name="tag_name" id="tag_name" multiple="multiple" class="w-100 select-2" style="direction: rtl!important;">
                      
                    </select>
                    <div id="tagList"></div>
                    <a href="#" id="tagApprove" class="btn btn-warning my-2">
                        تایید تگ ها
                    </a>
                 </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingForth">
                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseForth" aria-expanded="false" aria-controls="flush-collapseForth">
                    نظر کاربران
                </button>
            </h2>
            <div id="flush-collapseForth" class="accordion-collapse collapse" aria-labelledby="flush-headingForth" data-mdb-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="d-flex my-3">
                        <label for="comment" class="label max-w-50" > پذیرش نظرات</label>
                        <input type="checkbox" id="comment" name="comment" class="max-w-50">
                    </div>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFifth">
                <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse" data-mdb-target="#flush-collapseFifth" aria-expanded="false" aria-controls="flush-collapseFifth">
                   درج گالری
                </button>
            </h2>
          
            <div id="flush-collapseFifth" class="accordion-collapse collapse show" aria-labelledby="flush-headingFifth" data-mdb-parent="#accordionFlushExample">
                <form method="post" action="{{route('dropMedia')}}"  class="form-control" enctype="multipart/form-data" id="multymedia">
                        @csrf
                    <div class="dz-default dz-message"><span>فایل های خود را به این ناحیه درگ کنید</span></div>
                </form>
            </div>
        </div>
    </div>
    
</section>
