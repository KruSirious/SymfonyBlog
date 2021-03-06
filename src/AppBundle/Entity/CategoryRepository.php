<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\Query\Expr as Expr;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
    public function findCatchAll($id = null)
    {
        $qb= $this->createQueryBuilder('c');

        $qb
            ->select('c, a')
            ->leftJoin('c.articles', 'a',Expr\Join::WITH)
            ->orderBy('c.id', 'DESC');

        if( null !== $id){
            $qb
                ->where('c.id = :id')
                ->setParameters([
                    ':id' =>$id,
                ])
            ;
        }


        return null === $id
            ? $qb->getQuery()->getArrayResult()
            : $qb->getQuery()->getSingleResult(AbstractQuery::HYDRATE_ARRAY)
            ;
    }
}
