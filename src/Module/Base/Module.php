<?php
namespace ubackupparser\Module\Base;

use ubackupparser\App;

abstract class Module implements IModule {
    //use ModuleFields;

    /**
     * @var string
     */
    protected static $file;

    /**
     * @var string
     */
    protected static $map;

    /**
     * @var array
     */
    protected static $basePath;

    protected $data;

    public function __construct($basePath) {

        if (!is_dir($basePath)) {
            throw new \InvalidArgumentException("The `$basePath` does not exist or is not readable");
        }

        self::$basePath = $basePath;

        self::$map = App::getInstance()->getMap();

    }

    /**
     * @return array mapping index=>assocIndex
     */
    abstract public function getFieldsMap();

    /**
	 * @return string filename with dump
	 */
    public function getFileName() {
        return static::$file;
    }

    public function get() {
        $path = $this->getFilePath();
        $map = $this->getFieldsMap();

        $data = array();

        if (!is_file($path)) {
            throw new \DomainException("Can not open file $path");
        }
        if (!is_readable($path)) {
            throw new \DomainException("Can not read file $path");
        }

        $data = trim(file_get_contents($path));

        // (?<!\\\\) - ignore escaped entities (e.g. \|)
        $data = preg_split('/(?<!\\\\)\n/', $data);
        foreach ($data as &$row) {
            $row = preg_split(
                '/(?<!\\\\)\|/',
                preg_replace('/\\\\\n/', "\n", $row)
            );

            $row = $this->convertRow($map, $row);
        }
        return $data;
    }

    private function convertRow($map, $row) {
        $newRow = array();
        foreach ($row as $key => $value) {
            if (isset($map[$key])) {
                $key = $map[$key];
            }
            $newRow[$key] = $value;
        }

        // invoke converters
        $converters = [
            new \ubackupparser\Convert\DateTransform,
        ];
        foreach ($newRow as $field => $value) {
            foreach ($converters as $converter) {
                if ($converter->isAllowed($field)) {
                    $converter->process($field, $newRow, $this);
                }
            }
        }

        return $newRow;
    }

    public function getFilePath() {
        if (!$this->getFileName()) {
            throw new \DomainException('Each module must define $file');
        }

        //$basePath = //App::getInstance()->getMap();
        $path = self::$basePath . '/_s1/' . $this->getFileName();

        if (!is_file($path)) {
            throw new \DomainException('Dump file does not exist');
        }

        return realpath($path);
    }

    /*public function getUploadsPath() {
        if (!defined('static::$uploadFile')) {
            return null;
        }

        $path = static::$basePath . '/' . static::$uploadFile;

        if (!is_dir($path)) {
            throw new \DomainException('Uploads directory does not exist');
        }

        return realpath($path);
    }*/
}