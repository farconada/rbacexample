<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Event
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */

class Tx_Rbacexample_Domain_Model_Event extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * date
	 *
	 * @var DateTime $date
	 * @validate NotEmpty
	 */
	protected $date;

	/**
	 * description
	 *
	 * @var string $description
	 * @validate NotEmpty
	 */
	protected $description;

	/**
	 * place
	 *
	 * @var string $place
	 * @validate NotEmpty
	 */
	protected $place;

	/**
	 * Secret Plans
	 *
	 * @var string $secretplans
	 */
	protected $secretplans;

	/**
	 * Setter for date
	 *
	 * @param DateTime $date date
	 * @return void
	 */
	public function setDate(DateTime $date) {
		$this->date = $date;
	}

	/**
	 * Getter for date
	 *
	 * @return DateTime date
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Setter for description
	 *
	 * @param string $description description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 *
	 * @return string description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Setter for place
	 *
	 * @param string $place place
	 * @return void
	 */
	public function setPlace($place) {
		$this->place = $place;
	}

	/**
	 * Getter for place
	 *
	 * @return string place
	 */
	public function getPlace() {
		return $this->place;
	}

	/**
	 * Setter for secretplans
	 *
	 * @param string $secretplans Secret Plans
	 * @return void
	 */
	public function setSecretplans($secretplans) {
		$this->secretplans = $secretplans;
	}

	/**
	 * Getter for secretplans
	 *
	 * @return string Secret Plans
	 */
	public function getSecretplans() {
		return $this->secretplans;
	}

}
?>