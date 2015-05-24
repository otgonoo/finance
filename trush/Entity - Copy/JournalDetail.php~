<?php

namespace Husel\FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="JournalDetailRepository")
 * @ORM\Table(name="journal_detail")
 */
class JournalDetail
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", name="journal_id")
     */
    protected $journalId;

    /**
     * @ORM\Column(type="integer", name="book_id")
     */
    protected $bookId;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $debit;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $credit;

    /**
     * @ORM\Column(type="integer", name="partner_id")
     */
    protected $partnerId;

    /**
     * @ORM\Column(type="string", name="journal_note", length=250)
     */
    protected $journalNote;

    /**
     * @ORM\Column(type="integer", name="has_vat", length=4)
     */
    protected $has_vat;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $currency;

    /**
     * @ORM\ManyToOne(targetEntity="Journal", inversedBy="journalDetails")
     * @ORM\JoinColumn(name="journal_id", referencedColumnName="id")
     */
    protected $journal;

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
     * Set journalId
     *
     * @param integer $journalId
     * @return JournalDetail
     */
    public function setJournalId($journalId)
    {
        $this->journalId = $journalId;

        return $this;
    }

    /**
     * Get journalId
     *
     * @return integer 
     */
    public function getJournalId()
    {
        return $this->journalId;
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
     * @param string $debit
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
     * @return string 
     */
    public function getDebit()
    {
        return $this->debit;
    }

    /**
     * Set credit
     *
     * @param string $credit
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
     * @return string 
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
     * Set has_vat
     *
     * @param integer $hasVat
     * @return JournalDetail
     */
    public function setHasVat($hasVat)
    {
        $this->has_vat = $hasVat;

        return $this;
    }

    /**
     * Get has_vat
     *
     * @return integer 
     */
    public function getHasVat()
    {
        return $this->has_vat;
    }

    /**
     * Set currency
     *
     * @param string $currency
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
     * @return string 
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set category
     *
     * @param \Husel\FrontendBundle\Entity\Journal $category
     * @return JournalDetail
     */
    public function setCategory(\Husel\FrontendBundle\Entity\Journal $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Husel\FrontendBundle\Entity\Journal 
     */
    public function getCategory()
    {
        return $this->category;
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
