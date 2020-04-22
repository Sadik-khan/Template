<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IP\IpList;
use App\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    // change_settings
    public function change_settings(Request $request) {
        
        foreach($_POST as $key => $value){
            if($key == "_token"){
                continue;
            }

            if($key == 'submit') {
                continue;
            }

            $data = array();
            
            if($key == 'log_event') {
                $arr = $request->log_event;
                $im = implode(',', $arr);

                $data['value'] = $im;
            } else {
                $data['value'] = $value;
            }

            if($key == 'ip_filter') {
                $ips = $request->ip;
                if($value == 'on') {
                    $ip = new IpList;
                    $ip->ip = $ips;
                    $ip->save();
                } else {
                    $models = IpList::all();
                    foreach($models as $model) {
                        $model->delete();
                    }
                }
            }

            $data['updated_at'] = Carbon::now();
            if(Setting::where('name', $key)->exists()){
                Setting::where('name','=',$key)->update($data);
            }else{
                $data['name'] = $key;
                
                if($key != 'log_event') {
                    $data['value'] = $value;
                }

                $data['created_at'] = Carbon::now();
                Setting::insert($data);
            }

        }

        return response()->json(['status' => 'success', 'message' => 'Information Updated Successfully', 'load' => true]);
    }

    // open_ip_filter
    public function open_ip_filter() {
        return view('admin.settings.module.filter');
    }
}
