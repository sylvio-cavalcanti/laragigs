<?php

namespace App\Http\Requests\Listings;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class ListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            /* 'company' Aside from being required, the value in this field must be unique in the company column of the listings table */
            'company' => ['required', Rule::unique('listings', 'company')],
            'title' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => ['required', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'company.required' => 'Company name is required',
            'company.unique' => 'This Company name has already been taken.',
            'title.required' => 'Title is required',
            'location.required' => 'Location is required',
            'email.required' => 'Email is required',
            'website.required' => 'Website is required',
            'tags.required' => 'Tag is required',
            'description.required' => 'Description is required',
        ];
    }
}
