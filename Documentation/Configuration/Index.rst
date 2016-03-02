.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt
.. index:: Configuration

Screenshots
===========

.. only:: html

.. _update-script:

Possible Setup
--------------

.. t3-field-list-table::
 :header-rows: 1

 - :Constants:
      Constants (should be prefixed with plugin.tx_powermail.settings.)
   :Description:
      Description
   :Type:
      Type
   :Default:
      Default

 - :Constants:
      moveFromToReplyTo.enabled
   :Description:
      Functionality enabled: Move <from> to <mailto> with fixed from mail
   :Type:
      bool
   :Default:
      0


 - :Constants:
      moveFromToReplyTo.moveFromToReplyTo.from.name
   :Description:
      Static From: Name (when enabled)
   :Type:
      text
   :Default:


 - :Constants:
      moveFromToReplyTo.moveFromToReplyTo.from.email
   :Description:
      Static From: Email (when enabled)
   :Type:
      text
   :Default:



Example constants
^^^^^^^^^^^^^^^^^

.. code-block:: text

    ################################################################
    # Example setup for overriding <from> and presetting <mailto:> #
    ################################################################
    plugin.tx_powermail {
        settings {
            moveFromToReplyTo {
                enabled = 1
                from {
                    name = Serfhos Auto-Mailer
                    email = no_reply@serfhos.nl
                }
            }
        }
    }