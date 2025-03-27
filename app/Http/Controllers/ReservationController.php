<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use App\Models\Activity;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function showReservation($type, $id)
    {
        $model = $this->getModelByType($type);
        
        $idColumn = $type === 'homestays' ? 'homestay_id' : 'activity_id';
        
        $item = $model::where($idColumn, $id)->firstOrFail();
    
        return view('reservations.create', [
            'item' => $item,
            'type' => $type
        ]);
    }

    public function processReservation(Request $request, $type, $id)
    {
        $model = $this->getModelByType($type);
        $item = $model::findOrFail($id);
    
        $validated = $request->validate([
            'check_in_date' => 'required|date|after:today',
            'check_out_date' => $type === 'homestays' ? 'required|date|after:check_in_date' : 'nullable',
            'guests' => 'required|integer|min:1|max:10',
            'full_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',

        ]);
    
        if ($type === 'activities') {
            return redirect()->route('activities.show', ['activity' => $item->activity_id])
                             ->with('success', 'Reservation request sent! We will contact you soon.');
        } elseif ($type === 'homestays') {
            return redirect()->route('homestays.show', ['homestay' => $item->homestay_id])
                             ->with('success', 'Reservation request sent! We will contact you soon.');
        }
    }

    private function getModelByType($type)
    {
        return match($type) {
            'homestays' => Homestay::class,
            'homestay' => Homestay::class,
            'activities' => Activity::class,
            'activity' => Activity::class,
            default => throw new \Exception('Invalid reservation type')
        };
    }
}