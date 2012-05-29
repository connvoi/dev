<?php

namespace Fuel\Migrations;

class Create_buzzwords
{
	public function up()
	{
		\DBUtil::create_table('buzzwords', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true),
			'word' => array('type' => 'text'),
			'child' => array('type' => 'text'),
			'related_word' => array('type' => 'text'),
			'related_url' => array('type' => 'text'),
			'related_hash' => array('type' => 'text'),
			'category1' => array('type' => 'text'),
			'cname1' => array('type' => 'text'),
			'category2' => array('type' => 'text'),
			'cname2' => array('type' => 'text'),
			'category3' => array('type' => 'text'),
			'cname3' => array('type' => 'text'),
			'category4' => array('type' => 'text'),
			'cname4' => array('type' => 'text'),
			'judge' => array('type' => 'text'),
			'comment' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('buzzwords');
	}
}