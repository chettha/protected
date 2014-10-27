<?php

/**
 * This is the model class for table "journal_scimago".
 *
 * The followings are the available columns in table 'journal_scimago':
 * @property integer $scimago_id
 * @property string $type
 * @property string $subject_area
 * @property string $subject_category
 * @property string $subject_code
 * @property string $title
 * @property string $issn
 * @property string $Q
 * @property string $sjr
 * @property string $h_index
 * @property string $total_docs_2012
 * @property string $total_docs_3years
 * @property string $total_refs
 * @property string $total_cites_3years
 * @property string $citable_docs_3years
 * @property string $cites_doc_2years
 * @property string $ref_doc
 * @property string $country
 * @property string $year
 * @property string $apply_time
 */
class JournalScimago extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'journal_scimago';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, subject_area, subject_category, subject_code, title, issn, Q, sjr, h_index, total_docs_2012, total_docs_3years, total_refs, total_cites_3years, citable_docs_3years, cites_doc_2years, ref_doc, country, year, apply_time', 'required'),
			array('type', 'length', 'max'=>5),
			array('subject_code', 'length', 'max'=>16),
			array('issn', 'length', 'max'=>12),
			array('Q', 'length', 'max'=>8),
			array('sjr, h_index, total_docs_2012, total_docs_3years, total_refs, total_cites_3years, citable_docs_3years, cites_doc_2years, ref_doc, country', 'length', 'max'=>255),
			array('year', 'length', 'max'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('scimago_id, type, subject_area, subject_category, subject_code, title, issn, Q, sjr, h_index, total_docs_2012, total_docs_3years, total_refs, total_cites_3years, citable_docs_3years, cites_doc_2years, ref_doc, country, year, apply_time', 'safe', 'on'=>'search'),
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
			'scimago_id' => 'Scimago',
			'type' => 'Type',
			'subject_area' => 'Subject Area',
			'subject_category' => 'Subject Category',
			'subject_code' => 'Subject Code',
			'title' => 'Title',
			'issn' => 'Issn',
			'Q' => 'Q',
			'sjr' => 'Sjr',
			'h_index' => 'H Index',
			'total_docs_2012' => 'Total Docs 2012',
			'total_docs_3years' => 'Total Docs 3years',
			'total_refs' => 'Total Refs',
			'total_cites_3years' => 'Total Cites 3years',
			'citable_docs_3years' => 'Citable Docs 3years',
			'cites_doc_2years' => 'Cites Doc 2years',
			'ref_doc' => 'Ref Doc',
			'country' => 'Country',
			'year' => 'Year',
			'apply_time' => 'Apply Time',
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

		$criteria->compare('scimago_id',$this->scimago_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('subject_area',$this->subject_area,true);
		$criteria->compare('subject_category',$this->subject_category,true);
		$criteria->compare('subject_code',$this->subject_code,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('issn',$this->issn,true);
		$criteria->compare('Q',$this->Q,true);
		$criteria->compare('sjr',$this->sjr,true);
		$criteria->compare('h_index',$this->h_index,true);
		$criteria->compare('total_docs_2012',$this->total_docs_2012,true);
		$criteria->compare('total_docs_3years',$this->total_docs_3years,true);
		$criteria->compare('total_refs',$this->total_refs,true);
		$criteria->compare('total_cites_3years',$this->total_cites_3years,true);
		$criteria->compare('citable_docs_3years',$this->citable_docs_3years,true);
		$criteria->compare('cites_doc_2years',$this->cites_doc_2years,true);
		$criteria->compare('ref_doc',$this->ref_doc,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('apply_time',$this->apply_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JournalScimago the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
