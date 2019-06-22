@extends('partials.master')
@extends('orders::additional')

@section('content')
<div class="box" response="{{ Session::get('response') }}" message="{{ Session::get('message') }}"></div>
<div class="row"> 
<div class="col s12">
                        <div class="card ui-app__page-content">
                            <div class="card-content">
                                <div class="card-title headline">Data Orderan</div>
                                <div class="card-body">
                                   @if(session()->has('succes'))
                                    <div class="alert alert-success">
                                        {{ session()->get('succes') }}
                                    </div>
                                    @endif
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Order ID</th>
                                                <th>Nama</th>
                                                <th>Product</th>
                                                <th>Durasi</th>
                                                <th>Device ID</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($order as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
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
                                                    <a  href="{{route('order.edit',["id" => $item->order_id])}}" class="btn-floating waves-effect waves-light red"><i class="material-icons">edit</i></a>
                                                    <button class="btn-floating -btn-tiny blue modal-trigger" data-toggle="modal" href="#default-modal{{$item->order_id}}"><i class="material-icons">clear</i></button>
        
                                                </td>
                                            </tr>
                                         @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     @include('orders::modal_delete')           
@endsection


