@extends('layouts.home')
@section('wrapper')
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Pendaftaran
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
                    <span class="breadcrumb-item active">Pendaftaran</span>
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
            <div class="col-xl-8">
                <!--Tabel -->
                <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Change column name</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>
    
                        <div class="card-body">
                            Example of a responsive table with replaced <code>column name</code>. To use, add <code>data-name="..."</code> to the table header column. This will overwrite the name of the column in the detail row. In this example <code>DOB</code> column name is overwritten to <code>Date Of Birth</code> in tablet and smartphone modes.
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

            <div class="col-xl-4">
                <!-- Form -->
                <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Basic layout</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Eugene Kopyov">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Your state:</label>
                                    <div class="col-lg-9">
                                        <select class="form-control form-control-select2 select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                            </optgroup>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-0ztl-container"><span class="select2-selection__rendered" id="select2-0ztl-container" title="Alaska">Alaska</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Gender:</label>
                                    <div class="col-lg-9">
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span class="checked"><input type="radio" class="form-input-styled" name="gender" checked="" data-fouc=""></span></div>
                                                Male
                                            </label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label">
                                                <div class="uniform-choice"><span><input type="radio" class="form-input-styled" name="gender" data-fouc=""></span></div>
                                                Female
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Your avatar:</label>
                                    <div class="col-lg-9">
                                        <div class="uniform-uploader"><input type="file" class="form-input-styled" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-pink-400" style="user-select: none;">Choose File</span></div>
                                        <span class="form-text text-muted">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Tags:</label>
                                    <div class="col-lg-9">
                                        <select multiple="" data-placeholder="Enter tags" class="form-control form-control-select2-icons select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                            <optgroup label="Services">
                                                <option value="wordpress2" data-icon="wordpress2">Wordpress</option>
                                                <option value="tumblr2" data-icon="tumblr2">Tumblr</option>
                                                <option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
                                                <option value="pinterest2" data-icon="pinterest2">Pinterest</option>
                                                <option value="lastfm2" data-icon="lastfm2">Lastfm</option>
                                            </optgroup>
                                            <optgroup label="File types">
                                                <option value="pdf" data-icon="file-pdf">PDF</option>
                                                <option value="word" data-icon="file-word">Word</option>
                                                <option value="excel" data-icon="file-excel">Excel</option>
                                                <option value="openoffice" data-icon="file-openoffice">Open office</option>
                                            </optgroup>
                                            <optgroup label="Browsers">
                                                <option value="chrome" data-icon="chrome" selected="">Chrome</option>
                                                <option value="firefox" data-icon="firefox" selected="">Firefox</option>
                                                <option value="safari" data-icon="safari">Safari</option>
                                                <option value="opera" data-icon="opera">Opera</option>
                                                <option value="IE" data-icon="IE">IE</option>
                                            </optgroup>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="Chrome"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="icon-chrome"></i>Chrome</li><li class="select2-selection__choice" title="Firefox"><span class="select2-selection__choice__remove" role="presentation">×</span><i class="icon-firefox"></i>Firefox</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">Your message:</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- /Form -->
            </div>
        </div>
        <!-- /dashboard content -->

    </div>
    <!-- /content area -->
    @endsection
