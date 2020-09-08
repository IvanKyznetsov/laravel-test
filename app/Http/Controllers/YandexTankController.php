<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

/**
 * Class YandexTankController
 *
 * @package App\Http\Controllers
 */
class YandexTankController extends BaseController
{

    /**
     * Yandex tank test
     */
    public function index()
    {
        return view('yandex_tank.yandex_tank');
    }
}
