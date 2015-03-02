<?php

/*
 * Admin controller class
 * Extends the fuelphp controller base class
 * Responsible for proper request handling in site backend
 * Author: michal[at]zagalski.pl
 */

class Controller_Admin extends Controller_Base
{
 
    /*
     * Check wheteher the user is logged in
     * If not redirect him to login page, if yes callback requested action
     * return: void
     */
    public function before()
    {
        
    }
    
    /*
     * Action builds the admin dashboard view
     * return: html
     */
    public function action_index()
    {
        //load dashboard 
        
        $data['js'] = Asset::js(array('dashboard.js'));
        
        return Response::forge(View::forge('admin/index', $data));
    }
    
    public function after()
    {
        
    }
}