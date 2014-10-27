<?php

/**
 * This is the model class for table "journal_impact_factor".
 *
 * The followings are the available columns in table 'journal_impact_factor':
 * @property integer $impf_id
 * @property string $full_title
 * @property string $journal_title
 * @property string $issn
 * @property string $impact_factor
 * @property integer $total_cites
 * @property integer $citableitems
 * @property integer $impf_year
 * @property string $impf_update
 * @property string $debug
 * @property string $subject_categories
 */
class JournalImpactFactor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'journal_impact_factor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_title, journal_title, issn, impact_factor, total_cites, citableitems, impf_year, impf_update, debug, subject_categories', 'required'),
			array('total_cites, citableitems, impf_year', 'numerical', 'integerOnly'=>true),
			array('issn', 'length', 'max'=>9),
			array('impact_factor', 'length', 'max'=>32),
			array('debug', 'length', 'max'=>16),
			array('subject_categories', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('impf_id, full_title, journal_title, issn, impact_factor, total_cites, citableitems, impf_year, impf_update, debug, subject_categories', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'impf_id' => 'Impf',
			'full_title' => 'Full Title',
			'journal_title' => 'Journal Title',
			'issn' => 'Issn',
			'impact_factor' => 'Impact Factor',
			'total_cites' => 'Total Cites',
			'citableitems' => 'Citableitems',
			'impf_year' => 'Impf Year',
			'impf_update' => 'Impf Update',
			'debug' => 'Debug',
			'subject_categories' => 'Subject Categories',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('impf_id',$this->impf_id);
		$criteria->compare('full_title',$this->full_title,true);
		$criteria->compare('journal_title',$this->journal_title,true);
		$criteria->compare('issn',$this->issn,true);
		$criteria->compare('impact_factor',$this->impact_factor,true);
		$criteria->compare('total_cites',$this->total_cites);
		$criteria->compare('citableitems',$this->citableitems);
		$criteria->compare('impf_year',$this->impf_year);
		$criteria->compare('impf_update',$this->impf_update,true);
		$criteria->compare('debug',$this->debug,true);
		$criteria->compare('subject_categories',$this->subject_categories,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JournalImpactFactor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
