<?php

/*
 * Admin page controller class
 * Extends the base fuelphp class
 * Responsible for editing page
 * Author: michal[at]zagalski.pl
 */

class Controller_Admin_Page extends Controller_Admin
{
    
    public function action_index()
    {
        //override the dashboard view with page listing view
        $data['js'] = Asset::js(array('page.js'));
        
        return Response::forge(View::forge('admin/page/list', $data));
    }
    
    public function action_edit($id)
    {
        
        $data['js'] = Asset::js(array('page_edit.js'));
        $data['page_id'] = $id;
        
        return Response::forge(View::forge('admin/page/edit', $data));
    }
}