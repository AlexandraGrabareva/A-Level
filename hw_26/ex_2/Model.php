<?php

require_once('DbConnection.php');

abstract class AbstractModel
{
	protected $id;
	protected $connection;

	protected $_data;

	public function __construct(Connection $connection) {
		$this->connection = $connection;
	}

	public function load($id) {
		$sql = 'SELECT * FROM `' . $this->tableName . '` WHERE id = ?';
		$result = $this->connection->query($sql, [$id]);

		if (count($result)) {
			$this->fillData($result);
		}
	}
}

class AuthorModel extends AbstractModel
{
	protected $tableName = 'authors';

	public $name;

	protected function fillData($record) {
		$this->id = $record[0]['id'];
		$this->name = $record[0]['name'];
	}

	public function save() {
		if ($this->id) {
			$sql = 'UPDATE `authors` SET name = ? WHERE id = ?';
			$result = $this->connection->query($sql, [$this->name, $this->id]);
		} else {
			$sql = 'INSERT INTO `authors` (name) VALUES (?)';
			$result = $this->connection->query($sql, [$this->name]);
		}
	}
}

class BookModel extends AbstractModel
{
	protected $tableName = 'books';

	public $name;
	public $author_id;

	protected function fillData($record) {
		$this->id = $record[0]['id'];
		$this->name = $record[0]['name'];
		$this->author_id = $record[0]['author_id'];
	}

	public function save() {
		if ($this->id) {
			$sql = 'UPDATE `books` SET name = ? WHERE id = ?';
			$result = $this->connection->query($sql, [$this->name, $this->id]);
		} else {
			$sql = 'INSERT INTO `books` (name, author_id) VALUES (?, ?)';
			$result = $this->connection->query($sql, [$this->name, $this->author_id]);
		}
	}
}

$model1 = new BookModel(Connection::getInstance());
$model1->name = 'British Encyclopedia vol.1';
$model1->author_id = 25;
$model1->save();

$mode2 = new BookModel(Connection::getInstance());
$mode2->load(1);
$mode2->name .= '(ed.5)';
$mode2->save();