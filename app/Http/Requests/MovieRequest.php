<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class MovieRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $currentYear = Carbon::now();

        return [
            'title' => 'required', 
            'genre' => 'required',
            'year' => 'numeric|min:1900|max:'.$currentYear->year.'', 
            'storyline' => 'max:1000',
            'director'=>'sometimes',
        ];
    }

    public function messages()
    {
        return [
            '*.required'=>'This field is required.',
            'year.max'=>'You cant add movie for next year :) ',

        ];
    }
}
