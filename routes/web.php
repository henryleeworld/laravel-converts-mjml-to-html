<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('mail/html', [MailController::class, 'toHtml']);
