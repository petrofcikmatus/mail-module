<?php

namespace MassimoFilippi\MailModule\Service;

use MassimoFilippi\MailModule\Model\Message\MessageInterface;

/**
 * Interface MailServiceInterface
 * @package MassimoFilippi\MailModule\Service
 */
interface MailServiceInterface
{
    /**
     * @param MessageInterface $message
     */
    public function sendMail(MessageInterface $message);
}
