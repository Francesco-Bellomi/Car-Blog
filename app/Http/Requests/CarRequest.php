<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        return [
            
            'model'=>'required|min:5|max:40',
            'img'=>'required|image',
            'description'=>'required|min:30|max:20000000',
            'owner'=>'required|min:3',
            'userimg'=>'required|image',
             



        ];
    }
    public function messages(){

        return[

            'model.required' => 'Manca il Modello bro',
            'model.min' => 'Anche il mio cane ha un nome più lungo dai impegnati di più',
            'model.max' => 'va bene tutto eh ma è un Modello se vuoi scrivere una poesia mettila in descrizione',
            'img.required' => 'Ops, manca l\'immagine',
            'img.image' => 'amico dev\'essere un immagine!',
            'description.required' => 'Hai dimenticato di scriverci qualcosa riguardo l\'auto',
            'description.min' => 'AH tu vorresti postare la tua auto e non ci scrivi su almeno 2 righe su com\'è?',
            'description.max' => 'Amico non vogliamo la scenografia di avatar , scrivi di meno',
            'owner.required' => 'Presentati maleducato , o dovremo chiamarti Ignazio Barbarazzi ',
            'owner.min' => 'Va bene eh ma a meno che non ti chiami Joe non hai giustificazioni ,mettine un più lungo di nome',
            'owner.max' => 'seeeeeeeeeeeeee vabbeh neanche in africa hanno nomi così lunghi , altro si',
            'userimg.required' => 'Manca anche la tua immagine , non vorrai fare il timido PER god',

        ];

    }
}
