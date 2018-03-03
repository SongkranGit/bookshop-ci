<?php $this->load->view("includes/admin/header"); ?>
<?php $this->load->view("includes/admin/navbar"); ?>


<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <span>ผู้แต่ง</span>
        </h1>
        <div class="group-buttons-right">
            <ul class="nav nav-pills ">
                <li>
                    <a href="<?= base_url(ADMIN_AUTHOR) ?>"> <i class="fa fa-list"></i> รายการผู้แต่ง</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="content">
        <form id="form_author_entry" role="form" class="form-horizontal">
            <div class="panel panel-default">
                <div class="panel-heading <?php echo setHeaderClass($data['action']) ?>">
                <span>
                    <i class="<?php echo setHeaderIcon($data['action']) ?>"></i>
                    <?php echo $data['action'] === 'create' ? "เพิ่มผูัแต่ง" : "แก้ไขผู้แต่ง" ?>
                </span>
                </div>

                <div class="panel-body">

                    <div class="form-group required">
                        <label class="col-md-2  control-label">ชื่อ</label>
                        <div class="col-md-8">
                            <input type="text" id="first_name" name="first_name" placeholder="ชื่อ"
                                   class="form-control"
                                   value="<?php echo setFormData($data, $key = "first_name"); ?>">
                        </div>
                    </div>
                    <div class="form-group required">
                        <label class="col-md-2  control-label">นามสกุล</label>
                        <div class="col-md-8">
                            <input type="text" id="last_name" name="last_name" placeholder="นามสกุล"
                                   class="form-control"
                                   value="<?php echo setFormData($data, $key = "last_name"); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2  control-label">อีเมล์</label>
                        <div class="col-md-8">
                            <input type="text" id="email" name="email" placeholder="อีเมล์"
                                   class="form-control"
                                   value="<?php echo setFormData($data, $key = "email"); ?>">
                        </div>
                    </div>

                </div>
                <div class="panel-footer">
                    <div class="pull-right">
                        <?= buttonSubmitCreateOrUpdate($data["action"]); ?>
                        <?= buttonCancelWithRedirectPage("admin/author"); ?>
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
        validator = $('#form_author_entry').validate({
            rules: {
                first_name: "required",
                last_name: "required"
            },
            messages: {
                first_name: '<?php echo $this->lang->line("message_this_field_is_require");?>',
                last_name: '<?php echo $this->lang->line("message_this_field_is_require");?>'
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
            targetUrl = BASE_URL + 'admin/author/create';
        } else {
            targetUrl = BASE_URL + 'admin/author/update/' + id;
        }

        showSpinner();

        $.ajax({
            type: 'POST',
            url: targetUrl,
            data: $("#form_author_entry").serialize(),
            dataType: 'json',
            success: function (response) {
                hideSpinner();
                if (response.success == true) {
                    alertSuccessMessageDialog(
                        '<?=$this->lang->line("message_dialog_title_success");?>',
                        '<?=$this->lang->line("message_save_complete");?>', function () {
                            var id = '<?=$this->uri->segment(4)?>';
                            if (id != 0 && id != '') {
                                window.location = BASE_URL + 'admin/author/index';
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
        window.location = BASE_URL + 'admin/author/create';
    }

</script>


<?php $this->load->view("includes/admin/footer"); ?>

