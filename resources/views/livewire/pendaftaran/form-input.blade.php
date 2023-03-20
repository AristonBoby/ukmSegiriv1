<div class="row">
    <div class="col-lg-3 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Input <b>Data</b> </h3>
            </div>
            <div class="box-body">
                <form wire:submit.prevent="store" class="form-horizontal">
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Nama</label>
                        <div class="col-lg-7">
                            <input type="text" class=" form-control" placeholder="Nama Pasien">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Tempat Lahir</label>
                        <div class="col-lg-7">
                            <input type="text" class=" form-control" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Tanggal Lahir</label>
                        <div class="col-lg-7">
                            <input type="date" class="form-control" placeholder="Nama Pasien">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Jenis Kelamin</label>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option value="">--Pilih Salah Satu--</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Kepala Keluarga</label>
                        <div class="col-lg-7">
                            <input type="text" class=" form-control" placeholder="Kepala Keluarga">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">No. Kartu Keluarga</label>
                        <div class="col-lg-7">
                            <input type="text" class=" form-control" placeholder="Nomor Kartu Keluarga">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">NIK</label>
                        <div class="col-lg-7">
                            <input type="text" class=" form-control" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Provinsi</label>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option value="">--Pilih Provinsi--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Kota</label>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option value="">--Pilih Kota--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Kecamatan</label>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option value="">--Pilih Kecamatan--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="margin-bottom:8px;">
                        <label class="col-sm-4 control-label">Kelurahan</label>
                        <div class="col-lg-7">
                            <select class="form-control">
                                <option value="">--Pilih Kelurahan--</option>
                            </select>
                        </div>
                    </div>
                    <div style="margin-top:40px;">
                        <div>
                            <button class='pull-right btn btn-primary btn-sm'><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
