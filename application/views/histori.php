
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-list-alt" aria-hidden="true"></i> Histori Perubahan Master Gaji Tiap Pegawai
        <!-- <div style="float:right;">
        <a data-target="" id="" href="#" data-toggle="modal" style="color:#DAA520; text-decoration:none;" ><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
        </div> -->
    </div>
    <div class="panel-body">
        <table id="list_histori" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-2">Tanggal</th>
                    <th class="col-md-4">Nama Pegawai</th>
                    <th class="col-md-3">Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>


<!-- Modal Detail-->
<div class="modal fade" id="detail_historimodal" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Histori Perubahan Master Gaji</h4>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    
                    <br>
                   
                    <table class="table table-striped table-bordered table-hover">
                        
                        <tr>
                            <th class="col-md-4">Tanggal Perubahan</th>
                            <td class="col-md-4" colspan="2"><input type="text" name="tanggal" id="tanggal" class="form-control" readonly=""></td>
                            
                        </tr>

                        <tr>
                            <th class="col-md-4">Nama Pegawai</th>
                            <td class="col-md-4" colspan="2"><input type="text" name="nama_pegawai" id="nama_pegawai" class="form-control" readonly></td>
                            
                        </tr>

                        <tr>
                            <th class="col-md-4">Gaji Pokok</th>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="gaji_pokokbaca" id="gaji_pokokbaca" class="form-control" readonly> 
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Gaji Sebelum Perubahan
                                </small>
                            </td>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="gaji_pokok" id="gaji_pokok" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Gaji Setelah Perubahan
                                </small>
                            </td>
                        </tr>
                        
                         <tr>
                            <th class="col-md-4">Insentif Kehormatan</th>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="inskehormatanbaca" id="inskehormatanbaca" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Insentif Kehormatan Sebelum Perubahan
                                </small>
                            </td>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="inskehormatan" id="inskehormatan" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Insentif Kehormatan Sesudah Perubahan
                                </small>
                            </td>
                        </tr>

                         <tr>
                            <th class="col-md-4">Tunjangan Fungsional</th>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="tunjfungsionalbaca" id="tunjfungsionalbaca" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Tunjangan Fungsional Sebelum Perubahan
                                </small>
                            </td>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="tunjfungsional" id="tunjfungsional" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Tunjangan Fungsional Sesudah Perubahan
                                </small>
                            </td>
                        </tr>

                         <tr>
                            <th class="col-md-4">Tunjangan Kelas Jabatan</th>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="tunjkelasjabatanbaca" id="tunjkelasjabatanbaca" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Tunjangan Kelas Jabatan Sebelum Perubahan
                                </small>
                            </td>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="tunjkelasjabatan" id="tunjkelasjabatan" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Tunjangan Kelas Jabatan Sesudah Perubahan
                                </small>
                            </td>
                        </tr>

                         <tr>
                            <th class="col-md-4">Iuran BPJS</th>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="iuranbpjsbaca" id="iuranbpjsbaca" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Iuran BPJS Sebelum Perubahan
                                </small>
                            </td>
                            <td class="col-md-4">
                                <input type="number" data-bind="value:replyNumber" min="0" step="1" name="iuranbpjs" id="iuranbpjs" class="form-control" readonly>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Iuran BPJS Sesudah Perubahan
                                </small>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>