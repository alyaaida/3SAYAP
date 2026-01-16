<?php


namespace App\Http\Controllers\Public;


use App\Enums\OrderStatusEnum;
use App\Enums\ReservationStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use App\Models\CustomerOrderDetail;
use App\Models\DiningTable;
use App\Models\FoodCategory;
use App\Models\FoodMenu;
use App\Models\PromotionDiscount;
use App\Models\PromotionEvent;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;


class PublicController extends Controller
{
    public function home() : View
    {
        $menu = FoodMenu::all();
        return view('public.home', compact('menu'));
    }


    public function menu() : View
    {
        $menu = FoodMenu::all();
        $category = FoodCategory::all();
        return view('public.menu', compact('menu', 'category'));
    }


    public function about() : View
    {
        return view('public.about');
    }


    public function promotion() : View
    {
        $currentMonth = Carbon::now();
        $monthBefore = Carbon::now()->subMonth();


        $promotion = PromotionEvent::where(function ($query) use ($currentMonth, $monthBefore) {
            $query->whereMonth('event_date', '=', $currentMonth)
                  ->orWhereMonth('event_date', '=', $monthBefore);
        })->get();


        $coupon = [];
        foreach ($promotion as $event) {
            $coupon[$event->id] = PromotionDiscount::where('event_id', $event->id)->get();
        }


        $menu = FoodMenu::where('price', '>', 27.00)->get();


        return view('public.promotion', compact('promotion', 'coupon', 'menu'));
    }


    public function reservation() : View
    {
        return view('public.reservation');
    }


    public function search(Request $request) : View
    {
        $keyword = $request->input('search');


        $search = FoodMenu::where(function ($query) use ($keyword) {
            $query->where('name', 'like', "%$keyword%")
                  ->orWhere('price', 'like', "%$keyword%")
                  ->orWhereHas('foodCategory', function ($q) use ($keyword) {
                      $q->where('name', 'like', "%$keyword%");
                  });
        })->get();


        return view('public.menu', ['menu' => $search]);
    }


    /**
     * Add to cart / create order (AJAX)
     */
    public function createOrder(Request $request) : JsonResponse
    {
        $cartItem   = $request->input('cartData');
        $totalPrice = $request->input('totalAmount');
        $tableNumber = $request->input('table_number');
        $contact = $request->input('customer_contact');


        $table = DiningTable::where('table_name', $tableNumber)->first();


        if (!$table) {
            return response()->json(['validation-error-message' => 'Invalid table number'], 422);
        }


        if ($table->isOccupied) {
            return response()->json(['validation-error-message' => 'Table already occupied'], 422);
        }


        $table->update(['isOccupied' => true]);


        $order = CustomerOrder::create([
            'dining_table_id' => $table->id,
            'order_total_price' => $totalPrice,
            'isPaid' => false,
            'order_status' => OrderStatusEnum::Preparing,
            'customer_contact' => $contact,
        ]);


        foreach ($cartItem as $item) {
            CustomerOrderDetail::create([
                'order_id' => $order->id,
                'food_id' => $item['id'],
                'quantity' => $item['quantity'],
                'total_price' => $item['eachTotalPrice'],
            ]);
        }


        return response()->json(['success-message' => 'Order placed successfully']);
    }


    /**
     * Reservation
     */
    public function makeReservation(Request $request) : RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'book_name' => 'required|max:255',
            'book_email' => 'required|email',
            'book_phone' => 'required|numeric',
            'guest_number' => 'required|numeric|min:2',
            'book_date' => 'required|date|after:today',
            'book_time' => 'required|date_format:H:i',
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        Reservation::create([
            'reservation_name' => $request->book_name,
            'reservation_email' => $request->book_email,
            'reservation_contact' => $request->book_phone,
            'reservation_attendees' => $request->guest_number,
            'reservation_date' => $request->book_date,
            'reservation_time' => $request->book_time,
            'reservation_status' => ReservationStatusEnum::Pending,
        ]);


        return back()->with('success-message', 'Reservation submitted');
    }


    /**
     * Checkout page
     */
    public function orders() : View
    {
        return view('public.orders');
    }
}
