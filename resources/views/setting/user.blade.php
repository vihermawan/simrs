<script>
    $(document).ready(function() {
        $('#tabel-edit-password').DataTable();

        $('#btn-create-user').click(function(event){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            event.preventDefault();

            $('#close').click();
            $('#create-error-bag').attr('hidden', true);

            var data = $('#form-create').serialize();

            $.ajax({
                type : 'POST',
                url : '/user',
                data : data,
                success : function(response){
                    $('#form-create').trigger('reset');
                    $('#create-user-modal').modal('hide');
                    $('#res_div').attr('hidden', false);
                    $('#res_message').show();
                    $('#res_message').html(response.success);
                },
                error: function(response) {
                    var errors = $.parseJSON(response.responseText);
                    $('#create-user-errors').html('');
                    $.each(errors.messages, function(key, value) {
                        $('#create-user-errors').append('<li>' + value + '</li>');
                    });
                    $('#create-error-bag').removeAttr('hidden');
                }
            })
        });

        $('#btn-edit-user').click(function(event){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            event.preventDefault();

            $('#close').click();
            $('#edit-error-bag').attr('hidden', true);

            var user_id = $('#form-edit #user_id').val(),
                data = $('#form-edit').serialize();

            $.ajax({
                type: 'PUT',
                url: '/user/' + user_id,
                data: data,
                success: function(response) {
                    $('#form-edit').trigger("reset");
                    $('#edit-user-modal').modal('hide');
                    $('#res_div').attr('hidden', false);
                    $('#res_message').show();
                    $('#res_message').html(response.success);
                },
                error: function(response) {
                    var errors = $.parseJSON(response.responseText);
                    $('#edit-user-errors').html('');
                    $.each(errors.messages, function(key, value) {
                        $('#edit-user-errors').append('<li>' + value + '</li>');
                    });
                    $('#edit-error-bag').removeAttr('hidden');
                }
            })
        });

        $("#btn-delete-user").click(function(event) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            event.preventDefault();

            var user_id = $('#form-delete #user_id').val();
            
            $('#close').click();

            $.ajax({
                type: 'DELETE',
                url: '/user/' + user_id,
                data: user_id,
                success: function(response) {
                    $('#modal_theme_warning').modal('hide');
                    $('#res_div').attr('hidden', false);
                    $('#res_message').show();
                    $('#res_message').html(response.success);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        });

        $('#close').click(function() {
            $('#res_div').attr('hidden', true);
        });
    });

    function createUser() {
        $(document).ready(function() {
            $('#create-error-bag').attr('hidden', true);
            $('#form-create').trigger('reset');
            $('#modal_theme_success').modal('show');
            $('#select-user-role-create').on('change', function(){
                var role = $(this).val();
                $('#form-create #role_id').val(role);
            });
        });
    }

    function showUser(user_id) {
        $.ajax({
            type: 'GET',
            url: '/user/' + user_id,
            success: function(data) {
                $('#form-show #nama_user').val(data.user.nama_user);
                $('#form-show #email').val(data.user.email);
                $('#form-show #role_user').val(data.role);
                $('#modal_theme_info').modal('show');
            },
            error : function(data){
                console.log(data);
            }
        })
    }

    function editUser(user_id) {
        $('#edit-error-bag').attr('hidden', true);
        $('#form-edit').trigger('reset');
        $.ajax({
            type: 'GET',
            url: '/user/' + user_id + '/edit',
            success: function(data) {
                $('#form-edit #nama_user').val(data.user.nama_user);
                $('#form-edit #email').val(data.user.email);
                $('#form-edit #role_id').val(data.user.id_role);
                $('#form-edit #user_id').val(data.user.id);
                $('#select-user-role-edit').find('option[value='+data.user.id_role+']').prop('selected', true);
                $('#modal_theme_primary').modal('show');
                $('#select-user-role-edit').on('change', function(){
                    var role = $(this).val();
                    $('#form-edit #role_id').val(role);
                });
            },
            error : function(data){
                console.log(data);
            }
        })
    }

    function deleteUser(user_id) {
        $.ajax({
            type : 'GET',
            url : '/user/' + user_id,
            success : function(data){
                $('#form-delete #user_id').val(data.user.id);
                $('#modal_theme_warning .modal-title').html("Delete User <span class='font-weight-bold'>" + data.user.nama_user + "</span> ?");
                $('#modal_theme_warning').modal('show');
            },
            error : function(data){
                console.log(data);
            }
        })
    }
</script>

<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="#" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i>
                        Setting
                    </a>
                    <span class="breadcrumb-item active">User</span>
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

                    <div class="card-body">
                        <div>
                            <button type="button" class="btn bg-success btn-labeled btn-labeled-left" data-toggle="modal" onclick="createUser()"><b><i class="icon-reading"></i></b> Tambah User Baru</button>
                        </div>
                        <br>
                        <div id="res_div" class="alert bg-success text-white alert-dismissible" hidden>
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
                                <button type="button" class="btn btn-light" onclick="showUser({{ $user->id }})">
                                    <i class="icon-eye2 mr-2"></i>
                                    Show
                                </button>
                                <button type="button" class="btn btn-primary" onclick="editUser({{ $user->id }})">
                                    <i class="icon-pencil5 mr-2"></i>
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger" onclick="deleteUser({{ $user->id }})">
                                    <i class="icon-bin mr-2"></i>
                                    Delete
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

    <!--Modal Create User -->
    <div id="modal_theme_success" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h6 class="modal-title">Create New User<p id="nama-user"></p></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form-create">
                        <div class="modal-body">
                            <div class="alert alert-danger" id="create-error-bag" hidden>
                                <ul id="create-user-errors">
                                </ul>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" id="nama_user" name="nama_user" placeholder="Nama" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Role</label>
                                        <input class="form-control" id="role_id" name="role_id" type="hidden">
                                        <select id="select-user-role-create" class="form-control form-control-select" name="user-role">
                                            <option>-- Pilih Role User --</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->nama_role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div id="password-input" class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>New Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div id="password-input" class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Confirm New Password</label>
                                        <input type="password" name="confirmpassword" placeholder="Re-Enter Password" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button id="btn-create-user" type="submit" class="btn bg-success">Create User</button>
                        </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Create User-->

    <!--Modal Show User -->
    <div id="modal_theme_info" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h6 class="modal-title">Show User<p id="nama-user"></p></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form-show">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" id="nama_user" name="nama_user" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Role</label>
                                        <input type="text" id="role_user" name="role_user" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input id="user-id" name="user-id" type="hidden">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Show User-->

    <!--Modal Edit User -->
    <div id="modal_theme_primary" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title">Edit User<p id="nama-user"></p></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form-edit">
                        <div class="modal-body">
                            <div class="alert alert-danger" id="edit-error-bag" hidden>
                                <ul id="edit-user-errors">
                                </ul>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Nama</label>
                                        <input type="text" id="nama_user" name="nama_user" placeholder="Nama" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" placeholder="Email" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Role</label>
                                        <input class="form-control" id="role_id" name="role_id" type="hidden">
                                        <select id="select-user-role-edit" class="form-control form-control-select" name="user-role">
                                            <option>-- Pilih Role User --</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->nama_role }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <input id="user_id" name="user_id" type="hidden">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                            <button id="btn-edit-user" type="submit" class="btn bg-primary">Save Changes</button>
                        </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Edit User-->

    <!--Modal Delete User -->
    <div id="modal_theme_warning" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h6 class="modal-title"><p id="nama-user"></p></h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form-delete">
                        <div class="modal-body">
                            <h6 class="font-weight-semibold">Peringatan!</h6>
                            <p>Aksi ini tidak akan dikembalikan</p>
                        </div>

                        <div class="modal-footer">
                            <input id="user_id" name="user_id" type="hidden">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button id="btn-delete-user" type="submit" class="btn bg-warning">Delete</button>
                        </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Delete User-->
</div>
