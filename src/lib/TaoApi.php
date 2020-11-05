<?php
namespace panthsoni\dataoke\lib;


class TaoApi
{
    /**
     * 授权方法列表
     * @var array
     */
    protected static $methodList = [
        'goods_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-goods-list'
        ],
        'goods_detail' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-goods-details'
        ],
        'pull_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/pull-goods-by-time'
        ],
        'stale_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-stale-goods-by-time'
        ],
        'update_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-newest-goods'
        ],
        'privilege_link' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/get-privilege-link'
        ],
        'super_category' => [
            'request_way' => 'GET',
            'request_uri' => '/api/category/get-super-category'
        ],
        'goods_collection' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-collection-list'
        ],
        'owner_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-owner-goods'
        ],
        'search_suggestion' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/search-suggestion'
        ],
        'super_search' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/list-super-goods'
        ],
        'dtk_search' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-dtk-search-goods'
        ],
        'get_top' => [
            'request_way' => 'GET',
            'request_uri' => '/api/category/get-top100'
        ],
        'tb_service' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/get-tb-service'
        ],
        'ddq_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/category/ddq-goods-list'
        ],
        'ranking_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-ranking-list'
        ],
        'catalogue' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/topic/catalogue'
        ],
        'topic_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/topic/goods-list'
        ],
        'nine_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/nine/op-goods-list'
        ],
        'brand_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/get-brand-list'
        ],
        'similer_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/list-similer-goods-by-open'
        ],
        'activity_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/activity/goods-list'
        ],
        'activity_catalogue' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/activity/catalogue'
        ],
    ];
}