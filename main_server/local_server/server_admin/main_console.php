<?php
/*
    This file is part of the Basic Meeting List Toolbox (BMLT).
    
    Find out more at: http://bmlt.magshare.org

    BMLT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    BMLT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this code.  If not, see <http://www.gnu.org/licenses/>.
*/
defined( 'BMLT_EXEC' ) or die ( 'Cannot Execute Directly' );	// Makes sure that this file is in the correct context.
require_once ( dirname ( __FILE__ ).'/c_comdef_admin_main_console.class.php' );

$console_object = new c_comdef_admin_main_console($http_vars);

$ret = 'ERROR';

if ( $console_object instanceof c_comdef_admin_main_console )
    {
    $ret = $console_object->return_main_console_html();
    }

echo $ret;
?>