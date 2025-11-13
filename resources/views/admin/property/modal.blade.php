<!-- Modal Delete -->
<div class="modal fade" id="modalPropertyDestroy{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                Own Name
            </div>
            <div class="col-6">
                : {{ $item->user->name }}
            </div>
        </div>

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
                Type
            </div>
            <div class="col-6">
                : {{ $item->type }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Address
            </div>
            <div class="col-6">
                : {{ $item->address }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Price
            </div>
            <div class="col-6">
                : Rp {{ number_format($item->price, 0, ',', '.') }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Rent Type
            </div>
            <div class="col-6">
                : {{ $item->rent_type }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Status
            </div>
            <div class="col-6">
                : {{ $item->status }}
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{ route('propertyDestroy', $item->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Show -->
<div class="modal fade" id="modalPropertyShow{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-info" id="staticBackdropLabel"><b>Detail {{ $title }}</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
        <div class="row">
            <div class="col-6">
                Own Name
            </div>
            <div class="col-6">
                : {{ $item->user->name }}
            </div>
        </div>

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
                Type
            </div>
            <div class="col-6">
                : {{ $item->type }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Address
            </div>
            <div class="col-6">
                : {{ $item->address }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Price
            </div>
            <div class="col-6">
                : Rp {{ number_format($item->price, 0, ',', '.') }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Rent Type
            </div>
            <div class="col-6">
                : {{ $item->rent_type }}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                Status
            </div>
            <div class="col-6">
                : {{ $item->status }}
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{ route('userDestroy', $item->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-sm btn-info">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>