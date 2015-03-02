<?php

/*
 * REST response class
 * Extends the fuelphp REST controller class
 * Responsible for proper admin ajax requests 
 * Author: michal[at]zagalski.pl
 */

class Controller_Ajax_Ajax extends Controller_Rest
{
    
    protected $default_format = 'json';
    
    /*
     * get recent pages for dashboard
     * get: limit as int
     * return: json response
     */
    public function get_pages_list()
    {
        //get limit from ajax request
        $limit = (isset(Input::get('limit')) ? Input::get('limit') : 10;
        //get offset from ajax request
        $offset = (isset(Input:get('offset')) ? Input::get('offset') : 0;
        
        //get recent pages from database, set limit(def: 10) and offset(def: 0)
        $result = Model_Page::find_all($limit, $offset);
        
        return $this->response(array(
            'pages' => $result,
        ));
        
    }
    
}