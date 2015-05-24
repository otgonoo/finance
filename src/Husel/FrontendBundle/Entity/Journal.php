<?php

namespace Husel\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journal
 *
 * @ORM\Table(name="journal")
 * @ORM\Entity(repositoryClass="JournalRepository")
 */
class Journal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="journal_date", type="date", nullable=false)
     */
    private $journalDate;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=255, nullable=false)
     */
    private $document;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="status_id", type="boolean", nullable=false)
     */
    private $statusId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="module", type="boolean", nullable=false)
     */
    private $module = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_user_id", type="integer", nullable=false)
     */
    private $createdUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_user_id", type="integer", nullable=true)
     */
    private $updatedUserId;



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
     * Set document
     *
     * @param string $document
     * @return Journal
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string 
     */
    public function getDocument()
    {
        return $this->document;
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
     * @param boolean $statusId
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
     * @return boolean 
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set module
     *
     * @param boolean $module
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
     * @return boolean 
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
}
