<?php
/**
 * Created by PhpStorm.
 * User: Marta
 * Date: 04/01/2018
 * Time: 13:15
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\ApiModel;

class AccesContract
{
    /**
     * @Route("/access")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/test")
     */
    public function test()
    {
        $model= new ApiModel();
         //$foo= $model->setExpirationDate("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459","Expiration Date prueba");
        //$foo = $model->getInvoiceNumber("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459");
        //$foo = $model->getDocumentCount();
        $foo = $model->getDocumentAtIndex(1);
        return new Response($foo);


    }


}