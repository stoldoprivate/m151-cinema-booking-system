<?php


namespace App\Controller\pages\lists;


use App\Entity\ReservationEntity;
use App\Utils\CommonUtils;

class UserReservationsListPageController extends AbstractListPageController {

    protected function getViewPermissions(): array {
        return [];
    }

    protected function getListData(): array {
        return $this
            ->getDoctrine()
            ->getRepository(ReservationEntity::class, CommonUtils::resolveSlave())
            ->findBy(['user' => $this->getUser()]);
    }

    protected function getTitle(): string {
        return 'My Reservations';
    }
}