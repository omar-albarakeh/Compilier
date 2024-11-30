<?php

namespace App\Http\Controllers;

use App\Mail\CollaborationInvitationMail;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function sendInvitation(Request $request)
    {
        $request->validate([
            'recipient_email' => 'required|email|unique:users,email',
        ]);

        $token = Str::random(32);

        $invitation = Invitation::create([
            'sender_id' => auth()->id(),
            'recipient_email' => $request->recipient_email,
            'token' => $token,
            'expires_at' => now()->addDays(7),
        ]);

        $invitationLink = url("/invitation/accept?token={$token}");

        Mail::to($request->recipient_email)->send(new CollaborationInvitationMail($invitationLink));

        return response()->json([
            'message' => 'Invitation sent successfully!',
            'invitation' => $invitation,
        ]);
    }
}
