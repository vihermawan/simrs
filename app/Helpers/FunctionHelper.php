<?php
namespace App\Helpers;

use DB;

class FunctionHelper {

    public static function checkMenu($url)
    {
        $check = DB::table('user_akses')->leftJoin('menu', 'menu.id', 'user_akses.id_menu')
                ->where('id_role', 1)
                ->where('url', $url)
                ->where('status', 1)
                ->first();

        if (isset($check->url)) {
            return true;
        }

        return false;
    }
}
