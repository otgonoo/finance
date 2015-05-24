<?php

namespace Husel\FrontendBundle\Controller;

use Husel\FrontendBundle\Entity\Journal;
use Husel\FrontendBundle\Entity\JournalRepository;
use Husel\FrontendBundle\Entity\JournalDetail;
use Doctrine\ORM\EntityManager;

class JournalController
{

    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function create($userId, $module, $journalDate, $orderId, $journalDetails = 0)
    {
        #@Todo check block
        #@Test case blocked 
        #@Test case same orderId
        $journal = new Journal();
        $journal->setCreatedUserId($userId);
        $journal->setModule($module);
        #$journal->setJournalDate($journalDate);
        $journal->setOrderId($orderId);
        $journal->setStatusId(JournalRepository::ACTIVE);
        
        $this->em->persist($journal);
        $this->em->flush();
        die("321");
        return true;
    }

}
