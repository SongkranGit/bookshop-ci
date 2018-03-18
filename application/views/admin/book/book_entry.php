<?php $this->load->view("includes/admin/header"); ?>
<?php $this->load->view("includes/admin/navbar"); ?>

<link href="<?= base_url("assets/libraries/jquery-filer/css/jquery.filer.css") ?>" type="text/css" rel="stylesheet">
<link href="<?= base_url("assets/libraries/jquery-filer/css/themes/jquery.filer-dragdropbox-theme.css") ?>" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?= base_url("assets/libraries/jquery-filer/js/jquery.filer.min.js?v=1.0.5") ?>"></script>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <span>หนังสือ</span>
        </h1>
        <div class="group-buttons-right">
            <ul class="nav nav-pills ">
                <li>
                    <a href="<?= base_url(ADMIN_BOOK) ?>"> <i class="fa fa-list"></i>รายการหนังสือ</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <form id="form_book_entry" role="form" class="form-horizontal">
            <div class="panel panel-default">
                <div class="panel-heading <?php echo setHeaderClass($data['action']) ?>">
                <span>
                    <i class="<?php echo setHeaderIcon($data['action']) ?>"></i>
                    <?php echo $data['action'] === 'create' ? "เพิ่มหนังสือ" : "แก้ไขหนังสือ" ?>
                </span>
                </div>

                <div class="panel-body">
                    <div class="form-group ">
                        <label class="col-sm-2 control-label">หมวดหมู่หนังสือ</label>
                        <div class="col-md-7">
                            <div class="col-md-5 input-group dateinput-group date">
                                <select class="form-control" id="book_category_id" name="book_category_id">
                                    <?php if (!empty($data["book_categories"]) && count($data["book_categories"]) > 0): ?>
                                        <?php foreach ($data["book_categories"] as $item): ?>
                                            <option value="<?= $item["id"] ?>" <?= isset($data["row"]["id"]) && $data["row"]["id"] == $item["id"] ? "selected" : "" ?> >
                                                <?php echo $item["name"] ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-2  control-label">ชื่อหนังสือ</label>
                        <div class="col-md-8">
                            <input type='text' class="form-control" name="book_name"
                                   value="<?php echo setFormData($data, $key = "book_name") ?>"/>
                        </div>
                    </div>


                    <div class="form-group required">
                        <label class="col-md-2  control-label">วันที่เผยแพร่</label>
                        <div class="col-md-7">
                            <div class='col-md-5 input-group date' id='datetimepicker_published_date'>
                                <input type='text' class="form-control" name="published_date"
                                       value="<?php echo setFormData($data, $key = "published_date") ?>"/>
                                <span class="input-group-addon">
                                     <span class="glyphicon glyphicon-calendar"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-2  control-label"><?= $this->lang->line("description"); ?></label>
                        <div class="col-md-8">
                            <textarea id="description_th" name="description"
                                      placeholder="คำอธิบาย"
                                      class="form-control"
                                      rows="3"><?php echo setFormData($data, $key = "description"); ?></textarea>
                        </div>
                    </div>

                    <div class="form-group required">
                        <label class="col-md-2  control-label">ราคา</label>
                        <div class="col-md-3">
                            <input type='number' class="form-control" name="price"
                                   value="<?php echo setFormData($data, $key = "price") ?>"/>
                        </div>
                    </div>

                    <div class="form-group required ">
                        <label class="col-md-2  control-label">อับโหลดหนังสือ</label>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="book_file" id="book_file"
                                   multiple="multiple"
                                   value="<?php echo setFormData($data, $key = "download_path_file"); ?>">
                            <span class="text-danger"> เฉพาะไฟล์ PDF</span>
                            <div id="div_image"></div>
                        </div>
                    </div>

                    <div class="form-group required ">
                        <label class="col-md-2  control-label">ปกหนังสือ</label>
                        <div class="col-md-8">
                            <input class="form-control" type="file" name="cover_image_file" id="cover_image_file"
                                   value="<?php echo setFormData($data, $key = "cover_image"); ?>">
                            <div id="div_image"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2  control-label">จำนวนหน้าทั้งหมด</label>
                        <div class="col-md-3">
                            <input type='number' class="form-control" name="page_count"
                                   value="<?php echo setFormData($data, $key = "page_count") ?>"/>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label class="col-md-2 control-label"><?= $this->lang->line("form_field_published"); ?></label>
                        <div class="col-md-2">
                            <select class="form-control" id="published" name="published">
                                <option value="1" <?= isset($data["row"]["published"]) && $data["row"]["published"] == 1 ? "selected" : "" ?>>
                                    <?= $this->lang->line("form_field_published"); ?></option>
                                <option value="0" <?= isset($data["row"]["published"]) && $data["row"]["published"] == 0 ? "selected" : "" ?>>
                                    <?= $this->lang->line("form_field_unpublished"); ?></option>
                            </select>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="pull-right">
                        <?= buttonSubmitCreateOrUpdate($data["action"]); ?>
                        <?= buttonCancelWithRedirectPage("admin/book/index"); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <input type="hidden" id="hd_list_image_uuid" name="list_image_uuid"/>
        </form>
    </section>


