@extends('partials.master')
@section('content')
<div class="col m12 l6">
                        <div class="card ui-app__page-content">
                            <div class="card-content">
                                <div class="card-title title">Tambah Data Order</div>

                                <div class="card-body">
                                    <form method="POST" action="{{route('order.store')}}" >
                                        @method('POST')
                                        @csrf()
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Masukan Nama" id="nama" name="nama" type="text" required>
                                                <label for="nama">Nama</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input placeholder="Masukan Product" id="product" name="product" type="text" required>
                                                <label for="product">Product</label>
                                            </div>

                                            <div class="input-field col s12">
                                                <input placeholder="Masukan Durasi" id="durasi" name="durasi" type="text" required>
                                                <label for="durasi">Durasi</label>
                                            </div> 
                                            
                                             <div class="input-field col s12">
                                                <input placeholder="Masukan Device ID" id="device_id" name="device_id" type="text" required>
                                                <label for="device_id">Device ID</label>
                                            </div>
                                            
                                            <div class="input-field col s12">   
                                                <input placeholder="Masukan Harga" id="harga" name="harga" type="number" required>
                                                <label for="harga">Harga</label>
                                           
                                            </div>
                                            <div class="input-field col s12">
                                            <select name="status" id="status" required>
                                                <option value="" disabled selected>Masukan Status</option>
                                                 <option value="Aktif">Aktif</option>
                                                 <option value="Non Aktif">Non Aktif</option>
                                                 <option value="Clear">Clear</option>
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