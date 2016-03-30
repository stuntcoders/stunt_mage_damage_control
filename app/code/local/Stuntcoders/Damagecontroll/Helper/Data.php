<?php

class Stuntcoders_Damagecontroll_Helper_Data extends Mage_Core_Helper_Abstract
{
    const SEND_AFTER_PATH = 'stuntcoders_damagecontroll/general_options/send_after';
    const IGNORE_OLD_ORDERS_PATH = 'stuntcoders_damagecontroll/general_options/ignore_old_orders';

    const MINIMAL_POSITIVE_MARK_SYSTEM_PATH = 'stuntcoders_damagecontroll/rating_options/marks';

    const REVIEW_EMAIL_TEMPLATE_PATH = 'stuntcoders_damagecontroll/schedule_options/email_template';
    const REVIEW_EMAIL_SENDER = 'stuntcoders_damagecontroll/schedule_options/email_identity';

    const NOTIFICATION_EMAIL_PATH = 'stuntcoders_damagecontroll/notification_options/email_notification_template';
    const NOTIFICATION_EMAIL_SENDER = 'stuntcoders_damagecontroll/notification_options/email_notification_sender';
    const NOTIFICATION_EMAIL_RECIPIENT = 'stuntcoders_damagecontroll/notification_options/email_notification_recipient';

    const SOCIAL_MEDIA_MESSAGE_PATH = 'stuntcoders_damagecontroll/social_media_options/social_media_message';
    const FACEBOOK_PATH = 'stuntcoders_damagecontroll/social_media_options/facebook_link';
    const GOOGLE_PLUS_PATH = 'stuntcoders_damagecontroll/social_media_options/google_plus_link';

    public function getReviewMailDelay()
    {
        return Mage::getStoreConfig(self::SEND_AFTER_PATH);
    }

    public function getOldReviewLimit()
    {
        return Mage::getStoreConfig(self::IGNORE_OLD_ORDERS_PATH);
    }

    public function getMinimalPositiveMark()
    {
        return Mage::getStoreConfig(self::MINIMAL_POSITIVE_MARK_SYSTEM_PATH);
    }

    public function getReviewMailTemplate()
    {
        return Mage::getStoreConfig(self::REVIEW_EMAIL_TEMPLATE_PATH);
    }

    public function getReviewMailSender()
    {
        return Mage::getStoreConfig(self::REVIEW_EMAIL_SENDER);
    }

    public function getNotificationMailTemplate()
    {
        return Mage::getStoreConfig(self::NOTIFICATION_EMAIL_PATH);
    }

    public function getNotificationMailSender()
    {
        return Mage::getStoreConfig(self::NOTIFICATION_EMAIL_SENDER);
    }

    public function getNotificationMailRecipients()
    {
        return explode(',', Mage::getStoreConfig(self::NOTIFICATION_EMAIL_RECIPIENT));
    }

    public function getSocialMediaMessage()
    {
        return Mage::getStoreConfig(self::SOCIAL_MEDIA_MESSAGE_PATH);
    }

    public function getFacebookLink()
    {
        return Mage::getStoreConfig(self::FACEBOOK_PATH);
    }

    public function getGooglePlusLink()
    {
        return Mage::getStoreConfig(self::GOOGLE_PLUS_PATH);
    }
}