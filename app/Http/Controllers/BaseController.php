<?php
/**
 * Created by PhpStorm.
 * User: HungLS
 * Date: 4/26/2016
 * Time: 5:57 PM
 */

namespace App\Http\Controllers;


abstract class BaseController extends Controller
{
    protected $controller;
    protected $action;
    protected $params;

    public function __construct()
    {
        
    }

    abstract function index();
}