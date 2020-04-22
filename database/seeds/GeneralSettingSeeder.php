<?php

use App\Setting;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Create default navbar top
        Setting::create([
            'name'      =>  'navbar_position',
            'value'     =>  'top',
        ]);

        // Create Log Event
        Setting::create([
            'name'      => 'log_event',
            'value'     => 'created,updated,deleted', 
        ]);

        //  Create log_delete_date
        Setting::create([
            'name'      =>  'log_delete_date',
            'value'     =>  '365',
        ]);

        //  Create log_delete_date
        Setting::create([
            'name'      =>  'log_report',
            'value'     =>  'on',
        ]);

        // ip_filter off
        Setting::create([
            'name'      =>  'ip_filter',
            'value'     =>  'off',
        ]);
    }
}
