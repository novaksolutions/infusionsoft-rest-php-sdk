<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/27/18
 * Time: 11:27 AM
 */
namespace NovakSolutions\Infusionsoft\Model\Traits;

trait SavableTrait
{
    public function save($reloadFromReturn = true){
        $serviceClassName = static::$serviceClassName;

        if($this->id != null){
            $serviceClassName::update($this->toArray());
        } else {
            $result = $serviceClassName::create($this->toArray());
        }

        if($reloadFromReturn) {
            $this->fromArray($result->toArray());
        }
    }
}