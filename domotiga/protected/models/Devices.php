<?php

/**
 * This is the model class for table "devices".
 *
 * The followings are the available columns in table 'devices':
 * @property string $id
 * @property string $name
 * @property string $address
 * @property integer $module
 * @property integer $location
 * @property string $value
 * @property string $value2
 * @property string $value3
 * @property string $value4
 * @property string $label
 * @property string $label2
 * @property string $label3
 * @property string $label4
 * @property string $correction
 * @property string $correction2
 * @property string $correction3
 * @property string $correction4
 * @property string $onicon
 * @property string $officon
 * @property string $dimicon
 * @property integer $interface
 * @property string $firstseen
 * @property string $lastseen
 * @property integer $enabled
 * @property integer $hide
 * @property integer $log
 * @property integer $logdisplay
 * @property integer $logspeak
 * @property string $groups
 * @property integer $rrd
 * @property integer $graph
 * @property string $batterystatus
 * @property integer $tampered
 * @property string $comments
 * @property string $valuerrddsname
 * @property string $value2rrddsname
 * @property string $value3rrddsname
 * @property string $value4rrddsname
 * @property string $valuerrdtype
 * @property string $value2rrdtype
 * @property string $value3rrdtype
 * @property string $value4rrdtype
 * @property integer $switchable
 * @property integer $dimable
 * @property integer $extcode
 * @property integer $x
 * @property integer $y
 * @property integer $floorplan
 * @property string $lastchanged
 * @property integer $repeatstate
 * @property integer $repeatperiod
 * @property integer $reset
 * @property integer $resetperiod
 * @property string $resetvalue
 * @property integer $poll
 */
