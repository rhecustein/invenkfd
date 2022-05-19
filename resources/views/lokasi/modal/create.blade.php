<div class="mb-3 modal fade" id="ModalCreateLokasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Create New Lokasi')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('lokasi.store') }}" method="POST" enctype="multipart/form-data">
            <div class="modal-body">

                @csrf
                <div class="layout">
                    <div class="horizontal-layout">
                        <div class="container">
                            <div class="main">
                                <div class="card">
                                    <div class="card-body">
                                        <h2>Lokasi <span class="badge bg-primary">Create</span></h2>
                                        <hr>
            
                                        <div class="mb-3">
                                            <label>Kode Lokasi</label>
                                            <input type="text" class="form-control" name="kode_lokasi" id="formGroupExampleInput">
                                        </div>
            
                                        <div class="mb-3">
                                            <label>Nama Lokasi</label>
                                            <input type="text" class="form-control" name="nama_lokasi" id="formGroupExampleInput">
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
                    <button class="btn btn-primary">Simpan Lokasi</button>
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