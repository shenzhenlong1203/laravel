<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     * 验证是否是自己创建的文章，自己才有操作权限
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * 验证规则，通过才能继续下去
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required  | min :3',
            'content' => 'required',
            'introduction' => 'required'
        ];
    }
}
