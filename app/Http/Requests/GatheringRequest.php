<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GatheringRequest extends FormRequest
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
            'title' => 'required|min:5|max:40',
            'img' => 'required|image',
            'description' => 'required|min:30|max:20000000',
            'location' => 'required|min:10|max:200',
            'date' => 'required|date',

           
        ];
    }
    public function messages(){

        return[

            'title.required' => 'Manca il titolo bro',
            'title.min' => 'Anche il mio cane ha un nome più lungo dai impegnati di più',
            'title.max' => 'va bene tutto eh ma è un titolo se vuoi scrivere una poesia mettila in descrizione',
            'img.required' => 'Ops, manca l\'immagine',
            'img.image' => 'amico dev\'essere un immagine!',
            'description.required' => 'Hai dimenticato di scriverci qualcosa riguardo l\'evento',
            'description.min' => 'AH tu vorresti proporre un evento e non ci scrivi su almeno 2 righe su come vuoi strutturarlo?',
            'description.max' => 'Amico non vogliamo la scenografia di avatar , scrivi di meno',
            'location.required' => 'Si Amico ma.... DOVE?!',
            'location.min' => 'mettici almeno la via amico se no ti parcheggiamo in casa',
            'date.required' => 'quando hai detto che è? ah no non lo hai detto',
            'location.max' => 'seeeeeeeeeeeeee vabbeh neanche in africa hanno posti con un nome così lungo',

        ];

    }
}
