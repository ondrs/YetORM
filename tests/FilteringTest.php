<?php


class FilteringTest extends PHPUnit_Framework_TestCase
{

	function testA()
	{
		$books = static::getAllBooksCollection();
		$this->assertEquals(2, count($books->filter('written <= ?', new DateTime('2005-01-01'))));
	}



	function testB()
	{
		$books = static::getAllBooksCollection();
		$this->assertEquals(1, count($books->filter('book_title', 'Nette')));
	}



	function testC()
	{
		$authors = ServiceLocator::getAuthorRepository()->findAll();

		$filtered = array();
		foreach ($authors->filter('name', 'Jakub Vrana') as $author) {
			$filtered[] = $author->toArray();
		}

		$this->assertEquals(array(
			array(
				'id' => 11,
				'name' => 'Jakub Vrana',
			),

		), $filtered);

		// no results, filter appended after the previous ones
		$this->assertEquals(0, count($authors->filter('name', 'David Grudl')));
	}



	protected static function getAllBooksCollection()
	{
		return ServiceLocator::getBookRepository()->findAll();
	}

}
