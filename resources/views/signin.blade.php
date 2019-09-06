@extends('layouts.home')
@section('content')
<div class="content-wrapper">
     <!-- Page header -->
     <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Tambah Akun
                </h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="d-flex justify-content-center">
                    <a href="#" class="btn btn-link btn-float text-default"><i
                            class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i>
                        <span>Invoices</span></a>
                    <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i>
                        <span>Schedule</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <span class="breadcrumb-item active">Tambah Akun</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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

<!-- Main charts -->
<div class="row">
</div>
<!-- /main charts -->


<!-- Dashboard content -->
<div class="row">
    <div class="col-xl-12">
        <!--Tabel -->
        <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Daftar Pegawai</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <a class="list-icons-item" data-action="collapse"></a>
                            <a class="list-icons-item" data-action="reload"></a>
                            <a class="list-icons-item" data-action="remove"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                <div class="col-sm-4">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><span>Tambah Pegawai Baru</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><span>Hapus</span></a>						
                    </div>
                </div>

                <table class="table table-togglable table-hover footable-loaded footable default">
                    <thead>
                        <tr>
                            <th data-toggle="true" class="footable-visible footable-first-column">Nama</th>
                            <th data-hide="phone" class="footable-visible">Email</th>
                            <th data-hide="phone,tablet" class="footable-visible">Jabatan</th>
                            <th data-hide="phone" data-ignore="true" class="footable-visible">Status</th>
                            <th class="text-center footable-visible footable-last-column" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Marth</td>
                            <td class="footable-visible"><a href="#">Enright</a></td>
                            <td class="footable-visible">Traffic Court Referee</td>
                            <td class="footable-visible"><span class="badge badge-success">Active</span></td>
                            <td class="text-center footable-visible footable-last-column">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                </table>
            </div>
        <!--/Tabel-->
       
       
    </div>

    
</div>
<!-- /dashboard content -->

</div>
<!-- /content area -->
@endsection