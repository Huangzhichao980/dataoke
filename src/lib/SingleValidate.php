<?php
namespace panthsoni\dataoke\lib;

class SingleValidate extends CommonValidate
{
    protected $rule = [
        'appKey|唯一验证' => 'length:0,50',
        'version|API接口版本号' => 'length:0,50',
        'pageSize|每页条数' => 'in:10,50,100,200',
        'pageId|分页id' => 'length:0,50',
        'sort|排序方式' => 'in:0,1,2,3,4,5,6',
        'cids|一级类目id' => 'length:0,50',
        'cid|一级类目id' => 'length:0,50',
        'subcid|二级类目id' => 'length:0,50',
        'juHuaSuan|是否聚划算' => 'number',
        'taoQiangGou|是否淘抢购' => 'number',
        'tmall|是否天猫商品' => 'number',
        'tchaoshi|是否天猫超市商品' => 'number',
        'goldSeller|是否金牌卖家' => 'number',
        'haitao|是否海淘商品' => 'number',
        'pre|是否预告商品' => 'number',
        'brand|是否品牌商品' => 'number',
        'brandIds|品牌id' => 'length:0,50',
        'priceLowerLimit|价格（券后价）下限' => 'number',
        'priceUpperLimit|价格（券后价）上限' => 'number',
        'couponPriceLowerLimit|最低优惠券面额' => 'number',
        'commissionRateLowerLimit|最低佣金比率' => 'number',
        'monthSalesLowerLimit|最低月销量' => 'number',
        'id|商品id' => 'number',
        'goodsId|淘宝商品id' => 'length:0,50',
        'startTime|开始时间' => 'dateFormat:Y-m-d H:i:s',
        'endTime|结束时间' => 'dateFormat:Y-m-d H:i:s',
        'couponId|优惠券ID' => 'length:0,50',
        'pid|推广位ID' => 'length:0,50',
        'channelId|商品id' => 'length:0,50',
        'rebateType|付定返红包' => 'number',
        'trailerType|是否返回预告商品' => 'number',
        'collectionTimeOrder|加入收藏时间' => 'number',
        'online|是否下架' => 'in:0,1',
        'keyWords|关键词' => 'length:0,50',
        'type|当前搜索API类型：1.大淘客搜索 2.联盟搜索 3.超级搜索' => 'number',
        'pageNo|第几页' => 'number',
        'source|是否商城商品' => 'number',
        'overseas|是否海外商品' => 'number',
        'endPrice|折扣价范围上限' => 'number',
        'startPrice|折扣价范围下限' => 'number',
        'startTkRate|媒体淘客佣金比率下限' => 'number',
        'endTkRate|商品筛选-淘客佣金比率上限' => 'number',
        'hasCoupon|是否有优惠券' => 'length:0,50',
        'roundTime|场次时间' => 'dateFormat:Y-m-d H:i:s',
        'rankType|榜单类型' => 'in:1,2,3,4,5,6,7',
        'topicId|专辑id' => 'number',
        'nineCid|精选类目Id' => 'in:-1,1,2,3,4,5,6,7,8,9,10',
        'size|每页条数' => 'number',
        'activityId|活动id' => 'number',
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
    ];
}