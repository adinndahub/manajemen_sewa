<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="staticBackdropLabel"><b>Delete {{ $title }}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row">
            <div class="col-6">
                Name
            </div>
            <div class="col-6">
                : {{ $item->name }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Email
            </div>
            <div class="col-6">
                : {{ $item->email }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Role
            </div>
            <div class="col-6">
                : {{ $item->role }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Active Until
            </div>
            <div class="col-6">
                : {{ $item->active_until }}
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{ route('userDestroy', $item->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

