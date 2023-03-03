<!-- Button trigger modal -->
<<!-- Modal -->
<div class="modal fade" id="employeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employee Detail</h5>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 id="name"></h2>
        <div class="text-secondary">id: <span id="id"></span></div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="mt-2">
                  <div class="text-secondary">Designation</div>
                  <h4 id="designation"></h4>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mt-2">
                  <div class="text-secondary">Contact No</div>
                  <h4 id="contact_no"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="mt-2">
                  <div class="text-secondary">Created At</div>
                  <h4 id="created_at"></h4>
                </div>
              </div>
              <div class="col-md-6">
                <div class="mt-2">
                  <div class="text-secondary">Updated At</div>
                  <h4 id="updated_at"></h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mt-2 text-secondary">Address</div>
          <div class="col-md-12">
            <h4 id="address" class="mb-2"></h4>
          </div>
        </div>

      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>