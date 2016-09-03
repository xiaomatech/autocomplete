<?php

class Qconf {

    /**
     *
     * get all children nodes'key
     *
     * @param key $ key of configuration.\
     * @param idc $ Optional，from which idc to get the value，get from local idc if omit
     * @param get_flag Optional，if set get_flag be 0, QConf will wait some time if the configuration is not in share memory yet, which may happen when key not exist or get key the first time. If 1, QConf return immediately return NULL, default get_flag is 0;
     * @return string
     */
    public function getConf(key, idc, get_flag){
        return '';
    }

    /**
     *
     * get all children nodes' key and value
     *
     * @param key $ key of configuration.\
     * @param idc $ Optional，from which idc to get the value，get from local idc if omit
     * @param get_flag Optional，if set get_flag be 0, QConf will wait some time if the configuration is not in share memory yet, which may happen when key not exist or get key the first time. If 1, QConf return immediately return NULL, default get_flag is 0;
     * @return array
     */
    public function getBatchKeys(path, idc, get_flag){

    }

    /**
     *
     * get all available services under given path
     *
     * @param key $ key of configuration.\
     * @param idc $ Optional，from which idc to get the value，get from local idc if omit
     * @param get_flag Optional，if set get_flag be 0, QConf will wait some time if the configuration is not in share memory yet, which may happen when key not exist or get key the first time. If 1, QConf return immediately return NULL, default get_flag is 0;
     * @return array
     */
    public function getAllHost(path, idc, get_flag){

    }

    /**
     * get one available service
     * @param key $ key of configuration.\
     * @param idc $ Optional，from which idc to get the value，get from local idc if omit
     * @param get_flag Optional，if set get_flag be 0, QConf will wait some time if the configuration is not in share memory yet, which may happen when key not exist or get key the first time. If 1, QConf return immediately return NULL, default get_flag is 0;
     * @return string
     */
    public function getHost(path, idc, get_flag){

    }
}