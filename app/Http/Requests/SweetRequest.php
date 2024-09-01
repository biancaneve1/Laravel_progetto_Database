<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SweetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // autorizziamo l'utente a fare questa richiesta, cambio false in true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           'title'=>'required|min:3', //un titolo di minimo 3 caratteri 
           'producer'=>'required|max:30',
           'description'=>'required|min:5|max:3000',
           'price'=>'required|numeric',
           'cover'=>'image|mimes:pnj,jpg,jpeg,webp'
        ];
    }


public function messages(){

return[
    //alert customizzati se non voglio i messaggi preimpostati in lingua inglese che mette a disposizione Laravel
'title.required'=>'il titolo è richiesto',
'producer.required'=>'il produttore è richiesto',
'price.required'=>'il prezzo è richiesto',
'cover.required'=>'inserisci l\immagine',
'description.required'=>'la descrizione è richiesta',

'title.min'=>'il titolo deve avere un minimo di 3 caratteri',
'producer.max'=>'il produttore deve avere al massimo 30 caratteri',
'description.min'=>'la descrizione deve avere almeno 5 caratteri',
'description.max'=>'la descrizione deve avere al massimo 3000 caratteri',
'price.numeric'=>'il dato dev\essere di tipo numerico',
'cover.image'=>'il file deve essere un\immagine',
'cover.mimes'=>'il file deve avere queste estensioni :values',
];

}

}
