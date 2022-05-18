<?php

namespace App\Http\Controllers;

use App\Models\Metode;
use App\Models\Place;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BuyController extends Controller
{
    public function confirmPayment(Request $request, $id){
        $places = Place::find($id);
        
        $datas = [];
        $request->validate([
            'ket_harga' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'jml_anak' => 'required',
            'ket_kondisi' => 'required',
            'metode_bayar' => 'required',
        ]);
        $ket_harga = $request->ket_harga;
        $tanggal = $request->tanggal;
        $jam = $request->jam;
        $jml_anak = $request->jml_anak;
        $ket_kondisi = $request->ket_kondisi;
        $voucher = $request->voucher;
        $metode_bayar = $request->metode_bayar;
        $model = Voucher::where('code_voucher', 'LIKE', "%".$voucher."%")->get();
        $metode = Metode::where('metode_bayar', 'LIKE', "%".$metode_bayar."%")->get();
        foreach($model as $model);
        foreach($metode as $metode);
        $sub_harga = $ket_harga*$jml_anak;
        if($voucher == ""){
            $sub_diskon = 0;
        }
        else{
            if($sub_harga < $model->minim_harga){
                return back()->withErrors(['message' => 'Voucher tidak bisa digunakan. Minimum harga tidak terpenuhi.']);
            }
            else{
                $sub_diskon = $model->potongan_harga;
            }
        }
        if($metode_bayar==""){
            return back()->withErrors(['message' => 'Metode Bayar Belum Ditemukan']);
        }
        $total_harga = $sub_harga - $sub_diskon;
        $datas = [
            'ket_harga' => $ket_harga,
            'tanggal' => $tanggal,
            'jam' => $jam,
            'jml_anak' => $jml_anak,
            'ket_kondisi' => $ket_kondisi,
            'voucher' => $voucher,
            'metode_bayar' => $metode_bayar,
            'sub_harga' => $sub_harga,
            'sub_diskon' => $sub_diskon,
            'total_harga' => $total_harga
        ];
        return view('layouts.payment', ['title' => 'Confirm'])
        ->with('places', $places)
        ->with('model', $model)
        ->with('metode', $metode)
        ->with('datas', $datas);
    }

    public function confirm(Request $request){
        
    }
}
