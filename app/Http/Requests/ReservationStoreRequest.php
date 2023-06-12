<?php

namespace App\Http\Requests;

use App\Models\Table;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use Illuminate\Foundation\Http\FormRequest;

class ReservationStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $table = Table::find($this->table_id);
        return [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'reservation_date' => ['required', 'date', new DateBetween(), new TimeBetween()],
            'phone_number' => ['required'],
            'table_id' => ['required'],
            'guest_number' => ['required','max:' . $table->guest_number],
        ];
    }

}
