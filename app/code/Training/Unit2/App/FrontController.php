<?php

namespace Training\Unit2\App;

class FrontController extends \Magento\Framework\App\FrontController
{
    /**
     * @var \Magento\Framework\App\RouterList
     */
    protected $_routerList;
    /**
     * @var \Magento\Framework\App\Response\Http
     */
    protected $response;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param \Magento\Framework\App\RouterList    $routerList
     * @param \Magento\Framework\App\Response\Http $response
     * @param \Psr\Log\LoggerInterface             $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        parent::__construct($routerList, $response);
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    /**
     * @param \Magento\Framework\App\RequestInterface $request
     *
     * @return
     * \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        /*foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        $this->_routerList->rewind();*/
        return parent::dispatch($request);
    }
}