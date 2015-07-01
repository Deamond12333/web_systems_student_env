<?php
$r = Router::Instance();

$r->get('^\/account(\/?)$', 'account_list');
$r->get('^\/account\/(\d+)$', 'account_view');

$r->post('^\/account\/(\d+)\/add$', 'account_add');
$r->post('^\/account\/(\d+)\/delete$', 'account_delete');
?>