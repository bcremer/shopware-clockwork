<?php
namespace Shopware\Plugins\ShopwareClockwork\Clockwork\DataSource;

use Clockwork\DataSource\DataSource;
use Clockwork\Request\Request;

class ShopwareDataSource extends DataSource
{
    protected $context;

    /**
     * ShopwareDataSource constructor.
     * @param $context
     */
    public function __construct($context)
    {
        $this->context = $context;
    }


    /**
     * the entry-point. called by Clockwork itself.
     */
    public function resolve(Request $request)
    {
        $data = $this->context->getData();
//        foreach ($data as $name => $item) {
//            $request->{$name} =  $this->removePasswords(
//                $this->replaceUnserializable($item)
//            );
//        }
        $request->viewsData = [
            'name' => [1,2,3,4],
            'test' => 'avav'
        ];
        return $request;
    }
}