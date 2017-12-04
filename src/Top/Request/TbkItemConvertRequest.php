<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Top\Request;

/**
 * Description of TbkItemConvert
 *
 * @author V
 */
class TbkItemConvertRequest extends RequestBase {
    /*
     * document url=http://open.taobao.com/docs/api.htm?spm=a219a.7395905.0.0.U0HPQ4&apiId=24516
     * fields	String	必须	num_iid,click_url		需返回的字段列表
      num_iids	String	必须	123,456		商品ID串，用','分割，从taobao.tbk.item.get接口获取num_iid字段，最大40个
      adzone_id	Number	必须	123		广告位ID，区分效果位置
      platform	Number	可选	123
      默认值：1
      链接形式：1：PC，2：无线，默认：１
      unid	String	可选	demo		自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
      dx	String	可选	1		1表示商品转通用计划链接，其他值或不传表示转营销计划链接
     */

    private $fields;
    private $num_iids;
    private $addzone_id;
    private $platform;
    private $unid;
    private $dx;
    protected $notAllowNull = ['fields', 'num_iids', 'addzone_id'];

}
