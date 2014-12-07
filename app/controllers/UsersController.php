<?php

class UsersController extends BaseController {
    protected $layout = "layouts.main"; // <-- i don't understand what this does exactly 12/6/2014
    
    public function getRegister() {
        $this->layout->content = View::make('users.register');
    }
    


}