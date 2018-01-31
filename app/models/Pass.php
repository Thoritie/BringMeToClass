<?php

class Pass extends \Phalcon\Mvc\Model
{

    
    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $CusName;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $CusSir;


    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Here;


    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $Going;

   

    /**
     * Initialize method for model.
     */
    /*public function initialize()
    {
        $this->setSchema("camp");
        $this->belongsTo('Location_idLocation', '\Location', 'idLocation', ['alias' => 'Location']);
        $this->belongsTo('Teacher_idTeacher', '\Teacher', 'idTeacher', ['alias' => 'Teacher']);
        $this->belongsTo('Type_idType', '\Type', 'idType', ['alias' => 'Type']);
        $this->belongsTo('YearOfEducation_semeter', '\Yearofeducation', 'semeter', ['alias' => 'Yearofeducation']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     *//*
    public function getSource()
    {
        return 'Activity';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activity[]|Activity
     *//*
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Activity
     */
   /* public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
*/
}
