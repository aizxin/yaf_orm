<?php
/**
 * @name SampleModel
 * @desc sample数据获取类, 可以访问数据库，文件，其它系统等
 * @author afoii-12\administrator
 */
class SampleModel extends Illuminate\Database\Eloquent\Model {
	/**
     * 与模型关联的数据表
     *
     * @var string
     */
    protected $table = 'goods';
}
