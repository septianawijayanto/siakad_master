<?php

namespace App\Http\Controllers;

use App\Guru;
use App\Jadwal;
use App\Kelas;
use App\Nilai;
use App\Rapot;
use App\Siswa;
use App\Ulangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class NilaiUlanganController extends Controller
{
    public function index()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelas', compact('kelas', 'guru'));
    }
    public function uh1index()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelasuh1', compact('kelas', 'guru'));
    }
    public function uh2index()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelasuh2', compact('kelas', 'guru'));
    }
    public function uh3index()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelasuh3', compact('kelas', 'guru'));
    }
    public function utsindex()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelasuts', compact('kelas', 'guru'));
    }
    public function uasindex()
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $jadwal = Jadwal::where('guru_id', $guru->id)->orderBy('kelas_id')->get();
        $kelas = $jadwal->groupBy('kelas_id');
        return view('guru.ulangan.kelasuas', compact('kelas', 'guru'));
    }
    public function u1show($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.ulangan.ulangan1', compact('guru', 'kelas', 'siswa'));
    }
    public function u2show($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.ulangan.ulangan2', compact('guru', 'kelas', 'siswa'));
    }
    public function u3show($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.ulangan.ulangan3', compact('guru', 'kelas', 'siswa'));
    }
    public function uasshow($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.ulangan.uas', compact('guru', 'kelas', 'siswa'));
    }
    public function utsshow($id)
    {
        $id = Crypt::decrypt($id);
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $kelas = Kelas::findorfail($id);
        $siswa = Siswa::where('kelas_id', $id)->get();
        return view('guru.ulangan.uts', compact('guru', 'kelas', 'siswa'));
    }
}
