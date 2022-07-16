<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $view;
    protected $route;
    protected $title;

    protected function shareView($attribute = [])
    {
        View::share(
            [
                'title' => $this->title,
                'route' => $this->route,
                'view' => $this->targetView($attribute['type']),
            ]
        );
    }

    protected function redirectWith($status)
    {
        if ($status == 'insert') {
            return redirect()->route($this->route . '.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } elseif ($status == 'update') {
            return redirect()->route($this->route . '.index')->with(['success' => 'Data Berhasil Diubah!']);
        } elseif ($status == 'delete')
            return redirect()->route($this->route . '.index')->with(['success' => 'Data Berhasil Dihapus!']);
        elseif ($status == 'error') {
            return redirect()->route($this->route . '.index')->with(['error' => 'Terjadi Kesalahan']);
        }
    }

    private function targetView($type)
    {
        switch ($type) {
            case 'admin':
                $this->view = 'admin\\' . $this->view;
                break;
            default:
                # code...
                break;
        }
    }
}
