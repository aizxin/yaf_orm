<?php
/**
 * @name IndexController
 * @author afoii-12\administrator
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf\Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/yaf_orm/index/index/index/name/afoii-12\administrator 的时候, 你就会发现不同
     */
	public function indexAction($name = "Stranger") {
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$modelSample = new SampleModel();
		$modelUser = new UserModel();
		var_dump(\think\Db::getConfig());
		// var_dump($modelSample->all()->toArray());
		// var_dump($modelUser->all()->toArray());
		//3. assign
		// $this->getView()->assign("content",'djjf');
		// $this->getView()->assign("name", $name);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return false;
	}
}
