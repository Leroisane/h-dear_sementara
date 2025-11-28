<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Template;
use App\Models\Undangan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UndanganController extends Controller
{
    public function index()
    {
        $templates = Template::where('is_active', true)->get();
        return view('user.undangan.index', compact('templates'));
    }

    public function create($templateId)
    {
        $template = Template::findOrFail($templateId);
        return view('user.undangan.create', compact('template'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'template_id' => 'required|exists:templates,id',
            'nama_pengirim' => 'required|string|max:255',
            'nama_acara' => 'required|string|max:255',
            'tempat_acara' => 'required|string|max:255',
            'tanggal_acara' => 'required|date',
            'tujuan_undangan' => 'required|string|max:255',
            'pesan_tambahan' => 'nullable|string',
            'nama_user' => 'required|string|max:255',
            'email_user' => 'nullable|email'
        ]);

        $undangan = Undangan::create($validated);

        return redirect()->route('undangan.preview', $undangan->id);
    }

    public function preview($id)
    {
        $undangan = Undangan::with('template')->findOrFail($id);
        return view('user.undangan.preview', compact('undangan'));
    }

    public function download($id)
    {
        $undangan = Undangan::with('template')->findOrFail($id);
        
        $html = $this->replaceVariables($undangan->template->html_content, $undangan);
        
        $pdf = Pdf::loadHTML($html);
        
        return $pdf->download('undangan-' . $undangan->nama_acara . '.pdf');
    }

    private function replaceVariables($html, $undangan)
    {
        $variables = [
            '{{nama_pengirim}}' => $undangan->nama_pengirim,
            '{{nama_acara}}' => $undangan->nama_acara,
            '{{tempat_acara}}' => $undangan->tempat_acara,
            '{{tanggal_acara}}' => $undangan->tanggal_acara->format('d F Y, H:i'),
            '{{tujuan_undangan}}' => $undangan->tujuan_undangan,
            '{{pesan_tambahan}}' => $undangan->pesan_tambahan ?? '',
        ];

        return str_replace(array_keys($variables), array_values($variables), $html);
    }
}