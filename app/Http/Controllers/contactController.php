<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    public function create_contact(Request $request)
    {
        // Retrieve data from form submission
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');

        // Insert data into database using query builder
        DB::table('contact')->insert([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
        ]);

        // Redirect back to the contact form with success message
        return redirect()->back()->with('success', 'Contact added successfully.');
    }
}