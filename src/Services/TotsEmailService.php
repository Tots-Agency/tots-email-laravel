<?php

namespace Tots\Email\Services;

interface TotsEmailService
{
    public function send($email, $template, $params = []);
    public function sendRaw($email, $subject, $html, $params = [], $plainText = '');
}
