@extends('partials.master')
@section('content')
<div class="col m12 l6">
                        <div class="card ui-app__page-content">
                            <div class="card-content">
                                <div class="card-title title">Edit Data Order</div>

                                <div class="card-body">
                                    <form method="POST" action="{{route('order.update',['id'=> $order->order_id])}}" >
                                        @method('PUT')
                                        @csrf()
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input value="{{$order->nama}}" id="nama" name="nama" type="text" required>
                                                <label for="nama">Nama</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input value="{{$order->product}}" id="product" name="product" type="text" required>
                                                <label for="product">Product</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input value="{{$order->durasi}}" id="durasi" name="durasi" type="text" required>
                                                <label for="durasi">Durasi</label>
                                            </div> 
                                            
                                             <div class="input-field col s12">
                                                <input value="{{$order->device_id}}" id="device_id" name="device_id" type="text" required>
                                                <label for="device_id">Device ID</label>
                                            </div>
                                            
                                            <div class="input-field col s12">   
                                                <input value="{{$order->harga}}" id="harga" name="harga" type="number" required>
                                                <label for="harga">Harga</label>
                                           
                                            </div>
                                            <div class="input-field col s12">
                                            <select name="status" id="status" required>
                                                @if ($order->status == "Aktif")
                                                 <option value="Aktif" selected>Aktif</option>
                                                 <option value="Non Aktif">Non Aktif</option>
                                                 <option value="Clear">Clear</option>
                                                 @elseif ($order->status == "Non Aktif")
                                                 <option value="Aktif">Aktif</option>
                                                 <option value="Non Aktif" selected>Non Aktif</option>
                                                 <option value="Clear">Clear</option>
                                                 @else
                                                 <option value="Aktif">Aktif</option>
                                                 <option value="Non Aktif">Non Aktif</option>
                                                 <option value="Clear" selected>Clear</option>
                                                 @endif
                                            </select>
                                                <label>Status Orderan</label>
                                            </div>
 
                                            <div class="input-field col s12">
                                                <button class="btn waves-effect waves-light right" type="submit">Submit
                                                    <i class="material-icons right">send</i>
                                                </button>
                                            </div>

                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End FORM WITH PLACEHOLDER -->
@endsection
@include('additional')