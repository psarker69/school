<?php

namespace App\Http\Controllers;

use App\Models\site_setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function show() {

        $site = DB::table('site_settings')
        ->first();

        return view('backend.pages.site-settings.index', compact('site'));
    }


}
