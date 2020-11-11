<?php
namespace panthsoni\dataoke\lib;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'appKey|唯一验证appKey' => 'length:0,50',
        'version|API接口版本号version' => 'length:0,50',
        'pageSize|每页条数pageSize' => 'in:10,50,100,200',
        'pageId|分页pageId' => 'length:0,50',
        'sort|排序方式sort' => 'in:0,1,2,3,4,5,6',
        'cids|一级类目cids' => 'length:0,50',
        'cid|一级类目cid' => 'length:0,50',
        'subcid|二级类目subcid' => 'length:0,50',
        'juHuaSuan|是否聚划算juHuaSuan' => 'number',
        'taoQiangGou|是否淘抢购taoQiangGou' => 'number',
        'tmall|是否天猫商品tmall' => 'number',
        'tchaoshi|是否天猫超市商品tchaoshi' => 'number',
        'goldSeller|是否金牌卖家goldSeller' => 'number',
        'haitao|是否海淘商品haitao' => 'number',
        'pre|是否预告商品pre' => 'number',
        'brand|是否品牌商品brand' => 'number',
        'brandIds|品牌brandIds' => 'length:0,50',
        'priceLowerLimit|价格（券后价）下限priceLowerLimit' => 'number',
        'priceUpperLimit|价格（券后价）上限priceUpperLimit' => 'number',
        'couponPriceLowerLimit|最低优惠券面额couponPriceLowerLimit' => 'number',
        'commissionRateLowerLimit|最低佣金比率commissionRateLowerLimit' => 'number',
        'monthSalesLowerLimit|最低月销量monthSalesLowerLimit' => 'number',
        'id|商品id' => 'number',
        'goodsId|淘宝商品goodsId' => 'length:0,50',
        'startTime|开始时间startTime' => 'dateFormat:Y-m-d H:i:s',
        'endTime|结束时间endTime' => 'dateFormat:Y-m-d H:i:s',
        'couponId|优惠券couponId' => 'length:0,50',
        'pid|推广位pid' => 'length:0,50',
        'channelId|商品channelId' => 'length:0,50',
        'rebateType|付定返红包rebateType' => 'number',
        'trailerType|是否返回预告商品trailerType' => 'number',
        'collectionTimeOrder|加入收藏时间collectionTimeOrder' => 'number',
        'online|是否下架online' => 'in:0,1',
        'keyWords|关键词keyWords' => 'length:0,50',
        'type|当前搜索API类型type：1.大淘客搜索 2.联盟搜索 3.超级搜索' => 'number',
        'pageNo|第几页pageNo' => 'number',
        'source|是否商城商品source' => 'number',
        'overseas|是否海外商品overseas' => 'number',
        'endPrice|折扣价范围上限endPrice' => 'number',
        'startPrice|折扣价范围下限startPrice' => 'number',
        'startTkRate|媒体淘客佣金比率下限startTkRate' => 'number',
        'endTkRate|商品筛选-淘客佣金比率上限endTkRate' => 'number',
        'hasCoupon|是否有优惠券hasCoupon' => 'length:0,50',
        'roundTime|场次时间roundTime' => 'dateFormat:Y-m-d H:i:s',
        'rankType|榜单类型rankType' => 'in:1,2,3,4,5,6,7',
        'topicId|专辑topicId' => 'number',
        'nineCid|精选类目nineCid' => 'in:-1,1,2,3,4,5,6,7,8,9,10',
        'size|每页条数size' => 'number',
        'activityId|活动activityId' => 'number',
        'freeshipRemoteDistrict|偏远地区包邮，1-是，0-非偏远地区，不填默认所有商品' => 'in:0,1',
        'PriceCid|价格区间'=>'length:0,10',
        'date|选择某一天的直播商品数据'=>'dateFormat:Y-m-d',
        'sessions|场次输入格式，例如02、08、12、13'=>'length:0,10',
        'subdivisionId|细分类目榜分类subdivisionId'=>'length:0,50',
        'content|包含淘口令的文本'=>'length:0,255',
        'queryType|查询时间类型'=>'in:1,2,3',
        'positionIndex|位点'=>'length:0,50',
        'memberType|推广者角色类型'=>'in:2,3',
        'tkStatus|淘客订单状态'=>'in:12,13,14,3',
        'jumpType|跳转类型'=>'in:-1,1',
        'orderScene|场景订单场景类型'=>'in:1,2,3',
        'text|口令弹框内容'=>'length:0,255',
        'url|口令跳转目标页'=>'length:0,255',
        'logo|口令弹框logoURL'=>'length:0,255',
        'userId|生成口令的淘宝用户ID'=>'length:0,255',
        'keyWord|输入关键词搜索'=>'length:0,255',
        'goodsType|商品类型'=>'in:1,2',
        'special_id|会员运营ID'=>'length:0,50',
        'external_id|淘宝客外部用户标记'=>'length:0,50',
        'promotionSceneId|联盟官方活动ID'=>'length:0,50',
        'relationId|渠道id将会和传入的pid进行验证'=>'length:0,50',
        'unionId|自定义输入串'=>'length:0,50',
    ];

    public $scene = [
        'goods_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize','sort','cids','subcid','juHuaSuan','taoQiangGou','tmall',
            'tchaoshi','goldSeller','haitao','pre','brand','brandIds','priceLowerLimit',
            'priceUpperLimit','couponPriceLowerLimit','commissionRateLowerLimit','monthSalesLowerLimit',
        ],
        'goods_detail'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'id' => 'require|number',
            'goodsId'
        ],
        'pull_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'cids','subcid','sort','pre','startTime','endTime'
        ],
        'stale_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize','startTime','endTime'
        ],
        'update_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'sort','cids','subcid','juHuaSuan','taoQiangGou','tmall',
            'tchaoshi','goldSeller','haitao','pre','brand','brandIds','priceLowerLimit',
            'priceUpperLimit','couponPriceLowerLimit','commissionRateLowerLimit','monthSalesLowerLimit',
            'startTime','endTime'
        ],
        'privilege_link'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'goodsId' => 'require|length:0,50',
            'couponId','pid','channelId','rebateType'
        ],
        'super_category'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
        ],
        'goods_collection'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize','cid','trailerType','collectionTimeOrder','sort'
        ],
        'owner_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'online','startTime','endTime','sort',
        ],
        'search_suggestion'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'keyWords' => 'require|length:0,50',
            'type' => 'require|number',
        ],
        'super_search'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'keyWords' => 'require|length:0,50',
            'type' => 'require|number',
            'tmall','haitao','sort'
        ],
        'dtk_search'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'sort','cids','subcid','juHuaSuan','taoQiangGou','tmall',
            'tchaoshi','goldSeller','haitao','pre','brand','brandIds','priceLowerLimit',
            'priceUpperLimit','couponPriceLowerLimit','commissionRateLowerLimit','monthSalesLowerLimit',
        ],
        'get_top'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
        ],
        'tb_service'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageNo' => 'require|number',
            'pageSize' => 'require|number',
            'keyWords' => 'require|length:0,50',
            'sort','source','overseas','endPrice','startPrice',
            'startTkRate','endTkRate','hasCoupon',
        ],
        'ddq_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'roundTime'
        ],
        'ranking_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'rankType','cid'
        ],
        'catalogue'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
        ],
        'topic_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'topicId' => 'require|number',
            'pageSize'
        ],
        'nine_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'nineCid' => 'require|in:-1,1,2,3,4,5,6,7,8,9,10',
        ],
        'brand_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize'
        ],
        'similer_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'id' => 'require|number',
            'size'
        ],
        'activity_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'activityId' => 'require|number',
            'pageSize','cid','subcid'
        ],
        'activity_catalogue'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
        ],
        'jd_one_dollar_purchase'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'sort' => 'require|number',
            'cids'
        ],
        'get_tb_topic_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'type','channelId'
        ],
        'friends_circle_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize','sort','cid',
            'subcid','pre','freeshipRemoteDistrict',
            'goodsId',
        ],
        'exclusive_goods_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'sort','cids'
        ],
        'explosive_goods_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'PriceCid','cids'
        ],
        'liveMaterial_goods_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'date','sort'
        ],
        'price_trend'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'id'=>'require|length:0,50',
            'goodsId'
        ],
        'get_half_price_day'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'sessions'=>'require|length:0,20'
        ],
        'super_discount_goods'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'sort' => 'require|number',
            'cids'
        ],
        'get_rank_list'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'subdivisionId' => 'require|length:0,50',
        ],
        'parse_taokouling'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'content' => 'require|length:0,255',
        ],
        'get_order_details'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'endTime' => 'require|dateFormat:Y-m-d H:i:s',
            'startTime'=> 'require|dateFormat:Y-m-d H:i:s',
            'queryType','positionIndex','pageSize','memberType',
            'tkStatus','jumpType','pageNo','orderScene'
        ],
        'creat_taokouling'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'text' => 'require|length:0,255',
            'url' => 'require|length:0,255',
            'logo','userId'
        ],
        'first_order_gift_money'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'pageId' => 'require|length:0,50',
            'pageSize' => 'require|number',
            'cids','sort','keyWord','goodsType'
        ],
        'twd_to_twd'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'content' => 'require|length:0,255',
            'pid','channelId','special_id','external_id'
        ],
        'activity_link'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'promotionSceneId' => 'require|length:0,255',
            'pid','relationId','unionId'
        ],
        'parse_content'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'content' => 'require|length:0,255',
        ],
        'merge_red_envelopes'=>[
            'appKey' => 'require|length:0,50',
            'version' => 'require|length:0,50',
            'merchantType' => 'require|in:1,2,3',
            'unionId' => 'require|length:0,50',
            'pid'
        ],
    ];
}