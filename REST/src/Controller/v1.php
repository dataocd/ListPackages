<?php
namespace REST\Controller;
class v1 implements \Lists\Controller\IController {
    public function __construct() {
    }

    public function execute($request) {
        echo $request->packageCommand.'<BR>';
        //echo $request->get('var').'<BR>';
        $request_type = strtolower($request->get('REQUEST_METHOD'));
        switch ($request_type) {
            case 'get':
                echo 'Its a get request: <BR>';
                print_r($_GET);
                break;
            case 'post':
                echo 'Its a post request: <BR>';
                print_r($_POST);
                break;
            case 'put':
                echo 'Its a put request: <BR>';
                print_r($_PUT);
                break;
            default:
                echo 'Something went wrong... throw here';
                break;
        }
        
    }
}
?>