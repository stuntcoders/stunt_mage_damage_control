<?php

class Stuntcoders_Damagecontroll_Model_Observer
{
    public function sendDamageControllEmail()
    {
        $mailDelayDate = $this->dayDifferenceToDate(Mage::helper('stuntcoders_damagecontroll')->getReviewMailDelay());
        $oldOrderDate = $this->dayDifferenceToDate(Mage::helper('stuntcoders_damagecontroll')->getOldReviewLimit());
        $alreadyMailed = Mage::getModel('stuntcoders_damagecontroll/email')->getSentOrderIds();

        $statuses = explode(',', Mage::getStoreConfig('stuntcoders_damagecontroll/general_options/order_stages'));
        $orders = Mage::getModel('sales/order')->getCollection()
            ->addAttributeToFilter('status', array('in' => $statuses))
            ->addAttributeToFilter('created_at', array('lt' => $mailDelayDate))
            ->addAttributeToFilter('created_at', array('gt' => $oldOrderDate));

        if ($alreadyMailed) {
            $orders->addAttributeToFilter('entity_id', array('nin' => $alreadyMailed));
        }

        if ($orders->getSize() > 0) {
            $translate = Mage::getSingleton('core/translate');
            $translate->setTranslateInline(false);

            foreach ($orders as $order) {
                Mage::getModel('stuntcoders_damagecontroll/email')
                    ->setOrderId($order->getId())
                    ->setSendingDate(Mage::getModel('core/date')->date())
                    ->save()
                    ->sendOrderReviewMail();
            }

            $translate->setTranslateInline(true);
            $translate->setTranslateInline(true);
        }
    }

    private function dayDifferenceToDate($days)
    {
        return Mage::getModel('core/date')->date(
            'Y-m-d H:i:s',
            Mage::getModel('core/date')->timestamp() - $days * 60 * 60 * 24
        );
    }
}
