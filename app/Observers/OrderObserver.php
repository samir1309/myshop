<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\OrderHistory;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order $order
     * @return void
     */
    public function created(Order $order)
    {
        if ($order -> isDirty('status')){
           $history = OrderHistory :: create ([
             'order_id'  =>  $order->id ,
             'order_status_id' => $order ['status'] ,
           ]);

        }
    }

    /**
     * Handle the Order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        if ($order -> isDirty('status')){
            $history = OrderHistory :: create ([
              'order_id'  =>  $order->id ,
              'order_status_id' => $order ['status'] ,
            ]);
 
         }
    }



    public function create(Order $order)
    {
        $order->status = 'پیش فاکتور';
        $order->save();
    }
    /**
     * Handle the Order "deleted" event.
     *
     * @param  \App\Models\Order $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \App\Models\Order order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
