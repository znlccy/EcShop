<?php
/**
 * Author: Administrator
 * Date: 2018/4/2 18:38
 * Version: v-1.0.0
 * Introduce: 区域地址
 */

namespace data\service;

use data\api\IAddress as IAddress;
use data\model\AreaModel as AreaModel;
use data\model\CityModel as CityModel;

class Address extends \BaseService implements IAddress {

    function getAreaList()
    {
        // TODO: Implement getAreaList() method.
    }

    function getProvinceList($Area_id = 0)
    {
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

}