<?php
namespace Serfhos\PowermailFromOverride\Signal;

use In2code\Powermail\Domain\Model\Mail;
use In2code\Powermail\Utility\ConfigurationUtility;
use TYPO3\CMS\Core\Mail\MailMessage;

/**
 * SignalSlot: Extend SendMailService functions
 *
 * @package Serfhos\PowermailFromOverride\Signal
 */
class SendMailServiceSignal
{

    /**
     * Do our magic before email is sent!
     *
     * @param MailMessage $message
     * @param array $email
     * @param Mail $mail
     * @param array $settings
     * @param string $type
     * @return void
     */
    public function beforeSend(MailMessage $message, array $email, Mail $mail, array $settings, $type)
    {
        if ((bool) $settings['moveFromToReplyTo']['enabled'] === true) {
            if (empty($message->getReplyTo())) {
                $message->setReplyTo($message->getFrom());
                $message->setFrom($this->getConfiguredFromSettings($settings));
            }
        }
    }

    /**
     * Get configured or default 'email from' setting
     *
     * @param array $settings
     * @return array
     */
    protected function getConfiguredFromSettings($settings)
    {
        $from = (array) $settings['moveFromToReplyTo']['from'];
        $name = ($from['name']) ? $from['name'] : ConfigurationUtility::getDefaultMailFromName();
        $email = ($from['email']) ? $from['email'] : ConfigurationUtility::getDefaultMailFromAddress();
        return array($email => $name);
    }
}