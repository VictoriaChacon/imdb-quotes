<?php
/**
 * Actor profile that is related to the quote in a movie review site
 *
 * This is what a user will see when they are redirected through quote or movie to an actor on the IMDB site. The actor is related both to the quote and the movie.
 *
 * @author Victoria Chacon <vchacon8@cnm.edu>
 **/
class Actor {
	/**
	 * id for actor; this is the primary key
	 **/
	private $actorId;
	/**
	 * id for the actor name
	 */
	private $actorName;

	/**
	 * accessor method for actor Id
	 *
	 * @return int|null value of actor Id
	 **/
	public function getActorId() {
		return($this->actorId);
	}

	//why would i do TypeError instead of UnexpectedValueException? DRY?
	/**
	 * mutator method for actor Id
	 * @param int|null $newActorId new value of actor Id
	 * @throws \RangeException if $newActorId is not positive
	 * @throws \TypeError if $newActorId is not an integer
	 **/
	// used so that the actor id can be changed
	public function setActorId(int $newActorId = null) {
		// base case: if the actor Id is null, then this is a new actor without an assigned Id.
		if($newActorId === null) {
			$this->actorId = null;
			return;
		}
		//verify the actor id is positive
		if($newActorId <=0)
				throw(new \RangeException("actor id is not positive"));
		$this->actorId = $newActorId;
	}

	/**
	 * accessor method for the actor Name
	 *
	 * @return string value for actorName
	 */
	public function getActorName() {
		return($this->actorName);
	}
	/**
	 * mutator method for actor Name
	 *
	 * @param string $newActorName new value of actor name
	 * @throws \InvalidArgumentException if $newActorName is not a string or insecure
	 * @throws \TypeError if $newActorName is not a string
	 **/
	public function setActorName(string $newActorName) {
		//made to verify that the actor name is secure?
		$newActorName = trim($newActorName);
		$newActorName = filter_var($newActorName, FILTER_SANITIZE_STRING);
		if(empty($newActorName) === true) {
			throw(new InvalidArgumentException("actor name is not a string"));
		}
		//are these range exceptions necessary...i can see maybe if it is is less than or equal to zero, but this is different than tweet content...wuld I even need this? How about validating a string?
		if(strlen($newActorName) > 100) {
			throw(new \TypeError("actor name is not a string"));
		}
		//storing the actor name
		$this->actorName = $newActorName;
	}
}




