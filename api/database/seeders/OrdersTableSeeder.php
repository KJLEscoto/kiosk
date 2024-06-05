<?php

namespace App\Http\Resources;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customer_id' => 100,
            'product_id' =>99,
            'order_date' => '2024-05-08',
            'billing_address' => '123 Main St',
            'total_amount' => 100.00,
            'payment_method' => 'Credit Card',
            'order_status' => 'Pending',
        ]);

        // You can add more data inserts as needed
    }
}