class Devices extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Devices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'devices';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('module, location, interface, enabled, hide, log, logdisplay, logspeak, rrd, graph, tampered, switchable, dimable, extcode, x, y, floorplan, repeatstate, repeatperiod, reset, resetperiod, poll', 'numerical', 'integerOnly'=>true),
			array('name, label, label2, label3, label4, onicon, officon, dimicon, batterystatus, valuerrddsname, value2rrddsname, value3rrddsname, value4rrddsname, valuerrdtype, value2rrdtype, value3rrdtype, value4rrdtype', 'length', 'max'=>32),
			array('address', 'length', 'max'=>64),
			array('groups', 'length', 'max'=>128),
			array('value, value2, value3, value4, correction, correction2, correction3, correction4, firstseen, lastseen, comments, lastchanged, resetvalue', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, address, module, location, value, value2, value3, value4, label, label2, label3, label4, correction, correction2, correction3, correction4, onicon, officon, dimicon, interface, firstseen, lastseen, enabled, hide, log, logdisplay, logspeak, groups, rrd, graph, batterystatus, tampered, comments, valuerrddsname, value2rrddsname, value3rrddsname, value4rrddsname, valuerrdtype, value2rrdtype, value3rrdtype, value4rrdtype, switchable, dimable, extcode, x, y, floorplan, lastchanged, repeatstate, repeatperiod, reset, resetperiod, resetvalue, poll', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'address' => 'Address',
			'module' => 'Module',
			'location' => 'Location',
			'value' => 'Value',
			'value2' => 'Value2',
			'value3' => 'Value3',
			'value4' => 'Value4',
			'label' => 'Label',
			'label2' => 'Label2',
			'label3' => 'Label3',
			'label4' => 'Label4',
			'correction' => 'Correction',
			'correction2' => 'Correction2',
			'correction3' => 'Correction3',
			'correction4' => 'Correction4',
			'onicon' => 'Onicon',
			'officon' => 'Officon',
			'dimicon' => 'Dimicon',
			'interface' => 'Interface',
			'firstseen' => 'Firstseen',
			'lastseen' => 'Lastseen',
			'enabled' => 'Enabled',
			'hide' => 'Hide',
			'log' => 'Log',
			'logdisplay' => 'Logdisplay',
			'logspeak' => 'Logspeak',
			'groups' => 'Groups',
			'rrd' => 'Rrd',
			'graph' => 'Graph',
			'batterystatus' => 'Batterystatus',
			'tampered' => 'Tampered',
			'comments' => 'Comments',
			'valuerrddsname' => 'Valuerrddsname',
			'value2rrddsname' => 'Value2rrddsname',
			'value3rrddsname' => 'Value3rrddsname',
			'value4rrddsname' => 'Value4rrddsname',
			'valuerrdtype' => 'Valuerrdtype',
			'value2rrdtype' => 'Value2rrdtype',
			'value3rrdtype' => 'Value3rrdtype',
			'value4rrdtype' => 'Value4rrdtype',
			'switchable' => 'Switchable',
			'dimable' => 'Dimable',
			'extcode' => 'Extcode',
			'x' => 'X',
			'y' => 'Y',
			'floorplan' => 'Floorplan',
			'lastchanged' => 'Lastchanged',
			'repeatstate' => 'Repeatstate',
			'repeatperiod' => 'Repeatperiod',
			'reset' => 'Reset',
			'resetperiod' => 'Resetperiod',
			'resetvalue' => 'Resetvalue',
			'poll' => 'Poll',
		);
	}

	/**
	 * Retrieves a list of devices
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
        public function displayDevices()
        {
                $criteria=new CDbCriteria;

                $criteria->condition = "enabled=true";

                return new CActiveDataProvider($this, array(
                        'criteria'=>$criteria,
                ));
        }

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('module',$this->module);
		$criteria->compare('location',$this->location);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('value2',$this->value2,true);
		$criteria->compare('value3',$this->value3,true);
		$criteria->compare('value4',$this->value4,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('label2',$this->label2,true);
		$criteria->compare('label3',$this->label3,true);
		$criteria->compare('label4',$this->label4,true);
		$criteria->compare('correction',$this->correction,true);
		$criteria->compare('correction2',$this->correction2,true);
		$criteria->compare('correction3',$this->correction3,true);
		$criteria->compare('correction4',$this->correction4,true);
		$criteria->compare('onicon',$this->onicon,true);
		$criteria->compare('officon',$this->officon,true);
		$criteria->compare('dimicon',$this->dimicon,true);
		$criteria->compare('interface',$this->interface);
		$criteria->compare('firstseen',$this->firstseen,true);
		$criteria->compare('lastseen',$this->lastseen,true);
		$criteria->compare('enabled',$this->enabled);
		$criteria->compare('hide',$this->hide);
		$criteria->compare('log',$this->log);
		$criteria->compare('logdisplay',$this->logdisplay);
		$criteria->compare('logspeak',$this->logspeak);
		$criteria->compare('groups',$this->groups,true);
		$criteria->compare('rrd',$this->rrd);
		$criteria->compare('graph',$this->graph);
		$criteria->compare('batterystatus',$this->batterystatus,true);
		$criteria->compare('tampered',$this->tampered);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('valuerrddsname',$this->valuerrddsname,true);
		$criteria->compare('value2rrddsname',$this->value2rrddsname,true);
		$criteria->compare('value3rrddsname',$this->value3rrddsname,true);
		$criteria->compare('value4rrddsname',$this->value4rrddsname,true);
		$criteria->compare('valuerrdtype',$this->valuerrdtype,true);
		$criteria->compare('value2rrdtype',$this->value2rrdtype,true);
		$criteria->compare('value3rrdtype',$this->value3rrdtype,true);
		$criteria->compare('value4rrdtype',$this->value4rrdtype,true);
		$criteria->compare('switchable',$this->switchable);
		$criteria->compare('dimable',$this->dimable);
		$criteria->compare('extcode',$this->extcode);
		$criteria->compare('x',$this->x);
		$criteria->compare('y',$this->y);
		$criteria->compare('floorplan',$this->floorplan);
		$criteria->compare('lastchanged',$this->lastchanged,true);
		$criteria->compare('repeatstate',$this->repeatstate);
		$criteria->compare('repeatperiod',$this->repeatperiod);
		$criteria->compare('reset',$this->reset);
		$criteria->compare('resetperiod',$this->resetperiod);
		$criteria->compare('resetvalue',$this->resetvalue,true);
		$criteria->compare('poll',$this->poll);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}