@foreach ($data as $item)
<tr>
    <td>{{$no++}}</td>
    <td>{{$item->order_id}}</td>
    <td>{{$item->nama}}</td>
    <td>{{$item->product}}</td>
    <td>{{$item->durasi}}</td>
    <td>{{$item->device_id}}</td>
    <td>{{$item->harga}}</td>
    @if ($item->status == "Aktif")
    <td><label class="waves-effect waves-light btn btn-rounded">{{$item->status}}</label></td>
    @elseif ($item->status == "Clear")
    <td><label class="waves-effect waves-light btn btn-rounded green">{{$item->status}}</label></td>
    @else
    <td><label class="waves-effect waves-light btn btn-rounded red">{{$item->status}}</label></td>
    @endif
    <td>
        <a class="btn-floating waves-effect waves-light red"><i class="material-icons">edit</i></a>
        <button class="btn-floating -btn-tiny blue modal-trigger" data-toggle="modal" href="#default-modal{{$item->order_id}}"><i class="material-icons">clear</i></button>
                                                    
    </td>
</tr>
@endforeach