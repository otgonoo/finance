<?php

namespace Husel\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="JournalRepository")
 * @ORM\Table(name="journal")
 */
class Journal
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date", name="journal_date")
     */
    protected $journalDate;

    /**
     * @ORM\Column(type="integer", name="order_id")
     */
    protected $orderId;

    /**
     * @ORM\Column(type="integer", name="status_id")
     */
    protected $statusId;

    /**
     * @ORM\Column(type="integer")
     */
    protected $module;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     */
    protected $createdAt;

    /**
     * @ORM\Column(type="integer", name="created_user_id")
     */
    protected $createdUserId;

    /**
     * @ORM\Column(type="datetime", name="updated_at")
     */
    protected $updatedAt;

    /**
     * @ORM\Column(type="integer", name="updated_user_id")
     */
    protected $updatedUserId;

    /**
     * @ORM\OneToMany(targetEntity="JournalDetail", mappedBy="journal")
     */
    protected $journalDetails;

    public function __construct()
    {
        $this->journalDetails = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set journalDate
     *
     * @param \DateTime $journalDate
     * @return Journal
     */
    public function setJournalDate($journalDate)
    {
        $this->journalDate = $journalDate;

        return $this;
    }

    /**
     * Get journalDate
     *
     * @return \DateTime 
     */
    public function getJournalDate()
    {
        return $this->journalDate;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Journal
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     * @return Journal
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set module
     *
     * @param integer $module
     * @return Journal
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return integer 
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Journal
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdUserId
     *
     * @param integer $createdUserId
     * @return Journal
     */
    public function setCreatedUserId($createdUserId)
    {
        $this->createdUserId = $createdUserId;

        return $this;
    }

    /**
     * Get createdUserId
     *
     * @return integer 
     */
    public function getCreatedUserId()
    {
        return $this->createdUserId;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Journal
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedUserId
     *
     * @param integer $updatedUserId
     * @return Journal
     */
    public function setUpdatedUserId($updatedUserId)
    {
        $this->updatedUserId = $updatedUserId;

        return $this;
    }

    /**
     * Get updatedUserId
     *
     * @return integer 
     */
    public function getUpdatedUserId()
    {
        return $this->updatedUserId;
    }

    /**
     * Add journalDetails
     *
     * @param \Husel\FrontendBundle\Entity\JournalDetail $journalDetails
     * @return Journal
     */
    public function addJournalDetail(\Husel\FrontendBundle\Entity\JournalDetail $journalDetails)
    {
        $this->journalDetails[] = $journalDetails;

        return $this;
    }

    /**
     * Remove journalDetails
     *
     * @param \Husel\FrontendBundle\Entity\JournalDetail $journalDetails
     */
    public function removeJournalDetail(\Husel\FrontendBundle\Entity\JournalDetail $journalDetails)
    {
        $this->journalDetails->removeElement($journalDetails);
    }

    /**
     * Get journalDetails
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJournalDetails()
    {
        return $this->journalDetails;
    }

}
