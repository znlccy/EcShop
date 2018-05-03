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

    /**
     * 获取区县列表
     * @param: number $city_id
     * @return: 
     */
    function getDistrictList($city_id = 0);

    /**
     * 获取省名称
     * @param: number $province_id
     * @return: 
     */
    function getProvinceName($province_id);

    /**
     * @param: number 获取市名称
     * @return: 
     */
    function getCityName($city_id);
    
    /**
     * @param: number $district_id
     * @return: 
     */
    function getDistrictName($district_id);

    /**
     * @param: 获取地区树
     * @return: 
     */
    function getAreaTree($getAreaTree);

    /**
     * @param: number $province_id
     * @param: number $city_id
     * @param：number $district_id
     * @return:
     */
    function getAddress($province_id, $city_id, $district_id);

    /**
     * 获取省id
     * @param: unknown $province_name
     * @return: 
     */
    function getProvinceId($province_name);

    /**
     * @param: unknown $city_name
     * @return: 
     */
    function getCityId($city_name);

    /**
     * @param: 添加市级地区
     * @return: 
     */
    function addOrUpdateCity($city_id, $province_id, $city_name, $zipcode, $sort);

    /**
     * @param: 添加县级地区
     * @return: 
     */
    function addOrUpdateDistrict($district_id, $city_id, $district_name, $sort);

    /**
     * @param: 修改省级区域
     * @return: 
     */
    function updateProvince($province_id, $province_name, $sort, $area_id);

    /**
     * 添加省级区域
     * @param: unknown $province_name
     * @param： unknown $sort
     * @return:
     */
    function addProvince($province_name, $sort, $area_id);

    /**
     * 删除省
     * @param: number $province_id
     * @return: 
     */
    function deleteProvince($province_id);

    /**
     * 删除市
     * @param: number $city_ids
     * @return: 
     */
    function deleteCity($city_id);

    /**
     * 删除县
     * @param: number $district_id
     * @return: 
     */
    function deleteDistrict($district_id);

    /**
     * @param: 修改省市县的排序与名称
     * @return: 
     */
    function updateRegionNameAndRegionSort($upType, $regionType, $regionName, $regionSort, $regionId);

    /**
     * @param: 通过省级id获取其下级的数量
     * @return: 
     */
    function getCityCountByProvinceId($province_id);

    /**
     * 通过市级id获取其下级的数量
     */
    function getDistrictCountByCityId($city_id);

    /**
     * 添加或者修改配送区域
     */
    function addOrUpdateDistributionArea($shop_id, $province_id, $city_id, $district_id);

    /**
     * 获取配送地区信息
     */
    function getDistributionAreaInfo($shop_id);

    /**
     * 检测配置地址是否符合货到付款
     */
    function getDistributionAreaIsUser($shop_id, $province_id, $city_id, $district_id);

    /**
     * 获取市的第一个区
     */
    function getCityFirstDistrict($city_id);
}
