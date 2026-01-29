<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;


class SellerController extends Controller
{
    public function showRegister() {
        $user = auth()->user();

        // 1️⃣ User BELUM punya store
        if (!$user->store) {
            $categories = \App\Models\Category::all();
            $provinces = \App\Models\Province::orderBy('name', 'asc')->distinct()->get();
            return view('seller.register.information', compact('categories', 'provinces'));
        }

        $store = $user->store;

        // 2️⃣ Punya store tapi BELUM punya credential
        if (!$store->credential) {
            return view('seller.register.credentials');
        }

        // 3️⃣ Punya store + credential tapi BELUM diverifikasi
        if (is_null($store->store_verified_at)) {
            return view('seller.register.verify');
        }

        // 4️⃣ Semua sudah lengkap & verified
        return view('seller.register.success');
    }

    public function registerStepOne(Request $request) {
        // dd($request->all());
        /* hasil dd
            [
                "_token" => "bO60wnYxpUDumz851EgzSyRjjg2tC7H6ZDABmUMG"
                "storeName" => "tes"
                "storeCategory" => "2"
                "latitude" => "-6.184928810497625"
                "longitude" => "106.77294731140137"
                "storeProvince" => "21"
                "storeRegency" => "2171"
                "storeDistrict" => "2171080"
                "storeVillage" => "2171080005"
                "storeAddress" => "tes"
            ]
        */

        $validator = Validator::make(
            $request->all(),
            [
                'storeName'       => 'required|string|max:255|unique:stores,name',
                'storeCategory'   => 'required|exists:categories,id',

                'storeProvince'   => 'required|exists:provinces,id',
                'storeRegency'    => 'required|exists:regencies,id',
                'storeDistrict'   => 'required|exists:districts,id',
                'storeVillage'    => 'required|exists:villages,id',

                'latitude'        => 'required|numeric',
                'longitude'       => 'required|numeric',
                'storeAddress'    => 'required|string',
            ],
            [
                // Store
                'storeName.required' => 'Nama toko wajib diisi.',
                'storeName.string'   => 'Nama toko harus berupa teks.',
                'storeName.max'      => 'Nama toko maksimal 255 karakter.',
                'storeName.unique'   => 'Nama toko sudah digunakan.',

                'storeCategory.required' => 'Kategori toko wajib dipilih.',
                'storeCategory.exists'   => 'Kategori toko tidak valid.',

                // Wilayah
                'storeProvince.required' => 'Provinsi wajib dipilih.',
                'storeProvince.exists'   => 'Provinsi tidak valid.',

                'storeRegency.required' => 'Kabupaten/Kota wajib dipilih.',
                'storeRegency.exists'   => 'Kabupaten/Kota tidak valid.',

                'storeDistrict.required' => 'Kecamatan wajib dipilih.',
                'storeDistrict.exists'   => 'Kecamatan tidak valid.',

                'storeVillage.required' => 'Desa/Kelurahan wajib dipilih.',
                'storeVillage.exists'   => 'Desa/Kelurahan tidak valid.',

                // Lokasi
                'latitude.required' => 'Latitude wajib diisi.',
                'latitude.numeric'  => 'Latitude harus berupa angka.',

                'longitude.required' => 'Longitude wajib diisi.',
                'longitude.numeric'  => 'Longitude harus berupa angka.',

                // Alamat
                'storeAddress.required' => 'Alamat toko wajib diisi.',
                'storeAddress.string'   => 'Alamat toko harus berupa teks.',
            ],
            [
                'storeName'     => 'Nama Toko',
                'storeCategory' => 'Kategori Toko',
                'storeProvince' => 'Provinsi',
                'storeRegency'  => 'Kabupaten/Kota',
                'storeDistrict' => 'Kecamatan',
                'storeVillage'  => 'Desa/Kelurahan',
                'latitude'      => 'Drop Point (lat)',
                'longitude'     => 'Drop Point (lon)',
                'storeAddress'  => 'Alamat Toko',
            ]
        );


        $validator->after(function ($validator) use ($request) {

            $province = Province::find($request->storeProvince);
            $regency  = Regency::find($request->storeRegency);
            $district = District::find($request->storeDistrict);
            $village  = Village::find($request->storeVillage);

            // Kalau salah satu NULL, stop
            if (!$province || !$regency || !$district || !$village) {
                return;
            }

            // Province → Regency
            $regencyExists = \DB::table('regencies')
                ->where('id', $request->storeRegency)
                ->where('province_id', $request->storeProvince)
                ->exists();
            if (!$regencyExists) {
                $validator->errors()->add('storeRegency', 'Kabupaten/Kota tidak sesuai dengan provinsi.');
            }

            // Regency → District
            $districtExists = \DB::table('districts')
                ->where('id', $request->storeDistrict)
                ->where('regency_id', $request->storeRegency)
                ->exists();
            if (!$districtExists) {
                $validator->errors()->add('storeDistrict', 'Kecamatan tidak sesuai dengan kabupaten/kota.');
            }

            // District → Village
            $villageExists = \DB::table('villages')
                ->where('id', $request->storeVillage)
                ->where('district_id', $request->storeDistrict)
                ->exists();
            if (!$villageExists) {
                $validator->errors()->add('storeVillage', 'Desa/Kelurahan tidak sesuai dengan kecamatan.');
            }

        });

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        dd('Sukses');

    }

}
