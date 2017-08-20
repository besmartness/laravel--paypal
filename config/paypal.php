<?php



return array(
    /** set your paypal credential **/
    'client_id' =>'AfObuGUbhOf9YH89_n4gP0aKCDiMzFTIWZgESMXxoIDPbJ_To7HmGtpgiuc2jTmKcHI8_x7i9W-4Ks2f',
    'secret' => 'EKIZVy3Xt5wZGp8wMtfULW1DE9k8ft5gSSImrFOf27-wM-q1hoBFVmfrskYsK2C0XvO2RjbftlZpsE-T',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);