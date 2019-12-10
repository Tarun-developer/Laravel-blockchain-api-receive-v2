<?php

/*
 * This file is part of the Laravel Blockchain package.
 *
 * (c) Tarun Sharma <botdigit@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


return [
    /**
     * Blockchain api provided by blockchain.com
     */
    'blockchain_api' => env('BLOCKCHAIN_API'),
    /**
     * This is the default charge fee bitcoin miners at 0.00001
     */
    'defaultBTCFee' => env('DEFAULT_BTC_FEE'),
    /**
     * This is your own transaction fee in btc
     */
    'transactionBTCFee' => env('TRANSACTION_BTC_FEE'),
    /**
     * Blockchain root URL
     */
    'blockchain_root' => env('BLOCKCHAIN_ROOT'),
    /**
     * Block chain recive_root URL
     */
    'blockchain_receive_root' => env('BLOCKCHAIN_RECEIVE_ROOT'),
    /**
     * XPUB Public key for your wallet
     */
    'blockchain_xpub' => env('BLOCKCHAIN_XPUB'),
];
