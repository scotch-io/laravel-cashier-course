<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AccountController extends Controller
{
    
    /**
     * Show the account page
     */
    public function showAccount(Request $request)
    {
        $user     = $request->user();
        $invoices = $user->subscribed('main') ? $user->invoices() : null;
        return view('pages.account', compact('user', 'invoices'));
    }

    /**
     * Update the subscription
     */
    public function updateSubscription(Request $request)
    {
        $user = $request->user();

        // get the plan
        $plan = $request->input('plan');        

        // if a user is cancelled
        if ($user->subscribed('main') and $user->subscription('main')->onGracePeriod()) {

            if ($user->onPlan($plan)) {
                // resume the plan
                $user->subscription('main')->resume();
            } else {
                // resume and switch plan
                $user->subscription('main')->resume()->swap($plan);
            }

        // if not cancelled, and switch
        } else {
            // change the plan
            $user->subscription('main')->swap($plan);
        }

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
     * Download an invoice
     */
    public function downloadInvoice($invoiceId)
    {
        return Auth::user()->downloadInvoice($invoiceId, [
            'vendor'  => 'Animalgram',
            'product' => 'Monthly Subscription'
        ]);
    }

    /**
     * Delete subscription
     */
    public function deleteSubscription(Request $request)
    {
        $user = $request->user();

        // cancel the subscription
        $user->subscription('main')->cancel();

        return redirect('account')->with(['success' => 'Subscription cancelled.']);
    }

}
