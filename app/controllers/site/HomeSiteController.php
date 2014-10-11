<?php
class HomeSiteController extends BaseController {

    public function indexAction()
    {
        return View::make('site/home/index');
    }
    public function usersAction()
    {
        $users = User::all();
        return View::make('site.home.users')->with('users', $users);
    }

}
