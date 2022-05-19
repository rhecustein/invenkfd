{{-- <form action="{{ url('store-data') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="layout">
        <div class="horizontal-layout">
            <div class="container">
                <div class="main">
                    <div class="card">
                        <div class="card-body">
                            <h2>Inventory <span class="badge bg-primary">Create</span></h2>
                            <hr>
                            <div class="mb-3">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Kategori</label>
                                <select class="form-control" name="id_kategori">
                                    <option holder>Pilih Kategori</option>
                                    @foreach ($kategori as $result)
                                    <option value="{{ $result->id }}"> {{ $result->name }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="">Jumlah</label>
                                <input type="text" class="form-control" name="qty_inventaris" id="formGroupExampleInput">
                            </div>

                            <div class="mb-3">
                                <label>Keterangan Barang</label>
                                <textarea class="form-control" name="keterangan_inventaris"></textarea>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary btn-block">Simpan Barang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form> --}}

<div class="mb-3 modal fade" id="ModalCreateInven" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Create New Inventori')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ url('store-data') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">


                @csrf
                <div class="layout">
                    <div class="horizontal-layout">
                        <div class="container">
                            <div class="main">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Inventory <span class="badge bg-primary">Create</span></h2>
                                        <hr>
                                        <div class="mb-3">
                                            <label>Nama Inventori</label>
                                            <input type="text" class="form-control" name="nama_inventaris" id="formGroupExampleInput">
                                        </div>
            
                                        <div class="mb-3">
                                            <label>Kategori</label>
                                            <select class="form-control" name="id_kategori">
                                                <option holder>Pilih Kategori</option>
                                                @foreach ($kategori as $result)
                                                <option value="{{ $result->id }}"> {{ $result->name }} </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label>Lokasi</label>
                                            <select class="form-control" name="id_lokasi">
                                                <option holder>Pilih Lokasi</option>
                                                @foreach ($lokasi as $result)
                                                <option value="{{ $result->id }}"> {{ $result->nama_lokasi }} </option>
                                                @endforeach
                                            </select>
                                        </div>
            
                                        <div class="mb-3">
                                            <label for="">Jumlah</label>
                                            <input type="text" class="form-control" name="qty_inventaris" id="formGroupExampleInput">
                                        </div>
            
                                        <div class="mb-3">
                                            <label>Keterangan Inventori</label>
                                            <textarea class="form-control" name="keterangan_inventaris"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- <div class="mb-3">
                    <button class="btn btn-primary btn-block">Simpan Role</button>
                </div> --}}

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Simpan Inventori</button>
                </div>
            

            </div>

            {{-- <div class="mb-3 modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-primary btn-block">Simpan Role</button>
            </div> --}}

            {{-- <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </form>

      </div>
    </div>
  </div>