<script>
    $(document).ready(function(){
        $('#simpan_pendaftaran').click(function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();

            var daftar = $('#form_pendaftaran').serialize();

            $.ajax({
                type: 'POST',
                url : '/pendaftaran',
                data: daftar,
                success : function(response){
                    $('#form_pendaftaran').trigger('reset');
                    $('#modal_theme_success').modal('hide');
                    $('#modal_theme_primary').attr('hidden', false);
                    $('#modal-body').show();
                    $('#modal-body').html(response.success);
                }
            })
        })

    })
    
</script>

<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i><span class="font-weight-semibold">Home</span> - Pendaftaran</h4>
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
                        <div class="col-lg-8">
                            <button type="button" class="btn bg-success btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_theme_success"><b><i class="icon-reading"></i></b> Tambah Pasien Baru</button>
                            <button type="button" class="btn bg-primary btn-labeled btn-labeled-left" data-toggle="modal" data-target="#modal_theme_primary"><b><i class="icon-reading"></i></b> Tambah Pendaftaran Baru</button>
                        </div>
                        <br>
                        <div id="res_div" class="alert bg-success text-white alert-dismissible" hidden>
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                            <span id="res_message" class="font-weight-semibold"></span>
                            <button id="close" aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                ×
                            </button>
                        </div>
                        <div id="modal_theme_primary" class="modal fade" tabindex="-1">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header bg-primary">
										<h6 class="modal-title">Pemberitahuan</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<div class="modal-body">
										<h6 class="font-weight-semibold"></h6>
									</div>

								</div>
							</div>
						</div>
                       
                    </div>

                    <table id="tabel_pendaftaran" class="table table-togglable table-hover footable-loaded footable default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th data-hide="phone" class="footable-visible">Tanggal Kunjungan</th>
                                <th data-toggle="true" class="footable-visible footable-first-column">Nama Pasien</th>
                                <th data-hide="phone,tablet" class="footable-visible">Alamat</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Poli</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Asuransi</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Jenis Kelamin</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Petugas</th>
                                <th data-hide="phone,tablet" data-name="Date Of Birth" class="footable-visible">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach ($daftar as $data) 
                            <tr>
                                <td class="footable-visible footable-first-column"><span class="footable-toggle"></span>{{$no++}}</td>
                                <td class="footable-visible"><a href="#">{{$data->created_at}}</a></td>
                                <td class="footable-visible">{{$data->nama_pasien}}</td>
                                <td class="footable-visible">{{$data->alamat}}</td>
                                <td class="footable-visible"><span class="badge badge-success"></span>{{$data->nama_poli}}</td>
                                <td >{{$data->jenis_pembayaran}}</td>
                                <td>{{$data->jenis_kelamin}}</td>
                                <td>{{$data->nama_pasien}}</td>
                                <td class="text-center footable-visible footable-last-column">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
    
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i>Update</a>
                                                    <form method="POST" action="{{route('pendaftaran.destroy', $data->id_daftar )}}" class="dropdown-item">                            
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <button><i class="icon-file-excel"></i>Delete</button>
                                                    </form> 
                                                </div>
                                            </div>
                                        </div>
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
    <!--Modal Form Pendaftaran -->
    <div id="modal_theme_success" class="modal fade" tabindex="-2">
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h6 class="modal-title">Form Pendaftaran</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form id="form_pendaftaran">
                        <div class="row">
                            <div class="col-md-4">
                                <fieldset>
                                    <legend class="text-uppercase font-size-sm font-weight-bold"><i class="icon-reading mr-2"></i> IDENTITAS PASIEN</legend>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Pasien :</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" id="nama_pasien" name="nama_pasien">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Jenis Kelamin:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control form-control-select" id="jenis_kelamin" name="jenis_kelamin">
                                                <option>Pilih Jenis Kelamin </option>
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-4">Alamat Pasien:</label>
                                        <div class="col-lg-8">
                                            <textarea rows="3" cols="3" class="form-control" id="alamat" name="alamat"></textarea>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Propinsi:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Provinsi" id="provinsi" name="provinsi">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kabupaten:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Kabupaten" id="kabupaten" name="kabupaten">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Kecamatan:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Kecamatan" id="kecamatan" name="kecamatan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Desa:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Desa" id="desa" name="desa">
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
                                            <select class="form-control form-control-select" id="golongan_darah" name="golongan_darah">
                                                <option>Pilih Goldar</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                                <option value="AB">AB</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Status:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control form-control-select" id="status" name="status">
                                                <option>Status</option>
                                                <option value="Menikah">Menikah</option>
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Janda">Janda</option>
                                                <option value="Duda">Duda</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Tempat Lahir:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">Umur (Th)</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" placeholder="Umur" id="umur" name="umur">
                                        </div>
                                        <label class="col-form-label col-md-3">Tgl Lahir</label>
                                        <div class="col-md-4">
                                            <input class="form-control" type="datetime" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Pekerjaan:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Pekerjaan" id="pekerjaan" name="pekerjaan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Pendidikan:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Pendidikan" id="pendidikan" name="pendidikan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Pekerjaan:</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Pendidikan" id="pekerjaan" name="pekerjaan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Agama:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control form-control-select" id="agam" name="agama">
                                                <option>Pilih Agama</option>
                                                <option value="islam">Islam</option>
                                                <option value="kristen">Kristen</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="budha">Budha</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="konghucu">Konghucu</option>
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
                                            <select class="form-control form-control-select" id="id_role_pembayaran" name="id_role_pembayaran">
                                                <option>Pilih Asuransi</option>
                                                <option value="1">BPJS</option>
                                                <option value="2">Non BPJS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Poli:</label>
                                        <div class="col-lg-8">
                                            <select class="form-control form-control-select" id="id_poli" name="id_poli">
                                                <option>Pilih Poli</option>
                                                <option value="1">Poli Anak</option>
                                                <option value="2">Poli Bedah</option>
                                                <option value="3">Poli Gigi</option>
                                                <option value="4">Poli THT</option>
                                                <option value="5">Poli Penyakit Dalam</option>
                                            </select>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="text-right">
                            <button type="submit" id="simpan_pendaftaran" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>  
            </div>
            <!-- /2 columns form -->
        </div>
    </div>
    <!--End Modal Pendaftaran-->

    <!--Modal Form Pendaftaran Baru -->
    <div id="modal_theme_primary" class="modal fade" tabindex="-2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title">Form Pendaftaran Baru</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <legend class="text-uppercase font-size-sm font-weight-bold"><i class="icon-reading mr-2"></i> IDENTITAS PASIEN</legend>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label">Nama Pasien :</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Nama Pasien" id="nama_pasien" name="nama_pasien">
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
                            <button type="submit" id="simpan_pendaftaran" class="btn btn-primary">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Modal Pendaftaran-->
</div>

<script>
    $(document).ready(function() {
        $('#tabel_pendaftaran').DataTable();
    });
</script>


