<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->with('error', 'Email atau password anda salah!');
    }
    public function daftar()
    {
        return view('daftar');
    }
    public function verifikasiTokenPage()
    {
        return view('verifikasi-akun');
    }
    public function resetForm($token)
    {
        return view('reset-form', [
            'token' => $token,
        ]);
    }
    public function resetPassword(Request $req)
    {
        $user = User::where('email', $req->input('email'))->first();

        if ($user != null) {

            if ($user->email_verified_at == null) {
                return redirect('/lupa-password')->with('error', 'Email belum diverifikasi, silahkan buat akun baru');
            }
            $to_name = $user->nama_perusahaan;
            $to_email = $user->email;
            $data = array('name' => $to_name, 'link' => url()->to('/reset-password/' . $user->token));

            Mail::send('admin.mail.lupa-password', $data, function ($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)->subject('SILONTAR - Sistem Informasi Layanan Online Transparansi dan Akuntabilitas');
                $message->from('silontarbpjn@gmail.com', 'Reset Password');
            });
            return redirect('/lupa-password')->with('success', 'Link untuk reset password berhasil dikirimkan ke email, jika pesan tidak ditemukan cek folder spam anda.');
        }
        return redirect('/lupa-password')->with('error', 'Email tidak ditemukan');
    }
    public function resetPasswordStore(Request $req, $token)
    {
        User::where('token', $token)->update(['password' => Hash::make($req->password)]);

        return redirect('/login')->with('success', 'Password anda berhasil diubah, silahkan login');
    }
    public function kirimToken()
    {
        $to_name = auth()->user()->nama_perusahaan;
        $to_email = auth()->user()->email;

        $token = Str::random(6);

        User::find(auth()->user()->user_id)->update(['token' => $token]);

        $data = array('name' => $to_name, 'token' => $token);
        Mail::send('admin.mail.regis-token', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('SILONTAR - Sistem Informasi Layanan Online Transparansi dan Akuntabilitas');
            $message->from('silontarbpjn@gmail.com', 'Verifikasi akun anda untuk melanjutkan pendaftaran di SiLONTAR');
        });

        return redirect('/verifikasi-akun')->with('success', 'Token berhasil dikirim ulang silahkan cek email anda.');
    }
    public function verifikasiToken(Request $req)
    {
        $user = User::find(auth()->user()->user_id);

        if ($user->token == $req->input('token')) {
            User::find(auth()->user()->user_id)->update(['email_verified_at' => date('Y-m-d H:s:i')]);
            return redirect('/')->with('success', 'Verifikasi email anda berhasil');
        }
        return redirect('/verifikasi-akun')->with('error', 'Token email salah, silahkan cek kembali');
    }
    public function daftarStore(Request $request)
    {
        date_default_timezone_set("Asia/Makassar");

        $input = [
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'nama_direktur' => $request->input('nama_direktur'),
            'alamat_perusahaan' => $request->input('alamat_perusahaan'),
            'lokasi_permohonan' => $request->input('lokasi_permohonan'),
            'role' => 'user',
            'token' => Str::random(6),
        ];
        if ($request->input('sdk') == null) {
            return redirect('/registrasi')->with('error', 'Centang syarat dan ketentuan sebelum registrasi!');
        }
        User::create($input);

        $to_name = $request->input('nama_perusahaan');
        $to_email = $request->input('email');

        $data = array('name' => $to_name, 'token' => $input['token']);
        Mail::send('admin.mail.regis-token', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Verifikasi akun anda');
            $message->from('silontarbpjn@gmail.com', 'Verifikasi akun anda untuk melanjutkan pendaftaran di SiLONTAR');
        });

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/verifikasi-akun');
        }
    }

    public function logout(Request $req)
    {
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
