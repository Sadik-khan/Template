<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    // General Settings
    public function index() {
        return view('admin.settings.index');
    }

    // Configure Settings
    public function configure(Request $request) {
        $id = $request->id;

        

        if($id == 'General Settings') {
            return view('admin.settings.module.general');
        } elseif ($id == 'System Settings') {
            return view('admin.settings.module.system');
        } elseif ($id == 'Mail Settings') {
            return view('admin.settings.module.mail');
        } elseif ($id == 'SMS Settings') {
            return view('admin.settings.module.sms');
        }
    }
}
