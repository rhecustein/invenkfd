  <div class="mb-3 modal fade" id="ModalCreateRole" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ __('Create New Role')}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('role.store') }}" method="POST">
            <div class="modal-body">


                @csrf
                <div class="mb-3">
                    <label for="">Roles</label>
                    <input type="text" class="form-control" name="role" id="formGroupExampleInput">
                </div>
            
                {{-- <div class="mb-3">
                    <button class="btn btn-primary btn-block">Simpan Role</button>
                </div> --}}

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-primary">Simpan Role</button>
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

  {{-- <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Create New Role') }}</h4>
                </div>
            </div>
        </div>
        <label for="">Roles</label>
        <input type="text" class="form-control" name="role" id="formGroupExampleInput">
    </div>

    <div class="mb-3">
        <button class="btn btn-primary btn-block">Simpan Role</button>
    </div>
</form>  --}}

{{-- <form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalCreate" tabindex="-1">

    </div>
</form> --}}
