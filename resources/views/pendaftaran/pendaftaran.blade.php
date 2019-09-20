<div id="div-content">
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
            <div class="col-xl-12">
                <!--Tabel -->
                <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Tabel Pendaftaran</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                    <a class="list-icons-item" data-action="reload"></a>
                                    <a class="list-icons-item" data-action="remove"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="col-lg-4">
                                <button type="button" class="btn bg-primary btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_theme_success"><b><i class="icon-reading"></i></b> Tambah Pasien</button>
                            </div>
                        </div>

                        <table class="table table-togglable table-hover footable-loaded footable default">
                            <thead>
                                <tr>
                                    <th data-hide="phone" class="footable-visible">Tanggal Kunjungan</th>
                                    <th data-toggle="true" class="footable-visible footable-first-column">Nama Pasien</th>
                                    <th data-hide="phone,tablet" class="footable-visible">Alamat</th>
                                    <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Desa</th>
                                    <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Kecamatan</th>
                                    <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Jenis Kelamin</th>
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
                            </tbody>
                        </table>
                    </div>
                <!--/Tabel-->


            </div>

            
        </div>
        <!-- /dashboard content -->

        <!--Modal Form Pendaftaran -->
        <div id="modal_theme_success" class="modal fade" tabindex="-2">
					<div class="modal-dialog modal-full">
						<div class="modal-content">
							<div class="modal-header bg-success">
								<h6 class="modal-title">Form Pendaftaran</h6>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
                            <div class="row">
					           <!-- 2 columns form -->
				<div class="card">
					<div class="card-header header-elements-inline">
					
						
	                	
					</div>

					<div class="card-body">
						<form action="#">
							<div class="row">
								<div class="col-md-4">
									<fieldset>
										<legend class="text-uppercase font-size-sm font-weight-bold"><i class="icon-reading mr-2"></i> IDENTITAS PASIEN</legend>

										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Nama Pasien :</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>

                                        <div class="form-group row">
                                                        <label class="col-lg-4 col-form-label">Jenis Kelamin:</label>
                                                        <div class="col-lg-8">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <div class="uniform-choice"><span class="checked"><input type="radio" class="form-input-styled" name="gender" checked="" data-fouc=""></span></div>
                                                                    Laki - laki
                                                                </label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <div class="uniform-choice"><span><input type="radio" class="form-input-styled" name="gender" data-fouc=""></span></div>
                                                                    Perempuan
                                                                </label>
                                                            </div>
                                                        </div>
                                         </div>

                                         <div class="form-group row">
									            <label class="col-form-label col-lg-4">Alamat Pasien:</label>
									                <div class="col-lg-8">
										                    <textarea rows="3" cols="3" class="form-control"></textarea>
									                </div>
								         </div>
                                         <div class="form-group row">
											<label class="col-lg-4 col-form-label">Propinsi:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-lg-4 col-form-label">Kabupaten:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
                                    
                                        <div class="form-group row">
											<label class="col-lg-4 col-form-label">Kecamatan:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-lg-4 col-form-label">Desa:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
										</div>
									</fieldset>
								</div>

                            
								<div class="col-md-4">
									<fieldset>
                                    <legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> IDENTITAS PASIEN</legend>
                                    <div class="form-group row">
										<label class="col-lg-4 col-form-label">Golongan Darah:</label>
										<div class="col-lg-8">
											<select class="form-control form-control-select">
													<option value="AK">A</option>
													<option value="HI">B</option>
                                                    <option value="HI">O</option>
                                                    <option value="HI">AB</option>
											</select>
										</div>
									</div>

                                    <div class="form-group row">
										<label class="col-lg-4 col-form-label">Status:</label>
										<div class="col-lg-8">
											<select class="form-control form-control-select">
													<option value="AK">Menikah</option>
													<option value="HI">Belum Menikah</option>
                                                    <option value="HI">Janda</option>
                                                    <option value="HI">Duda</option>
											</select>
										</div>
									</div>

                                    <div class="form-group row">
											<label class="col-lg-4 col-form-label">Tempat Lahir:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
									</div>

                                    <div class="form-group row">
									    <label class="col-form-label col-lg-2">Umur (Th)</label>
									        <div class="col-lg-10">
										        <div class="row">
											        <div class="col-3">
												        <input type="text" class="form-control">
											        </div>

                                    <div class="form-group row"> 
                                            <div class="form-group row">
                                                <label class="col-form-label col-md-5">Tgl Lahir</label>
                                                <div class="col-md-6">
                                                    <input class="form-control" type="datetime-local" name="datetime-local">  
                                                </div>
                                            </div>
											</div>
										</div>
									</div>
								</div>

                                <div class="form-group row">
											<label class="col-lg-4 col-form-label">Pekerjaan:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
									</div>
                                
                                    <div class="form-group row">
											<label class="col-lg-4 col-form-label">Pendidikan:</label>
											<div class="col-lg-8">
												<input type="text" class="form-control">
											</div>
									</div>
                                    
                                    <div class="form-group row">
										<label class="col-lg-4 col-form-label">Agama:</label>
										<div class="col-lg-8">
											<select class="form-control form-control-select">
													<option>A</option>
													<option>B</option>
                                                    <option>O</option>
                                                    <option>AB</option>
											</select>
										</div>
									</div>

                               
					                	
									</fieldset>
								</div>

                                <div class="col-md-4">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-truck mr-2"></i>PEMERIKSAAN</legend>

										<div class="form-group row">
											<label class="col-lg-4 col-form-label">Nama Petugas:</label>
											<div class="col-lg-8">
														<input type="text" class="form-control">
											</div>
										</div>
                                   
                                        <div class="form-group row">
										    <label class="col-lg-4 col-form-label">Asuransi:</label>
										        <div class="col-lg-8">
											        <select class="form-control form-control-select">
                                                        <option>BPJS</option>
                                                        <option>Non BPJS</option>
											        </select>
										        </div>
									    </div>

                                        <div class="form-group row">
										    <label class="col-lg-4 col-form-label">Nama Poli:</label>
										        <div class="col-lg-8">
											        <select class="form-control form-control-select">
                                                        <option>Poli Anak</option>
                                                        <option>Poli Bedah</option>
                                                        <option>Poli Gigi</option>
                                                        <option>Poli THT</option>
                                                        <option>Poli Penyakit Dalam</option>
											        </select>
										        </div>
									    </div>

									


										
									</fieldset>
								</div>
							</div>

							<div class="text-right">
                                <button type="button" class="btn btn-primary">Simpan Data</button>
							</div>
						</form>
					</div>
				</div>
				<!-- /2 columns form -->

        <!--End Modal Pendaftaran-->

    </div>
</div>
