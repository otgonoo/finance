<?php

namespace Husel\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JournalDetail
 *
 * @ORM\Table(name="journal_detail", indexes={@ORM\Index(name="journal_id", columns={"journal_id"}), @ORM\Index(name="book_id", columns={"book_id"})})
 * @ORM\Entity
 */
class JournalDetail
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
     * @var integer
     *
     * @ORM\Column(name="book_id", type="integer", nullable=false)
     */
    private $bookId;

    /**
     * @var float
     *
     * @ORM\Column(name="debit", type="float", precision=18, scale=2, nullable=false)
     */
    private $debit;

    /**
     * @var float
     *
     * @ORM\Column(name="credit", type="float", precision=18, scale=2, nullable=false)
     */
    private $credit;

    /**
     * @var integer
     *
     * @ORM\Column(name="partner_id", type="integer", nullable=false)
     */
    private $partnerId;

    /**
     * @var string
     *
     * @ORM\Column(name="journal_note", type="string", length=255, nullable=true)
     */
    private $journalNote;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_vat", type="boolean", nullable=false)
     */
    private $hasVat = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="currency", type="float", precision=15, scale=2, nullable=false)
     */
    private $currency;

    /**
     * @var \Journal
     *
     * @ORM\ManyToOne(targetEntity="Journal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     * })
     */
    private $journal;



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
     * Set bookId
     *
     * @param integer $bookId
     * @return JournalDetail
     */
    public function setBookId($bookId)
    {
        $this->bookId = $bookId;

        return $this;
    }

    /**
     * Get bookId
     *
     * @return integer 
     */
    public function getBookId()
    {
        return $this->bookId;
    }

    /**
     * Set debit
     *
     * @param float $debit
     * @return JournalDetail
     */
    public function setDebit($debit)
    {
        $this->debit = $debit;

        return $this;
    }

    /**
     * Get debit
     *
     * @return float 
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Set credit
     *
     * @param float $credit
     * @return JournalDetail
     */
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Get credit
     *
     * @return float 
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set partnerId
     *
     * @param integer $partnerId
     * @return JournalDetail
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * Get partnerId
     *
     * @return integer 
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set journalNote
     *
     * @param string $journalNote
     * @return JournalDetail
     */
    public function setJournalNote($journalNote)
    {
        $this->journalNote = $journalNote;

        return $this;
    }

    /**
     * Get journalNote
     *
     * @return string 
     */
    public function getJournalNote()
    {
        return $this->journalNote;
    }

    /**
     * Set hasVat
     *
     * @param boolean $hasVat
     * @return JournalDetail
     */
    public function setHasVat($hasVat)
    {
        $this->hasVat = $hasVat;

        return $this;
    }

    /**
     * Get hasVat
     *
     * @return boolean 
     */
    public function getHasVat()
    {
        return $this->hasVat;
    }

    /**
     * Set currency
     *
     * @param float $currency
     * @return JournalDetail
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return float 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set journal
     *
     * @param \Husel\FrontendBundle\Entity\Journal $journal
     * @return JournalDetail
     */
    public function setJournal(\Husel\FrontendBundle\Entity\Journal $journal = null)
    {
        $this->journal = $journal;

        return $this;
    }

    /**
     * Get journal
     *
     * @return \Husel\FrontendBundle\Entity\Journal 
     */
    public function getJournal()
    {
        return $this->journal;
    }
}
