<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class MemberRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $rule = ['name' => 'required|max:191'];

        if ($this->id > 0) {
            $rule['email'] = 'required|email|unique:members,email,' . $this->id . '|max:191';

            if ($this->password != '') {
                $rule['password'] = 'required|min:6|confirmed';
            }

        } else {
            $rule['email'] = 'required|email|unique:members,email|max:191';
            $rule['password'] = 'required|min:6|confirmed';
        }

        return $rule;

    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
