<?php

namespace App\Controllers;

use App\Models\Devices;

class DeviceDetailController extends BaseController
{
    protected $devicesModel;
    public function __construct(){
        $this->devicesModel = new Devices();
    }
    public function index($slug)
    {
        $data = [
            'title' => 'Detail Barang',
            'device' => $this->devicesModel->getDevice($slug)
        ];
        return view('deviceDetail', $data);
    }
}