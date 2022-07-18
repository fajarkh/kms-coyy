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
    protected $model;

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
        $route_index = route($this->route . '.index');
        if ($this->model) {
            $route_index = route($this->route . '.index', ['model' => class_basename($this->model)]);
        }
        
        if ($status == 'insert') {
            return redirect()->to($route_index)->with(['success' => 'Data Berhasil Disimpan!']);
        } elseif ($status == 'update') {
            return redirect()->to($route_index)->with(['success' => 'Data Berhasil Diubah!']);
        } elseif ($status == 'delete')
            return redirect()->to($route_index)->with(['success' => 'Data Berhasil Dihapus!']);
        elseif ($status == 'error') {
            return redirect()->to($route_index)->with(['error' => 'Terjadi Kesalahan']);
        }
    }

    protected function getFromQueryParam($param)
    {
        if ($param == 'model') {
            $model = request()->get($param);
            $this->title = $this->title . str_replace($this->title, '', preg_replace('/(?<!\ )[A-Z]/', ' $0', $model));
            return app("App\\Models\\" . $model);
        }
    }

    private function targetView($type)
    {
        switch ($type) {
            case 'admin':
                return $this->view = 'admin\\' . $this->view;
                break;
            default:
                # code...
                break;
        }
    }
}
