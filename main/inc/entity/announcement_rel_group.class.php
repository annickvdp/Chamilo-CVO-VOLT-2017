<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @license see /license.txt
 * @author autogenerated
 */
class AnnouncementRelGroup extends \Entity
{
    /**
     * @return \Entity\Repository\AnnouncementRelGroupRepository
     */
     public static function repository(){
        return \Entity\Repository\AnnouncementRelGroupRepository::instance();
    }

    /**
     * @return \Entity\AnnouncementRelGroup
     */
     public static function create(){
        return new self();
    }

    /**
     * @var integer $group_id
     */
    protected $group_id;

    /**
     * @var integer $announcement_id
     */
    protected $announcement_id;


    /**
     * Set group_id
     *
     * @param integer $value
     * @return AnnouncementRelGroup
     */
    public function set_group_id($value)
    {
        $this->group_id = $value;
        return $this;
    }

    /**
     * Get group_id
     *
     * @return integer 
     */
    public function get_group_id()
    {
        return $this->group_id;
    }

    /**
     * Set announcement_id
     *
     * @param integer $value
     * @return AnnouncementRelGroup
     */
    public function set_announcement_id($value)
    {
        $this->announcement_id = $value;
        return $this;
    }

    /**
     * Get announcement_id
     *
     * @return integer 
     */
    public function get_announcement_id()
    {
        return $this->announcement_id;
    }
}