</div><!-- /.content-wrapper -->

<script type="text/javascript">

    var validator;

    $(document).ready(function () {

        setupFileInputBookDownload();

        setupFileInputCoverImage();

        setupDatePicker();

        validateForm();

        showDetail();

    });

    function setupFileInputBookDownload() {
        $('#book_file').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            extensions: ['pdf'],
            changeInput: true,
            showThumbs: true,
            captions: {button: 'Browse', feedback: ''},
            addMore: false,
        });
    }

    function setupFileInputCoverImage() {
        $('#cover_image_file').filer({
            limit: null,
            maxSize: null,
            extensions: null,
            extensions: ['jpg', 'jpeg', 'png'],
            changeInput: true,
            showThumbs: true,
            captions: {button: 'Browse', feedback: ''},
            addMore: false,
            templates: {
                box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
                item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <li>{{fi-progressBar}}</li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
                itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                       \
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
                progressBar: '<div class="bar"></div>',
                itemAppendToEnd: false,
                removeConfirmation: true,
                _selectors: {
                    list: '.jFiler-items-list',
                    item: '.jFiler-item',
                    progressBar: '.bar',
                    remove: '.jFiler-item-trash-action'
                }
            }
        });
    }


    function setupDatePicker() {
        $('#datetimepicker_published_date').datetimepicker({
            locale: 'th',
            format: "YYYY-MM-DD",
            defaultDate: new Date()
        });
    }


    function validateForm() {
        //Fixed not validate hidden tabs
        $.validator.setDefaults({
            ignore: ""
        });
        validator = $('#form_book_entry').validate({
            rules: {
                published_date: "required",
                description: "required",
                book_name: "required",
                price: "required"
            },
            messages: {
                published_date: '<?php echo $this->lang->line("message_this_field_is_require");?>',
                description: '<?php echo $this->lang->line("message_this_field_is_require");?>',
                book_name: '<?php echo $this->lang->line("message_this_field_is_require");?>',
                price: '<?php echo $this->lang->line("message_this_field_is_require");?>'
            },
            highlight: function (element) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            submitHandler: function (form) {
                save();
            }
        });
    }

    function showDetail() {
        var isShowData = '<?=array_key_exists('is_show_data', $data)?>';
        if (isShowData) {
            $("form :input").attr("disabled", "disabled");
            $('#detail_th,#detail_en').prop('readonly', true);
            $('#dZUpload').css('pointer-events', 'none');
        }
    }

    function save() {
        var targetUrl;
        var id = '<?=$this->uri->segment(4)?>';

        if (id === "") {
            targetUrl = BASE_URL + 'admin/book/create';
        } else {
            targetUrl = BASE_URL + 'admin/book/update/' + id;
        }

        showSpinner();

        $.ajax({
            type: 'POST',
            url: targetUrl,
            data: $("#form_book_entry").serializefiles(),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (response) {
                hideSpinner();
                if (response.success == true) {
                    alertSuccessMessageDialog(
                        '<?=$this->lang->line("message_dialog_title_success");?>',
                        '<?=$this->lang->line("message_save_complete");?>', function () {
                            var id = '<?=$this->uri->segment(4)?>';
                            if (id != 0 && id != '') {
                                window.location = BASE_URL + 'admin/book/index';
                            } else {
                                clearForm();
                            }
                        });
                } else {
                    $.each(response.messages, function (key, value) {
                        var element = $('#' + key);
                        element.closest('div.form-group')
                            .removeClass('has-error')
                            .addClass(value.length > 0 ? 'has-error' : 'has-success')
                            .find('.text-danger')
                            .remove();
                        element.after(value);
                    });
                }
            },
            error: function (request, status, error) {
                hideSpinner();
                clearForm();
                alert(request.responseText);
            }
        });
    }

    function clearForm() {
        window.location = BASE_URL + 'admin/book/create';
    }

</script>


<?php $this->load->view("includes/admin/footer"); ?>

