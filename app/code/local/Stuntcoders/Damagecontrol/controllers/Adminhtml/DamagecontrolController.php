<?php

class Stuntcoders_Damagecontrol_Adminhtml_DamagecontrolController extends Mage_Adminhtml_Controller_Action
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

        $review = Mage::getModel('stuntcoders_damagecontrol/email')->load($reviewId);
        Mage::register('sc_damage_control_review', $review);

        $this->loadLayout();
        $this->renderLayout();
    }
}
