@foreach ($order as $item)
<div id="default-modal{{$item->order_id}}" class="modal bottom-sheet" data-backdrop="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <form role="form" action="{{route('order.delete', ['id' => $item->order_id])}}" method="POST">
                @csrf @method('DELETE')
                <h4>Anda Yakin Ingin Menghapus Data Orderan Dari <strong>{{$item->nama}}</strong> ?</h4>

            </div>
            <div class="modal-footer">
                <button type="button" class="modal-action modal-close waves-effect waves-red btn-flat" data-dismiss="modal">Cancel</button>
                <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Delete</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endforeach
