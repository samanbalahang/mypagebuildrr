<div class="modal-father" id="settingsColumns">
    <div class="pup-dialog pup-dialog-centered pup-dialog-scrollable" id="templateSectionsParts">
        <div class="w-100 h-100">
            <div class="modal-header">
                <p class="text-white btn" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-close"></i>
                </p>
            </div>
            <div class="modal-body d-flex flex-wrap">
                <section>
                    <p>
                        تعداد ستون
                    </p>
                    <p>
                       <input type="number" id="culomnnumber" name="culomnnumber" class="form-control md-form" min="2" max="12">
                    </p>
                    <p>
                        رنگ پسزمنیه
                    </p>
                    <p>
                        <input type="color" id="baseColor" name="baseColor" class="form-control md-form">
                    </p>
                    شفافیت رنگ
                    <p>
                        <input type="range" min="0" max="1" step="0.1" id="opacity" value="1">
                    </p>
                        <div id="showFinalColor">پس زمینه شما به این رنگ است</div>
                        <input type="hidden" name="color" id="CulomnsBgColor">
                    <p>
                        تایپوگرافی
                    </p>
                    <p>
                        @include('dashboard.Templats.settings.readFontsLists')

                    </p>
                    <!-- <p>
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
                        </div> -->
                    <p>
                        فاصله داخلی بر حسب Rem
                    </p>
                    <div class="d-flex">
                        <div>
                            <input type="number" name="padding-top" class="padding-top-selector">
                            <p>بالا</p>
                        </div>
                        <div>
                            <input type="number" name="padding-right"  class="padding-right-selector">
                            <p>راست</p>
                        </div>
                        <div>
                            <input type="number" name="padding-bottom"  class="padding-bottom-selector">
                            <p>پایین</p>
                        </div>
                        <div>
                            <input type="number" name="padding-left"  class="padding-left-selector">
                            <p>چپ</p>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary" id="columns-style-tab-pane-apply">
                        تایید
                    </a>
                </section>
            </div>
        </div>
    </div>
</div>