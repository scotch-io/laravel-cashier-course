<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
{
    
    /**
     * Show the account page
     */
    public function showAccount(Request $request)
    {
        $user = $request->user();
        return view('pages.account', compact('user'));
    }

    /**
     * Update the subscription
     */
    public function updateSubscription(Request $request)
    {
        $user = $request->user();

        // get the plan
        $plan = $request->input('plan');

        // change the plan
        $user->subscription('main')->swap($plan);

        return redirect('account')->with(['success' => 'Subscription updated.']);
    }

    /**
     * Update the credit card
     */
    public function updateCard(Request $request)
    {
        // get the user
        $user = $request->user();

        // get the cc token
        $ccToken = $request->input('cc_token');

        // update the card
        $user->updateCard($ccToken);

        // return a redirect back to account
        return redirect('account')->with(['success' => 'Credit card updated.']);
    }

    /**
     * Delete subscription
     */
    public function deleteSubscription(Request $request)
    {

    }

}
