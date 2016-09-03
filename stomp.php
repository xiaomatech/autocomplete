<?php

Stomp {
    /* 方法 */
    public bool abort ( string $transaction_id [, array $headers ] )
    public bool ack ( mixed $msg [, array $headers ] )
    public bool begin ( string $transaction_id [, array $headers ] )
    public bool commit ( string $transaction_id [, array $headers ] )
    public __construct ([ string $broker = ini_get("stomp.default_broker_uri") [, string $username [, string $password [, array $headers ]]]] )
    public bool __destruct ( void )
    public string error ( void )
    public array getReadTimeout ( void )
    public string getSessionId ( void )
    public bool hasFrame ( void )
    public stompframe readFrame ([ string $class_name = "stompFrame" ] )
    public bool send ( string $destination , mixed $msg [, array $headers ] )
    public void setReadTimeout ( int $seconds [, int $microseconds ] )
    public bool subscribe ( string $destination [, array $headers ] )
    public bool unsubscribe ( string $destination [, array $headers ] )
}