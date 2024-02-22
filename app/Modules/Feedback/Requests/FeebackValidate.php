<?php

namespace App\Modules\Feedback\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class FeebackValidate extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
           'lastname' => 'required|string',
           'firstname' => 'required|string',
           'email' => 'required|email',
           'theme' => 'required|string',
           'message' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'lastname' => __('Feedback::messages.required'),
            'firstname' => __('Feedback::messages.required'),
            'email' => __('Feedback::messages.required'),
            'theme' => __('Feedback::messages.required'),
            'message' => __('Feedback::messages.required'),
        ];
    }

    public function attributes()
    {
        return [
            'lastname' => __('Feedback::attributes.lastname'),
            'firstname' => __('Feedback::attributes.firstname'),
            'email' => __('Feedback::attributes.email'),
            'theme' => __('Feedback::attributes.theme'),
            'message' => __('Feedback::attributes.message'),
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Запрос не прошел валидацию',
            'data'      => $validator->errors()
        ],400));
    }
}
