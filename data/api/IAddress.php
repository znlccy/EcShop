<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/2
 * Time: 16:55
 */

namespace data\api;

/**
 * 系统地址接口
 */
interface IAddress {
    
    /**
     * @param: 获取区域列表
     * @return: 
     */
    function getAreaList();

    /**
     * 获得省列表
     * @param: number $Area_id
     * @return: 
     */
    function getProvinceList($Area_id = 0);

    /**
     * 根据省id组，市id组查询地址信息，并整理
     * @param: unknown $provice_id_arr
     * @param: unknown $city_id_arr
     * @return: 
     */
    function getAddressListById($provice_id_arr, $city_id_arr);

    /**
     * 获取市列表
     * @param: number $city_id
     * @return: 
     */
    function getCityList($province_id = 0);

}
