@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 text-center">
            <img class="d-block" src="{{asset('/images/outdoor.jpg')}}" alt="Img" style="height: 755px; width: auto;">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Booking</div>
                <div class="panel-body">
                    <form class="form-horizontal" action="/buy/confirmpayment/content/{{$places->id}}" method="POST" enctype="multipart/form-data" style="margin: 20px;">
                    {{ csrf_field() }}
                    @include('partials.formerrors')
                        <div class="form-header">
                            <h2>{{ $places->nama }}</h2>
                        </div>
                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label"></h4>
                                <input type="radio" id="harga" name="ket_harga" id="ket_harga" value="{{ $places->harga }}" checked>
                                <label for="harga">Normal Rp {{ $places->harga }}</label>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label"></h4>
                                <input type="radio" id="harga_paket" name="ket_harga" id="ket_harga" value="{{ $places->harga_paket }}">
                                <label for="harga_paket">Paket Rp {{ $places->harga_paket }}</label>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Pilih Tanggal</h4>
                                <input name="tanggal" class="form-control" type="date" required>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Pilih Jam</h4>
                                <select name="jam" class="form-control">
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Jumlah Anak</h4>
                                <input name="jml_anak" class="form-control" type="number" min="1" required>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label"></h4>
                                <input type="radio" id="kondisi1" name="ket_kondisi" value="60000" checked>
                                <label for="kondisi1">Nanny Rp 60000</label><br>
                                <input type="radio" id="kondisi2" name="ket_kondisi" value="0">
                                <label for="kondisi2">Without Nanny Rp 0</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="width: 100%;  border-top: 1px solid #ccc"></div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Voucher Behave Care</h4>
                                <input name="voucher" class="form-control" type="text" value="">
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Metode Pembayaran</h4>
                                <select name="metode_bayar" class="form-control">
                                    @foreach($metodes as $metode)
                                        <option value="{{$metode->metode_bayar}}">{{$metode->metode_bayar}}</option>
                                    @endforeach
                                </select>
                                <span class="select-arrow"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit"class="btn btn-primary" style="width: 100%;">
                                    Create Booking
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection