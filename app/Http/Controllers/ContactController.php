<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(
            [
                'name' => [
                    'required',
                    'string',
                    'min:2',
                    'max:100',
                ],

                'mobile' => [
                    'required',
                    'regex:/^[0-9]{10,15}$/',
                ],

                'email' => [
                    'nullable',
                    'email',
                    'max:255',
                ],

                'course_duration' => [
                    'nullable',
                    'in:3 Months,6 Months,9 Months,1 Year,2 Years,3 Years',
                ],

                'message' => [
                    'nullable',
                    'string',
                    'max:2000',
                ],
            ],
            [
                'name.required' => 'Please enter your full name.',
                'name.min' => 'Please enter a valid full name.',

                'mobile.required' => 'Please enter your mobile number.',
                'mobile.regex' => 'Mobile number must contain between 10 and 15 digits.',

                'email.email' => 'Please enter a valid email address.',

                'course_duration.in' => 'Please select a valid course duration.',

                'message.max' => 'The message cannot exceed 2000 characters.',
            ]
        );

        ContactEnquiry::create([
            'name' => $validated['name'],
            'mobile' => $validated['mobile'],
            'email' => $validated['email'] ?? null,
            'course_duration' => $validated['course_duration'] ?? null,
            'message' => $validated['message'] ?? null,
            'status' => 'new',
        ]);

        return redirect()
            ->route('contact')
            ->with(
                'success',
                'Thank you for contacting JDBS Institute. Our career counseling team will contact you soon.'
            );
    }
}