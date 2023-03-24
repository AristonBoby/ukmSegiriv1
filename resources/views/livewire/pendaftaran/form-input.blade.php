<div class="col-lg-4 col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-edit"></i> Input <b>Data</b> </h3>
        </div>
        <div class="box-body">
            <form wire:submit.prevent="store" class="form-horizontal">
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Nama</label>
                    <div class="col-lg-7 @error('nama')has-error @enderror">
                        <input wire:model.defer="nama" type="text" maxlength="60" class=" form-control input-md" id="inputError" placeholder="Nama Pasien">
                        @error('nama')<p class="help-block mb-4">{{ $message }}</p> @enderror
                    </div>
                </div>
            <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Tempat Lahir</label>
                    <div class="col-lg-7 @error('tmpLahir') has-error @enderror">
                        <input wire:model.defer="tmpLahir" type="text" class=" form-control input-md" placeholder="Tempat Lahir">
                        @error('tmpLahir')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Tanggal Lahir</label>
                    <div class="col-lg-7 @error('tglLahir') has-error @enderror">
                        <input wire.model.defer="tglLahir" type="text" class="tgl form-control input-md" placeholder="dd-mm-yyyy">
                        @error('tglLahir')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Jenis Kelamin</label>
                    <div class="col-lg-7 @error('jenkel')has-error @enderror">
                        <select class="form-control input-md" wire:model.defer="jenkel">
                            <option value="">--Pilih Salah Satu--</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        @error('jenkel')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Kepala Keluarga</label>
                    <div class="col-lg-7 @error('kepalaKeluarga') has-error @enderror">
                        <input wire:model.defer="kepalaKeluarga" type="text" class="input-md form-control" placeholder="Kepala Keluarga">
                        @error('kepalaKeluarga')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">No. Kartu Keluarga</label>
                    <div class="col-lg-7 @error('noKk')has-error @enderror">
                        <input wire:model.defer="noKk" type="text" class="input-md form-control" placeholder="Nomor Kartu Keluarga">
                        @error('noKk')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group " style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">NIK</label>
                    <div class="col-lg-7 @error('nik') has-error @enderror">
                        <input type="text" class="input-md form-control" placeholder="NIK">
                        @error('nik')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Provinsi</label>
                    <div class="col-lg-7">
                        <select class="input-md form-control">
                            <option value="">--Pilih Provinsi--</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Kota</label>
                    <div class="col-lg-7">
                        <select class="input-md form-control">
                            <option value="">--Pilih Kota--</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Kecamatan</label>
                    <div class="col-lg-7">
                        <select class="input-md form-control">
                            <option value="">--Pilih Kecamatan--</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Kelurahan</label>
                    <div class="col-lg-7">
                        <select class="input-md form-control">
                            <option value="">--Pilih Kelurahan--</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:4px;">
                    <label class="col-sm-4 control-label">Alamat</label>
                    <div class="col-lg-7 @error('alamat') has-error @enderror">
                        <textarea class="input-md form-control" placeholder="Alamat"></textarea>
                        @error('alamat')<p class="help-block">{{ $message }}</p> @enderror
                    </div>
                </div>
                <div style="margin-top:40px;">
                    <div>
                        <button class='pull-right btn btn-primary btn-flat btn-sm'><i class="fa fa-save"></i> Simpan</button>
                        <a href="" class='pull-right btn btn-danger btn-flat btn-sm' style="margin-right:4px;"><i class="fa fa-times"></i> Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
