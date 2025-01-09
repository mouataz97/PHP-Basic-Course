<?php

$payment = "cash";

switch ($payment) {
    case "cash":
        echo "Payment is cash";
        break;

    case "credit":
        echo "Payment is card";
        break;

    case "paypal":
        echo "Payment is paypal";
            break;

    default:
        echo "Payment is not valid";
}

#match expression

$paymentstatus = 5;
$paymentstatusDisplay = match($paymentstatus) {
    print 1 => "Paid",
    print 2,3 => "Declined",
    print 0 => "Pending payment",
    default => "Cancelled",
};
echo $paymentstatusDisplay;