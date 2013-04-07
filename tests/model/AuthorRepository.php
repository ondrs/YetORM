<?php


class AuthorRepository extends YetORM\Repository
{

	/**
	 * @param  int
	 * @return Author
	 */
	function findById($id)
	{
		return new Author($this->getTable()->get($id));
	}



	/** @return YetORM\EntityCollection */
	function findAll()
	{
		return $this->createCollection($this->getTable());
	}

}
