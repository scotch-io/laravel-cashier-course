<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    
    /**
     * Show the account page
     */
    public function showAccount()
    {
        return view('pages.account');
    }

    /**
     * Update the subscription
     */
    public function updateSubscription(Request $request)
    {

    }

    /**
     * Update the credit card
     */
    public function updateCard(Request $request)
    {

    }

    /**
     * Delete subscription
     */
    public function deleteSubscription(Request $request)
    {
        
    }

}
