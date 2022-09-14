<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class BlogStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
  // protected $redirect = 'http://localhost:8000/api/blogs/';

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

        $rules=  [
           'title'=>['required',  'max:1'],
        ];
/* if ($this->wantsJson()) {
    $rules[]=['title'=>'required'];
} */
return $rules;
    }


    public function messages(){
    return [
        'title.required' => 'A title is required',
        'title.string' => 'title is not..string',
        'title.max' => 'title > max..',
    ];
}





}
