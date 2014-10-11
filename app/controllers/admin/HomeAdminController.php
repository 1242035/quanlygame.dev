<?php

class HomeAdminController extends BaseController {


    public function indexAction()
    {
        return View::make('admin.home.index');
    }

}
