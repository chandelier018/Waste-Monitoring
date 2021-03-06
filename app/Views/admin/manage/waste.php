<?= $this->include('layouts/header.php'); ?>

<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed" id="mybody">
    <div class="wrapper">
        <?= $this->include("layouts/navbar.php"); ?>
        <?= $this->include("layouts/sidebar.php"); ?>
        <div class="content-wrapper">
            <?= $this->include("layouts/breadcrumb.php"); ?>
            <div class="content">
                <div class="container">

                    <span id="message"></span>
                    <div class="text-right">

                        <button type="button" class="btn bg-gradient-info btn-sm" name="add_record" id="add_record" data-toggle="modal"><i class="fas fa-plus"></i> New</button>
                        <br>
                        <br>
                    </div>

                    <div class="table-responsive">
                        <table id="sample_table" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Type</th>
                                    <th>Date Created</th>
                                    <th>Action </th>
                                </tr>
                            </thead>



                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?= $this->include("layouts/modal.php"); ?>

    <div class="modal fade" id="userModal" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form action="" method="post" id="user_form">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>

                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post" id="user_form">
                            <div class="user_account">

                                <div class="form-group">
                                    <input type="text" name="waste" id="waste" class="form-control" placeholder="Enter Waste Type" required>
                                    <span id="waste_error" class="text-danger"></span>
                                </div>

                            </div>

                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="hidden" name="action" id="action" value="Add">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit" id="submit_button"><i class="fas fa-save" id="icon_saved"></i> Save</button>

                        <!--     <input type="submit" class="btn btn-success" name="submit" id="submit_button" /> -->
                    </div>
                </form>

            </div>
        </div>
        </form>
    </div>
    <?= $this->include('layouts/footer.php'); ?>
    <?= $this->include('layouts/script.php'); ?>
