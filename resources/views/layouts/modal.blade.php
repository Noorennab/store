<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="post" action="{{$action}}">
                @csrf
                @if(isset($method))
                    @method($method)
                @endif
                <div class="modal-header">
                    <h5 class="modal-title">{{$title = "Are you sure?"}}</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>