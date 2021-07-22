<?php

namespace App\Repository;

use App\Entity\Experience;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Experience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experience[]    findAll()
 * @method Experience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }

    public function findByCityorTitle(string $name)
    {
        $queryBuilder = $this->createQueryBuilder('e')
            ->orWhere('e.title LIKE :name')
            ->orWhere('e.city LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->orderBy('e.id', 'ASC')
            ->getQuery();

        return $queryBuilder->getResult();
    }
}
