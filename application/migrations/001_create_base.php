<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_base extends CI_Migration {

	public function up() {

		## Create Table categories
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->add_field("`parent_id` int(11) NULL ");
		$this->dbforge->add_field("`name` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`color` varchar(7) NOT NULL DEFAULT '#000000' ");
		$this->dbforge->create_table("categories", TRUE);
		$this->db->query('ALTER TABLE  `categories` ENGINE = InnoDB');
		## Create Table categories_entries
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->add_field("`category_id` int(11) unsigned NOT NULL ");
		$this->dbforge->add_field("`entry_id` int(11) unsigned NOT NULL ");
		$this->dbforge->create_table("categories_entries", TRUE);
		$this->db->query('ALTER TABLE  `categories_entries` ENGINE = InnoDB');
		## Create Table entries
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->add_field("`name` varchar(255) NOT NULL ");
		$this->dbforge->add_field("`income` tinyint(1) NOT NULL ");
		$this->dbforge->add_field("`value` decimal(9,2) NOT NULL ");
		$this->dbforge->add_field("`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ");
		$this->dbforge->add_field("`modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP");
		$this->dbforge->create_table("entries", TRUE);
		$this->db->query('ALTER TABLE  `entries` ENGINE = InnoDB');
		## Create Table entries_tags
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->add_field("`entry_id` int(11) unsigned NOT NULL ");
		$this->dbforge->add_field("`tag_id` int(11) unsigned NOT NULL ");
		$this->dbforge->create_table("entries_tags", TRUE);
		$this->db->query('ALTER TABLE  `entries_tags` ENGINE = InnoDB');
		## Create Table migrations
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->create_table("migrations", TRUE);
		$this->db->query('ALTER TABLE  `migrations` ENGINE = InnoDB');
		## Create Table tags
		$this->dbforge->add_field("`id` int(11) unsigned NOT NULL auto_increment");
		$this->dbforge->add_key("id",true);
		$this->dbforge->add_field("`name` varchar(255) NULL ");
		$this->dbforge->add_field("`color` varchar(7) NOT NULL DEFAULT '#000000' ");
		$this->dbforge->create_table("tags", TRUE);
		$this->db->query('ALTER TABLE  `tags` ENGINE = InnoDB');
	 }

	public function down()	{
		### Drop table categories ##
		$this->dbforge->drop_table("categories", TRUE);
		### Drop table categories_entries ##
		$this->dbforge->drop_table("categories_entries", TRUE);
		### Drop table entries ##
		$this->dbforge->drop_table("entries", TRUE);
		### Drop table entries_tags ##
		$this->dbforge->drop_table("entries_tags", TRUE);
		### Drop table migrations ##
		$this->dbforge->drop_table("migrations", TRUE);
		### Drop table tags ##
		$this->dbforge->drop_table("tags", TRUE);

	}
}