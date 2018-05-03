<?php
/**
 * Author: Administrator
 * Date: 2018/4/2 18:38
 * Version: v-1.0.0
 * Introduce: 区域地址
 */

namespace data\service;

use data\api\IAddress as IAddress;
use data\model\AreaModel as Area;
use data\model\CityModel as City;
use data\model\DistrictModel;
use data\model\DistrictModel as District;
use data\model\NsOffpayAreaModel;
use data\model\ProvinceModel as Province;
use data\service\BaseService as BaseService;

class Address extends BaseService implements IAddress {

    function getAreaList()
    {
        $area = new Area();
        $list = $area->getQuery('', 'area_id,area_name','');
        return $list;
        // TODO: Implement getAreaList() method.
    }

    function getProvinceList($Area_id = 0)
    {
        $province = new Province();
        // TODO: Implement getProvinceList() method.
    }

    function getAddressListById($provice_id_arr, $city_id_arr)
    {
        // TODO: Implement getAddressListById() method.
    }

    function getCityList($province_id = 0)
    {
        // TODO: Implement getCityList() method.
    }

    function getDistrictList($city_id = 0)
    {
        // TODO: Implement getDistrictList() method.
    }

    function getProvinceName($province_id)
    {
        // TODO: Implement getProvinceName() method.
    }

    function getCityName($city_id)
    {
        // TODO: Implement getCityName() method.
    }

    function getDistrictName($district_id)
    {
        // TODO: Implement getDistrictName() method.
    }

    function getAreaTree($getAreaTree)
    {
        // TODO: Implement getAreaTree() method.
    }

    function getAddress($province_id, $city_id, $district_id)
    {
        // TODO: Implement getAddress() method.
    }

    function getProvinceId($province_name)
    {
        // TODO: Implement getProvinceId() method.
    }

    function getCityId($city_name)
    {
        // TODO: Implement getCityId() method.
    }

    function addOrUpdateCity($city_id, $province_id, $city_name, $zipcode, $sort)
    {
        // TODO: Implement addOrUpdateCity() method.
    }

    function addOrUpdateDistrict($district_id, $city_id, $district_name, $sort)
    {
        // TODO: Implement addOrUpdateDistrict() method.
    }

    function updateProvince($province_id, $province_name, $sort, $area_id)
    {
        // TODO: Implement updateProvince() method.
    }

    function addProvince($province_name, $sort, $area_id)
    {
        // TODO: Implement addProvince() method.
    }

    function deleteProvince($province_id)
    {
        // TODO: Implement deleteProvince() method.
    }

    function deleteCity($city_id)
    {
        // TODO: Implement deleteCity() method.
    }

    function deleteDistrict($district_id)
    {
        // TODO: Implement deleteDistrict() method.
    }

    function updateRegionNameAndRegionSort($upType, $regionType, $regionName, $regionSort, $regionId)
    {
        // TODO: Implement updateRegionNameAndRegionSort() method.
    }

    function getCityCountByProvinceId($province_id)
    {
        // TODO: Implement getCityCountByProvinceId() method.
    }

    function getDistrictCountByCityId($city_id)
    {
        // TODO: Implement getDistrictCountByCityId() method.
    }

    function addOrUpdateDistributionArea($shop_id, $province_id, $city_id, $district_id)
    {
        // TODO: Implement addOrUpdateDistributionArea() method.
    }

    function getDistributionAreaInfo($shop_id)
    {
        // TODO: Implement getDistributionAreaInfo() method.
    }

    function getDistributionAreaIsUser($shop_id, $province_id, $city_id, $district_id)
    {
        // TODO: Implement getDistributionAreaIsUser() method.
    }

    function getCityFirstDistrict($city_id)
    {
        // TODO: Implement getCityFirstDistrict() method.
    }

}