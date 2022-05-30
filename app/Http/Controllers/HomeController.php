<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function welcome()
    {
        $location = "https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d1746.9229993366318!2d-86.1035980041176!3d11.90316124392252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8f740579a2e31307%3A0xd9f8edf629e0ba97!2sNiquinohomo!3m2!1d11.903788599999999!2d-86.10184439999999!5e1!3m2!1ses-419!2sni!4v1631292915636!5m2!1ses-419!2sni";
        $me = User::find(1);
        $projects = Project::all();

        return view('welcome-v-1', compact('me', 'location', 'projects'));
    }

    public function details($slug)
    {
        $project = Project::where('slug', '=', $slug)->first();

        if ($project) {
            return view("details-proyect", compact('project'));
        }

        return abort(404);
    }

    public function index()
    {
        $admin = User::find(1);

        return view('dashboard', compact('admin'));
    }
}
