<?php
namespace panthsoni\dataoke\lib;

class TaoClient extends TaoApi
{
    /**
     * 基本配置参数
     * @var array
     */
    protected static $options = [];

    /**
     * 必传参数
     * @var array
     */
    protected static $params = [];

    /**
     * 可选参数
     * @var array
     */
    protected static $bizParams = [];

    /**
     * 网关
     * @var string
     */
    protected static $domain = 'https://openapi.dataoke.com';

    /**
     * 方法
     * @var string
     */
    protected static $method = '';

    /**
     * 是否返回链接
     * @var bool
     */
    protected static $isBackUrl = false;

    /**
     * 自定义域名
     * @var string
     */
    protected static $selfDomain = '';

    /**
     * 密钥
     * @var string
     */
    protected static $secret = '';

    /**
     * 初始化
     * TaoClient constructor.
     * @param array $options
     */
    public function __construct(array $options=[]){
        self::$options = array_merge(self::$options,$options);
    }

    /**
     * 设置配置
     * @param array $options
     * @return $this
     */
    public function setOptions($options=[]){
        self::$options = array_merge(self::$options,$options);
        return $this;
    }

    /**
     * 设置参数
     * @param array $params
     * @return $this
     */
    public function setParams($params=[]){
        self::$params = array_merge(self::$params,$params);
        return $this;
    }

    /**
     * 设置可选参数
     * @param array $bizParams
     * @return $this
     */
    public function setBizParams($bizParams=[]){
        self::$bizParams = array_merge(self::$bizParams,$bizParams);
        return $this;
    }

    /**
     * 设置方法
     * @param $method
     * @return $this
     */
    public function setMethod($method){
        self::$method = $method;
        return $this;
    }

    /**
     * 是否返回链接
     * @param bool $isBackUrl
     * @return $this
     */
    public function isBackUrl($isBackUrl=false){
        self::$isBackUrl = $isBackUrl;
        return $this;
    }

    /**
     * 设置密钥
     * @param $secret
     * @return $this
     */
    public function setSecret($secret){
        self::$secret = $secret;
        return $this;
    }

    /**
     * 获取结果
     * @return bool|mixed|string
     * @throws \Exception
     */
    public function getResult(){
        /*检测方法*/
        if (!self::$method){
            throw new \Exception('请求方法缺失',-10015);
        }

        /*检测密钥*/
        if (!self::$secret){
            throw new \Exception('secret缺失',-10039);
        }

        /*判断方法是否授权*/
        if (!isset(self::$methodList[self::$method])){
            throw new \Exception('请求方法未授权',-10025);
        }

        /*是否自定义域名地址*/
        $domain = self::$selfDomain?self::$selfDomain:self::$domain;

        /*组建请求链接*/
        $url = $domain.self::$methodList[self::$method]['request_uri'];

        /*参数验证*/
        $requestParamsList = Tools::validate(array_merge(self::$options,self::$params,self::$bizParams),new SingleValidate(),self::$method);

        return Tools::buildRequest($url,$requestParamsList,self::$methodList[self::$method]['request_way'],self::$secret,self::$isBackUrl,self::$method);
    }
}