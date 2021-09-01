<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Electronic;
use App\Models\Geology;
use App\Models\Industrial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        $totalDocs = Document::all()->count();
        return view('index', compact('totalDocs'));
    }

    public function show($name, $id, Request $request)
    {
        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        $doc = Document::findOrFail($id);
        if ($doc->carrer === 'Electrónica') {
            $carrer = 'electronica';
            return view('components.show-file', compact('doc', 'carrer'));
        }
        if ($doc->carrer === 'Geológica') {
            $carrer = 'geologia';
            return view('components.show-file', compact('doc', 'carrer'));
        }
        if ($doc->carrer === 'Industrial') {
            $carrer = 'industrial';
            return view('components.show-file', compact('doc', 'carrer'));
        }
    }

    public function about()
    {
        return view('about');
    }

    public function homeLibrary(Request $request)
    {
        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        return view('library.home');
    }

    /**Archivos de Ingenieria Electronica */
    public function electronicFiles(Request $request)
    {
        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Electrónica')->get();

        return view('library.electronica.files', compact('docs'));
    }

    /**Archivos de Ingenieria Electronica */

    /**Archivos de Ingenieria Industrial */
    public function industrialFiles(Request $request)
    {
        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Industrial')->get();

        return view('library.industrial.files', compact('docs'));
    }

    /**Archivos de Ingenieria Industrial */


    /**Archivos de Ingenieria Geologia */
    public function geologyFiles(Request $request)
    {
        if ($request->input('query')) {
            $name = $request->input('query');

            $query = Document::where('name', 'LIKE', '%' . $name . '%')->get();
            return view('filter', compact('query', 'name'));
        }

        $docs = Document::where('carrer', 'Geologica')->get();

        return view('library.geologia.files', compact('docs'));
    }
    /**Archivos de Ingenieria Geologia */
}