<?php
use Orm\Model;

class Model_Buzzword extends Model
{
	protected static $_properties = array(
		'id',
		'word',
		'child',
		'related_word',
		'related_url',
		'related_hash',
		'category1',
		'cname1',
		'category2',
		'cname2',
		'category3',
		'cname3',
		'category4',
		'cname4',
		'judge',
		'comment',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_save'),
			'mysql_timestamp' => false,
		),
	);

	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('word', 'Word', 'required');
		$val->add_field('child', 'Child', 'required');
		$val->add_field('related_word', 'Related Word', 'required');
		$val->add_field('related_url', 'Related Url', 'required');
		$val->add_field('related_hash', 'Related Hash', 'required');
		$val->add_field('category1', 'Category1', 'required');
		$val->add_field('cname1', 'Cname1', 'required');
		$val->add_field('category2', 'Category2', 'required');
		$val->add_field('cname2', 'Cname2', 'required');
		$val->add_field('category3', 'Category3', 'required');
		$val->add_field('cname3', 'Cname3', 'required');
		$val->add_field('category4', 'Category4', 'required');
		$val->add_field('cname4', 'Cname4', 'required');
		$val->add_field('judge', 'Judge', '');
		$val->add_field('comment', 'Comment', '');

		return $val;
	}

}
