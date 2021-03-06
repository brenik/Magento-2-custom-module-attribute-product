<?php
/**
 * Copyright © Elogic.
 * 2020.09.22
 */
namespace Elogic\Vendor\Controller\Adminhtml\Vendors;
use \Magento\Backend\App\Action;
use \Magento\Backend\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;
class Index extends Action {
    const ADMIN_RESOURCE = 'Elogic_Vendor::vendors';
    /**
     * @var PageFactory
     */
    protected $_resultPageFactory;
    /**
     * @var
     */
    protected $_resultPage;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory){
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute(){
        $this->_setPageData();
        return $this->getResultPage();
    }

    /**
     * @return bool
     */
    protected function _isAllowed(){
        return $this->_authorization->isAllowed('Elogic_Vendor::vendors');
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function getResultPage(){
        if (is_null($this->_resultPage)){
            $this->_resultPage = $this->_resultPageFactory->create();
        }
        return $this->_resultPage;
    }

    /**
     * @return $this
     */
    protected function _setPageData(){
        $resultPage = $this->getResultPage();
        $resultPage->setActiveMenu('Elogic_Vendor::vendors');
        $resultPage->getConfig()->getTitle()->prepend((__('Vendors')));
        $resultPage->addBreadcrumb(__('Vendor'), __('Vendor'));
        $resultPage->addBreadcrumb(__('Vendors'), __('Vendors'));
        return $this;
    }
}