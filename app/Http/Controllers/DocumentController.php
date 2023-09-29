<?php

namespace App\Http\Controllers;

use App\Models\document;
use App\Http\Requests\StoredocumentRequest;
use App\Http\Requests\UpdatedocumentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        try {
            $request->validate([
                'doc_descripcion' => 'required|string|max:255',
                'doc_tipo' => 'required|string|max:255',
                'doc_pdf' => 'required|mimes:pdf',
            ]);

            $new = new Document();
            $new->doc_descripcion = $request->input('doc_descripcion');
            $new->doc_tipo = $request->input('doc_tipo');

            if ($request->hasFile('doc_pdf')) {
                $pdfFile = $request->file('doc_pdf');
                $pdfFileName = $pdfFile->getClientOriginalName();
                $pdfFile->move(public_path('pdfs'), $pdfFileName); // Guardar en el directorio 'pdfs'
                $new->doc_pdf = $pdfFileName;
            }

            $new->ca_usu = Auth::user()->id;
            $new->ca_est = 1;

            $new->save();

            return response()->json([
                'message' => 'Registro creado exitosamente',
                'data' => $new,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al crear el registro',
                'error' => $e->getMessage(),
            ], 500);
        }
    }


    function list_1()
    {
        return view('document.list');
    }
    function data_list_1(): JsonResponse
    {
        try {
            $doc = document::get();

            return response()->json([
                'message' => 'success',
                'data' => $doc,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al recuperar',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    function showPDF_1($id)
    {
        try {
            $pdf = document::where('id', $id)->first();

            return response()->json([
                'message' => 'success',
                'data' => $pdf->doc_pdf,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error al recuperar',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    function register_1()
    {
        return view('document.register');
    }
}
