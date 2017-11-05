<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Crea un mensaje de session
     *
     * El message debe ser la key para la traduccion
     *
     * El alertType corresponde a los tipos de alerta en bootstrap
     * alert-success, alert-danger, alert-info, alert-warning, etc
     *
     * @param $message
     * @param string $alertType
     */
    protected function sessionMessages($message, $alertType = 'alert-success') {
        Session::flash('alert-message', Lang::get($message));
        Session::flash('alert-type', $alertType);
    }
}
