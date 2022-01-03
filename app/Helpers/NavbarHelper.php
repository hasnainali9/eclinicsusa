<?php
use App\Models\Navbar;
if (!function_exists('GetNavbarSubmenuFuction')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function GetNavbarSubmenuFuction($submenu)
    {
        return Navbar::where('submenu',$submenu)->get();
    }
}
