<?php
namespace ubackupparser\Convert;

use ubackupparser\Convert\Base\Convert;

class Attachments extends Convert {

	public function getAllowFields() {
		return [
			self::$map['ATTACHMENTS'],						
		];
	}

	public function process($field, &$fields, $module){
		$images = explode('\\|', $fields[$field]);

        //print_r($images);

        foreach ($images as &$image) {
            $image = explode('`', $image);
            if (count($image) == 6) {
                $keys = array_merge([
                    'name',
                    'extension',
                    'fullWidth',
                    'fullHeight',
                    'thumbWidth',
                    'thumbHeight',
                ]);
                $image = array_combine($keys, $image);
                $image['filename'] = $image['name'] . '.' . $image['extension'];
                $image['filepath'] = $module->getUploadsPath() . '/' . $image['filename'];

                //print_r($image);
            }
        }

        $fields[$field] = &$images;

	}

}