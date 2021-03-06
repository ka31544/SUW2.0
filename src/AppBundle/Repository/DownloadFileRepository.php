<?php

namespace AppBundle\Repository;

/**
 * DownloadFileRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DownloadFileRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return int
     * @throws \Doctrine\ORM\ORMException
     */
    public function countDayDownloads()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('DAY', 'DoctrineExtensions\Query\Mysql\Day');

        $day = date('d');

        $qb = $this->createQueryBuilder('d')
            ->where('DAY(d.dataDodania) = :day')
            ->orderBy('d.id', 'asc')
            ->setParameter('day', $day)
            ->getQuery();
        $dayDownloads = $qb->getResult();
        return count($dayDownloads);
    }

    /**
     * @return int
     * @throws \Doctrine\ORM\ORMException
     */
    public function countWeekDownloads()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('WEEK', 'DoctrineExtensions\Query\Mysql\Week');

        $week = date('W');

        $qb = $this->createQueryBuilder('w')
            ->where('WEEK(w.dataDodania) = :week')
            ->orderBy('w.id', 'asc')
            ->setParameter('week', $week)
            ->getQuery();
        $weekDownloads = $qb->getResult();
        return count($weekDownloads);
    }

    /**
     * @return int
     * @throws \Doctrine\ORM\ORMException
     */
    public function countMonthDownloads()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('MONTH', 'DoctrineExtensions\Query\Mysql\Month');

        $month = date('m');

        $qb = $this->createQueryBuilder('m')
            ->where('MONTH(m.dataDodania) = :month')
            ->orderBy('m.id', 'asc')
            ->setParameter('month', $month)
            ->getQuery();
        $monthDownloads = $qb->getResult();
        return count($monthDownloads);
    }

    /**
     * @return int
     * @throws \Doctrine\ORM\ORMException
     */
    public function countYearDownloads()
    {
        $emConfig = $this->getEntityManager()->getConfiguration();
        $emConfig->addCustomDatetimeFunction('YEAR', 'DoctrineExtensions\Query\Mysql\Year');

        $year = date('Y');

        $qb = $this->createQueryBuilder('y')
            ->where('YEAR(y.dataDodania) = :year')
            ->orderBy('y.id', 'asc')
            ->setParameter('year', $year)
            ->getQuery();
        $YearDownloads = $qb->getResult();
        return count($YearDownloads);
    }

    /**
     * @return int
     * @throws \Doctrine\ORM\ORMException
     */
    public function countAllDownloads()
    {
        $qb = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'asc')
            ->getQuery();
        $AllDownloads = $qb->getResult();
        return count($AllDownloads);
    }
}
