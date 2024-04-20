<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index()
    {
        $accounts = BankAccount::all();
        return view('dashboard.accounts.index', compact('accounts'));
    }

    public function create()
    {
        // Pass an empty instance to reuse the edit form for creation
        $account = BankAccount::where('id', 1)->firstOrFail();
        return view('dashboard.accounts.edit', compact('account'));
    }



    public function show(BankAccount $account)
    {
        $account = BankAccount::where('id', 1)->firstOrFail();
        return view('dashboard.accounts.show', compact('account'));
    }

    public function edit(BankAccount $account)
    {
        $account = BankAccount::where('id', 1)->firstOrFail();
        return view('dashboard.accounts.edit', compact('account'));
    }

    public function update(Request $request, BankAccount $account)
    {
        $validatedData = $request->validate([
            'account_name' => 'required|max:255',
            'account_number' => 'required|numeric',
            'bank_name' => 'required|max:255',
            'whatsapp_number' => 'required|numeric'
        ]);

        $account->update($validatedData);
        return redirect()->route('accounts.create');
    }

    public function destroy(BankAccount $account)
    {
        $account->delete();
        return redirect()->route('accounts.index');
    }
}
