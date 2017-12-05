<?php

namespace Top\Request;

/**
 * TOP API: taobao.tbk.uatm.favorites.item.get request
 * 
 * @author auto create
 * @since 1.0, 2017.07.26
 */
class TbkUatmFavoritesItemGetRequest extends RequestBase {

    /**
     * 推广位id，需要在淘宝联盟后台创建；且属于appkey备案的媒体id（siteid），如何获取adzoneid，请参考，http://club.alimama.com/read-htm-tid-6333967.html?spm=0.0.0.0.msZnx5
     * */
    protected $adzone_id;

    /**
     * 选品库的id
     * */
    protected $favorites_id;

    /**
     * 需要输出则字段列表，逗号分隔
     * */
    protected $fields;

    /**
     * 第几页，默认：1，从1开始计数
     * */
    protected $page_no;

    /**
     * 页大小，默认20，1~100
     * */
    protected $page_size;

    /**
     * 链接形式：1：PC，2：无线，默认：１
     * */
    protected $platform;

    /**
     * 自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
     * */
    protected $unid;
    protected $notAllowNull = ['adzone_id', 'favorites_id', 'fields'];

}
