<!-- Theme JS files -->
<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
<script src="{{url('/')}}/template/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
<script src="{{url('/')}}/template/global_assets/js/plugins/forms/selects/select2.min.js"></script>

<script src="{{url('/')}}/template/assets/js/app.js"></script>
<script src="{{url('/')}}/template/global_assets/js/demo_pages/datatables_responsive.js"></script>
<!-- /theme JS files -->
<div id="div-content">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - User
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item">
                        <i class="icon-home2 mr-2"></i>
                        Home
                    </a>
                    <span class="breadcrumb-item active">Pendaftaran</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none">
                    <i class="icon-more"></i>
                </a>
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
                        <div class="col-lg-8">
                            <button type="button" class="btn bg-success btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_theme_success"><b><i class="icon-reading"></i></b> Tambah User Baru</button>
                        </div>
                    </div>

                    <table id="tabel_user" class="table table-togglable table-hover footable-loaded footable default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th data-hide="phone" class="footable-visible">Nama</th>
                                <th data-toggle="true" class="footable-visible footable-first-column">Email</th>
                                <th data-toggle="true" class="footable-visible footable-first-column">Role</th>
                                <th data-toggle="true" class="footable-visible footable-first-column">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($users as $data) 
                            <tr>
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>{{$no++}}</td>
                                <td class="footable-visible">{{$data->nama_user}}</td>
                                <td class="footable-visible">{{$data->email}}</td>
                                <td class="footable-visible">{{$data->role->nama_role}}</td>
                                <td>
                                  <button onclick="showUser({{$data->id}})" class="show-modal btn btn-info" title="Show">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                    Show
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
</div>

 <script>
    $(document).ready(function() {
        $('#tabel_user').DataTable();
    });
 </script>