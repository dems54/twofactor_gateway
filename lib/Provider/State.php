<?php

/**
 * @copyright 2018 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2018 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\TwoFactorGateway\Provider;

use JsonSerializable;

class State implements JsonSerializable {

	/** @var int */
	private $state;

	/** @var string */
	private $phoneNumber;

	public function __construct(int $state, string $phoneNumber = null) {
		$this->state = $state;
		$this->phoneNumber = $phoneNumber;
	}

	public function jsonSerialize() {
		return [
			'state' => $this->state,
			'phoneNumber' => $this->phoneNumber,
		];
	}

}
