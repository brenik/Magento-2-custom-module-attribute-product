<?php
/**
 * Copyright © Elogic.
 * 2020.09.22
 */
namespace Elogic\Vendor\Ui\Component\Listing\Column;
use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Magento\Framework\UrlInterface;
class HTMLLink extends Column
{
    const EDIT = 'vendor/vendors/edit';

    protected $urlBuilder;

    private $editUrl;

    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        UrlInterface $urlBuilder,
        array $components = [],
        array $data = [],
        $editUrl = self::EDIT
    ) {
        $this->urlBuilder = $urlBuilder;
        $this->editUrl = $editUrl;

        parent::__construct($context, $uiComponentFactory, $components, $data);
    }
    public function prepareDataSource(array $dataSource){
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $name = $this->getData('name');
                if (isset($item['id'])) {
                    $url = $this->urlBuilder->getUrl($this->editUrl, ['id' => $item['id']]);
                    $link = '<p><a href="' . $url . '">' . $item['name'] . '</a></p>';
                    $item[$name] = $link;
                }
            }
        }
        return $dataSource;
    }
}