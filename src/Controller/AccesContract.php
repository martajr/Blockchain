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
        //$foo= $model->setExpirationDate("f1046a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459","Expiration Date prueba");
        //$foo = $model->getInvoiceNumber("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459");
        $foo = $model->getDocumentCount();
        //$foo = $model->getDocumentAtIndex(1);
        //$foo = $model->getFiscalYear("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459");
        //$foo = nl2br($model->getAll("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459"));
        //$foo = $model->deleteDocument("f9446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459");
        //$foo = $model->deleteAll();
        /*$foo = $model->insertDocument("f7446a81aefa46a1e257855f2bb955ec07180ad96c47bc85b8faf2656b918459",
            "invoice numbre test","fiscal year test","total test","factoring total test",
            "state test","currency test","payment type test","supplier name test",
            "customer name test","finacial institutio name test","factoring state test",
            "payment term test"," invoice date test","payment date test",
            "expiration date test","factoring expiration date test");*/

        return new Response($foo);


    }


}