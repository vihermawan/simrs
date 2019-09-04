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
                            <th data-toggle="true" class="footable-visible footable-first-column">First Name</th>
                            <th data-hide="phone" class="footable-visible">Last Name</th>
                            <th data-hide="phone,tablet" class="footable-visible">Job Title</th>
                            <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">DOB</th>
                            <th data-hide="phone" data-ignore="true" class="footable-visible">Status</th>
                            <th class="text-center footable-visible footable-last-column" style="width: 30px;"><i class="icon-menu-open2"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Marth</td>
                            <td class="footable-visible"><a href="#">Enright</a></td>
                            <td class="footable-visible">Traffic Court Referee</td>
                            <td class="footable-visible">22 Jun 1972</td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Jackelyn</td>
                            <td class="footable-visible">Weible</td>
                            <td class="footable-visible"><a href="#">Airline Transport Pilot</a></td>
                            <td class="footable-visible">3 Oct 1981</td>
                            <td class="footable-visible"><span class="badge badge-secondary">Inactive</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Aura</td>
                            <td class="footable-visible">Hard</td>
                            <td class="footable-visible">Business Services Sales Representative</td>
                            <td class="footable-visible">19 Apr 1969</td>
                            <td class="footable-visible"><span class="badge badge-danger">Suspended</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Nathalie</td>
                            <td class="footable-visible"><a href="#">Pretty</a></td>
                            <td class="footable-visible">Drywall Stripper</td>
                            <td class="footable-visible">13 Dec 1977</td>
                            <td class="footable-visible"><span class="badge badge-info">Pending</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Sharan</td>
                            <td class="footable-visible">Leland</td>
                            <td class="footable-visible">Aviation Tactical Readiness Officer</td>
                            <td class="footable-visible">30 Dec 1991</td>
                            <td class="footable-visible"><span class="badge badge-secondary">Inactive</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Maxine</td>
                            <td class="footable-visible"><a href="#">Woldt</a></td>
                            <td class="footable-visible"><a href="#">Business Services Sales Representative</a></td>
                            <td class="footable-visible">17 Oct 1987</td>
                            <td class="footable-visible"><span class="badge badge-info">Pending</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Sylvia</td>
                            <td class="footable-visible"><a href="#">Mcgaughy</a></td>
                            <td class="footable-visible">Hemodialysis Technician</td>
                            <td class="footable-visible">11 Nov 1983</td>
                            <td class="footable-visible"><span class="badge badge-danger">Suspended</span></td>
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
                        <tr>
                            <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Lizzee</td>
                            <td class="footable-visible"><a href="#">Goodlow</a></td>
                            <td class="footable-visible">Technical Services Librarian</td>
                            <td class="footable-visible">1 Nov 1961</td>
                            <td class="footable-visible"><span class="badge badge-danger">Suspended</span></td>
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