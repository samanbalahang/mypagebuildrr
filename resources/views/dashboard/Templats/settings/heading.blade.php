<div class="modal-father" id="settingsHeading">
    <div class="pup-dialog pup-dialog-centered pup-dialog-scrollable" id="templateSectionsParts">
        <div class="w-100 h-100">
            <div class="modal-header">
                <p class="text-white btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-close"></i>
                </p>
            </div>
            <div class="modal-body d-flex flex-wrap">
            <section id="tabs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="context-tab" data-bs-toggle="tab" data-bs-target="#context-tab-pane" type="button" role="tab" aria-controls="context-tab-pane" aria-selected="true">
                            محتوا
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="style-tab" data-bs-toggle="tab" data-bs-target="#style-tab-pane" type="button" role="tab" aria-controls="style-tab-pane" aria-selected="false">
                            استایل
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="context-tab-pane" role="tabpanel" aria-labelledby="context-tab" tabindex="0">
                       <p>
                        عنوان
                       </p>
                       <textarea name="contextName" id="contextName" cols="30" rows="10">

                       </textarea>
                       <hr>
                       <p>
                       پیوند
                       </p>
                       <input type="text" name="contextUrl" id="contextUrl">
                        <p>
                            تگ HTML
                        </p>
                        <select name="contextHeading" id="contextHeading">
                            <option value="h1">h1</option>
                            <option value="h2">h2</option>
                            <option value="h3">h3</option>
                            <option value="h4">h4</option>
                            <option value="h5">h5</option>
                            <option value="h6">h6</option>
                        </select>
                        <p>
                            چیدمان
                        </p>
                        <div class="dflex" id="alignments">
                            <i class="fas fa-align-justify"></i>  
                            <i class="fas fa-align-right"></i>  
                            <i class="fas fa-align-center"></i>  
                            <i class="fas fa-align-left"></i>  
                            <input type="hidden" name="alignment" id="alignment">
                        </div>
                        <a href="" class="btn btn-primary" id="context-tab-pane-apply">
                            تایید
                        </a>
                    </div>
                    <div class="tab-pane fade" id="style-tab-pane" role="tabpanel" aria-labelledby="style-tab" tabindex="0">
                        <p>
                            رنگ متن
                        </p>
                        <p>
                            <input type="color" name="color">
                        </p>
                        <p>
                            تایپوگرافی
                        </p>
                        <p>
                            <Select name="font">
                                <option value=""></option>
                                <option value=""></option>
                            </Select>
                        </p>
                        <p>
                            حاشیه خارجی
                        </p>
                        <div class="d-flex">
                            <div>
                                <input type="number" name="margin-top">
                                <p>بالا</p>
                            </div>
                            <div>
                                <input type="number" name="margin-right">
                                <p>راست</p>
                            </div>
                            <div>
                                <input type="number" name="margin-bottom">
                                <p>پایین</p>
                            </div>
                            <div>
                                <input type="number" name="margin-left">
                                <p>چپ</p>
                            </div>
                        </div>
                        <p>
                             فاصله داخلی
                        </p>
                        <div class="d-flex">
                            <div>
                                <input type="number" name="padding-top">
                                <p>بالا</p>
                            </div>
                            <div>
                                <input type="number" name="padding-right">
                                <p>راست</p>
                            </div>
                            <div>
                                <input type="number" name="padding-bottom">
                                <p>پایین</p>
                            </div>
                            <div>
                                <input type="number" name="padding-left">
                                <p>چپ</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary" id="style-tab-pane-apply">
                            تایید
                        </a>
                    </div>
                </div>
            </section>
            </div>
        </div>
    </div>
</div>