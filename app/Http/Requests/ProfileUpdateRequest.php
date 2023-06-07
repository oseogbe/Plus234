<?php

namespace App\Http\Requests;

use App\Models\EventPlanner;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'username' => ['string', 'max:255', Rule::unique(EventPlanner::class)->ignore($this->user()->id)],
            'email' => ['email', 'max:255', Rule::unique(EventPlanner::class)->ignore($this->user()->id)],
            'bio' => ['nullable', 'string', 'max: 255'],
            'dp' => ['nullable', 'mimes:png,jpg,jpeg', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'dp.mimes' => 'The display image must be a PNG, JPG, or JPEG image.'
        ];
    }

    // protected function passedValidation()
    // {
    //     if (request()->hasFile('dp')) {
    //         $file_name = time() . '_' . request()->file('dp')->getClientOriginalName();
    //         $file_path = request()->file('dp')->storeAs('dp', $file_name);
    //         $this->merge(['dp' => $file_path]);
    //     }
    // }
}
