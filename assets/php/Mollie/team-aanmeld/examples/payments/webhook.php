<?php

namespace _PhpScoper5bf6a941d2ec8;

/*
 * How to verify Mollie API Payments in a webhook.
 *
 * See: https://docs.mollie.com/guides/webhooks
 */
try {
    /*
     * Initialize the Mollie API library with your API key.
     *
     * See: https://www.mollie.com/dashboard/developers/api-keys
     */
    require "../initialize.php";
    /*
     * Retrieve the payment's current state.
     */
    $payment = $mollie->payments->get($_POST["id"]);
    $orderId = $payment->metadata->order_id;
    /*
     * Update the order in the database.
     */
    \_PhpScoper5bf6a941d2ec8\database_write($orderId, $payment->status);
    if ($payment->isPaid() && !$payment->hasRefunds() && !$payment->hasChargebacks()) {

      $query = "UPDATE `GLR_order` SET `value` = '49.00' WHERE `GLR_order`.`ID_order` = 1";

      $database = "$mysqli, $query";


    } elseif ($payment->isOpen()) {
        /*
         * The payment is open.
         */
    } elseif ($payment->isPending()) {
        /*
         * The payment is pending.
         */
    } elseif ($payment->isFailed()) {
        /*
         * The payment has failed.
         */
    } elseif ($payment->isExpired()) {
        /*
         * The payment is expired.
         */
    } elseif ($payment->isCanceled()) {
        /*
         * The payment has been canceled.
         */
    } elseif ($payment->hasRefunds()) {
        /*
         * The payment has been (partially) refunded.
         * The status of the payment is still "paid"
         */
    } elseif ($payment->hasChargebacks()) {
        /*
         * The payment has been (partially) charged back.
         * The status of the payment is still "paid"
         */
    }
} catch (\Mollie\Api\Exceptions\ApiException $e) {
    echo "API call failed: " . \htmlspecialchars($e->getMessage());
}
