<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Peserta;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\DB;



class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrasi = Registration::all();
        $registrasi = DB::table('registration')->where('id');
        return view('admin.components.card_jumlahpeserta', compact('registrasi'));
    }

    public function JumlahRegis()
    {
        $registrasi = Registration::count();
        return view('admin.components.card_jumlahpeserta', compact('registrasi'));
    }
    public function registrasi(Request $req)
    {
        // buat registrasi baru
        // if (!$this->registrasiBaru()) return back()->with('message', 'Registrasi gagal');

        // buat peserta baru
        // $regisTerbaru = Registration::where('user_id', auth()->id())->orderBy('id', 'desc')->first();
        // for ($i = 0; $i < $req->jumlah_tiket; $i++) {
        $regis = new Registration;
        $regis->user_id = 12;
        // $regis->registrations_id = $regisTerbaru->id;
        $regis->nama_lengkap = $req->nama;
        $regis->tempat_lahir = $req->tempat_lahir;
        $regis->tanggal_lahir = $req->tanggal_lahir;
        $regis->jenis_kelamin = $req->jenis_kelamin;
        $regis->kelas = $req->kelas;
        $regis->tim = $req->tim;
        $regis->email = $req->email;
        $regis->kota_asal = $req->kota_asal;
        $regis->no_wa = $req->no_wa;
        $regis->golongan_darah = $req->golongan_darah;
        $regis->ukuran_jersey = $req->ukuran_jersey;
        // $req->auth()->id();
        if ($req->hasFile('kartu_identitas')) {
            $fileName = $req->file('kartu_identitas')->getClientOriginalName();
            $path = $req->file('kartu_identitas')->storeAs(
                'kartu_identitas',
                $fileName,
                'public'
            );
            $regis->kartu_identitas = $path;
        } else {
            $regis->kartu_identitas = '-';
        }
        $regis->save();
        // }
        // dd($regis->id);
        // buat payment baru
        $payment = new PaymentController;
        $payment->pembayaranBaru($req, $regis->id);

        $dataInvoice = Registration::select(
            'registrations.*',
            'py.total',
            'py.kode_unik',
        )
            ->join('payments as py', 'registrations.id', 'py.registration_id')
            // ->join('pesertas as ps', 'registrations.id', 'ps.registration_id')
            ->where('registrations.id', $regis->id)
            ->get();

        return view('event.mlc.registration.confirmation', compact('dataInvoice')); // tampilkan invoice
    }

    public function registrasiBaru()
    {
        $data = [
            'user_id' => auth()->id()
        ];

        $regisBaru = Registration::create($data);

        if ($regisBaru) {
            return true;
        } else {
            return false;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
