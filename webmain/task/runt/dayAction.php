<?php
class dayClassAction extends runtAction
{
	//每天运行一次
	public function runAction()
	{
		m('flow')->initflow('work')->tododay(); //任务到期提醒
		m('flow')->initflow('daiban')->tododay(); //流程待办处理提醒
		echo 'success';
	}
	
}