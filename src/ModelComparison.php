<?php

namespace PatourasAlexandros\EloquentComparison;

class ModelComparison 
{

    public function checkTypeOfModels($collection) {
        //
    }

    public function getFieldsOfModel($model) {
        return $model->getConnection()->getSchemaBuilder()->getColumnListing($model->getTable());
    }

    public function getFieldsWithDifference($models, $fields) {
        $diff_fields = array();
        foreach($fields as $key=>$field) {
            if($models[0]->$field != $models[1]->$field) {
                $diff_fields[] = $field;
            }
        }
        return array_diff($diff_fields, ['id', 'created_at' , 'updated_at', 'process_id']);
    }


}