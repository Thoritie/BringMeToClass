<?php

class Customer extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $customerID;

    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    public $customerName;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=false)
     */
    public $customerLastName;

    /**
     *
     * @var string
     * @Column(type="string", length=6, nullable=false)
     */
    public $customerTelephoneNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=6, nullable=false)
     */
    public $customerPassword;

    
    /**
     *
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    //public $picture;

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
