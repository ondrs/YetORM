<?php

/**
 * This file is part of the YetORM library
 *
 * Copyright (c) 2013 Petr Kessler (http://kesspess.1991.cz)
 *
 * @license  MIT
 * @link     https://github.com/uestla/YetORM
 */

namespace YetORM;


interface IEntityCollection extends \Iterator, \Countable
{

	/** @return array */
	function getData();



	/**
	 * @param  string
	 * @param  bool
	 * @return IEntityCollection
	 */
	function orderBy($column, $desc = FALSE);



	/**
	 * @param  int
	 * @param  int|NULL
	 * @return IEntityCollection
	 */
	function limit($limit, $offset = NULL);

}
