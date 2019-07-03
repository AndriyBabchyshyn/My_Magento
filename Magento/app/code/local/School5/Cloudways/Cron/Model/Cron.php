<?php
class School5_Cloudways_Cron_Model_Cron
{
    public function crontask()
    {
        // send email
        $mail = Mage::getModel('core/email')
            ->setToEmail('user@email.com')
            ->setBody('Body of the Automated Cron Email Goes Here')
            ->setSubject('Subject: Cron Task (every 5 minutes) '.date("Y-m-d H:i:s"))
            ->setFromEmail('admin@example.com')
            ->setFromName('Your Store Name')
            ->setType('html');

        $mail->send();
    }
}