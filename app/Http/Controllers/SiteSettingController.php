<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SiteSettingController extends Controller
{
    public function show()
    {

        $site = DB::table('site_settings')
            ->first();

        return view('backend.pages.site-settings.index', compact('site'));
    }

    public function siteEdit($siteid)
    {

        $data = DB::table('site_settings')->where('id', $siteid)->first();

        $html = '
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="site_name" value="'.$data->name.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Establish</label>
                        <input type="text" name="site_name" value="'.$data->establish.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>EIIN</label>
                        <input type="text" name="site_name" value="'.$data->eiin.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Code</label>
                        <input type="text" name="site_name" value="'.$data->code.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="site_name" value="'.$data->address.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="text" name="site_name" value="'.$data->mobile.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="site_name" value="'.$data->phone.'" class="form-control form-control-sm">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="site_name" value="'.$data->email.'" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>';

        echo $html;
    }
}
