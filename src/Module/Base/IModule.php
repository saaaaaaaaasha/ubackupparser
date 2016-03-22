<?php
namespace ubackupparser\Module\Base;

/**
 * Interface for modules
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