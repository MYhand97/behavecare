@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 text-center">
            <img class="d-block" src="{{asset('/images/outdoor.jpg')}}" alt="Img" style="height: 755px; width: auto;">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Confirm Payment</div>

                <div class="panel-body">
                    <form action="/buy/confirmpayment/content/{{$places->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="form-header">
                            <h2>{{ $places->nama }}</h2>
                        </div>
                        <div class="col-md-8" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Harga</h4>
                                <input name="ket_harga" class="form-control" type="text" value="{{ $datas['ket_harga'] }}" disabled>
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Pilih Tanggal</h4>
                                <input name="tanggal" class="form-control" type="date" value="{{$datas['tanggal']}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Jam</h4>
                                <input name="jam" class="form-control" type="text" value="{{$datas['jam']}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Jumlah Anak</h4>
                                <input name="jml_anak" class="form-control" type="number" value="{{$datas['jml_anak']}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Nanny</h4>
                                <input name="ket_kondisi" class="form-control" type="text" value="{{$datas['ket_kondisi']}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Voucher</h4>
                                <input name="voucher" class="form-control" type="text" value="{{$datas['voucher']}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-5" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Metode Bayar</h4>
                                <input name="metode_bayar" class="form-control" type="text" value="{{$datas['metode_bayar']}} - {{$metode->rekening}} - {{$metode->atas_nama}}" disabled>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div style="width: 100%;  border-top: 1px solid #ccc"></div>
                        </div>

                        <div class="col-md-5 text-left" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Sub Harga</h4>
                                <h4 class="form-label">Sub Diskon</h4>
                            </div>
                        </div>

                        <div class="col-md-5 text-right" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 name="sub_harga" class="form-label">
                                    Rp {{number_format($datas['sub_harga'], 2, ',', '.')}}
                                </h4>
                                <h4 name="sub_diskon" class="form-label">
                                    Rp {{number_format($datas['sub_diskon'], 2, ',', '.')}}
                                </h4>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div style="width: 100%;  border-top: 1px solid #ccc"></div>
                        </div>

                        <div class="col-md-5 text-left" style="margin-left: 30px;">
                            <div class="form-group">
                                <h4 class="form-label">Total Harga</h4>
                            </div>
                        </div>

                        <div class="col-md-5 text-right" style="margin-right: 30px;">
                            <div class="form-group">
                                <h4 name="total_harga" class="form-label">
                                    Rp {{number_format($datas['total_harga'], 2, ',', '.')}}
                                </h4>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary" style="width: 100%;">
                                    Confirm
                                </button>
                                <a class="btn btn-cancel" style="width: 100%;" href="/buy/content/{{$places->id}}">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection