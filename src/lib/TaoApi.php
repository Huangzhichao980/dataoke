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
        'jd_one_dollar_purchase' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/jd-one-dollar-purchase'
        ],
        'get_tb_topic_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/category/get-tb-topic-list'
        ],
        'friends_circle_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/friends-circle-list'
        ],
        'exclusive_goods_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/exclusive-goods-list'
        ],
        'explosive_goods_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/explosive-goods-list'
        ],
        'liveMaterial_goods_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/liveMaterial-goods-list'
        ],
        'price_trend' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/price-trend'
        ],
        'get_half_price_day' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/get-half-price-day'
        ],
        'super_discount_goods' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/super-discount-goods'
        ],
        'get_rank_list' => [
            'request_way' => 'GET',
            'request_uri' => '/api/subdivision/get-rank-list'
        ],
        'parse_taokouling' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/parse-taokouling'
        ],
        'get_order_details' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/get-order-details'
        ],
        'creat_taokouling' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/creat-taokouling'
        ],
        'first_order_gift_money' => [
            'request_way' => 'GET',
            'request_uri' => '/api/goods/first-order-gift-money'
        ],
        'twd_to_twd' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/twd-to-twd'
        ],
        'activity_link' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/activity-link'
        ],
        'parse_content' => [
            'request_way' => 'GET',
            'request_uri' => '/api/tb-service/parse-content'
        ],
        'merge_red_envelopes' => [
            'request_way' => 'GET',
            'request_uri' => '/api/dels/merge-red-envelopes'
        ],
    ];
}