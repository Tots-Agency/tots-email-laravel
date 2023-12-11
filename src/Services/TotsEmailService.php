<?php

namespace Tots\Email\Services;

interface TotsEmailService
{
    public function send($email, $template, $params = []);
}
