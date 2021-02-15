<?php

use Illuminate\Support\Facades\Route;

/**
 * Load routes resourses
 * Version: Api 1.0
 * Descrição: Modulo de API
 * @usage: User control resourses
 * @autors: Edson Rodrigues e-mail: edsonrodsilva@gmail.com
 * @contact: https://github.com/edsonrodsilva
 * @By: Edson Rodrigues
 */

Route::middleware(['api'])->namespace('ApiV1')->prefix('v1')
    ->group(function () {

        //resource clients
        require_once 'Clientes/routes.php';
    });
