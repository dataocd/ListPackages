<?php
namespace REST\Controller;
class v1 implements \Lists\Controller\IController {
    public function __construct() {
    }

    public function execute($request) {
        echo $request->packageCommand.'<BR>';
        echo $request->get('var');
        echo 'This is the command to perform';
    }
}
?>