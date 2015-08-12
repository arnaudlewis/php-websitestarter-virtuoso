<?php

namespace Starter\Mail;

function mailgun_pubkey()
{
    global $WPGLOBAL;
    $prismic = $WPGLOBAL['prismic'];

    return $prismic->config('mailgun.pubkey');
}
