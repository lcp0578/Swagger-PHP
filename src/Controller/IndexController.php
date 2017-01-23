<?php

/**
 * 
 * @SWG\Swagger(
 *   schemes={"http"},
 *   host="www.swagger.com",
 *   basePath="/index",
 *   @SWG\Info(
 *     title="My first swagger documented API",
 *     version="1.0.0"
 *   )
 * )
 **/

class IndexController
{
    /**
     * @SWG\Get(
     *   path="/",
     *   summary="test index method",
     *   @SWG\Response(
     *     response=200,
     *     description="hello swagger"
     *   ),
     *   @SWG\Response(
     *     response="default",
     *     description="an ""unexpected"" error"
     *   )
     * )
     */
    public function indexAction()
    {
        $name = isset($_POST['name']) ? $_POST['name'] : 'swagger';
        $return = [
            'code' => 200,
            'msg' => "hello",
            'data' => "hello {$name} !" 
        ];
        exit(json_encode($return));
    }
}