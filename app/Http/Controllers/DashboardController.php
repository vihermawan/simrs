<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dynamicMenu()
    {
        $menus = Menu::where('parent_id', 0)->get();

        $html = '';
        for ($i=0; $i < count($menus); $i++) {
            $child = Menu::where('parent_id', $menus[$i]->id)->get();
            $modul = '';
            $menu = '';
            $view = '';

            // $checkModul = FunctionHelper::checkMenu($menus[$i]->url);
            // if ($checkModul) {
                if (count($child) == 0) {
                    $modul .= '<li class="nav-item">'.
                                  '<a href="#" onclick="changeMenu('."'".$menus[$i]->url."'".')" class="nav-link">'.
                                      '<i class="'.$menus[$i]->icon.'"></i>'.
                                      '<span>'.$menus[$i]->name.'</span>'.
                                  '</a>'.
                              '</li>';

                    $view .= $modul;
                }
                if (count($child) > 0) {
                    $modul .= '<li class="treeview">'.
                                  '<a href="#">'.
                                      '<i class="'.$menus[$i]->icon.'"></i>'.
                                      '<span>'.$menus[$i]->name.'</span>'.
                                      '<i class="fa fa-angle-left pull-right"></i>'.
                                  '</a>'.
                                  '<ul class="treeview-menu">';

                    for ($j=0; $j < count($child); $j++) {
                        // $checkMenu = FunctionHelper::checkMenu($child[$j]->url);
                        // if ($checkMenu) {
                            $menu .= '<li id="sub-menu"><a href="#" onclick="changeMenu('."'".$child[$j]->url."'".')"><i class="'.$child[$j]->icon.'"></i>'.$child[$j]->name.'</a></li>';
                        // }
                    }

                    $view .= $modul.$menu.'</ul></li>';
                }
                $html .= $view;
            // }
        }

        return view('layouts.main', ['html' => $html]);
    }
}
