<?php

namespace App\Services\Customer;

use App\Models\Customer;

class CustomerService
{
    public function findOrCreate(string $email, string $phone)
    {
        if (count(Customer::where('email', $email)->get()) || count(Customer::where('phone_number', $phone)->get())) {

            $customer = Customer::where('email', $email)->first() ?? Customer::where('phone_number', $phone)->first();

            if ($customer->email === $email && $customer->phone_number === $phone) {
                dd('1' . $customer);
                return $customer;

            } else {
                $customer->update([
                    'email' => $email,
                    'phone_number' => $phone,
                ]);

                return Customer::where('id', $customer->id)->first();
            }


        } else {
            return Customer::create([
                'email' => $email,
                'phone_number' => $phone,]);
        }
    }
}
