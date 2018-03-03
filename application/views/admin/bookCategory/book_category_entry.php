<?php $this->load->view("includes/admin/header"); ?>
<?php $this->load->view("includes/admin/navbar"); ?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <span>หมวดหมู่หนังสือ</span>
        </h1>
        <div class="group-buttons-right">
            <ul class="nav nav-pills ">
                <li>
                    <a href="<?= base_url(ADMIN_BOOK_CATEGORY) ?>"> <i class="fa fa-list"></i> รายการหมวดหมู่หนังสือ</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <form id="form_book_category_entry" role="form" class="form-horizontal">
            <div class="panel panel-default">
                <div class="panel-heading <?php echo setHeaderClass($data['action']) ?>">
                <span>
                    <i class="<?php echo setHeaderIcon($data['action']) ?>"></i>
                    <?php echo $data['action'] === 'create' ? "เพิ่มหมวดหมู่หนังสือ" : "แก้ไขหมวดหมู่หนังสือ" ?>
                </span>
                </div>

                <div class="panel-body">

                    <div class="form-group required">
                        <label class="col-md-2  control-label">ชื่อหมวดหมู่</label>
                        <div class="col-md-7">
                            <input type="text" id="name" name="name" placeholder="ชื่อหมวดหมู่หนังสือ"
                                   class="form-control"
                                   value="<?php echo setFormData($data, $key = "name"); ?>">
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <div class="pull-right">
                        <?= buttonSubmitCreateOrUpdate($data["action"]); ?>
                        <?= buttonCancelWithRedirectPage("admin/bookCategory"); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>
    </section>


</div><!-- /.content-wrapper -->

<script type="text/javascript">

    var validator;

    $(document).ready(function () {

        validateForm();

    });

    function validateForm() {
        //Fixed not validate hidden tabs
        $.validator.setDefaults({
            ignore: ""
        });
        validator = $('#form_book_category_entry').validate({
            rules: {
                name: "required"
            },
            messages: {
                name: '<?php echo $this->lang->line("message_this_field_is_require");?>'
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


    function save() {
        var targetUrl;
        var id = '<?=$this->uri->segment(4)?>';

        if (id === "") {
            targetUrl = BASE_URL + 'admin/bookCategory/create';
        } else {
            targetUrl = BASE_URL + 'admin/bookCategory/update/' + id;
        }

        showSpinner();

        $.ajax({
            type: 'POST',
            url: targetUrl,
            data: $("#form_book_category_entry").serialize(),
            dataType: 'json',
            success: function (response) {
                hideSpinner();
                if (response.success == true) {
                    alertSuccessMessageDialog(
                        '<?=$this->lang->line("message_dialog_title_success");?>',
                        '<?=$this->lang->line("message_save_complete");?>', function () {
                            var id = '<?=$this->uri->segment(4)?>';
                            if (id != 0 && id != '') {
                                window.location = BASE_URL + 'admin/bookCategory/index';
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
        window.location = BASE_URL + 'admin/bookCategory/create';
    }

</script>


<?php $this->load->view("includes/admin/footer"); ?>

