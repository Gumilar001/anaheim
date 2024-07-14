<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pencatatan;
use PhpParser\Node\Expr\Cast\Double;

class PencatatanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_project' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'frontend' => 'required|integer|min:0',
            'jumlahFrontend' => 'required|integer|min:0',
            'uiux' => 'required|integer|min:0',
            'jumlahUiux' => 'required|integer|min:0',
            'backend' => 'required|integer|min:0',
            'jumlahBackend' => 'required|integer|min:0',
            'consultant_it' => 'required|integer|min:0',
            'jumlahConsultantIt' => 'required|integer|min:0',
            'transportasi' => 'required|integer|min:0',
            'jumlahTransportasi' => 'required|integer|min:0',
            'penginapan' => 'required|integer|min:0',
            'jumlahPenginapan' => 'required|integer|min:0',
            'konsumsi' => 'required|integer|min:0',
            'jumlahKonsumsi' => 'required|integer|min:0',
            'pajak' => 'required|integer|min:0',
            // 'total' => 'required|integer|min:0',
        ]);
        $total = ($request->frontend * $request->jumlahFrontend) +
            ($request->uiux * $request->jumlahUiux) +
            ($request->backend * $request->jumlahBackend) +
            ($request->consultant_it * $request->jumlahConsultantIt) +
            ($request->transportasi * $request->jumlahTransportasi) +
            ($request->penginapan * $request->jumlahPenginapan) +
            ($request->konsumsi * $request->jumlahKonsumsi) +
            $request->pajak;
    
        Pencatatan::create([
            'nama_project' => $request->nama_project,
            'tanggal' => $request->tanggal,
            'frontend' => $request->frontend,
            'jumlahFrontend' => $request->jumlahFrontend,
            'uiux' => $request->uiux,
            'jumlahUiux' => $request->jumlahUiux,
            'backend' => $request->backend,
            'jumlahBackend' => $request->jumlahBackend,
            'consultant_it' => $request->consultant_it,
            'jumlahConsultantIt' => $request->jumlahConsultantIt,
            'transportasi' => $request->transportasi,
            'jumlahTransportasi' => $request->jumlahTransportasi,
            'penginapan' => $request->penginapan,
            'jumlahPenginapan' => $request->jumlahPenginapan,
            'konsumsi' => $request->konsumsi,
            'jumlahKonsumsi' => $request->jumlahKonsumsi,
            'pajak' => $request->pajak,
            // 'total' => $request->total,
            'total' => $total,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
        return redirect()->route('pencatatan')->with('status', 'Tambah Data Berhasil');
    }
}
