<?php
namespace panthsoni\dataoke;

use panthsoni\dataoke\lib\TaoClient;

class Tao
{
    /**
     * 基本配置参数
     * @var array
     */
    protected static $options = [];

    /**
     * 初始化
     * Tao constructor.
     * @param array $options
     */
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 初始化
     * @param array $options
     * @return TaoClient
     */
    public static function init(array $options=[]){
        self::$options = array_merge(self::$options,$options);
        return new TaoClient(self::$options);
    }
}