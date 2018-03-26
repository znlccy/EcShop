<?php

namespace data\api;

/**
 * @Author: Administrator
 * @Date: 2018/3/26 10:42
 * @Version: v-1.0.0
 * @Introduce: 供货商接口
 */
interface ISupplier {

    /**
     * 供货商列表
     * @param: number $page_index
     * @param: number $page_size
     * @param: string $condition
     * @param: string $order
     * @param: string $filed
     */
    function getSupplierList($page_index = 1, $page_size = 0, $condition = '', $order = '', $filed = '');

    /**
     * 添加供货商
     * @param: unknown $uid
     * @param: unknown $supplier_name
     * @param: unknown $desc
     */
    function addSupplier($uid, $supplier_name, $desc);

    /**
     * 添加供货商
     * @param: unknown $supplier_id
     * @param: unknown $supplier_name
     * @param: unknown $supplier_desc
     */
    function updateSupplier($supplier_id, $supplier_name, $supplier_desc);

    /**
     * 删除供货商
     * @param: unknown $supplier_id
     */
    function deleteSupplier($supplier_id);

    /**
     * 获取单条供货商信息
     * @param: unknown $supplier_id
     */
    function getSupplierInfo($supplier_id);
}

