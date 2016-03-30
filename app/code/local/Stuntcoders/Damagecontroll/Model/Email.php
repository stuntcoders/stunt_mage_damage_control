<?php

class Stuntcoders_Damagecontroll_Model_Email extends Mage_Core_Model_Abstract
{
    const MAX_UNIQ_CODE_ATTEMPTS = 100;
    const CODE_LENGTH = 32;

    const MAX_MARK = 5;
    const MIN_MARK = 0;

    protected function _construct()
    {
        $this->_init('stuntcoders_damagecontroll/email');
    }

    public function getReviewUrl()
    {
        return Mage::getUrl('order_review/index', array('code' => $this->getCode()));
    }

    public function generateCode()
    {
        for ($i = 0; $i < self::MAX_UNIQ_CODE_ATTEMPTS; $i++) {
            $code = Mage::helper('core')->getRandomString(self::CODE_LENGTH);
            if (!$this->getResource()->getIdByCode($code)) {
                $this->setCode($code);

                return $this;
            }
        }

        throw new Exception('Unable to generate damage controll code');
    }

    protected function _beforeSave()
    {
        if (!$this->getCode()) {
            $this->generateCode();
        }

        if ($this->getMark() < self::MIN_MARK || $this->getMark() > self::MAX_MARK) {
            Mage::throwException('Invalid review mark');
        }
    }

    public function sendOrderReviewMail()
    {
        if ($this->getOrderId()) {
            Mage::getModel('core/email_template')->sendTransactional(
                Mage::helper('stuntcoders_damagecontroll')->getReviewMailTemplate(),
                Mage::helper('stuntcoders_damagecontroll')->getReviewMailSender(),
                $this->getOrder()->getCustomerEmail(),
                $this->getOrder()->getCustomerFirstname(),
                array(
                    'order' => $this->getOrder(),
                    'review' => $this
                )
            );
        }

        return $this;
    }

    public function getOrder()
    {
        if (!$this->getData('order')) {
            $this->setOrder(Mage::getModel('sales/order')->load($this->getOrderId()));
        }

        return $this->getData('order');
    }

    public function sendNotificationEmail()
    {
        if ($this->getOrderId()) {
            Mage::getModel('core/email_template')->sendTransactional(
                Mage::helper('stuntcoders_damagecontroll')->getNotificationMailTemplate(),
                Mage::helper('stuntcoders_damagecontroll')->getNotificationMailSender(),
                Mage::helper('stuntcoders_damagecontroll')->getNotificationMailRecipients(),
                null,
                array(
                    'order' => $this->getOrder(),
                    'review' => $this
                )
            );
        }
    }

    public function getSentOrderIds()
    {
        $orderIds = array();
        foreach ($this->getCollection() as $review) {
            if ($review->getSendingDate()) {
                $orderIds[] = $review->getOrderId();
            }
        }

        return $orderIds;
    }
}
