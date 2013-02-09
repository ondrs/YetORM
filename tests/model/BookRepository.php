<?php


class BookRepository extends YetORM\Repository
{

	/**
	 * @param  mixed
	 * @return Book
	 */
	function create($values)
	{
		return new Book($this->insertRow($values));
	}



	/**
	 * @param  Book
	 * @param  mixed
	 * @return int
	 */
	function edit(Book $book, $values)
	{
		return $this->updateRow($book->getActiveRow(), $values);
	}



	/**
	 * @param  Book
	 * @param  mixed
	 * @return int
	 */
	function remove(Book $book)
	{
		return $this->deleteRow($book->getActiveRow());
	}



	/** @return Book */
	function findById($id)
	{
		return new Book($this->getTable()->get($id));
	}



	/** @return EntityCollection */
	function findByTag($name)
	{
		return $this->createCollection($this->getTable()->where('book_tag:tag.name', $name));
	}



	/** @return EntityCollection */
	function findAll()
	{
		return $this->createCollection($this->getTable());
	}

}
