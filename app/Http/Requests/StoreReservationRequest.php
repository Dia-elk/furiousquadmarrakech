<?php

namespace App\Http\Requests;


use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;


class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $yesterday = Carbon::yesterday();
        //dd('in');
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'min:7'],
            'name' => ['required', 'string', 'max:255', 'min:3'],
            'country' => ['required', 'string', 'max:255', 'min:3'],
            'driver' => ['required', 'numeric', 'min:1', 'max:255'],
            'passenger' => ['numeric', 'min:0', 'max:255'],
            'child' => ['numeric', 'min:0', 'max:255'],
            'date' => ['required', 'date'],
            'time' => ['required', 'string'],
        ];
    }
}
