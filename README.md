# TYPO3 Extension - Feature: Powermail: Static From in Mails
  * Description: Use reply-to as default from address, set static value when configured
  * Extension key: powermail_from_override
  * TER: http://typo3.org/extensions/repository/view/powermail_from_override


# Usage
In constants:

    plugin.tx_powermail.settings.moveFromToReplyTo {
        enabled = 1
        from {
            name = Serfhos Auto-Mailer
            email = no_reply@serfhos.nl
        }
    }

