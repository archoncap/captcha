<?php
/**
 * @description 验证码配置
 * @author vicens <vicens.shi@qq.com>
 */

return array(
    /**
     * 默认验证码长度
     * @var int
     */
    'length' => 4,
    /**
     * 验证码字符集
     * @var string
     */
    'charset' => 'abcdefghijklmnpqrstuvwxyz123456789',
    /**
     * 默认验证码宽度
     * @var int
     */
    'width' => 150,
    /**
     * 默认验证码高度
     * @var int
     */
    'height' => 40,
    /**
     * 指定文字颜色
     * @var string
     */
    'textColor' => null,
    /**
     * 文字字体文件
     * @var string
     */
    'textFont' => null,
    /**
     * 指定图片背景色
     * @var string
     */
    'backgroundColor' => null,
    /**
     * 开启失真模式
     * @var bool
     */
    'distortion' => true,
    /**
     * 最大前景线条数
     * @var int
     */
    'maxFrontLines' => null,
    /**
     * 最大背景线条数
     * @val int
     */
    'maxBehindLines' => null,
    /**
     * 文字最大角度
     * @var int
     */
    'maxAngle' => 8,
    /**
     * 文字最大偏移量
     * @var int
     */
    'maxOffset' => 5
);