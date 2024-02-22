<?php

namespace App\Observers;

use App\Models\Orders;
use App\Models\Order_Histories;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Orders  $order
     * @return void
     */
    public function created(Orders $order)
    {
        if ($order -> isDirty('status')){
           $history = Order_Histories :: create ([
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
    public function updated(Orders $order)
    {
        if ($order -> isDirty('status')){
            $history = Order_Histories :: create ([
              'order_id'  =>  $order->id ,
              'order_status_id' => $order ['status'] ,
            ]);
 
         }
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param  \App\Models\Orders  $order
     * @return void
     */
    public function deleted(Orders $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \App\Models\Orders  $order
     * @return void
     */
    public function restored(Orders $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Orders $order)
    {
        //
    }
}