</body>
<Script>
    $(document).ready(function() {

        $("#Page_title").text("Manage Waste Type");
        $("#b_crumb_subtitle").text("waste");
        $('#wastenav').addClass("active");
        $('#manage').addClass("active");
        $('#manage_nav_item').attr("class", "nav-item menu-open");

        $('#manage_nav_item').click(function() {
            $('#manage_nav_item').attr("class", "nav-item menu-close");
            $('#settings_nav_item').attr("class", "nav-item menu-close");
            $('#monitoring_nav_item').attr("class", "nav-item menu-close");
        });
        $('#monitoring_nav_item').click(function() {
            $('#manage_nav_item').attr("class", "nav-item menu-close");
            $('#settings_nav_item').attr("class", "nav-item menu-close");
            $('#monitoring_nav_item').attr("class", "nav-item menu-close");
        });
        $('#settings_nav_item').click(function() {
            $('#manage_nav_item').attr("class", "nav-item menu-close");
            $('#settings_nav_item').attr("class", "nav-item menu-close");
            $('#monitoring_nav_item').attr("class", "nav-item menu-close");
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#sample_table').DataTable({
            "order": [],
            "serverSide": true,
            "ajax": {
                url: "<?= site_url('ManageWaste/fetch_allB') ?>",
                type: "POST",
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: true,
            timer: 1000
        });
        $('.toastrDefaultSuccess').click(function() {
            toastr.success('Data Succesfully Added!');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url("/mode/dJson"); ?>",
            method: "POST",
            datatype: "JSON",
            success: function(data) {
                var fmode = JSON.parse(data);
                if (fmode['mode'] == 'on') {
                    $('#mybody').attr("class", "hold-transition sidebar-mini dark-mode layout-navbar-fixed layout-fixed");
                    $('#mynav').attr("class", "main-header navbar navbar-expand navbar-dark");
                    $('#sidebar').attr("class", "sidebar sidebar-dark-primary");
                    $('#sidebarNavBar').attr("class", "main-sidebar sidebar-dark-primary elevation-4");
                    //   $('#add_record').attr("class", "btn bg-gradient-info btn-sm");
                    $('#darkmode').prop('checked', true);
                } else {
                    $('#mybody').attr("class", "hold-transition sidebar-mini layout-navbar-fixed layout-fixed");
                    $('#mynav').attr("class", "main-header navbar navbar-expand navbar-primary navbar-light");
                    $('#sidebar').attr("class", "sidebar sidebar-light-primary");
                    $('#sidebarNavBar').attr("class", "main-sidebar bg-primary elevation-4");
                    //    $('#add_record').attr("class", "btn bg-gradient-dark btn-sm");
                    $('#darkmode').prop('checked', false);
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {

        /*  $("#b_crumb_title").text("Voters");
          $("#b_crumb_subtitle").text("Voters");
          $("#voters").addClass("active");
          $('#manage').attr("class", "nav-item menu-open"); */

        $('#darkmode').click(function() {
            if ($('#darkmode').prop('checked')) {
                $.ajax({
                    url: "<?php echo base_url('/mode/modeOn'); ?>",
                    method: "POST",
                    datatype: "JSON",
                    success: function(data) {
                        $('#mybody').attr("class", "hold-transition sidebar-mini dark-mode layout-navbar-fixed layout-fixed");
                        $('#mynav').attr("class", "main-header navbar navbar-expand navbar-dark");
                        $('#sidebar').attr("class", "sidebar sidebar-dark-primary");
                        $('#sidebarNavBar').attr("class", "main-sidebar sidebar-dark-primary elevation-4");
                        //    $('#add_record').attr("class", "btn bg-gradient-info btn-sm");
                        $('#darkmode').prop('checked', true);
                    }
                });
            } else {
                $.ajax({
                    url: "<?php echo base_url('/mode/modeOff'); ?>",
                    method: "POST",
                    datatype: "JSON",
                    success: function(data) {
                        $('#mybody').attr("class", "hold-transition sidebar-mini layout-navbar-fixed layout-fixed");
                        $('#mynav').attr("class", "main-header navbar navbar-expand navbar-primary navbar-light");
                        $('#sidebar').attr("class", "sidebar sidebar-light-primary");
                        $('#sidebarNavBar').attr("class", "main-sidebar bg-primary elevation-4");
                        //   $('#add_record').attr("class", "btn bg-gradient-dark btn-sm");
                        $('#darkmode').prop('checked', false);
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#add_record').click(function() {
            //       $('#user_form')[0].reset();

            $('.modal-title').text('Add New Waste Type');

            $('#type_error').text('');
            $('#action').val('Add');

            //    $('#submit_button').val('Add');
            $('#userModal').modal('show');
        });

        $('#user_form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: "<?= site_url('ManageWaste/actionB') ?>",
                method: "POST",
                data: $(this).serialize(),
                dataType: "JSON",

                beforeSend: function() {
                    $('.modal_title').text('Saving...');
                    $('#submit_button').attr('disabled', 'disabled');
                },

                success: function(data) {
                    $('.modal-title').text('Add New Waste Type');
                    $('#submit_button').attr('disabled', false);

                    if (data.error == 'yes') {
                        $('#type_error').text(data.type_error);

                    } else if (data.updated == 'yes') {
                        $('#userModal').modal('hide');
                        toastr.info('Data Updated!');
                        $('#sample_table').DataTable().ajax.reload();
                        $('.modal-title').text('');
                        $('#user_form')[0].reset();
                    } else {

                        $('#userModal').modal('hide');
                        toastr.success('Data Saved!');
                        $('#sample_table').DataTable().ajax.reload();
                        $('.modal-title').text('');
                        $('#user_form')[0].reset();
                    }
                }

            });
        });
    });

    $(document).on('click', '.edit', function() {

        var id = $(this).data('id');

        $.ajax({
            url: "<?= site_url('ManageWaste/fetch_single_dataB') ?>",
            method: "POST",
            data: {
                id: id
            },
            dataType: 'JSON',

            success: function(data) {
                $('#waste').val(data.waste);
                $('.modal-title').text('Update Waste Type');
                $('#type_error').text('');

                $('#action').val('Edit');
                $('submit_button').val('Edit');
                $('#userModal').modal('show');
                $('#hidden_id').val(id);
            }
        });
    });
    $(document).on('click', '.delete', function() {
        var id = $(this).data('id');
        //  getName(id);

        $('#deleteModal').modal('show');

        $('#deleteData').on('click', function() {
            $.ajax({
                url: "<?= site_url('ManageWaste/delete') ?>",
                method: "POST",
                data: {
                    id: id
                },

                success: function(data) {
                    $('#deleteModal').modal('hide');
                    toastr.error('Account has been deleted!');
                    $('#sample_table').DataTable().ajax.reload();
                }

            });

        });

        /*  function getName()
          {
              $.ajax({
                  url: "",
                  type: 'POST',
                  data:{
                      id: id
                  },
                  dataType: 'json',
                  success: function(response){
                      $('.id').val(response.brgy_id);
                      $('.Bname').html(response);
                  }
              });
          } */
    });
</script>
<script>
    $(document).ready(function() {
        load_unseen_notif();
        timesTamps();
        $('.notif_seen').click(function() {
            $.ajax({
                url: "<?= site_url('notif')  ?>",
                method: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.status_a == 0) {
                        $('.badge').html('');
                        $('#num').html(data.status_a);
                        $('.dropdown-header').html(data.status_a);
                    } else {
                        $('.badge').html(data.status_a);
                        $('#num').html(data.status_a);
                        $('.dropdown-header').html(data.status_a + " " + "Notifications");
                    }

                }

            });
        });

        function load_unseen_notif() {
            $.ajax({
                url: "<?= site_url('notif/load_unseen')  ?>",
                method: "POST",
                dataType: "JSON",
                success: function(data) {
                    if (data.stat == 0) {
                        $('.badge').html('');
                        $('#num').html(data.status_a);
                        $('.dropdown-header').html(data.status_a);
                    } else {
                        $('.badge').html(data.status_a);
                        $('#num').html(data.status_a);
                        $('.dropdown-header').html(data.status_a + " " + "Notifications");
                    }

                }

            });
        }

        function timesTamps() {
            $.ajax({
                url: "<?= site_url('notif/timeStamp')  ?>",
                method: "POST",
                dataType: "JSON",
                success: function(data) {
                    var a = new Date(data.collection_date);
                    $('.timesTamp').html(a.getMinutes() + " mins ago");

                }

            });
        }

    });
</script>

</html>