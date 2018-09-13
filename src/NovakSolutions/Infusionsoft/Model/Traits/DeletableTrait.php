<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/27/18
 * Time: 11:27 AM
 */
namespace NovakSolutions\Infusionsoft\Model\Traits;

use NovakSolutions\Infusionsoft\Exception\Exception;

trait DeletableTrait
{
    public function delete(){
        $serviceClassName = static::$serviceClassName;
        $primaryKeyFieldName = static::$primaryKeyFieldName;
        if($this->$primaryKeyFieldName != null){
            $serviceClassName::delete($this->{static::$primaryKeyFieldName});
        } else {
            throw new Exception("Cannot delete " . get_class($this) . ' it has no value for: ' . static::$primaryKeyFieldName);
        }
    }
}