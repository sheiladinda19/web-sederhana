<?php

namespace App\Controllers;

use App\Models\Devices;

class DevicesController extends BaseController
{
    protected $devicesModel;
    public function __construct(){
        $this->devicesModel = new Devices();
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar Barang',
            'devices' => $this->devicesModel->getDevice()
        ];
        return view('devices', $data);
    }
}
