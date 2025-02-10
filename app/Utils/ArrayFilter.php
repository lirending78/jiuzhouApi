<?php

namespace App\Utils;

class ArrayFilter
{
    /**
     * 过滤数据，只保留指定的字段
     *
     * @param array $data 原始数据
     * @param array $fields 要保留的字段
     * @return array 过滤后的数据
     */
    public static function filterFields(array $data, array $fields): array
    {
        return array_map(function ($item) use ($fields) {
            return array_intersect_key($item, array_flip($fields));
        }, $data);
    }
}
