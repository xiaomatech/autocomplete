<?php
/**
* Msgpack自动补全类(基于最新的2.0.2版本)
*/
/**
*
*/
/**
 * php.ini配置选项: 
 * 
 * msgpack.error_display=1
 * 
 * msgpack.php_only=1
 * 
 * msgpack.illegal_key_insert=0
 * 
 * msgpack.use_str8_serialization=1
*/
/**
*/
define('MESSAGEPACK_OPT_PHPONLY', -1001);
/**
* 
*
* @example 
* @param  $value
* @return 
*/
function msgpack_serialize($value)
{
}
/**
* 
*
* @example 
* @param  $str
* @param  $object
* @return 
*/
function msgpack_unserialize($str, $object)
{
}
/**
* 
*
* @example 
* @param  $value
* @return 
*/
function msgpack_pack($value)
{
}
/**
* 
*
* @example 
* @param  $str
* @param  $object
* @return 
*/
function msgpack_unpack($str, $object)
{
}


class MessagePack
{
    /**     
    *
    */
    const OPT_PHPONLY    =    -1001;
    /**
     * 
     *
     * @example 
     * @param  mixed $opt 
     * @return 
     */
    public function __construct($opt)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $option 
     * @param  mixed $value 
     * @return 
     */
    public function setOption($option, $value)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $value 
     * @return 
     */
    public function pack($value)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $str 
     * @param  mixed $object 
     * @return 
     */
    public function unpack($str, $object)
    {
    }
    /**
     * 
     *
     * @example 
     * @return 
     */
    public function unpacker()
    {
    }
}

class MessagePackUnpacker
{
    /**
     * 
     *
     * @example 
     * @param  mixed $opt 
     * @return 
     */
    public function __construct($opt)
    {
    }
    /**
     * 
     *
     * @example 
     * @return 
     */
    public function __destruct()
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $option 
     * @param  mixed $value 
     * @return 
     */
    public function setOption($option, $value)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $str 
     * @return 
     */
    public function feed($str)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $str 
     * @param  mixed $offset 
     * @return 
     */
    public function execute($str, $offset)
    {
    }
    /**
     * 
     *
     * @example 
     * @param  mixed $object 
     * @return 
     */
    public function data($object)
    {
    }
    /**
     * 
     *
     * @example 
     * @return 
     */
    public function reset()
    {
    }
}
