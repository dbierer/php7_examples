<?php 
// reclassified E_STRICT notices
ini_set('error_reporting', 1);
error_reporting(E_ALL|E_STRICT);

class BaseController
{
    public function getAction($id = null)
    {
        // do stuff with the $id
    }
}
class UserController extends BaseController
{
    public function getAction()
    {
        // get the id from a request object instead
        $id = $this->input->get('id');
    }
}

$u = new UserController;
