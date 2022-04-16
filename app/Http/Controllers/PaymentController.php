<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $cost = 123456; // belum ditentukan

    public function index()
    {
        $pembayaran = Payment::all();
        return view('admin.pembayaran', compact('pembayaran'));
    }

    public function pembayaranBaru(Request $req, $registrations_id)
    {
        $data = [
            'registration_id' => $registrations_id,
            'kode_unik' => random_int(0, 500),
            'total' => $this->cost * $req->jumlah_tiket,
            'is_verified' => false,
            'verified_by' => null
        ];

        $pembayaranBaru = Payment::create($data);

        if ($pembayaranBaru) {
            return redirect('/admin/pembayaran')->with('message', 'Pembayaran berhasil');
        } else {
            return back()->with('message', 'Pembayaran gagal');
        }
    }

    public function hapusPembayaran($id)
    {
        $pembayaranTerhapus = Payment::where('id', $id)->get();
        if ($pembayaranTerhapus->delete()) {
            return back()->with('message', 'Pembayaran berhasil dihapus');
        } else {
            return back()->with('message', 'Pembayaran gagal dihapus');
        }
    }

    public function showKonfirmasiPembayaran($user_id)
    {
        $pembayaranTerpilih = Payment::select(
            'payments.id',
            'r.nomor_registrasi',
            'total',
            'kode_unik',
        )
            ->join('registrations as r', 'payments.registrations_id', 'r.id')
            ->where('r.user_id', $user_id) // user hanya boleh melakukan 1 registrasi
            ->first();

        return view('admin.konfirmasi-pembayaran', compact('pembayaranTerpilih'));
    }

    public function konfirmasiPembayaran(Request $req)
    {
        $payment = Payment::select(
            'payments.id',
            'bukti_pembayaran',
            'r.id'
        )
            ->join('registrations as r', 'payments.registrations_id', 'r.id')
            ->where('r.user_id', auth()->id()) // user hanya boleh melakukan 1 registrasi
            ->orderBy('r.id', 'desc')
            ->first();

        if ($req->hasFile('bukti_pembayaran')) {
            $fileName = $req->file('bukti_pembayaran')->getClientOriginalName();
            $path = $req->file('bukti_pembayaran')->storeAs(
                'bukti_pembayaran',
                $fileName,
                'public'
            );
            $payment->bukti_pembayaran = $path;
        }

        $payment->save();
    }

    public function verifikasiPembayaran($id)
    {
        if (!Payment::where('id', $id)->exist()) {
            return back()->with('message', 'Pembayaran tidak ditemukan');
        }

        $pembayaranTerverifikasi = Payment::where('id', $id)->first();
        $pembayaranTerverifikasi->is_verified = true;
        $pembayaranTerverifikasi->verified_by = auth()->id();

        if ($pembayaranTerverifikasi->save()) {
            return back()->with('message', 'Pembayaran berhasil diverifikasi');
        } else {
            return back()->with('message', 'Pembayaran gagal diverifikasi');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymentRequest  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
