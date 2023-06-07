<?php

namespace App\Http\Requests;

use App\Models\EventPlanner;
use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user() instanceof EventPlanner;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => ['required', 'exists:categories,id'],
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'location' => ['required', 'string'],
            'tags' => ['required', 'array', 'max:5'],
            'tags.*' => ['string'],
            'poster' => ['required', 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'post_at' => ['required', 'date'],
            'schedule' => ['required', 'array'],
            'schedule.*.startdate' => ['required', 'date'],
            'schedule.*.enddate' => ['required', 'date'],
            'schedule.*.starttime' => ['required', 'string'],
            'schedule.*.endtime' => ['required', 'string'],
            'pricings' => ['nullable', 'array'],
            'pricings.*.title' => ['string'],
            'pricings.*.description' => ['nullable', 'string'],
            'pricings.*.cost' => ['numeric'],
            'pricings.*.pay_before' => ['nullable', 'date', 'date_format:Y-m-d H:i:s'],
        ];
    }
}
