<?php

/**
 * This class is used to store interests that can be selected by the user
 * when creating a premium member.
 * This information is later displayed on a summary page
 * @author Stephen Allen
 * @version 1.0
 */
class PremiumShanesMember extends ShanesMember
{

    //Private fields
    private array $_inDoorInterests;
    private array $_outDoorInterests;

    /**
     * This function gets the elements of inDoorInterests as the selected values
     * from the user
     * @return array of values in inDoorInterests
     */
    public function getInDoorInterests(): array {
        return $this->_inDoorInterests;
    }

    /**
     * This function sets the elements of inDoorInterests as the selected values
     * from the user
     */
    public function setInDoorInterests(array $inDoorInterests) {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /**
     * This function gets the elements of outDoorInterests as the selected values
     * from the user
     * @return array of values in outDoorInterests
     */
    public function getOutDoorInterests(): array {
        return $this->_outDoorInterests;
    }

    /**
     * This function sets the elements of outDoorInterests as the selected values
     * from the user
     */
    public function setOutDoorInterests(array $outDoorInterests) {
        $this->_outDoorInterests = $outDoorInterests;
    }

}