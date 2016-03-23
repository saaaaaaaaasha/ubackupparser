<?php
namespace ubackupparser\Module\Base;

/**
 * Interface IModule
 * @package ubackupparser\Module\Base
 */
interface IModule {

	/**
	 * @return array mapping index=>name
	 */
	public function getFieldsMap();

	/**
	 * @return string filename with dump
	 */
	public function getFileName();

	

}