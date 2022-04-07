<?php
namespace Codilar\Simpleshipping\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\App\Http\Context as AuthContext;
class Index extends Action
{
    private $customerSession;
    private $authContext;
    public function __construct(Context $context, Session $session, AuthContext $authContext)
    {
        $this->customerSession = $session;
        $this->authContext = $authContext;
        parent::__construct($context);
    }
    public function execute()
    {
        // by using Session model
        if ($this->customerSession->isLoggedIn()) 
        {
            echo" customer login code";
        }
        else
        {
            echo" customer not login";
        }
    }
}