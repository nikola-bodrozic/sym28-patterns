<?php

namespace AppBundle;

use AppBundle\Mailer;

class TweetSender
{
    private $mailer;

    /**
     * TweetSender constructor.
     * @param \AppBundle\Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * TweetSender constructor.
     */

    public function foo()
    {
        echo "<br>from " . __METHOD__ . " I state: ";
        echo $this->mailer->getX();
    }
}