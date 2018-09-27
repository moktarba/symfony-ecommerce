<?php

namespace Ecommerce\EcommerceBundle\Repository;

/**
 * UtilisateurAdresseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtilisateurAdresseRepository extends \Doctrine\ORM\EntityRepository
{
	public function findByUtilisateur($user)
	{
		$qb = $this->createQueryBuilder('u')
		->select('u')
		->where('u.utilisateur = :utilisateur')
		->setParameter('utilisateur', $user);
		return $qb->getQuery()->getResult();
	}

	public function findOneByUtilisateur($user, $id)
	{
		$qb = $this->createQueryBuilder('u')
		->select('u')
		->where('u.utilisateur = :utilisateur')
		->andWhere('u.id = :id')
		->orderBy('u.id', 'DESC')
		->setParameters(array('utilisateur' => $user, 'id' => $id ));
		return $qb->getQuery()->getResult();
	}
}
