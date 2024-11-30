<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;

Route::middleware('auth:sanctum')->post('/invitations/send',
 [InvitationController::class, 'sendInvitation']);
