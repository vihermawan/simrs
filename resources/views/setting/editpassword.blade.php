<script>
    $(document).ready(function() {
        $('#tabel-edit-password').DataTable();

        $('#btn-edit-pass').click(function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            e.preventDefault();

            $('#close').click();

            var user_id = $('#form-edit #user-id').val(),
                password = $('#form-edit').serialize();
            
            $.ajax({
                type : 'POST',
                url : '/edit-password/' + user_id,
                data : password,
                dataType : 'json',
                success : function(response){
                    $('#form-edit').trigger('reset');
                    $('#edit-pass-modal').modal('hide');
                    $('#res_div').removeAttr('hidden');
                    $('#res_message').show();
                    $('#res_message').html(response.messages);
                },
                error : function(response){
                    var errors = $.parseJSON(response.responseText);
                    $('#res_message_error').html('');
                    $.each(errors.messages, function(key, value) {
                        $('#res_message_error').append('<li>' + value + '</li>');
                    });
                    $('#add-error-bag').removeAttr('hidden');
                }
            })
        });

        $('#close').click(function() {
            $('#res_div').attr('hidden', true);
        });
    });

    function editPassword(user_id) {
        $('#form-edit').trigger('reset');
        $.ajax({
            type : 'GET',
            url : '/edit-password/get-user',
            data : {
                user_id : user_id,
            },
            success : function (response) {
                $('#user-id').val(response.user.id);
                $('#nama-user').html('<span>User : ' + response.user.nama_user + '</span>');
                $('#edit-pass-modal').modal('show');
            },
            error : function(response){
                console.log(response);
            }
        })
    }
</script>

<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4>
                    <i class="icon-arrow-left52 mr-2"></i>
                    <span class="font-weight-semibold">Setting</span> - Edit Password
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default">
                        <i class="icon-bars-alt text-primary"></i>
                        <span>Statistics</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float text-default">
                        <i class="icon-calculator text-primary"></i>
                        <span>Invoices</span>
                    </a>
                    <a href="#" class="btn btn-link btn-float text-default">
                        <i class="icon-calendar5 text-primary"></i>
                        <span>Schedule</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="#" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i>
                        Setting
                    </a>
                    <span class="breadcrumb-item active">Edit Password</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none">
                    <i class="icon-more"></i>
                </a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                    <a href="#" class="breadcrumb-elements-item">
                        <i class="icon-comment-discussion mr-2"></i>
                        Support
                    </a>

                    <div class="breadcrumb-elements-item dropdown p-0">
                        <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear mr-2"></i>
                            Settings
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                            <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                            <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Dashboard content -->
        <div class="row">
            <div class="col-xl-12">
                <!--Tabel -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Tabel User</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div id="res_div" class="card-body" hidden>
                        <div class="alert bg-success text-white alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span id="res_message" class="font-weight-semibold"></span>
                            <button id="close" aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                ×
                            </button>
                        </div>
                    </div>

                    <table id="tabel-edit-password" class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th data-hide="phone" class="footable-visible">Nama</th>
                                <th data-toggle="true" class="footable-visible footable-first-column">Email</th>
                                <th data-hide="phone,tablet" class="footable-visible">Role</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $user->nama_user }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role->nama_role}}</td>
                            <td>
                                <button type="button" class="btn btn-primary" onclick="editPassword({{ $user->id }})">
                                    <i class="icon-pencil5 mr-2"></i>
                                    Edit Password
                                </button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!--/Tabel-->
            </div>
        </div>
        <!-- /dashboard content -->
    </div>
    <!--Modal Edit Password -->
    <div id="edit-pass-modal" class="modal fade" tabindex="-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title">Edit Password<p id="nama-user"></p></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form-edit">
                            <div class="modal-body">
                                <div class="alert alert-danger" id="add-error-bag" hidden>
                                    <ul id="res_message_error">
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>New Password</label>
                                            <input type="password" name="newpassword" placeholder="New Password" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>Confirm New Password</label>
                                            <input type="password" name="confirmpassword" placeholder="Re-Enter New Password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <input id="user-id" name="user-id" type="hidden">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button id="btn-edit-pass" type="submit" class="btn bg-primary">Save Password</button>
                            </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Edit Password-->
</div>
