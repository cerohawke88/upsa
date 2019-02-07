<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\File;
use Illuminate\Http\RedirectResponse;
use Storage;
use Carbon\Carbon;

class FileController extends Controller
{
    //buat di adminPage
    public function index(): View
    {
        $files = File::orderBy('title', 'ASC')->paginate(30);

        return view('file.index', compact('files'));
    }

    //view buat upload file di bagian bawah form sebelum klik submit
    public function form(): View
    {
        return view('file.form');
    }

    //ini jalan saat klik tombol submit, auto upload
    public function upload(Request $request)
    {
        $this->validate($request, [
            'files.*' => 'required|max:2000'
        ]);

        $files = [];
        foreach ($request->file('files') as $file) {
            if ($file->isValid()) {
                $path = $file->store('public/files');

                // save information to variable
                // next will be saved to database
                $files[] = [
                    'title' => $file->getClientOriginalName(),
                    'filename' => $path,
                    'created_at' => $now = Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => $now,
                ];
            }
        }

        File::insert($files);

        return redirect()
            ->back()
            ->withSuccess(sprintf('Total %s berkas berhasil diunggah.', count($files)));
    }

    /**
     * Show data directly yto browser, otherwise, download it.
     *
     * @param File $file
     * @return void
     */
    //buat di adminPage juga
    public function response(File $file)
    {
        return Storage::response($file->filename);
    }

    /**
     * Download file directly.
     *
     * @param File $file
     * @return void
     */
    //buat di adminPage juga
    public function download(File $file)
    {
        return Storage::download($file->filename, $file->title);
    }
}
