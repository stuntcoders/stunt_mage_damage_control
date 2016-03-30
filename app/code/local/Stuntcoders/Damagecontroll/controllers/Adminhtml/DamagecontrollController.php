<?php

class Stuntcoders_Damagecontroll_Adminhtml_DamagecontrollController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function viewAction()
    {
        $reviewId = $this->getRequest()->getParam('review_id');

        if (!$reviewId) {
            return $this->_redirect('*/*/index');
        }

        $review = Mage::getModel('stuntcoders_damagecontroll/email')->load($reviewId);
        Mage::register('sc_damage_controll_review', $review);

        $this->loadLayout();
        $this->renderLayout();
    }
}
