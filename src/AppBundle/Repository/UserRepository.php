<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @return int
     */
    public function countUsers($type)
    {
        $users = $this->createQueryBuilder('u')
            ->where('u.typeAccount = :user')
            ->orderBy('u.id', 'asc')
            ->setParameter('user', $type)
            ->getQuery()
            ->getResult();
        return count($users);
    }

    /**
     * @param $username
     * @return users
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getByUsername($username)
    {
        $qb = $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username);
        $query = $qb->getQuery();
        $user = $query->getSingleResult();

        return $user;
    }
}
