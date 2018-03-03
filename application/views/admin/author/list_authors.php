<?php $this->load->view("includes/admin/header"); ?>
<?php $this->load->view("includes/admin/navbar"); ?>

<div class="content-wrapper">
    <!-- Content Header (article header) -->
    <section class="content-header">
        <h1>
            <span>รายการผู้แต่ง</span>
        </h1>
        <div class="group-buttons-right">
            <ul class="nav nav-pills">
                <li>
                    <a href="<?= base_url(ADMIN_AUTHOR . "/create") ?>"> <i class="fa fa-plus-circle fa-1x"></i>
                        เพิ่มผู้แต่ง</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!--Row Search-->
        <div class="row" id="div_search_panel">
            <div class="col-xs-12">
                <div class="box box-info box-solid ">
                    <div class="box-header">
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-default btn-sm pull-right" data-widget='collapse'
                                    data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                                <i class="fa fa-plus" style="font-size: large"></i></button>
                        </div><!-- /. tools -->
                        <h3 class="box-title">
                            <?= $this->lang->line("button_search"); ?>
                        </h3>
                    </div>
                    <div class="box-body">
                        <div class="col-md-4 ">
                            <div class="form-group pull-left col-md-12">
                                <label class="col-md-4 control-label text-right">ชื่อ</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="first_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group pull-left col-md-12">
                                <label class="col-md-4 control-label text-right">นามสกุล</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="form-group pull-left col-md-12">
                                <label class="col-md-4 control-label text-right">อีเมล์</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" id="email">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body-->

                    <div class="box-footer">
                        <div class="text-center">
                            <button id="btn_search" type="button" onclick="search()" class="btn btn-primary "><i
                                        class="fa fa-search"></i> <?= $this->lang->line("button_search"); ?>
                            </button>
                            <button id="btn_clear_search" onclick="clearTextSearch()" type="button"
                                    class="btn btn-default">
                                <i class="fa fa-refresh"></i>
                                <?= $this->lang->line("button_clear"); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row Data Table -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-info">
                    <!--Header-->
                    <!--  <div class="box-header"></div>-->
                    <!--Body-->
                    <div class="box-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover " id="author_datatable">
                                <thead>
                                <tr>
                                    <th><?= $this->lang->line("table_seq"); ?></th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>อีเมล์</th>
                                    <th class="text-center">
                                        <button type="button" id="btn_search" onclick="setVisibleSearchPanel()"
                                                data-toggle="tooltip" data-placement="top" title="แสดงการค้นหา"
                                                class="btn btn-primary ">
                                            <i class="glyphicon glyphicon-zoom-in"></i>
                                        </button>
                                    </th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div><!-- /.box-body-->
                </div>
            </div>
        </div>


    </section>
    <!-- /.content -->
</div>


<script type="text/javascript">

    var dataTable;

    $(document).ready(function () {

        loadAuthorDataTable();

        setupKeyEnterSearch();

        setVisibleSearchPanel();
    });

    function setupKeyEnterSearch() {
        $("#name_en,#name_th").keyup(function (e) {
            if (e.keyCode == 13) {
                $("#btn_search").trigger("click");
            }
        });
    }

    function loadAuthorDataTable() {
        var columns = [
            {data: null, "sClass": "right", "bSortable": false, "sWidth": "3%"}, //1st column
            {data: "first_name", "sClass": "text", "sWidth": "20%"},
            {data: "last_name", "sClass": "text", "sWidth": "20%"},
            {data: "email", "sClass": "text", "sWidth": "30%"},
        ];

        var columnDefs = [
            {targets: 1,},
            {
                targets: 4, render: function (data, type, row) {
                var buttons = '<div class="text-center"> ';
                buttons += '<a href=<?=base_url(ADMIN_AUTHOR)?>/update/' + row.id + '  class="btn btn-warning glyphicon glyphicon-pencil " data-toggle="tooltip" data-placement="top" title="แก้ไขข้อมูล"></a>';
                buttons += ' <a href="javascript:void(0)" onclick=deleteData(' + row.id + ') class="button_delete btn btn-danger glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="top" title="ลบข้อมูล"></a>';
                buttons += '</div>'
                return buttons;
            }
            },
        ];


        dataTable = $('#author_datatable').DataTable({
            'ajax': {
                type: "GET",
                url: BASE_URL + 'admin/author/loadAuthorDataTable',
                dataSrc: 'data'
            },
            "language": {
                "emptyTable": '<?=$this->lang->line("table_no_records");?>',
                "zeroRecords": '<?=$this->lang->line("table_no_records");?>'
            },
            columnDefs: columnDefs,
            columns: columns,
            pageLength: 10,
            bJQueryUI: true,
            bLengthChange: false,
            bFilter: true,
            bInfo: false,
            bSort: false,
            autoWidth: false,
            responsive: true
        });

        dataTable.on('order.dt search.dt', function () {
            dataTable.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

    }


    function deleteData(id) {
        var targetUrl = BASE_URL + 'admin/author/delete/' + id;
        if (id != "") {
            BootstrapDialog.show({
                title: '<i class="glyphicon glyphicon-warning-sign"></i> Warning',
                size: BootstrapDialog.SIZE_SMALL,
                type: BootstrapDialog.TYPE_WARNING,
                message: 'คุณต้องการลบข้อมูลใช่หรือไม่?',
                closable: false, // <-- Default value is false
                draggable: true, // <-- Default value is false
                buttons: [{
                    // icon: 'glyphicon glyphicon-ban-circle',
                    label: 'ตกลง',
                    cssClass: 'btn-warning',
                    action: function (dialog) {
                        $.post(targetUrl, function (response) {
                            if (response.success == true) {
                                dataTable.ajax.reload();
                            } else {
                                alert('failed');
                            }
                        }, 'json');
                        dialog.close();
                    }
                }, {
                    label: 'ยกเลิก',
                    action: function (dialog) {
                        dialog.close();
                    }
                }]
            });
        }
    }


    function search() {
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#last_name').val();

        dataTable.column(1).search(first_name);
        dataTable.column(2).search(last_name);
        dataTable.column(3).search(email);
        dataTable.draw();
    }

    function clearTextSearch() {
        $('#first_name').val('');
        $('#last_name').val('');
        $('#email').val('');
    }

    function setVisibleSearchPanel() {
        if ($('#div_search_panel').is(":visible")) {
            $('#div_search_panel').hide();
        } else {
            $('#div_search_panel').show();
        }
    }

</script>

<?php $this->load->view("includes/admin/footer"); ?>
