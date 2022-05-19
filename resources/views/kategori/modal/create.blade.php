<div class="mb-3 modal fade" id="ModalCreateKategori" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Create New Inventori')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('kategori.store') }}" method="POST">
            <div class="modal-body">


                @csrf
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput">
                </div>
            
                {{-- <div class="mb-3">
                    <button class="btn btn-primary btn-block">Simpan Role</button>
                </div> --}}

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Simpan Kategori</button>
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