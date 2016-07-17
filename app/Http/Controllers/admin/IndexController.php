<?php
/**
 * laraval学习使用
 *
 * @abstract
 *
 * @copyright 格里西,2016
 *
 * @author chensichen
 *
 * @version  Id:IndexController.php v1.3 2016/07/17
 */

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function index(){
       echo '陈思辰,你一定行的!';
    }

}