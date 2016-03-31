<?php

class Stuntcoders_Damagecontrol_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $reviewCode = $this->getRequest()->getParam('code');

        if (!$reviewCode) {
            return $this->_redirect('/');
        }

        $reviewId = Mage::getSingleton('stuntcoders_damagecontrol/email')
            ->getResource()
            ->getIdByCode($reviewCode);

        if (!$reviewId) {
            return $this->_redirect('/');
        }

        $review = Mage::getModel('stuntcoders_damagecontrol/email')->load($reviewId);

        if ($review->getMark() > 0) {
            Mage::getSingleton('core/session')->addError($this->__('Order already reviewed'));
            return $this->_redirect('/');
        }

        $review->setVisits($review->getVisits() + 1)->save();

        Mage::register('sc_damage_control', $review);

        $this->loadLayout();
        $this->renderLayout();

        return true;
    }

    public function setMarkAction()
    {
        $mark = $this->getRequest()->getParam('mark');
        $code = $this->getRequest()->getParam('code');
        $review = Mage::getModel('stuntcoders_damagecontrol/email')->load($code, 'code');

        if (!$this->_validateFormKey()) {
            return $this->_redirect('/');
        }

        if (!$code) {
            return $this->_redirect('/');
        }

        try {
            $review->setMark($mark)->setReviewDate(Mage::getModel('core/date')->date())->save();
        } catch (Mage_Core_Exception $e) {
            return $this->getResponse()->setBody(json_encode(array('success' => false)));
        }

        return $this->getResponse()->setBody(json_encode(array('success' => true)));
    }

    public function setCommentAction()
    {
        if (!$this->_validateFormKey()) {
            return $this->_redirect('/');
        }

        $comment = $this->getRequest()->getParam('comment');
        $code = $this->getRequest()->getParam('code');

        if (!$code) {
            return $this->_redirect('/');
        }

        try {
            $review = Mage::getModel('stuntcoders_damagecontrol/email')
                ->load($code, 'code');

            if ($review->getId()) {
                $review->setReview()
                    ->setComment($comment)
                    ->save()
                    ->sendNotificationEmail();

                Mage::getSingleton('core/session')->addSuccess('Thank you for your time');
            }

        } catch (Mage_Core_Exception $e) {
            Mage::getSingleton('core/session')->addError('We were unable to save your review. Please try later.');
        }

        return $this->_redirect('/');
    }

    public function readMailAction()
    {
        $code = $this->getRequest()->getParam('code');

        if ($code) {
            $review = Mage::getModel('stuntcoders_damagecontrol/email')
                ->load($code, 'code');

            if ($review->getId()) {
                $review->setReadingDate(Mage::getModel('core/date')->date())->save();
            }
        }

        $this->getResponse()->setHeader('Content-Type', 'image/gif', true);
        $this->getResponse()->setBody(base64_decode('R0lGODlhAQABAJAAAP8AAAAAACH5BAUQAAAALAAAAAABAAEAAAICBAEAOw=='));
    }
}
