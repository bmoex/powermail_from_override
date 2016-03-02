# TYPO3 Extension - Feature: Powermail: Static From in Mails
  * Description: Use reply-to as default from address, set static value when configured
  * Extension key: powermail_from_override
  * TER: http://typo3.org/extensions/repository/view/powermail_from_override


Since the upcoming Sender Policy Framework, SPF, the mails are easily placed into the spam folder of the receiver. Therefor you can force the <from:> sender to make sure the mail
can be send from the invoked server.

For more information check: https://en.wikipedia.org/wiki/Sender_Policy_Framework

# Usage
In constants:

    plugin.tx_powermail.settings.moveFromToReplyTo {
        enabled = 1
        from {
            name = Serfhos Auto-Mailer
            email = no_reply@serfhos.nl
        }
    }

